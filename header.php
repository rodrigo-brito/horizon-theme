<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and <header>
 *
 * @package Horizon_Theme
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />

	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<style>	
	.color-primary,
	#footer a:hover,
	.skills-list li:hover .icon,
	.horizon-header .title span,
	#portfolio .menu-item-link:hover,
	.blog-item .blog-item-footer a:hover,
	#services .service .service-wrapper:hover .service-icon,	
	a {
		color: red;
	}	
	
	.horizon-btn,
	#footer .general-info,
	.horizon-search .search-btn,
	#portfolio .menu-item:after,
	.blog-item .blog-item-header .sep,
	.navbar-default .navbar-nav > li:after,
	#services .service .service-wrapper:hover .sep,
	.horizon-header .sep, .background-primary, .hover-primary:hover,
	.portfolio-list .portfolio-item .portfolio-item-caption .portfolio-item-title::before {
		background-color: red;
	}

	.skills-list,
	.horizon-form input:active,
	.horizon-form input:focus,
	.horizon-form textarea:active,
	.horizon-form textarea:focus,
	.blog-item .blog-item-image,
	.navbar-default .navbar-nav > li:hover,
	blockquote.cite footer, .border-primary,
	.blog-item .blog-item-footer .blog-item-comments {
		border-color: red;
	}

	.navbar-default .navbar-nav > .active,
	.navbar-default .navbar-nav > .active > a, 
	.navbar-default .navbar-nav > .active > a:hover,
	.navbar-default .navbar-nav > li > a:hover {
		border-color: red;
		color: red;
	}

	#footer .social-icons svg:hover {
		fill: red;
	}
	</style>

</head>

<body <?php body_class(); ?>>
	<header>
		<nav id="main-navigation" class="navbar navbar-default navbar-static-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-navigation">
					<span class="sr-only"><?php _e( 'Toggle navigation', 'horizon-theme' ); ?></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<a class="navbar-brand" href="<?php echo home_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/horizon-logo.png" alt="<?php _e('Site Logo', 'horizon-theme'); ?>">
					</a>
				</div>
				<div class="collapse navbar-collapse navbar-main-navigation navbar-right">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'main-menu',
								'depth'          => 2,
								'container'      => false,
								'menu_class'     => 'nav navbar-nav',
								'fallback_cb'    => 'Horizon_Theme_Nav_Walker::fallback',
								'walker'         => new Horizon_Theme_Nav_Walker()
							)
						);
					?>
				</div><!-- .navbar-collapse -->
			</div><!-- .container -->
		</nav><!-- #main-menu -->
	</header>

