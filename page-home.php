<?php
/**
 * Template Name: Home page
 */

get_header(); ?>

	<?php
		while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content', 'only-content' );
		endwhile;
	?>

	
<?php
get_footer();
