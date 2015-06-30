<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package caravanaMesh
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php wp_title('|', true, 'right'); ?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'caravanamesh' ); ?></a>
		
			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding dark col-xs-12 center">
					<div>
						<h2 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php if (is_front_page()) :?>
								<h3 class="site-description"><?php bloginfo( 'description' ); ?></h2>
						<?php endif;?>
					</div>
					<div class="search-bar">
                        <!-- header right -->
						<?php get_sidebar('header-right'); ?>
                    </div>
					<div class="bs_nopad">
						<nav id="site-navigation" class="main-navigation" role="navigation">
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
						</nav><!-- #site-navigation -->
					</div>
				</div><!-- .site-branding -->
				<div class="site-branding-mobile dark">
                    <div class="col-xs-2">
                        <div id="tasty-mobile-toggle">
                            <i class="fa fa-bars"></i>
                            <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
                        </div>
                    </div>
                    <div class="col-xs-10">
                        <h2 class="site-title-mobile">
                            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                                <?php bloginfo('name');?>
                            </a>  
                        </h2>
                </div>
			</header><!-- #masthead -->
