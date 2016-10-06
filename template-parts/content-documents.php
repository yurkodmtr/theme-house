<?php 
	global $post;
	$post_slug=$post->post_name;
?>

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