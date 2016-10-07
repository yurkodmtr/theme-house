<?php
/**
 * Template part for displaying page content in page-home.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package theme-house
 */

?>
	<section class="mainpage_block mainpage_block__white additional_services">
		<div class="center">
			<h2>Дополнительный сервис</h2>
			<div class="item__list">
				
				<?php query_posts(array('category_name'=>'services_and_price__footer', 'posts_per_page'=>3)); ?>
				<?php if ( have_posts() ) :						
					while (have_posts()) : the_post();	?>
						
						<a href="<?php the_permalink(); ?>" class="item">
							<figure style="background-image:url(<?php echo the_post_thumbnail_url(); ?>)">
								<span></span>
							</figure>
							<div class="title">
								<?php the_title(); ?>
							</div>
						</a>

				<?php endwhile;
				endif;
				wp_reset_query();                
				?>

				

			</div>
		</div>
	</section>
  		



   		


