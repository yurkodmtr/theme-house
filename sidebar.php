<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme-house
 */

?>


	<h4>Контакты</h4>

	<ul class="info">
		<li><span class="phone"><?php echo do_shortcode('[admin_phone_sc]'); ?></span></li>
		<li><a href="#" class="mail"><?php echo do_shortcode('[admin_email_sc]'); ?></a></li>
		<li><span class="time"><?php echo do_shortcode('[admin_worktime_sc]'); ?></span></li>
		<li><span class="address"><?php echo do_shortcode('[admin_address_sc]'); ?></span></li>
	</ul>

	<h4>Форма обратной связи</h4>
	<div class="form sidebar__form">
		<?php echo do_shortcode('[contact-form-7 id="115" title="sidebar form"]')?>		
	</div>
	
	<?php if ( !is_page('contacts')) {  ?>
		<div class="map">
			<iframe src="<?php echo do_shortcode('[admin_mapiframe_sc]'); ?>" width="100%" height="178" frameborder="0" style="border:0" allowfullscreen=""></iframe>
		</div>
	<?php } ?>


