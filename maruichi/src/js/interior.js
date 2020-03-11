$(function() {
  if ($("body").hasClass("page-template-page-interior")) {
    $(function() {
      $("#slider").slick({
        dots: true,
        prevArrow:
          '<img src="/_system/wp-content/themes/wp-voice/img/exreserve/interior_slide-prev.svg" class="slide-arrow prev-arrow">',
        nextArrow:
          '<img src="/_system/wp-content/themes/wp-voice/img/exreserve/interior_slide-next.svg" class="slide-arrow next-arrow">'
      });
      $(function() {
        $(".iziModal_iframe").iziModal({
          iframe: true,
          width: 600,
          overlayColor: "rgba(0, 0, 0, 0.5)",
          padding: 40,
          background: "white",
          dots: true,
          closeButton: true
        });
      });
    });
    var windowWidth = $(window).width();
    var windowSm = 812;
    if (windowWidth <= windowSm) {
      //横幅640px以下のとき（つまりスマホ時）に行う処理を書く
    } else {
    }
  }
});
