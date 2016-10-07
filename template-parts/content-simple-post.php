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
	
	<div class="post__list">
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

			echo contentPagination();
            $wp_query = NULL;
            $wp_query = $temp_query;
		?>
			<?php  ?>


	</div>   		



   		


