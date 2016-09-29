<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package theme-house
 */

get_header(); ?>

	<div class="center">
		<section class="content">
			<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', 'single' );			

			endwhile;
			?>
		</section>
		<aside class="sidebar">
			<?php get_sidebar(); ?>
		</aside>
	</div>
		


<?php
get_footer();
