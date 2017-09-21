<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package inland
 */

?>

<section class="intro js-page-intro">
	<div class="full-height white-bg">
		<div class="wrapper full-height">
			<div class="verticaly-aligned">
				<h1 class="blue-text"><?php the_title(); ?></h2>
				<?php while ( have_posts() ): the_post();
					the_content();
				endwhile; ?>
			</div>
		</div>
	</div>
</section>
