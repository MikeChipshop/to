<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="to_header-bar">
        <ul><?php wp_nav_menu( array('theme_location' => 'header_bar' )); ?></ul>
    </div>
	<header class="to_global-header">
		<div class="to_wrap">
			<h1 class="sbh_global-logo">
				<a href="<?php bloginfo('url'); ?>">

				</a>
			</h1>
			<nav class="sbh_global-nav">
				<ul>
					<?php wp_nav_menu( array('theme_location' => 'main_menu' )); ?>
				</ul>
			</nav>
		</div>
	</header>
