<?php
/**
 * @package WordPress
 * @subpackage Clean Home
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="wrapper">
<?php do_action( 'before' ); ?>

	<div class="header">
		<div id="logo">
		<a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
		</div>

		<div id="nav">
			<?php wp_nav_menu( array( 'container' => false, 'theme_location' => 'primary', 'fallback_cb' => 'cleanhome_page_menu' ) ); ?>
		</div>

	</div>

