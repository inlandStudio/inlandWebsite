<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package inland
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php bloginfo( 'name' ); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="where you re-design public services">
    <meta name="keywords" content="inland, finland, public services, studio, inland studio, design, design thinking, re-design">

    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.min.css" rel="stylesheet">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/modernizr-2.6.2.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/jquery-3.2.1.min.js"></script>

	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#1d3efb">
	<meta name="apple-mobile-web-app-title" content="inland studio">
	<meta name="application-name" content="inland studio">
	<meta name="theme-color" content="#1d3efb">

</head>
<body>

	<header class="header<?php if(!is_page('work') && !is_page('tools') && !is_404()) { echo " inverted-header"; }?>" id="header">
        <div class="wrapper">

			<?php if (is_page('fi')) { ?>
				<a href="/" class="language-switch">in english</a>
			<?php } else { ?>
				<a href="/fi" class="language-switch">suomeksi</a>
			<?php } ?>

			<?php if (is_front_page()) { ?>
				<a href="#top" class="logo anchor"></a>
			<?php } else { ?>
				<a href="/" class="logo"></a>
			<?php } ?>

			<button type="button" class="navigation-toggle-button" id="navigation-toggle-button">
				<span></span><span></span><span></span><span></span><span></span>
			</button>

			<nav>
				<?php custom_site_navigation(); ?>
				<?php if (is_front_page()) { ?>
					<a href="#contact" class="anchor">Contact</a>
				<?php } else { ?>
					<a href="/#contact">Contact</a>
				<?php } ?>
				<?php if (is_page('fi')) { ?>
					<a href="/" class="language-switch-mobile">in english</a>
				<?php } else { ?>
					<a href="/fi" class="language-switch-mobile">suomeksi</a>
				<?php } ?>
			</nav>
		</div>
	</header>

	<div id="top"></div>

	<main class="main">
