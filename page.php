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
				global $post;
		   		$post_slug=$post->post_name;
		   	?>

		   	<?php if ($post_slug == 'documents') { ?>		  	
		   		<?php get_template_part( 'template-parts/content', 'documents' ); ?>
		   	<?php } else if (
		   						$post_slug == 'qa' || 
		   						$post_slug == 'partners' || 
		   						$post_slug == 'technologies' || 
		   						$post_slug == 'structure'
		   	) { ?>	
		   		<?php
					while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/content', 'only-content' );
					endwhile;
				?>
		   	<?php } else { ?>
		   		<?php get_template_part( 'template-parts/content', 'simple-post' ); ?>
		   	<?php } ?>
		   	
			
			
			
		</section>

		<aside class="sidebar">
			<?php get_sidebar(); ?>
		</aside>

	</div>

	<?php if ($post_slug == 'services_and_price') { ?>		  	
		</section>
		<?php get_template_part( 'template-parts/content', 'services_and_price__footer' ); ?>
		<section>
	<?php } ?>

<?php
get_footer();
