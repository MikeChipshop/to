<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="to_header-bar">
        <div class="to_wrap">
            <div class="to_header-bar-tabs">
                <ul>
                    <li><a href="#">Submit to journal</a></li>
                    <li><a href="#">Education zone</a></li>
                </ul>
            </div>
            <nav class="to_header-bar-nav">
                <ul><?php wp_nav_menu( array('theme_location' => 'header_bar' )); ?></ul>
            </nav>
        </div>
    </div>
    <div class="to_header-ad">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/ad-placeholder.jpg" alt="test">
    </div>
	<header class="to_global-header">
		<div class="to_wrap">
			<h1 class="to_global-logo">
				<a href="<?php bloginfo('url'); ?>">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo-placeholder.jpg" alt="#">
				</a>
			</h1>
			<nav class="to_global-nav">
				<ul>
					<?php wp_nav_menu( array('theme_location' => 'main_menu' )); ?>
				</ul>
			</nav>
		</div>
    </header>
    <div class="to_global-filters">
        <div class="to_wrap">
            <div class="to_global-filter-title">
                Filters
            </div>
            <nav class="to_global-filter-nav">
                <ul>
                    <li><a href="#">Breast Cancer</a></li>
                    <li><a href="#">Immunotherapy</a></li>
                    <li><a href="#">Lung Cancer</a></li>
                    <li><a href="#">Genitourianry Cancer</a></li>
                    <li><a href="#">Gastrointenstinal Cancer</a></li>
                    <li><a href="#">Haematological</a></li>
                    <li><a href="#">Malignancies</a></li>
                    <li><a href="#">Radiology</a></li>
                    <li><a href="#">Gynaecological Cancers</a></li>
                    <li><a href="#">Dermatoloical Cancer</a></li>
                    <li><a href="#">Diagnostics and Screening</a></li>
                    <li><a href="#">Haematology</a></li>
                    <li><a href="#">Thyroid Cancer</a></li>
                    <li><a href="#">Radiotherapy</a></li>
                    <li><a href="#">View All</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="to_global-search">
        <div class="to_global-search-wrap">
            <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
				<label for="s">Search</label>
					<input  placeholder="Search..." type="search" value="Search..." name="s" id="s" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
					<button id="searchsubmit">Search</button>
                </form>
        </div>
    </div>
