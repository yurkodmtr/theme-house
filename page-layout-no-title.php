<?php
/**
 * Template Name: Layout without title
*/

get_header(); ?>
	

	


	<div class="center">

			<section class="content">

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
