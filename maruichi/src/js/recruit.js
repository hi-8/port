$(function() {
  if ($("body").hasClass("page-template-page-recruit")) {
    $(function() {
      $(".open-btn").on("click", function(event) {
        $(this).toggleClass("active");
        $(this)
          .next()
          .slideToggle();
        event.preventDefault();
      });
      $(".mainv--list").slick({
        autoplay: true,
        autoplaySpeed: 3000,
        dots: false,
        fade: true,
        accessibility: false,
        arrows: false
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
