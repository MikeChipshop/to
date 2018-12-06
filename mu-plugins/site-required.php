<?php
/*
 * Plugin Name: Required Site Functions
 * Description: Adds specific content functions to the Touch Oncology theme.
 * Plugin URI: https://miniman-webdesign.co.uk
 * Version: 1.0
 * Author: Mike @ Miniman
 * Author URI: https://miniman-webdesign.co.uk
 * License: Private
*/

/***************************************************
/ PAGINATE
/***************************************************/

if ( ! function_exists( 'miniman_paging_nav' ) ) :
/**
 * Display navigation to next/previous set of posts when applicable.
 * Based on paging nav function from Twenty Fourteen
 */

function miniman_paging_nav() {
	// Don't print empty markup if there's only one page.
	if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
		return;
	}

	$paged        = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
	$pagenum_link = html_entity_decode( get_pagenum_link() );
	$query_args   = array();
	$url_parts    = explode( '?', $pagenum_link );

	if ( isset( $url_parts[1] ) ) {
		wp_parse_str( $url_parts[1], $query_args );
	}

	$pagenum_link = remove_query_arg( array_keys( $query_args ), $pagenum_link );
	$pagenum_link = trailingslashit( $pagenum_link ) . '%_%';

	$format  = $GLOBALS['wp_rewrite']->using_index_permalinks() && ! strpos( $pagenum_link, 'index.php' ) ? 'index.php/' : '';
	$format .= $GLOBALS['wp_rewrite']->using_permalinks() ? user_trailingslashit( 'page/%#%', 'paged' ) : '?paged=%#%';

	// Set up paginated links.
	$links = paginate_links( array(
		'base'     => $pagenum_link,
		'format'   => $format,
		'total'    => $GLOBALS['wp_query']->max_num_pages,
		'current'  => $paged,
		'mid_size' => 3,
		'add_args' => array_map( 'urlencode', $query_args ),
		'prev_text' => __( '&laquo;', 'yourtheme' ),
		'next_text' => __( '&raquo;', 'yourtheme' ),
		'type'      => 'list',
	) );

	if ( $links ) :

	?>
	<nav class="navigation paging-navigation" role="navigation">
		<?php echo $links; ?>
	</nav><!-- .navigation -->
	<?php
	endif;
}
endif;

/***************************************************
/ Give ACF a Boost
/***************************************************/

add_filter('acf/settings/remove_wp_meta_box', '__return_true');

/***************************************************
/ GRABBING PARENT PAGE ID
/***************************************************/

function is_tree($pid) {
	global $post;
	if(is_page()&&($post->post_parent==$pid||is_page($pid)))
    	return true;
	else
    	return false;
};

/***************************************************
/ RD Blog Tab Fix
/***************************************************/

function rd_fix_blog_tab_on_cpt($classes, $item, $args) {
  if (!is_singular('post') && !is_category() && !is_tag()) {
    $blog_page_id = intval(get_option('page_for_posts'));
    if ($blog_page_id != 0) {
      if ($item->object_id == $blog_page_id) {
        unset($classes[array_search('current_page_parent', $classes)]);
      }
    }
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'rd_fix_blog_tab_on_cpt', 10, 3);

/* Include other CPT's in above */

add_action('nav_menu_css_class', 'add_current_nav_class', 10, 2 );
function add_current_nav_class($classes, $item) {

	global $post;
	$current_post_type = get_post_type_object(get_post_type($post->ID));
	$current_post_type_slug = $current_post_type->rewrite['slug'];
	$menu_slug = strtolower(trim($item->url));

	if (strpos($menu_slug,$current_post_type_slug) !== false) {
	   $classes[] = 'current-menu-item';
	}

	return $classes;

}

/***************************************************
/ <p> and <br /> Fixes
/***************************************************/

function ptobr($string){
	return preg_replace("/<\/p>[^<]*<p>/", "<br /><br />", $string);
}
function stripp($string){
	return preg_replace('/(<p>|<\/p>)/i','',$string) ;
}
add_filter('wp_nav_menu_args', 'prefix_nav_menu_args');

function prefix_nav_menu_args($args = ''){
    $args['container'] = false;
    return $args;
}

/***************************************************
/ Remove UL's from navigation menus
/***************************************************/

function remove_ul ( $menu ){
    return preg_replace( array( '#^<ul[^>]*>#', '#</ul>$#' ), '', $menu );
}
add_filter( 'wp_nav_menu', 'remove_ul' );

/***************************************************
/ Site Navigation Menus
/***************************************************/

if ( function_exists( 'register_nav_menus' ) ) {
  	register_nav_menus(
  		array(
            'main_menu' => 'Main Menu',
            'header_bar' => 'Header Bar',
            'footer_menu' => 'Footer Menu',
            'quick_links' => 'Quick Links',

  		)
  	);
}

/***************************************************
/ Move YOAST to bottom
/***************************************************/

function yoasttobottom() {
	return 'low';
}
add_filter( 'wpseo_metabox_prio', 'yoasttobottom');


/***************************************************
/ Title Tag
/***************************************************/

add_theme_support( 'title-tag' );

/***************************************************
/ Options Pages
/***************************************************
if(function_exists('acf_add_options_page')) {

	acf_add_options_page();
    acf_add_options_sub_page('Misc');

} */

/***************************************************
/ ADD PARENT SLUG TO BODY CLASS
/***************************************************/

add_filter('body_class','body_class_section');

function body_class_section($classes) {
    global $wpdb, $post;
    if (is_page()) {
        if ($post->post_parent) {
            $parent  = end(get_post_ancestors($current_page_id));
        } else {
            $parent = $post->ID;
        }
        $post_data = get_post($parent, ARRAY_A);
        $classes[] = 'parent-' . $post_data['post_name'];
    }
    return $classes;
}

function add_slug_body_class( $classes ) {
global $post;
if ( isset( $post ) ) {
$classes[] = $post->post_type . '-' . $post->post_name;
}
return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

/***************************************************
/ Video Post Type
/***************************************************/

add_action( 'init', 'register_cpt_video' );

function register_cpt_video() {

    $labels = array(
        'name' => _x( 'Video', 'video' ),
        'singular_name' => _x( 'Video', 'video' ),
        'add_new' => _x( 'Add New', 'video' ),
        'add_new_item' => _x( 'Add New', 'video' ),
        'edit_item' => _x( 'Edit', 'video' ),
        'new_item' => _x( 'New', 'video' ),
        'view_item' => _x( 'View', 'video' ),
        'search_items' => _x( 'Search', 'video' ),
        'not_found' => _x( 'None found', 'video' ),
        'not_found_in_trash' => _x( 'None found in bin', 'video' ),
        'parent_item_colon' => _x( 'Parent:', 'video' ),
        'menu_name' => _x( 'Videos', 'video' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'Post type for videos',
        'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author' ),
        //'taxonomies' => array('product-category'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 20,
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
		'menu_icon' => 'dashicons-video-alt3',
        'capability_type' => 'post',
        'show_in_rest' => true
    );

    register_post_type( 'video', $args );
}

/***************************************************
/ Insights Post Type
/***************************************************/

add_action( 'init', 'register_cpt_insight' );

function register_cpt_insight() {

    $labels = array(
        'name' => _x( 'Insight', 'insight' ),
        'singular_name' => _x( 'Insight', 'insight' ),
        'add_new' => _x( 'Add New', 'insight' ),
        'add_new_item' => _x( 'Add New', 'insight' ),
        'edit_item' => _x( 'Edit', 'insight' ),
        'new_item' => _x( 'New', 'insight' ),
        'view_item' => _x( 'View', 'insight' ),
        'search_items' => _x( 'Search', 'insight' ),
        'not_found' => _x( 'None found', 'insight' ),
        'not_found_in_trash' => _x( 'None found in bin', 'insight' ),
        'parent_item_colon' => _x( 'Parent:', 'insight' ),
        'menu_name' => _x( 'Insights', 'insight' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'description' => 'Post type for insights',
        'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author' ),
        //'taxonomies' => array('product-category'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 20,
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
		'menu_icon' => 'dashicons-visibility',
        'capability_type' => 'post',
        'show_in_rest' => true
    );

    register_post_type( 'insight', $args );
}

function my_custom_admin_menu(){
	remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'my_custom_admin_menu');
