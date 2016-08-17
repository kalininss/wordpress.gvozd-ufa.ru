<?php
/*
Template Name: Страница контактов
*/
get_header(); ?>


<main>

	<section class="section_contact clearfix">
		<a id="form"></a>
		<img src="<?php echo get_template_directory_uri(); ?>/img/front-contacts.jpg" alt="" class="img_front-contacts">
		<h2>Контакты</h2>
		<?php $options = get_option( 'sample_theme_options' ); ?>
		<h3 class="contact_h3">Адрес и телефон</h3>
		<div class="contact-text1"><span
				class="fz24"><?php echo $options['addres1']; ?><?php echo $options['addres2']; ?></span><br>
			<?php echo $options['addres3']; ?><br>Работаем с понедельника по <br>
			воскресенье, <?php echo $options['workTime']; ?>.
		</div>
		<div class="contact-tel__outer">
			<a href="tel:+79870478120" class="contact-tel"><?php echo $options['phone1']; ?></a>
		</div>
		<form class="form-second">
			<div class="fz24 form-second__title">Забронировать столик</div>
			<input type="text" required name="name" class="input" placeholder="Ваше имя">
			<input type="text" required name="phone" class="input" placeholder="Ваш телефон">
			<textarea class="textarea" name="textar" placeholder="Ваши пожелания по расположению столиков"></textarea>
			<input type="submit" class="input input_submit" value="Забронировать">
		</form>
	</section>

	<section class="container container_iframe">
		<iframe class="map-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1151.2992171099352!2d56.02931795821252!3d54.751864295074405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43d939961ee46c5d%3A0x63d87f945d8939e0!2z0YPQuy4g0JvQtdGB0L7RgtC10YXQvdC40LrRg9C80LAsIDQ50Lox0LAsINCj0YTQsCwg0KDQtdGB0L8uINCR0LDRiNC60L7RgNGC0L7RgdGC0LDQvSwg0KDQvtGB0YHQuNGPLCA0NTAwNzE!5e0!3m2!1sru!2skz!4v1470485057035" width="1140" height="300" frameborder="0" scrollwheel="false" style="border:0;" allowfullscreen></iframe>
	</section>

</main>


<?php get_footer(); ?>