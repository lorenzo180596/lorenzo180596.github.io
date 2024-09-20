<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package abilito
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">

	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'abilito' ); ?></a>

	<header id="masthead" class="z-3 site-header position-fixed w-100 start-0 end-0 top-0 py-1 bg-white">
		<nav id="site-navigation" class="main-navigation flex-wrap d-flex justify-content-center align-items-center">

			<div id="logo" class="d-flex mr-auto order-0">
				<?php the_custom_logo(); ?>
			</div>

			<div class="d-flex m-x-0 m-y-auto text-center order-3 order-sm-1 w-sm-auto justify-content-center">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</div>
	
			<div class="d-flex end-0 order-2 pe-4">
				<button class="menu-toggle hamburger hamburger--vortex " type="button" aria-controls="primary-menu" aria-expanded="false">
					<span class="hamburger-box">
						<span class="hamburger-inner"> 
						</span>
					</span>
				</button>
			</div>
			
			<div class="d-flex ml-auto btn-book justify-content-end order-1 order-sm-3">
				<a class="btn my-btn align-self-center me-2" href= <?php echo get_permalink(957) ?>>
					Login
				</a>
				<a class="btn my-btn align-self-center" href= <?php echo get_permalink(955) ?>>
					Prenota
				</a>
			</div>
			
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
