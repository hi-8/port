var outhover;

$(function () {
  if ($("body").attr("class").match("home|page-template-page-statement")) {
    $('.c--navigation__inr--left').remove();
  };
  var headerHight = 80;
  //*ページ内リンクの指定
  $("a[href^='#']").click(function () {
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? "html" : href);
    var position = target.offset().top - headerHight;
    $("html, body").animate({
      scrollTop: position
    }, 550, "swing");
    return false;
  });
  //*ページ外リンクの指定*/
  var headerHeight = 80;
  var urlHash = location.hash;
  if (urlHash) {
    $('body,html').stop().scrollTop(0);
    
    setTimeout(function () {
      var target = $(urlHash);
      var position = target.offset().top - headerHeight;
      $('body,html').stop().animate({
        scrollTop: position
      }, 500);
    }, 100);
  }

  // imgswitch
  var $replaceElem = $(".switch");
  var replaceSp = "_sp.";
  var replacePc = "_pc.";
  var replaceWidth = 480;

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

  // blur
  inView.offset(200);
  inView('.c--blurTarget')
    .on('enter', el => {
      //入ったとき
      el.classList.add('c--blurActive')
    })
  // nav
  $(window).scroll(function () {
    if ($(window).scrollTop() > 500) {
      $('.c--navigation__inr--left').addClass('scrollTop');
    } else {
      $('.c--navigation__inr--left').removeClass('scrollTop');
    }
  });
  $('.c--navigation--btn').on('click', function () {
    $('.c--navigation').toggleClass('nav-active');
    $('body').toggleClass('hidden');
  });
  $('.c--navigation__inr--right a').on('click', function () {
    $('.c--navigation').removeClass('nav-active');
    $('body').removeClass('hidden');
  });
});

// sp,pc分岐
var windowWidth = $(window).width();
var windowSm = 812;
if (windowWidth <= windowSm) {
  $(function () {

  });
} else {
  $(function () {});
}