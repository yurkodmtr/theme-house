<?php
/**
 * Template part for displaying page content in page-home.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package theme-house
 */

?>

	<?php 
		global $post;
   		$post_slug=$post->post_name;
   	?>
   	
   	<?php if ($post_slug == 'documents') { ?>
   		<div class="documents">
			<div class="item__list">
		   		<?php
					$args = array( 'category_name' => $post_slug);
					$query = new WP_Query( $args );
					while ( $query->have_posts() ) {
						$query->the_post();
				?>
					<a href="<?php the_permalink(); ?>" class="item">
						<figure style="background-image:url(<?php echo the_post_thumbnail_url(); ?>);">
							<span></span>
						</figure>
						<article>
							<div>								
								<?php the_excerpt(); ?>
							</div>
						</article>
					</a>
				<?php 
					}
					wp_reset_postdata();
				?>
			</div>
		</div>	
   	<?php } else { ?>
   		<div class="post__list">
   			<?php
				$args = array( 'category_name' => $post_slug);
				$query = new WP_Query( $args );
				while ( $query->have_posts() ) {
					$query->the_post();
			?>
				<div class="post">
					<figure>
						<img src="<?php echo the_post_thumbnail_url(); ?>" alt="">
					</figure>
					<article>
						<a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a>
						<div class="descr">
							<?php the_excerpt(); ?>
						</div>	
					</article>
				</div>		
			<?php 
				}
				wp_reset_postdata();
			?>
				

		</div>   		
   	<?php } ?>


   		


