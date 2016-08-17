<footer>
	<div class="container bot-line">
		<nav class="nav nav_footer">
			<?php wp_nav_menu(); ?>
		</nav>
		<div class="row">
			<div class="col-md-5">Принимаем к оплате<img class="img_payment" src="<?php echo get_template_directory_uri(); ?>/img/payment.png" alt=""></div>
			<div class="col-md-3">Вход только для мужчин</div>
			<div class="col-md-4 copyright">Все права защищены, <?php date('Y'); ?></div>
		</div>
	</div>
</footer>


<!-- Yandex.Metrika counter -->
<script type="text/javascript">
	(function (d, w, c) {
		(w[c] = w[c] || []).push(function() {
			try {
				w.yaCounter38885675 = new Ya.Metrika({
					id:38885675,
					clickmap:true,
					trackLinks:true,
					accurateTrackBounce:true,
					webvisor:true
				});
			} catch(e) { }
		});

		var n = d.getElementsByTagName("script")[0],
			s = d.createElement("script"),
			f = function () { n.parentNode.insertBefore(s, n); };
		s.type = "text/javascript";
		s.async = true;
		s.src = "https://mc.yandex.ru/metrika/watch.js";

		if (w.opera == "[object Opera]") {
			d.addEventListener("DOMContentLoaded", f, false);
		} else { f(); }
	})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/38885675" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/libs/html5shiv/es5-shim.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/libs/html5shiv/html5shiv.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/libs/html5shiv/html5shiv-printshiv.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/libs/respond/respond.min.js"></script>
<![endif]-->

<script src="<?php echo get_template_directory_uri(); ?>/libs/jquery/jquery-1.11.2.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/libs/plugins-scroll/plugins-scroll.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/libs/fancybox/source/jquery.fancybox.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/libs/fancybox/source/helpers/jquery.fancybox-media.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/libs/owl-carousel/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/libs/pushy/pushy.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>

<?php wp_footer(); ?>

</body>
</html>