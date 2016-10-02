<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
} ?>

<div class="qa">
<?php echo $atts['tabs']['tab_title']; ?>
	<?php foreach ( $atts['tabs'] as $tab ) : ?>
		<article class="item">
			<ul>
				<li>
					Вопрос:
				</li>
				<li class="item__bold">
					<?php echo $tab['tab_title']; ?>
				</li>
			</ul>
			<ul>
				<li>
					Ответ:
				</li>
				<li>
					<?php echo do_shortcode( $tab['tab_content'] ); ?>
				</li>
			</ul>
		</article>
	<?php endforeach; ?>

</div>
