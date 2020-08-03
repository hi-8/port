$(function () {
  if ($("body").hasClass("home")) {
    var windowWidth = $(window).width();
    var windowSm = 812;
    if (windowWidth <= windowSm) {
      //横幅640px以下のとき（つまりスマホ時）に行う処理を書く
      $('aside').remove();
      $('.interview__group').slick({
        dots: true,
        slidesToShow: 1,
        arrows: false,
        variableWidth: true,
        adaptiveHeight: true,
      });
    } else {
      $(window).on('load scroll', function () {
        inView.offset(300);
        inView('.p-section')
          .on('enter', el => {
            //入ったとき
            viewArray = document.getElementsByClassName(el)
            viewList = viewArray = [].slice.call(viewArray);
            viewId = '#' + $(el).attr('id');
            $('#aside_nav li').find('a').each(function () {
              var str_href = $(this)
                .attr("href")
                .replace(origin, "");
              if (viewId === str_href) {
                // 文字色変更
                $(this).parent().addClass("aside_nav__list--active");
              } else {
                $(this).parent().removeClass("aside_nav__list--active");
              }
            });

          })
      });
    }
  }
});