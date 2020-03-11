$(function() {
  if ($("body").hasClass("page-template-page-route")) {
    $(window).on("load", function() {
      var path = location.pathname;
      console.log(path);
      if (path == "/exreserve/route-01/") {
        $(".tab-list-cell")
          .eq(0)
          .addClass("active");
        console.log("01");
      } else if (path == "/exreserve/route-02/") {
        $(".tab-list-cell")
          .eq(1)
          .addClass("active");
      } else if (path == "/exreserve/route-03/") {
        $(".tab-list-cell")
          .eq(2)
          .addClass("active");
      } else if (path == "/exreserve/route-04/") {
        $(".tab-list-cell")
          .eq(3)
          .addClass("active");
      }
    });

    var windowWidth = $(window).width();
    var windowSm = 460;
    if (windowWidth <= windowSm) {
      //横幅640px以下のとき（つまりスマホ時）に行う処理を書く
    } else {
    }
  }
});
