$(function () {
  if ($("body").hasClass("page-template-page-dws")) {
    $(".nav-open__btn").on("click", function () {
      $(".unfixed").toggleClass("active");
    });
    var windowWidth = $(window).width();
    var windowSm = 1260;
    if (windowWidth <= windowSm) {} else {

      $(window).scroll(function () {
        var windowHeight = $(window).height(); // ブラウザの高さ
        var topWindow = $(window).scrollTop(); // どれくらい縦にスクロールしたか
        $(".nav_pc").each(function (index, element) {
          var targetPosition = $(element).offset().top; // each対象(this)のtopからの高さ
          if (topWindow > targetPosition - windowHeight + 200) { // どれくらいスクロールしたらfadeInさせるか
            $(this).addClass('active');
          } else {
            $(this).removeClass('active');
          }
        });
      });
    }
  }
});