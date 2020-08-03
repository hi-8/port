$(function () {
	$('.form_num').attr('pattern', '\\d*')
	$('.form_num').attr(
		'onkeyup',
		'if(event.keyCode==9||event.keyCode==16) return; this.value=this.value.replace(/[^0-9]+/i,"")'
	)
	var date = new Date()
	var yyyy = date.getFullYear()
	var mm = ('0' + (date.getMonth() + 1)).slice(-2)
	var dd = ('0' + date.getDate()).slice(-2)

	if ($('body').hasClass('page-template-page-reserve')) {
		window.onload = function () {
			document.getElementById('post-date').value = yyyy + '-' + mm + '-' + dd
		}
	}
	if ($('body').hasClass('single-open')) {
		window.onload = function () {
			document.getElementById('post-date').value = yyyy + '-' + mm + '-' + dd
		}
		$(function () {
			const ContactName = $('.single-open__title').text()
			document.getElementById('post-event').value = ContactName
		})
	}
	if ($('body').hasClass('archive')) {
		var origin = location.origin,
			pathname = location.pathname

		$('.archive__menu.archive__news').find('li').find('a').each(function () {
			var str_href = $(this).attr('href').replace(origin, '')
			if (pathname.startsWith(str_href)) {
				// 文字色変更
				$(this).addClass('menu-active')
			}
		})
	}
})