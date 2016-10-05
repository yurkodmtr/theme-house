<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package theme-house
 */

get_header(); ?>

	<div class="center">

		<section class="content">
			<h3><?php echo the_title(); ?></h3>
			
			<?php
				while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/content', 'only-content' );
				endwhile;
			?>
			
		</section>

		<aside class="sidebar">
			<?php get_sidebar(); ?>
		</aside>

	</div>

<?php
get_footer();
