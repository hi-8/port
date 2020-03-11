$(function () {
  // home以外
  if ($("body").hasClass("home")) {

    
  } else {
    jQuery(function ($) {
      $(
        "#sec_menu .p-unker__link__cell , .nav_pc__sub-inr .p-unker__link__cell"
      ).click(function () {
        $(".menu-active").removeClass("menu-active");
        $(this).addClass("menu-active");
        $(".menu-show").removeClass("menu-show");
        // クリックしたタブからインデックス番号を取得
        const index = $(this).index();
        // クリックしたタブと同じインデックス番号をもつコンテンツを表示
        $(".menu-content__module")
          .eq(index)
          .addClass("menu-show");
        window.location.hash = "unker_menu";

      });

      $("#sp_menu-nav .bottom__cell--detail a").on("click", function (e) {
        $(".menu-show").removeClass("menu-show");
        // クリックしたタブからインデックス番号を取得
        const index = $(this).index();
        // クリックしたタブと同じインデックス番号をもつコンテンツを表示
        $(".menu-content__module")
          .eq(index)
          .addClass("menu-show");
        // window.location.hash = "unker_menu";
        $('a[href^="#"]').click(function () {
          var speed = 1000; //スムーズスクロールスピード
          var href = $(this).attr("href");
          var target = $(href == "#" || href == "" ? 'html' : href);
          var position = target.offset().top;
          $("html, body").animate({
            scrollTop: position
          }, speed, "swing");
          return false;
        });
      });
    });
    var windowWidth = $(window).width();
    var windowSm = 812;
    if (windowWidth <= windowSm) {
      $(".nav-icon").on("click", function (e) {
        $(this)
          .parent()
          .toggleClass("active");
        $(this)
          .parent()
          .next()
          .toggleClass("slidein");
        $("body").toggleClass("overflow");
        $(".accordion").on("click", function (e) {
          $(this).toggleClass("open");

          if ($(this).hasClass("open")) {
            $(this)
              .next().stop()
              .slideUp();
          } else {
            $(this)
              .next().stop()
              .slideDown();
          }
          return false;
        });
        $(".bottom__cell a , .bottom__cell--detail a").on("click", function (e) {
          $(".nav_sp--top").removeClass("active");
          $(".nav_sp--bottom").removeClass("slidein");
          $("body").removeClass("overflow");
          if (
            $(this)
            .parent()
            .hasClass("bottom__cell--detail")
          ) {
            console.log("haaas");
            $(this)
              .parent()
              .slideUp();
          }
          return false;
        });
      });
    } else {
      var outhover;
      $(".nav_pc__link__cell").hover(
        function () {
          clearTimeout(outhover);
          sethover = setTimeout(
            $.proxy(function () {
              var sib = $(this).siblings();

              for (var i = 0; i < 5; i++) {
                $(sib[i]).removeClass("active");
              }

              $(".nav_pc__sub-inr").removeClass("active");
              $(".nav_pc__sub-inr", this).addClass("active");
              $(".nav_pc__sub-inr")
                .not(".active")
                .fadeOut(250);
              setTimeout(
                $.proxy(function () {
                  $(".nav_pc__sub-inr", this).fadeIn(250);
                }, this),
                250
              );
            }, this),
            300
          );
        },
        function () {
          clearTimeout(sethover);
          outhover = setTimeout(function () {
            $(".nav_pc__sub-inr").fadeOut(100);
            $(".nav_pc__sub-inr").removeClass("active");
          }, 500);
        }
      );
    }
  }
  // wwページ専用
  if ($("body").hasClass("page-template-page-ww")) {
    var windowWidth = $(window).width();
    var windowSm = 812;
    if (windowWidth <= windowSm) {
      //横幅640px以下のとき（つまりスマホ時）に行う処理を書く
      $(".pickup__list").slick({
        fade: true,
        autoplay: true,
        autoplaySpeed: 3000,
        speed: 600,
        dots: true,
        arrows: false
      });
      $(".p-pairing__list").slick({
        fade: true,
        autoplay: true,
        autoplaySpeed: 2000,
        speed: 600,
        dots: true,
        arrows: false
      });
      $(window).scroll(function () {
        var windowHeight = $(window).height(); // ブラウザの高さ
        var topWindow = $(window).scrollTop(); // どれくらい縦にスクロールしたか
        $(".nav_sp").each(function (index, element) {
          if (topWindow + 400 > windowHeight) {
            // どれくらいスクロールしたらfadeInさせるか
            $(this).addClass("active");
            $(".nav_fixedbtn").addClass("active");
          } else {
            $(this).removeClass("active");
            $(".nav_fixedbtn").removeClass("active");
          }
        });
      });
    } else {
      $(window).scroll(function () {
        var windowHeight = $(window).height(); // ブラウザの高さ
        var topWindow = $(window).scrollTop(); // どれくらい縦にスクロールしたか
        $(".nav_pc").each(function (index, element) {
          if (topWindow > windowHeight) {
            // どれくらいスクロールしたらfadeInさせるか
            $(this).addClass("active");
          } else {
            $(this).removeClass("active");
          }
        });
      });
    }
  }
});