<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package inland
 */

get_header(); ?>

<?php
	$post_data = get_post($post->post_parent);
	$parent_slug = $post_data->post_name;

	if ( $parent_slug === 'tools' )
	{
	    get_template_part('template-parts/content', 'tool');
	}
	else if ( $parent_slug === 'work' )
	{
	    get_template_part('template-parts/content', 'case');
	}
	else
	{
		get_template_part('template-parts/content', 'page');
	}
?>

<?php
get_footer();
