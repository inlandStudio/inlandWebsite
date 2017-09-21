<?php
/**
 * The template for displaying work cases' list
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package inland
 */
get_header(); ?>

<?php if( get_field('home_intro_video') ): ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/jquery.vimeo.api.js"></script>
<div class="modal-window">
	<div class="wrapper wrapper-960">
		<div class="video-container">
			<button id="js-close-modal"></button>
			<iframe	src="https://player.vimeo.com/video/<?php echo get_field('home_intro_video'); ?>"
					id="video-player" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
		</div>
	</div>
</div>
<?php endif; ?>

<div class="homepage">
	<section class="intro home-intro photo-bg blue-bg js-page-intro" style="background-image: url('<?php echo get_field('home_intro_background'); ?>')">
		<div class="video-bg-container">
			<div class="video-bg-loop-mask"></div>
			<!--video autoplay loop muted poster="img/intro-image.jpg" class="video-bg-loop"-->
			<video autoplay loop muted class="video-bg-loop">
				<source src="<?php echo get_template_directory_uri(); ?>/assets/video/inland-loop.mp4" type="video/mp4">
				<source src="<?php echo get_template_directory_uri(); ?>/assets/video/inland-loop.webm" type="video/webm">
				<source src="<?php echo get_template_directory_uri(); ?>/assets/video/inland-loop.ogv" type="video/ogg">
			</video>
		</div>
		<div class="wrapper wrapper-960 full-height">
			<div class="verticaly-aligned">
				<h1 class="blue-text"><?php the_title(); ?></h1>
				<?php while ( have_posts() ): the_post();
					the_content();
				endwhile; ?>
				<?php if( get_field('home_intro_video') ): ?>
					<button class="button" id="js-play-video">INTRO VIDEO</button>
				<?php endif; ?>
			</div>
		</div>
		<a href="#mindset" class="anchor scroll-down" id="scroll-down-button"></a>
	</section>

	<section class="content">
		<section class="home-mindset" id="mindset">
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
						<div class="schema">
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

		<section class="module white-bg">
			<div class="wrapper wrapper-960">
				<div class="full-width blue-text posters">
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

		<section class="module white-bg" id="contact">
			<div class="wrapper wrapper-960">
				<div class="full-width blue-text contacts">
					<h2><?php echo get_field('home_contact_title'); ?></h2>
					<p><?php echo get_field('home_contact_lead'); ?></p>
					<div class="links">
						<?php echo get_field('home_contact_content'); ?>
					</div>
				</div>
			</div>
		</section>
	</section>

	<?php if( get_field('share_idea_form_toggle') ): ?>
		<?php get_template_part('forms/share-your-idea'); ?>
	<?php endif; ?>
</div>

<?php
get_footer();
