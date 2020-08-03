$(function () {
	if ($('body').hasClass('home')) {
		$('.p--slide').slick({
			autoplay: true,
			autoplaySpeed: 3000,
			arrows: false,
			slidesToShow: 1,
			centerMode: true,
			centerPadding: '15.2%',
			dots: true
		})
		//内覧会

		const open_window_Width = $(window).width()
		$(window).resize(function () {
			const width = $(window).width()
			if (open_window_Width != width) {
				slide_main.slick('setPosition')
				slide_sub.slick('setPosition')
			}
		})
		//ここまで
		$(window).scroll(function () {
			var elem = $('.catch__images-list')
			var isAnimate = 'isAnimate'

			elem.each(function () {
				var elemOffset = $(this).offset().top
				var scrollPos = $(window).scrollTop()
				var wh = $(window).height()
				// console.log(scrollPos);
				if (scrollPos > elemOffset - wh + wh / 2) {
					$('.catch__images01').addClass(isAnimate)
					$('.catch__images02').addClass(isAnimate)
					$('.catch__images03').addClass(isAnimate)
				}
				if (scrollPos > elemOffset - wh + wh / 1.2) {
					$('.catch__images04').addClass(isAnimate)
					$('.catch__images05').addClass(isAnimate)
				}
				if (scrollPos > elemOffset - wh + wh / 0.8) {
					$('.catch__images06').addClass(isAnimate)
					$('.catch__images07').addClass(isAnimate)
					$('.catch__images08').addClass(isAnimate)
				}
			})
		})
		var windowWidth = $(window).width()
		var windowSm = 812
		if (windowWidth <= windowSm) {
			//横幅640px以下のとき（つまりスマホ時）に行う処理を書く
			$('.house__list').slick({
				autoplay: true,
				autoplaySpeed: 3000,
				arrows: false,
				slidesToShow: 1,
				dots: true
			})
		} else {
			// const slide_main = $('.c--open__introList').slick({
			// 	infinite: true,
			// 	slidesToShow: 1,
			// 	slidesToScroll: 1,
			// 	loop: true,
			// 	arrows: true,
			// 	fade: false
			// })
			// const slide_sub = $('.c--open__thumbList').slick({
			// 	// infinite: true,
			// 	slidesToShow: 5,
			// 	slidesToScroll: 1,
			// 	loop: true,
			// 	arrows: true,
			// 	fade: false,
			// 	speed: 400,
			// 	focusOnSelect: true,
			// 	asNavFor: '.c--open__introList'
			// })
		}
	}
})