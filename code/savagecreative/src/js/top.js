$(function () {
  if ($("body").hasClass("home")) {
    $(function () {
      $(".top__slider").slick({
        fade: true,
        autoplay: true,
        autoplaySpeed: 3000,
        speed: 600,
        dots: true,
        pauseOnDotsHover: false
      });
      $('.sec_recruit__list__cell--top').on('click', function (e) {
        $(this).parent().toggleClass('active');
        $(this).next().slideToggle();
        e.preventDefault();
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