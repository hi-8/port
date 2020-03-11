$(function() {
  if ($("body").hasClass("page-template-page-faq")) {
    $(function() {
      $(".open-btn").on("click", function(event) {
        $(this).toggleClass("active");
        $(this)
          .next()
          .slideToggle();
        event.preventDefault();
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
