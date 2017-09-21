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

	<div class="filter case-anchors white-bg case-anchors-container" id="case-anchors-container">
		<div class="wrapper">
			<div class="full-width" id="case-anchors">
				<h4 class="blue-text">process</h4>
				<nav class="margin-bottom-0" id="case-navigation">
					<div>
						<?php if( get_field('work_item_content_section_understand') ): ?>
							<a href="#understand" class="anchor" id="understand-link">Understand</a>
						<?php else: ?>
							<span>Understand</span>
						<?php endif; ?>
					</div>
					<div>
						<?php if( get_field('work_case_vision_description') ): ?>
							<a href="#vision" class="anchor" id="vision-link">Vision</a>
						<?php else: ?>
							<span>Vision</span>
						<?php endif; ?>
					</div>
					<div>
						<?php if( get_field('work_case_explore_image_1') ): ?>
							<a href="#make" class="anchor" id="make-link">Make</a>
						<?php else: ?>
							<span>Make</span>
						<?php endif; ?>
					</div>
					<div>
						<?php if( get_field('work_case_test_item_image_1') ): ?>
							<a href="#randd" class="anchor" id="randd-link">R&amp;D</a>
						<?php else: ?>
							<span>R&amp;D</span>
						<?php endif; ?>
					</div>
				</nav>
			</div>
		</div>
	</div>

	<div class="project-phases" id="project-phases">
		<?php if( get_field('work_item_content_section_understand') ): ?>
		<section id="understand">
			<div class="white-bg">
				<div class="wrapper full-height">
					<div class="project-understand verticaly-aligned">
						<?php echo get_field('work_item_content_section_understand'); ?>
					</div>
				</div>
			</div>


			<?php if( get_field('work_case_understand_image_1') ): ?>
			<div class="wrapper">
				<div class="project-understand-images">
					<div class="lead">
						<p>
							<?php echo get_field('work_case_understand_images_intro'); ?>
						</p>
					</div>
					<div class="explore-items-container">
						<?php if( get_field('work_case_understand_image_1') ): ?>
						<div class="understand-image-item-1">
							<img src="<?php echo get_field('work_case_understand_image_1'); ?>" alt="">
							<p><?php echo get_field('work_case_understand_image_description_1'); ?></p>
						</div>
						<?php endif; ?>

						<?php if( get_field('work_case_understand_image_2') ): ?>
						<div class="understand-image-item-2">
							<img src="<?php echo get_field('work_case_understand_image_2'); ?>" alt="">
							<p><?php echo get_field('work_case_understand_image_description_2'); ?></p>
						</div>
						<?php endif; ?>

						<?php if( get_field('work_case_understand_image_3') ): ?>
						<div class="
							<?php if ( get_field('work_case_understand_image_4') )  {
								echo 'understand-image-item-3';
							} else {
								echo 'understand-image-item-3-alternative';
							} ?>">
							<img src="<?php echo get_field('work_case_understand_image_3'); ?>" alt="">
							<p><?php echo get_field('work_case_understand_image_description_3'); ?></p>
						</div>
						<?php endif; ?>

						<?php if( get_field('work_case_understand_image_4') ): ?>
						<div class="understand-image-item-4">
							<img src="<?php echo get_field('work_case_understand_image_4'); ?>" alt="">
							<p><?php echo get_field('work_case_understand_image_description_4'); ?></p>
						</div>
						<?php endif; ?>

						<?php if( get_field('work_case_understand_image_5') ): ?>
						<div class="understand-image-item-5">
							<img src="<?php echo get_field('work_case_understand_image_5'); ?>" alt="">
							<p><?php echo get_field('work_case_understand_image_description_5'); ?></p>
						</div>
						<?php endif; ?>

						<?php if( get_field('work_case_understand_image_6') ): ?>
						<div class="understand-image-item-6">
							<img src="<?php echo get_field('work_case_understand_image_6'); ?>" alt="">
							<p><?php echo get_field('work_case_understand_image_description_6'); ?></p>
						</div>
						<?php endif; ?>
					</div>
					<div class="clean"></div>
				</div>
			</div>
			<?php endif; ?>

		</section>
		<?php endif; ?>

		<?php if( get_field('work_case_vision_description') ): ?>
		<section id="vision">
			<div class="wrapper">
				<div class="project-vision">
					<div class="full-height">
						<div class="vision-video verticaly-aligned">
							<div>
								<?php echo get_field('work_case_vision_description'); ?>
								<p class="note-message"><?php echo get_field('work_case_vision_note'); ?></p>
							</div>
							<div>
								<img src="<?php echo get_field('work_case_vision_image'); ?>" alt="">
							</div>
						</div>
					</div>

					<?php if( get_field('work_case_vision_target_subsection_heading_1') ): ?>
					<div class="full-height">
						<div class="vision-features verticaly-aligned">
							<h2 class="blue-text"><?php echo get_field('work_case_vision_target_heading'); ?></h2>
							<div class="vision-feature-items">
							<?php if( get_field('work_case_vision_target_subsection_heading_1') ): ?>
								<div>
									<h6><?php echo get_field('work_case_vision_target_subsection_heading_1'); ?></h6>
									<?php echo get_field('work_case_vision_target_subsection_content_1'); ?>
								</div>
							<?php endif; ?>

							<?php if( get_field('work_case_vision_target_subsection_heading_2') ): ?>
								<div>
									<h6><?php echo get_field('work_case_vision_target_subsection_heading_2'); ?></h6>
									<?php echo get_field('work_case_vision_target_subsection_content_2'); ?>
								</div>
							<?php endif; ?>

							<?php if( get_field('work_case_vision_target_subsection_heading_3') ): ?>
								<div>
									<h6><?php echo get_field('work_case_vision_target_subsection_heading_3'); ?></h6>
									<?php echo get_field('work_case_vision_target_subsection_content_3'); ?>
								</div>
							<?php endif; ?>

							<?php if( get_field('work_case_vision_target_subsection_heading_4') ): ?>
								<div>
									<h6><?php echo get_field('work_case_vision_target_subsection_heading_4'); ?></h6>
									<?php echo get_field('work_case_vision_target_subsection_content_4'); ?>
								</div>
							<?php endif; ?>
							</div>
						</div>
					</div>
					<?php endif; ?>

				</div>
			</div>
		</section>
		<?php endif; ?>


		<?php if( get_field('work_case_explore_image_1') ): ?>
		<section id="make" class="white-bg">
			<div class="wrapper">
				<div class="project-explore">
					<?php if( get_field('work_case_explore_intro') ): ?>
					<div class="lead">
						<p>
							<?php echo get_field('work_case_explore_intro'); ?>
						</p>
					</div>
					<?php endif; ?>

					<div class="explore-items-container">
						<?php if( get_field('work_case_explore_image_1') ): ?>
						<div class="explore-item-1">
							<img src="<?php echo get_field('work_case_explore_image_1'); ?>" alt="">
							<p><?php echo get_field('work_case_explore_image_description_1'); ?></p>
						</div>
						<?php endif; ?>

						<?php if( get_field('work_case_explore_image_2') ): ?>
						<div class="explore-item-2">
							<img src="<?php echo get_field('work_case_explore_image_2'); ?>" alt="">
							<p><?php echo get_field('work_case_explore_image_description_2'); ?></p>
						</div>
						<?php endif; ?>

						<?php if( get_field('work_case_explore_image_3') ): ?>
						<div class="
							<?php if ( get_field('work_case_explore_image_4') )  {
								echo 'explore-item-3';
							} else {
								echo 'explore-item-3-alternative';
							} ?>">
							<img src="<?php echo get_field('work_case_explore_image_3'); ?>" alt="">
							<p><?php echo get_field('work_case_explore_image_description_3'); ?></p>
						</div>
						<?php endif; ?>

						<?php if( get_field('work_case_explore_image_4') ): ?>
						<div class="explore-item-4">
							<img src="<?php echo get_field('work_case_explore_image_4'); ?>" alt="">
							<p><?php echo get_field('work_case_explore_image_description_4'); ?></p>
						</div>
						<?php endif; ?>

						<?php if( get_field('work_case_explore_image_5') ): ?>
						<div class="explore-item-5">
							<img src="<?php echo get_field('work_case_explore_image_5'); ?>" alt="">
							<p><?php echo get_field('work_case_explore_image_description_5'); ?></p>
						</div>
						<?php endif; ?>

						<?php if( get_field('work_case_explore_image_6') ): ?>
						<div class="explore-item-6">
							<img src="<?php echo get_field('work_case_explore_image_6'); ?>" alt="">
							<p><?php echo get_field('work_case_explore_image_description_6'); ?></p>
						</div>
						<?php endif; ?>
					</div>

					<div class="quote">
					<?php if( get_field('work_case_explore_quote') ): ?>
						<p>&ldquo;<?php echo get_field('work_case_explore_quote'); ?>&rdquo;</p>
						<?php if( get_field('work_case_explore_quote_author') ): ?>
						<span>&mdash; <?php echo get_field('work_case_explore_quote_author'); ?></span>
						<?php endif; ?>
						<div class="big-identity-element left-and-bottom-corner green-corner"></div>
					<?php endif; ?>
					</div>

				</div>
			</div>
		</section>
		<?php endif; ?>


		<?php if( get_field('work_case_test_item_image_1') ): ?>
		<section id="randd">
			<div class="wrapper full-height">
				<div class="project-test verticaly-aligned">

					<?php if( get_field('work_case_test_item_image_1') ): ?>
					<div>
						<img src="<?php echo get_field('work_case_test_item_image_1'); ?>" alt="">
						<h6><?php echo get_field('work_case_test_item_title_1'); ?></h6>
						<p><?php echo get_field('work_case_test_item_text_1'); ?></p>
					</div>
					<?php endif; ?>

					<?php if( get_field('work_case_test_item_image_2') ): ?>
					<div>
						<img src="<?php echo get_field('work_case_test_item_image_2'); ?>" alt="">
						<h6><?php echo get_field('work_case_test_item_title_2'); ?></h6>
						<p><?php echo get_field('work_case_test_item_text_2'); ?></p>
					</div>
					<?php endif; ?>

					<?php if( get_field('work_case_test_item_image_3') ): ?>
					<div>
						<img src="<?php echo get_field('work_case_test_item_image_3'); ?>" alt="">
						<h6><?php echo get_field('work_case_test_item_title_3'); ?></h6>
						<p><?php echo get_field('work_case_test_item_text_3'); ?></p>
					</div>
					<?php endif; ?>

					<?php if( get_field('work_case_test_item_image_4') ): ?>
					<div>
						<img src="<?php echo get_field('work_case_test_item_image_4'); ?>" alt="">
						<h6><?php echo get_field('work_case_test_item_title_4'); ?></h6>
						<p><?php echo get_field('work_case_test_item_text_4'); ?></p>
					</div>
					<?php endif; ?>

				</div>
			</div>
		</section>
		<?php endif; ?>

	</div>
</section>

<?php
	$pagelist = get_pages("child_of=".$post->post_parent."&parent=".$post->post_parent."&sort_column=menu_order&sort_order=asc");
	$pages = array();
	foreach ($pagelist as $page) {
	   $pages[] += $page->ID;
	}

	$current = array_search($post->ID, $pages);
	$prevID = $pages[$current-1];
	$nextID = $pages[$current+1];
?>
<nav class="pager">
	<div class="wrapper wrapper-960">
		<div>
			<?php if (!empty($prevID)) { ?>
			<a href="<?php echo get_permalink($prevID); ?>" title="<?php echo get_the_title($prevID); ?>">&larr;&nbsp;See previous</a>
			<?php } ?>
		</div>
		<div>
			<?php if (!empty($nextID)) { ?>
			<a href="<?php echo get_permalink($nextID); ?>" title="<?php echo get_the_title($nextID); ?>">See next&nbsp;&rarr;</a>
			<?php } ?>
		</div>
	</div>
</nav>
