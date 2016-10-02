<?php
/**
 * Template Name: Contacts
*/

get_header(); ?>

	

	<div class="center contacts">

		<section class="content">
			
			<div class="contacts__content">
				
				<?php
					while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/content', 'only-content' );
					endwhile;
				?>

				<div class="map">
					<iframe src="<?php echo do_shortcode('[admin_mapiframe_sc]'); ?>" width="100%" height="178" frameborder="0" style="border:0" allowfullscreen=""></iframe>
				</div>
			</div>

		</section>

		<aside class="sidebar">
			<?php get_sidebar(); ?>
		</aside>

	</div>

	
<?php
get_footer();
