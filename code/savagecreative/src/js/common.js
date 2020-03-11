$(function () {
  var $replaceElem = $(".switch");
  var replaceSp = "_sp.";
  var replacePc = "_pc.";
  var replaceWidth = 812;

  function imageSwitch() {
    var windowWidth = parseInt($(window).width());
    $replaceElem.each(function () {
      var $this = $(this);

      if (windowWidth >= replaceWidth) {
        $this.attr("src", $this.attr("src").replace(replaceSp, replacePc));
      } else {
        $this.attr("src", $this.attr("src").replace(replacePc, replaceSp));
      }
    });
  }

  imageSwitch();
  var resizeTimer;
  $(window).on("resize", function () {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(function () {
      imageSwitch();
    }, 200);
  });


});
// sp,pc分岐
var windowWidth = $(window).width();
var windowSm = 812;
if (windowWidth <= windowSm) {
  $(function () {
    //sp
    var headerHight = 60;
    $("a[href^='#']").click(function () {
      var href = $(this).attr("href");
      var target = $(href == "#" || href == "" ? "html" : href);
      var position = target.offset().top - headerHight;
      $("html, body").animate({
        scrollTop: position
      }, 550, "swing");
      return false;
    });
    $(".spmenu__btn").on("click", function () {
      $(".c-header").toggleClass("active");
      $("body").toggleClass("overflow");
    });
  });
} else {
  $(function () {
    //pc
    var headerHight = 80;
    $("a[href^='#']").click(function () {
      var href = $(this).attr("href");
      var target = $(href == "#" || href == "" ? "html" : href);
      var position = target.offset().top - headerHight;
      $("html, body").animate({
        scrollTop: position
      }, 550, "swing");
      return false;
    });
  });
}