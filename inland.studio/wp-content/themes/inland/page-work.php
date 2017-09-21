<?php
/**
 * The template for displaying work cases' list
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package inland
 */
get_header(); ?>

	<section class="intro white-bg js-page-intro">
		<div class="wrapper full-height">
			<div class="verticaly-aligned intro-with-image">
				<div>
					<h2 class="blue-text"><?php echo get_field('work_intro_heading'); ?></h2>
					<p class="blue-text"><?php echo get_field('work_intro_description'); ?></p>
				</div>
				<div>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/schema-our-work.png" alt="" class="full-width padding-top-40" />
				</div>
			</div>
		</div>
		<a href="#work" class="anchor scroll-down inverted" id="scroll-down-button"></a>
	</section>

	<section class="content padding-top-60" id="work">

		<div class="filter">
			<div class="wrapper">
				<h4 class="blue-text">projects</h4>
			</div>
		</div>

		<div class="work-items">
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

						<?php if( have_rows('case_intro') ):
						while( have_rows('case_intro') ): the_row();
						?>

						<div class="item <?php the_sub_field('case_intro_status'); ?>>">
							<a href="<?php the_permalink(); ?>">
								<img src="<?php the_sub_field('case_intro_image'); ?>" alt="" />
								<div class="description">
									<h5><?php the_title(); ?></h5>
									<p><?php the_content(); ?></p>
									<div class="progress">
										<span class="duration">Progress
											<?php the_sub_field('case_intro_progress_percentage'); ?>%&nbsp;&mdash;
											due <?php the_sub_field('case_intro_due_to_month'); ?>
											<?php the_sub_field('case_intro_due_to_year'); ?></span>
									</div>
								</div>
							</a>
						</div>

					<?php endwhile; ?>
					<?php endif; ?>

					<?php endwhile; ?>
				<?php endif; wp_reset_query(); ?>

			</div>
		</div>
	</section>

	<?php if( get_field('share_idea_form_toggle') ): ?>
		<?php get_template_part('forms/share-your-idea'); ?>
	<?php endif; ?>

<?php
get_footer();
