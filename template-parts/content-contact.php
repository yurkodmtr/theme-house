<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package theme-house
 */

?>


	<div class="center contacts">

		<section class="content">
			
			<div class="contacts__content">			
				<?php the_content(); ?>
			</div>

		</section>

		<aside class="sidebar">
			<h4>Контакты</h4>

			<ul class="info">
				<li><span class="phone">+49 170 2678 471</span></li>
				<li><a href="#" class="mail">nfo@domcomfort.zp.ua</a></li>
				<li><span class="time">Время работы: пн - пт., 9.00 - 18.00</span></li>
				<li><span class="address">Адрес: пр. Ленина 126, офис 3</span></li>
			</ul>

			<h4>Форма обратной связи</h4>
			<form class="form sidebar__form">
				<input type="text" class="input" placeholder="Введите ваше имя">
				<input type="text" class="input" placeholder="Email ">
				<input type="text" class="input" placeholder="Телефон (необязательно)">
				<textarea rows="4" placeholder="Введите ваше сообщение" class="textarea"></textarea>
				<input type="submit" class="submit" value="Отправить">
			</form>

		</aside>

	</div>

