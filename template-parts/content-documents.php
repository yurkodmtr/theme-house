<?php 
	global $post;
	$post_slug=$post->post_name;
?>

<div class="documents">
	<div class="item__list">
   		<?php
			$args = array('paged' => $paged, 'category_name' => $post_slug);
			$query = new WP_Query( $args );

			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$temp_query = $wp_query;
		    $wp_query   = NULL;
		    $wp_query   = $query;
			while ( $query->have_posts() ) {
				$query->the_post();
		?>
			<a href="<?php the_permalink(); ?>" class="item">
				<figure style="background-image:url(<?php echo the_post_thumbnail_url(); ?>);">
					<span></span>
				</figure>
				<article>
					<div>								
						<?php the_title(); ?>
					</div>
				</article>
			</a>
		<?php 
			}			
		?>
	</div>
	<?php
		wp_reset_postdata();
		echo contentPagination();
        $wp_query = NULL;
        $wp_query = $temp_query;
	?>

</div>