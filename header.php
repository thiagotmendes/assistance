<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till #main div
 *
 * @package Odin
 * @since 2.2.0
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php if ( ! get_option( 'site_icon' ) ) : ?>
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" rel="shortcut icon" />
	<?php endif; ?>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<a id="skippy" class="sr-only sr-only-focusable" href="#content">
		<div class="container">
			<span class="skiplink-text"><?php _e( 'Skip to content', 'odin' ); ?></span>
		</div>
	</a>

	<header id="header" role="banner">
		<div class="container">
			<div class="page-header ">
					<div class="site-title pull-left">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
							<img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" alt="" />
						</a>
					</div>
					<div class="pull-right hidden-xs">
						<div class="area">
							<img src="<?php echo get_template_directory_uri()."/assets/images" ?>/area-cliente.jpg" alt="" />
						</div>
						<span class="tel-header"><img src="<?php echo get_template_directory_uri() ?>/assets/images/icon-phone-topo.png" alt="" /> (31) 3512-8000</span>
						<button type="button" name="button" class="btn btn-consultor top-consultor" data-toggle="modal" data-target="#fale-consultor">Fale com um consultor</button>
					</div>
				<?php
					$header_image = get_header_image();
					if ( ! empty( $header_image ) ) :
				?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img src="<?php echo esc_url( $header_image ); ?>" height="<?php esc_attr_e( $header_image->height ); ?>" width="<?php esc_attr_e( $header_image->width ); ?>" alt="" />
					</a>
				<?php endif; ?>
			</div><!-- .site-header-->

		</div><!-- .container-->
		<div id="main-navigation" class="navbar navbar-assistance">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-navigation">
				<span class="sr-only"><?php _e( 'Toggle navigation', 'odin' ); ?></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand visible-xs-block" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php //bloginfo( 'name' ); ?>
				</a>
			</div>
			<nav class="collapse navbar-collapse navbar-main-navigation" role="navigation">
				<div class="container">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'main-menu',
								'depth'          => 2,
								'container'      => false,
								'menu_class'     => 'nav navbar-nav',
								'fallback_cb'    => 'Odin_Bootstrap_Nav_Walker::fallback',
								'walker'         => new Odin_Bootstrap_Nav_Walker()
							)
						);
					?>
					<!--<form method="get" class="navbar-form navbar-right" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
						<label for="navbar-search" class="sr-only">
							<?php _e( 'Search:', 'odin' ); ?>
						</label>
						<div class="form-group">
							<input type="search" value="<?php echo get_search_query(); ?>" class="form-control" name="s" id="navbar-search" />
						</div>
						<button type="submit" class="btn btn-default"><?php _e( 'Search', 'odin' ); ?></button>
					</form>-->
				</div>
			</nav><!-- .navbar-collapse -->
		</div><!-- #main-navigation-->
	</header><!-- #header -->

	<!-- Modal -->
  <div class="modal fade" id="fale-consultor" tabindex="-1" role="dialog" aria-labelledby="Fale Com Consultor" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Formulário consultor') ) :?>
              <p class="msg-info">Gerencie seus Widgets pelo painel administrativo do Wordpress.</p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

	<div id="wrapper" class="">
		<div class="">
