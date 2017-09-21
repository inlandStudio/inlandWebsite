<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package inland
 */

?>

<section class="intro tool-intro full-height blue-bg js-page-intro" style="background-image: url('<?php echo get_field('tool_background_image'); ?>');">
	<div class="tool-details">
		<div class="wrapper">
			<div class="tool-wrapup">
				<?php global $post;
				  if ( $post->post_parent ) { ?>
				    <a href="<?php echo get_permalink( $post->post_parent ); ?>" class="arrow-back-link">&larr;&nbsp;Back to all tools</a>
				<?php } ?>
				<div class="tool-info">
					<h2 class="white-text"><?php the_title(); ?></h2>
					<p>
						<?php echo get_field('tool_wider_description'); ?>
					</p>
				</div>
				<div class="tool-facts">
					<div>
						<span>Suggested time</span>
						<span><?php echo get_field('tool_duration'); ?></span>
					</div>
					<div>
						<span>Participants</span>
						<span><?php echo get_field('tool_participants'); ?></span>
					</div>
					<?php if( get_field('tool_download_file') ): ?>
					<div>
						<span>Download</span>
						<span>
							<a href="<?php echo get_field('tool_download_file'); ?>"><?php echo get_field('tool_download_file_description'); ?></a>
						</span>
					</div>
					<?php endif; ?>
				</div>
			</div>

			<div class="tool-types">
				<?php $tool_type = get_field('tool_type');?>

				<div
					<?php if( in_array('fundamentals', $tool_type) ) { echo "class=\"current\""; }?>>Fundamentals</div>
				<div
					<?php if( in_array('understand', $tool_type) ) { echo "class=\"current\""; }?>>Understand</div>
				<div
					<?php if( in_array('vision', $tool_type) ) { echo "class=\"current\""; }?>>Vision</div>
				<div
					<?php if( in_array('make', $tool_type) ) { echo "class=\"current\""; }?>>Make</div>
				<div
					<?php if( in_array('randd', $tool_type) ) { echo "class=\"current\""; }?>>R&amp;D</div>
			</div>
		</div>
	</div>
	<a href="#steps" class="anchor scroll-down" id="scroll-down-button"></a>
</section>

<section class="content" id="steps">

	<div class="project-phases">
		<section class="white-bg">
			<div class="wrapper">
				<div class="tool-steps">
					<?php if( get_field('tool_items_needed') ): ?>
						<p class="lead medium-grey-text"><b>You will need:</b> <?php echo get_field('tool_items_needed'); ?></p>
					<?php endif; ?>

					<h4 class="blue-text"><?php echo get_field('tool_instruction_heading'); ?></h4>

					<?php echo get_field('tool_instruction'); ?>

					<?php if( get_field('tool_note') ): ?>
						<p class="medium-grey-text note"><?php echo get_field('tool_note'); ?></p>
					<?php endif; ?>
				</div>
			</div>
		</section>

		<?php if( get_field('tools_see_in_action_image_1') ): ?>
		<section>
			<div class="wrapper">
				<div class="full-width padding-top-60">
					<h4 class="blue-text">See in action</h4>
					<div class="tool-action">
							<div class="item">
							<?php if( get_field('tools_see_in_action_image_1') ): ?>
								<img src="<?php echo get_field('tools_see_in_action_image_1'); ?>" alt="">
							<?php endif; ?>
							</div>

							<div class="item">
							<?php if( get_field('tools_see_in_action_image_2') ): ?>
								<img src="<?php echo get_field('tools_see_in_action_image_2'); ?>" alt="">
							<?php endif; ?>
							</div>

							<div class="item">
							<?php if( get_field('tools_see_in_action_image_3') ): ?>
								<img src="<?php echo get_field('tools_see_in_action_image_3'); ?>" alt="">
							<?php else: ?>
							</div>
							<!-- div class="item upload-documentation">
								<a href="#">Add documentation here</a>
								<span class="identity-element"></span>
							</div -->
						<?php endif; ?>
					</div>
				</div>
			</div>
		</section>
		<?php endif; ?>

	</div>
</section>

<?php global $post; if ( $post->post_parent ) { ?>
<nav class="pager">
	<div class="wrapper wrapper-960">
		<div>
			<a href="<?php echo get_permalink( $post->post_parent ); ?>" class="arrow-back-link margin-bottom-0">&larr;&nbsp;Back to all tools</a>
		</div>
		<div></div>
	</div>
</nav>
<?php } ?>
