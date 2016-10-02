<?php
/**
 * Template Name: Layout
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
