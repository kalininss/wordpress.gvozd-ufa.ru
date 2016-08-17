<?php get_header(); ?>

	<main>

		<section class="section_video">
			<?php
			$the_slug = 's_video';
			$args     = array(
				'name'        => $the_slug,
				'post_type'   => 'post',
				'post_status' => 'publish',
				'numberposts' => 1
			);
			$my_posts = get_posts( $args );
			if ( $my_posts ) : ?>
				<img src="<?php echo get_template_directory_uri(); ?>/img/bg-main.png" alt="" class="bg-video">
				<a class="fancybox-media" href="<?php echo get_post_meta( $my_posts[0]->ID, 'videoLink', true ); ?>"><img
						class="img__video" src="<?php echo get_template_directory_uri(); ?>/img/img-video.png" alt=""></a>
				<h2 class="video__inner-title"><?php echo get_the_title( $my_posts[0]->ID ); ?></h2>
				<h3
					class="video__title"><?php echo apply_filters( 'the_content', get_post_field( 'post_content', $my_posts[0]->ID ) ); ?></h3>
			<?php endif; ?>
		</section>

		<section class="section-anounce">
			<div class="container">
				<?php $idObj = get_category_by_slug( 's_anounce' );
				$id          = $idObj->term_id; ?>
				<h2 class="kirpich-title"><?php echo get_cat_name( $id ); ?></h2>
				<div id="owl-anounce">
					<?php
					if ( have_posts() ) :
						query_posts( array('cat' => $id, 'order' => 'ASC') );
						while ( have_posts() ) : the_post(); ?>
							<a href="<?php the_permalink(); ?>" class="item">
								<img class="item__light"
								     src="<?php echo get_template_directory_uri(); ?>/img/slider-anounce/bg-light.png" alt="">
								<div class="item__main">
									<?php the_post_thumbnail( 'full', array( 'class' => 'slider-girl' ) ); ?>
									<img class="slider-brush"
									     src="<?php echo get_template_directory_uri(); ?>/img/slider-anounce/brush-<?php echo get_post_meta( $post->ID, 'brushNumber', true ) ?>.png"
									     alt="">
									<?php echo get_post_meta( $post->ID, 'slideText', true ) ?>
								</div>
								<div class="item__date"><?php the_title(); ?></div>
							</a>
							<?php
						endwhile;
					endif;
					wp_reset_query(); ?>
				</div><?php $idObj = get_category_by_slug( 's_anounce' );
				$id                = $idObj->term_id; ?>
				<div class="kirpich-text"><?php echo category_description( $id ); ?></div>
			</div>
		</section>

		<section class="section__sales">
			<div class="container">
				<?php $idObj = get_category_by_slug( 's_sales' );
				$id          = $idObj->term_id; ?>
				<h2 class="sales__title"><?php echo get_cat_name( $id ); ?></h2>
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div id="owl-sales">
							<?php
							$args  = array( 'category_name' => 's_sales', 'posts_per_page' => 3 );
							$query = new WP_Query( $args );
							while ( $query->have_posts() ) {
								$query->the_post();
								?>
								<div class="sale-item">
									<?php the_post_thumbnail( 'full', array( 'class' => 'sale-item__img' ) ); ?>
									<h3 class="sale-item__title"><?php the_title(); ?></h3>
									<div class="sale-item__text"><?php the_content(); ?></div>
									<a href="<?php echo get_template_directory_uri(); ?>/popup.html" class="fancybox fancybox.iframe sale-item__button">Забронировать столик</a>
								</div>
								<?php
							}
							wp_reset_postdata(); ?>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="section__advanced">
			<div class="container advanced-list">
				<div class="advanced-item">
					<img src="<?php echo get_template_directory_uri(); ?>/img/advanced-1.png" alt="" class="advanced-item__img">
					<h3 class="advanced-item__title">Откровенная эротическая программа</h3>
					<p class="advanced-item__text">Культурный стрип за который не нужно платить ежедневно на сцене, откровенное
						лесбос шоу без притворства, эксклюзивные ежедневные шоу.</p>
				</div>
				<div class="advanced-item">
					<img src="<?php echo get_template_directory_uri(); ?>/img/advanced-2.png" alt="" class="advanced-item__img">
					<h3 class="advanced-item__title">Большой выбор девушек</h3>
					<p class="advanced-item__text">Блондинки, брюнетки, рыжие шатенки, высокие и не очень - на любой вкус и
						цвет</p>
				</div>
				<div class="advanced-item">
					<img src="<?php echo get_template_directory_uri(); ?>/img/advanced-3.png" alt="" class="advanced-item__img">
					<h3 class="advanced-item__title">Никакого развода</h3>
					<p class="advanced-item__text">У нас нет консумации, не важно в чем ты пришел, что ты заказываешь, в любом
						случае ты не окажешься без внимания наших озорниц. Не надо платить за внимание.</p>
				</div>
				<div class="advanced-item">
					<img src="<?php echo get_template_directory_uri(); ?>/img/advanced-4.png" alt="" class="advanced-item__img">
					<h3 class="advanced-item__title">Большой выбор кальянов</h3>
					<p class="advanced-item__text">Широкий выбор самых лучших кальянов с разнообразными вкусами и ароматами</p>
				</div>
				<div class="advanced-item">
					<img src="<?php echo get_template_directory_uri(); ?>/img/advanced-5.png" alt="" class="advanced-item__img">
					<h3 class="advanced-item__title">Отдельная vip комната</h3>
					<p class="advanced-item__text">С любой понравившейся девушкой можно уединиться в отдельной комнате и заказать
						приватный танец</p>
				</div>
			</div>
			<a href="<?php echo get_template_directory_uri(); ?>/popup.html" class="fancybox fancybox.iframe button_middle">Забронировать столик</a>
		</section>

		<section class="section__people">
			<div class="container">
				<img class="img-people" src="<?php echo get_template_directory_uri(); ?>/img/img-people.jpg" alt="">
				<h2 class="people__title">Cтань падишахом на один вечер!</h2>
				<div class="people__text"><b>ОТОРВИСЬ ОТ СЕРЫХ БУДНЕЙ.</b><br><br>наши озорницы<br>хотят с тобой беситься,<br>танцевать
					и веселиться.<br> забей гвоздь в нашу вечеринку
				</div>
				<form class="form-first">
					<div class="form-first__label">Ваше имя</div>
					<input type="text" required name="name" class="input">
					<div class="form-first__label">Ваш телефон</div>
					<input type="text" required name="phone" class="input">
					<input type="submit" class="input input_submit" value="Стать падишахом">
				</form>
			</div>
		</section>

		<section class="section_front-text">
			<div class="container">
				<p class="front-text">Доброй ночи, жители и гости нашего гостеприимного города!. Мы ждем вас в нашем эротичном
					брутальном баре, семь дней в неделю с 21.00 до 06.00.<br>
					<br>
					У нас вы потратите ровно столько, сколько захотите и сможете. Нас не интересует толщина вашего кошелька и
					никто не посмотрит на вас косо, если вы зашли на чашку чая. У нас отсутствует понятие консумация, так как наши
					девочки не попрошайки, а актрисы флирта.<br>
					<br>
					Небольшое условие:<br>
					<br>
					Вы-с продвинутым менталитетом, адекватно реагируете на происходящее и готовы к любым неожиданностям.<br>
					<br>
					У нас нет специальных шоу программ, сплошная импровизация и безбашенная эротика, которая должная вызвать любые
					эмоции, возможно даже и шок. Кураж, голые девочки, белые танцы, приятные бонусы от бара, драйв, лесби, БДСМ и
					многое другое...<br>
					<br>
					К черту кризис!. Он пройдет!!! Один раз живем! Встряхнись и встряхни этот город вместе с нами! Встань и иди...<br>
					<br>
					С любовью ГВОЗДЬ, твой ГВОЗДЬ<br>
					<br>
					Вход для мужчин: 500 р.<br>
					<br>
					Леди только в сопровождении мужчин: 1000 р.</p>
				<img src="<?php echo get_template_directory_uri(); ?>/img/bg_girl.png" alt="" class="bg_girl">
			</div>
		</section>

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
			<iframe class="map-iframe"
			        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1151.2992171099352!2d56.02931795821252!3d54.751864295074405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43d939961ee46c5d%3A0x63d87f945d8939e0!2z0YPQuy4g0JvQtdGB0L7RgtC10YXQvdC40LrRg9C80LAsIDQ50Lox0LAsINCj0YTQsCwg0KDQtdGB0L8uINCR0LDRiNC60L7RgNGC0L7RgdGC0LDQvSwg0KDQvtGB0YHQuNGPLCA0NTAwNzE!5e0!3m2!1sru!2skz!4v1470485057035"
			        width="1140" height="300" frameborder="0" scrollwheel="false" style="border:0;" allowfullscreen></iframe>
		</section>

	</main>

<?php get_footer(); ?>