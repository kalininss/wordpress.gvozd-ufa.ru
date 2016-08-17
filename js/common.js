$(function() {

	$(".owl-gallery").owlCarousel({
		pagination: true,
		itemsScaleUp: false,
		singleItem: true
	})
	$("#owl-anounce").owlCarousel({
		navigation: true,
		items : 2,
		itemsDesktop: [1199, 2],
		itemsDesktopSmall: [992, 1],
		itemsTablet: [768, 1],
		itemsScaleUp: true
	});
	$("#owl-sales").owlCarousel({
		items : 3,
		itemsDesktop: [1199, 2],
		itemsDesktopSmall: [992, 2],
		itemsTablet: [768, 1],
		itemsScaleUp: false,
		pagination: true,
		autoheight: true
	})

	//fancybox
	$(".fancybox").fancybox({
		width: 410,
		height: 260,
		autoDimensions: false,
	});

	$('.fancybox-media').fancybox({
		openEffect  : 'none',
		closeEffect : 'none',
		helpers : {
			media : {}
		}
	});



	//Плавная прокрутка до якоря
	$("a[href^='#']").click(function () {
		elementClick = $(this).attr("href")
		destination = $(elementClick).offset().top;
		$("html:not(:animated),body:not(:animated)").animate({scrollTop: destination}, 500);
		return false;
	});

	//E-mail Ajax Send
	//Documentation & Example: https://github.com/agragregra/uniMail
	$("form").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "mail.php", //Change
			data: th.serialize()
		}).done(function() {
			alert("Спасибо за заявку!");
			setTimeout(function() {
				// Done Functions
				th.trigger("reset");
			}, 1000);
		});
		return false;
	});

	
	
});


