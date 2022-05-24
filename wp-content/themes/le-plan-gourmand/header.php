<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Le_Plan_Gourmand
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<link rel="stylesheet" href="/wp-content/themes/le-plan-gourmand/css/owl.carousel.min.css" media="all">
	<link rel="stylesheet" href="/wp-content/themes/le-plan-gourmand/css/owl.theme.default.min.css" media="all">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-BPPDWQKK2B"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'G-BPPDWQKK2B');
	</script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'le-plan-gourmand' ); ?></a>

	<header id="masthead" class="site-header">

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="left-menu" aria-expanded="false">
				<div class="menu-label">
					<span class="close-menu">Fermer le menu</span>
					<span class="open-menu">Menu</span>
				</div>
				<div class="burger">
					<div class="bar1"></div>
				  <div class="bar2"></div>
				  <div class="bar3"></div>
				</div>
			</button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-left',
					'menu_id'        => 'left-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->

		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$le_plan_gourmand_description = get_bloginfo( 'description', 'display' );
			if ( $le_plan_gourmand_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $le_plan_gourmand_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="right-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="right-menu" aria-expanded="false"><?php esc_html_e( 'right Menu', 'le-plan-gourmand' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-right',
					'menu_id'        => 'right-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->
