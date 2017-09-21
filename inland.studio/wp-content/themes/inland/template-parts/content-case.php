<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package inland
 */

?>

<?php if( have_rows('case_intro') ):
while( have_rows('case_intro') ): the_row();
?>

<section class="intro case-intro blue-bg js-page-intro" style="background-image: url('<?php the_sub_field('case_intro_background_image'); ?>');">
	<div class="full-height">
		<?php if( get_sub_field('case_intro_video_id') ): ?>
			<button class="play-video" id="js-play-video"></button>
		<?php endif; ?>
		<div class="project-details">
			<div class="wrapper">
				<div class="full-width">
					<?php global $post;
					  if ( $post->post_parent ) { ?>
					    <a href="<?php echo get_permalink( $post->post_parent ); ?>" class="arrow-back-link">&larr;&nbsp;Go back</a>
					<?php } ?>
					<h2 class="white-text"><?php the_title(); ?></h2>
				</div>
			</div>

			<div class="project-facts">
				<div class="wrapper">
					<div>
						<b>Progress</b>
						<span><?php the_sub_field('case_intro_progress_percentage'); ?>%</span>
					</div>
					<div>
						<b>Timeline</b>

						<?php $timeline_value = get_sub_field('case_intro_timeline');?>
						<span>
							<?php the_sub_field('case_intro_timeline'); ?>
							<?php if (strpos($timeline_value, '1') !== false) {
								echo 'week';
							} else {
								echo 'weeks';
							} ?>
						</span>
					</div>
					<div>
						<b>Due</b>
						<span><?php the_sub_field('case_intro_due_to_month'); ?> <?php the_sub_field('case_intro_due_to_year'); ?></span>
					</div>
					<div>
						<b>Owner</b>
						<span><?php the_sub_field('case_intro_owner'); ?></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<?php if( get_sub_field('case_intro_timeline') ): ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/jquery.vimeo.api.js"></script>
<div class="modal-window">
	<div class="wrapper wrapper-960">
		<div class="video-container">
			<button id="js-close-modal"></button>
			<iframe	src="https://player.vimeo.com/video/<?php the_sub_field('case_intro_video_id'); ?>"
					id="video-player" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
		</div>
	</div>
</div>
<?php endif; ?>

<?php endwhile; ?>
<?php endif; ?>

<section class="content">

	<?php  get_template_part('navigation/case'); ?>

	<div class="project-phases" id="project-phases">
		<?php if( have_rows('case_understand_section') ):
			  while( have_rows('case_understand_section') ): the_row();
		?>
		<!-- Understand -->
			<?php if( get_sub_field('understand_phase_toggle') ): ?>
			<section id="understand">
				<?php  get_template_part('modules/modules'); ?>
			</section>
			<?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?>


		<?php if( have_rows('case_vision_section') ):
			  while( have_rows('case_vision_section') ): the_row();
		?>
		<!-- Vision -->
			<?php if( get_sub_field('vision_phase_toggle') ): ?>
			<section id="vision">
				<?php  get_template_part('modules/modules'); ?>
			</section>
			<?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?>


		<?php if( have_rows('case_make_section') ):
			  while( have_rows('case_make_section') ): the_row();
		?>
		<!-- Make -->
			<?php if( get_sub_field('make_phase_toggle') ): ?>
			<section id="make">
				<?php  get_template_part('modules/modules'); ?>
			</section>
			<?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?>


				<?php if( get_field('hackathon_schedule_module_toggle')): ?>
				<section id="make">
					<?php  get_template_part('modules/hackathon'); ?>
				</section>
				<?php endif; ?>


		<?php if( have_rows('case_randd_section') ):
			  while( have_rows('case_randd_section') ): the_row();
		?>
		<!-- R&D -->
			<?php if( get_sub_field('randd_phase_toggle') ): ?>
			<section id="randd">
				<?php  get_template_part('modules/modules'); ?>
			</section>
			<?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?>
	</div>
</section>

<?php if( get_field('hackathon_form_toggle') ): ?>
	<?php get_template_part('forms/hackathon'); ?>
<?php endif; ?>

<?php  get_template_part('navigation/casepager'); ?>

<?php if( get_field('share_idea_form_toggle') ): ?>
	<?php get_template_part('forms/share-your-idea'); ?>
<?php endif; ?>
