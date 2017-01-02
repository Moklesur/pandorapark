<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ThemeTim_WordPress_Framework
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="preloader animsition">
	<header class="header">
		<!--------------- Header Top ---------------->
		<section class="header-top overflow">
			<div class="container-fluid padding-fix">
				<div class="row">
					<!--------------- Primary Menu ---------------->
					<nav class="navbar navbar-default primary-menu text-capitalize">
						<div class="logo pull-left">
							<?php
							if (get_theme_mod('site_logo') != '') : ?>
								<a href="<?php echo site_url('/'); ?>"><img src="<?php echo get_theme_mod('site_logo'); ?>" class="img-responsive" alt="" /></a>
							<?php else : ?>
								<h1 class="site-title margin-null"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
								<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'description' ); ?></a></p>
							<?php endif ?>
						</div>
						<div class="navbar-header">
							<button type="button" data-toggle="collapse" data-target="#navbar-collapse" class="navbar-toggle">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<ul class="list-inline request-account pull-right">
							<li><a href="/contact-us/" class="request-button display-inline-b">request a quote</a></li>
						</ul>
						<div id="navbar-collapse" class="navbar-collapse collapse text-center">
							<?php
							if ( has_nav_menu( 'primary' ) ) :
								wp_nav_menu( array('menu'  => 'primary', 'theme_location'  => 'primary', 'depth'             => 5, 'container' => '', 'menu_id' => 'primary-menu', 'container_class'   => 'collapse navbar-collapse', 'container_id' => 'bs-example-navbar-collapse-1', 'menu_class' => 'nav navbar-nav', 'fallback_cb' => 'wp_bootstrap_navwalker::fallback', 'walker' => new wp_bootstrap_navwalker()));
							else: echo '<p class="margin-top-10 pull-left text-capitalize">Please select <a href="/wp-admin/nav-menus.php" class="text-muted">Primary Menu</a> </p>';
							endif;
							?>
						</div>
					</nav>
				</div>
			</div>
		</section>
	</header>
	<?php if ( class_exists( 'WooCommerce' ) && !is_front_page()) {?>
	<!--------------- Woo Breadcrumb ---------------->
	<section class="breadcrumb-wrap text-capitalize">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php woocommerce_breadcrumb(); ?>
				</div>
			</div>
		</div>
	</section>
<?php }