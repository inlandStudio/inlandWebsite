<?php
/**
 * The template for displaying work cases' list
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package inland
 */
 ?>

 <!doctype html>
 <html <?php language_attributes(); ?>>
 <head>
 	<title><?php bloginfo( 'name' ); ?></title>
     <meta charset="<?php bloginfo( 'charset' ); ?>">
 	<!-- meta name="viewport" content="width=device-width,initial-scale=1" -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<meta name="description" content="where you re-design public services">
    <meta name="keywords" content="inland, finland, public services, studio, inland studio, design, design thinking, re-design">

    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.min.css" rel="stylesheet">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/modernizr-2.6.2.min.js"></script>
 	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/jquery-3.2.1.min.js"></script>

 	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png">
 	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicon-32x32.png">
 	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicon-16x16.png">
 	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/manifest.json">
 	<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/safari-pinned-tab.svg" color="#1d3efb">
 	<meta name="apple-mobile-web-app-title" content="inland studio">
 	<meta name="application-name" content="inland studio">
 	<meta name="theme-color" content="#1d3efb">

 </head>
 <body>

 	<header class="header inverted-header" id="header">
         <div class="wrapper">
             <a href="/" class="logo"></a>
 		</div>
 	</header>

 	<div id="top"></div>

 	<main class="main">


<div class="homepage">
	<section class="intro home-intro photo-bg blue-bg js-page-intro" style="background-image: url('<?php echo get_field('home_intro_background'); ?>')">
		<div class="wrapper wrapper-960 full-height">
			<div class="verticaly-aligned">
				<h1 class="blue-text">inland</h1>
				<p>luodaan yhdessä tulevaisuuden julkisia palveluita</p>
			</div>
		</div>
		<button class="scroll-down" id="scroll-down-button"></button>
	</section>

	<section class="content">
		<section>
			<div class="wrapper full-height">
				<div class="verticaly-aligned full-width">
					<div class="mindset big-lead">
						<?php echo get_field('home_mindset'); ?>
						<div class="big-identity-element left-and-bottom-corner green-corner"></div>
						<div class="big-identity-element right-and-top-corner green-corner"></div>
					</div>
				</div>
			</div>
		</section>

		<section class="intro blue-bg photo-bg" style="background-image: url('<?php echo get_field('home_how_background'); ?>')">
			<div class="wrapper wrapper-960 full-height">
				<div class="verticaly-aligned how-we-work">
					<h2 class="align-center"><?php echo get_field('home_how_title'); ?></h2>
					<div class="intro-with-image">
						<div>
							<div class="identity-container">
								<?php echo get_field('home_how_text'); ?>
								<div class="big-identity-element left-and-bottom-corner green-corner"></div>
							</div>
						</div>
						<div>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/schema-process.png" alt="" class="full-width" />
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="white-bg part-of-bigger">
			<div class="wrapper wrapper-960 full-height">
				<div class="verticaly-aligned blue-text">
					<h2 class="align-center"><?php echo get_field('home_part_title'); ?></h2>
					<div class="intro-with-image">
						<div>
							<div class="identity-container">
								<?php echo get_field('home_part_text'); ?>
								<div class="big-identity-element left-and-bottom-corner green-corner"></div>
							</div>
						</div>
						<div></div>
					</div>
				</div>
			</div>
			<div class="schema"></div>
		</section>

		<section class="blue-bg">
			<div class="wrapper wrapper-960">
				<div class="manifesto">
					<h2 class="align-center"><?php echo get_field('home_manifesto_title'); ?></h2>
					<p class="manifesto-lead"><?php echo get_field('home_manifesto_lead'); ?></p>
					<div class="manifesto-content">
						<?php echo get_field('home_manifesto_content'); ?>
					</div>
				</div>
			</div>
		</section>

		<section class="white-bg">
			<div class="wrapper wrapper-960 full-height">
				<div class="verticaly-aligned full-width blue-text posters">
					<h2 class="align-center"><?php echo get_field('home_downloads_title'); ?></h2>
					<p class="align-center"><?php echo get_field('home_downloads_lead'); ?></p>
					<div class="poster-items">
						<div>
							<a href="<?php echo get_field('home_download_file_1'); ?>"><img src="<?php echo get_field('home_download_thumbnail_1'); ?>" alt="" /></a>
							<a href="<?php echo get_field('home_download_file_1'); ?>" class="button"><?php echo get_field('home_downloads_button_text'); ?></a>
						</div>

						<div>
							<a href="<?php echo get_field('home_download_file_2'); ?>"><img src="<?php echo get_field('home_download_thumbnail_2'); ?>" alt="" /></a>
							<a href="<?php echo get_field('home_download_file_2'); ?>" class="button"><?php echo get_field('home_downloads_button_text'); ?></a>
						</div>

						<div>
							<a href="<?php echo get_field('home_download_file_3'); ?>"><img src="<?php echo get_field('home_download_thumbnail_3'); ?>" alt="" /></a>
							<a href="<?php echo get_field('home_download_file_3'); ?>" class="button"><?php echo get_field('home_downloads_button_text'); ?></a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="white-bg" id="contact">
			<div class="wrapper wrapper-960 full-height">
				<div class="verticaly-aligned full-width blue-text contacts">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact-decoration.svg" alt="" />
					<h2><?php echo get_field('home_contact_title'); ?></h2>
					<p><?php echo get_field('home_contact_lead'); ?></p>
					<div class="links">
						<?php echo get_field('home_contact_content'); ?>
					</div>
				</div>
			</div>
		</section>
	</section>
</div>

</main>

<footer class="footer">
	<div class="wrapper wrapper-960">
		<a href="#top">Back to top</a>
	</div>
</footer>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/app.min.js"></script>

<script type="text/javascript">
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-99137049-1', 'auto');
ga('send', 'pageview');
</script>

</body>
</html>
