<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cayitey
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/32x32.ico" />
	<link rel="apple-touch-icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/57x57.ico" sizes="57x57" />
	<link rel="apple-touch-icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/72x72.ico" sizes="72x72" />
	<link rel="apple-touch-icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/114x144.ico" sizes="114x114" />
	<link rel="apple-touch-icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/144x144.ico" sizes="144x144" />
	<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'>
	<meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible'>
	<meta content='Claude Ayitey, a designer with experience in UX, UI, founding startups, a varied clientele, and a desire to help businesses grow their ROI through design.' name='description'>
	<meta content='claude ayitey, mrayitey, design, portfolio, design portfolio, UX, case study, UI, digital marketing ' name='keywords'>
	<meta content='z9ECY2G8PZ46qx5_5dFZ_a1BHNz9_2v3lZ55QTegnLg' name='google-site-verification'>
	<meta content='width=device-width, initial-scale=1' name='viewport'>
	<meta content='always' name='referrer'>
	<meta content='#e6f7fd' name='theme-color'>
	<meta content='website' property='og:type'>
	<meta content='Claude Ayitey, a designer with experience in UX, UI, founding startups, a varied clientele, and a desire to help businesses grow their ROI through design.' property='og:description'>
	<meta content='http://www.ayitey.me/wp-content/themes/cayitey/assets/images/site-icon.jpg' property='og:image'>
	<script>
	(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-W7QCTC');
	</script>

	

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'claude-ayitey' ); ?></a>

	<menu class="site-header">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-branding">
			<img class="site-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/claude-ayitey-logo.svg"/>
		</a>

		<nav class="main-navigation">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
		</nav>
	</menu>

	<div class="site-content">
