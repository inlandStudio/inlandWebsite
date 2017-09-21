<?php
/**
 * The template for displaying tools' list
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package inland
 */
get_header(); ?>
	<section class="intro white-bg js-page-intro">
		<div class="wrapper full-height">
			<div class="verticaly-aligned intro-without-image">
				<h2 class="blue-text"><?php echo get_field('tools_intro_heading'); ?></h2>
				<p class="blue-text"><?php echo get_field('tools_intro_description'); ?></p>
			</div>
		</div>
		<a href="#tools" class="anchor scroll-down inverted" id="scroll-down-button"></a>
	</section>

	<section class="content" id="tools">

		<?php  get_template_part('navigation/tools'); ?>

		<div class="tools-items" id="tools-items">
			<div class="wrapper">

				<?php
				$args = array(
				    'post_type'      => 'page',
				    'posts_per_page' => -1,
				    'post_parent'    => $post->ID,
				    'order'          => 'ASC',
				    'orderby'        => 'menu_order'
				 );

				$parent = new WP_Query( $args );

				if ( $parent->have_posts() ) : ?>
				    <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>

						<?php $tool_type = get_field('tool_type');?>
						<div class="item

						<?php if( !get_field('tool_steps') ) { echo " no-card"; }?>
						<?php if( in_array('fundamentals', $tool_type) ) { echo " fundamentals"; }?>
						<?php if( in_array('understand', $tool_type) ) { echo " understand"; } ?>
						<?php if( in_array('vision', $tool_type) ) { echo " vision"; } ?>
						<?php if( in_array('make', $tool_type) ) { echo " make"; } ?>
						<?php if( in_array('randd', $tool_type) ) { echo " randd"; } ?>
						">
							<?php if( get_field('tool_instruction') ): ?><a href="<?php the_permalink(); ?>"><?php endif; ?>
							<h5>
								<?php the_title(); ?>
							</h5>
							<p><?php the_content(); ?></p>
							<?php if( get_field('tool_instruction') ): ?></a><?php endif; ?>

							<div class="details">
								<div>
								<?php if( get_field('tool_duration') ): ?>
									<div class="duration"><?php echo get_field('tool_duration'); ?></div>
								<?php endif; ?>
								</div>

								<div>
								<?php if( get_field('tool_participants') ): ?>
									<div class="team"><?php echo get_field('tool_participants'); ?></div>
								<?php endif; ?>
								</div>

								<div class="download">
								<?php if( get_field('tool_download_file') ): ?>
									<a href="<?php echo get_field('tool_download_file'); ?>"></a>
								<?php endif; ?>
								</div>
							</div>
						</div>
				    <?php endwhile; ?>
				<?php endif; wp_reset_query(); ?>

			</div>
		</div>
	</section>

<?php
get_footer();
