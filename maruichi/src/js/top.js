$(function() {
  if ($("body").hasClass("home")) {
    $(function() {
      $(".area_sort-top").on("click", function(event) {
        $(".mainv--area_sort").toggleClass("active");
        event.preventDefault();
      });
      $(".mainv--list").slick({
        autoplay: true,
        autoplaySpeed: 6000,
        dots: false,
        fade: true,
        accessibility: false,
        arrows: false
      });
    });
    const anim = lottie.loadAnimation({
      container: document.getElementById("bodymovin-wrapper"),
      renderer: "svg",
      loop: true,
      autoplay: true,
      path: "/_system/wp-content/themes/wp-voice/dist/data.json"
    });
    var windowWidth = $(window).width();
    var windowSm = 812;
    if (windowWidth <= windowSm) {
      //横幅640px以下のとき（つまりスマホ時）に行う処理を書く
    } else {
    }
  }
});
