<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<?php wp_head(); ?>

    <link rel="stylesheet" href="wp-content/themes/fps/style.min.css">
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'fps' ); ?></a>

	<header id="masthead" class="site-header-background">
        <div class="wrapper site-header">
    		<div class="site-branding">
    			<?php the_custom_logo(); ?>
    		</div><!-- .site-branding -->

    		<nav id="site-navigation" class="main-navigation">
    			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'fps' ); ?></button>
    			<?php
    			wp_nav_menu( array(
    				'theme_location' => 'menu-1',
    				'menu_id'        => 'primary-menu',
    			) );
    			?>
    		</nav><!-- #site-navigation -->
        </div><!-- #wrapper -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
