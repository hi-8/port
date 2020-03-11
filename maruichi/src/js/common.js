function dropsort() {
  var browser = document.sort_form.sort.value;
  location.href = browser;
}
var outhover;
$(function() {
  var headerHight = 68; //ヘッダーの高さをpx指定
  //*ページ内リンクの指定
  $("a[href^='#']").click(function() {
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? "html" : href);
    var position = target.offset().top - headerHight; //ヘッダの高さ分位置をずらす
    $("html, body").animate({ scrollTop: position }, 550, "swing");
    return false;
  });
  //*ページ外リンクの指定*/
  $(window).on("load", function() {
    var url = $(location).attr("href");
    if (url.indexOf("#") != -1) {
      var anchor = url.split("#");
      var target = $("#" + anchor[anchor.length - 1]);
      if (target.length) {
        var pos = Math.floor(target.offset().top) - 70;
        $("html, body").animate({ scrollTop: pos }, 500);
      }
    }
  });

  //ホバーメニュー
  $(".fixed-link-list-cell").hover(
    function() {
      clearTimeout(outhover);
      sethover = setTimeout(
        $.proxy(function() {
          var sib = $(this).siblings();

          for (var i = 0; i < 5; i++) {
            $(sib[i]).removeClass("active");
          }

          $(this).addClass("active");
          $(".sub-inr").removeClass("active");
          $(".sub-inr", this).addClass("active");
          $(".sub-inr")
            .not(".active")
            .fadeOut(150);
          setTimeout(
            $.proxy(function() {
              $(".sub-inr", this).fadeIn(150);
            }, this),
            150
          );
        }, this),
        200
      );
    },
    function() {
      clearTimeout(sethover);
      outhover = setTimeout(function() {
        $(".sub-inr").fadeOut(100);
        $(".sub-inr").removeClass("active");
      }, 500);
    }
  );
  $(".btn_emergency").on("click", function() {
    $(".area-content_emergency").toggleClass("active");
  });
  $(".sort_form--top").on("click", function(e) {
    $(this)
      .parent()
      .toggleClass("active");
    $(this)
      .next()
      .slideToggle();
    e.preventDefault();
  });
  $(".sort_form--bottom li a").click(function(e) {
    $(".sort_form--bottom").slideToggle();
    $(".c--lang_form").toggleClass("active");
    e.preventDefault();
  });

  var $replaceElem = $(".switch");
  var replaceSp = "_sp.";
  var replacePc = "_pc.";
  var replaceWidth = 480;

  function imageSwitch() {
    var windowWidth = parseInt($(window).width());
    $replaceElem.each(function() {
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
  $(window).on("resize", function() {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(function() {
      imageSwitch();
    }, 200);
  });
});

// sp,pc分岐
var windowWidth = $(window).width();
var windowSm = 812;
if (windowWidth <= windowSm) {
  $(function() {
    // spナビ開閉
    $(".nav_top-right").on("click", function() {
      $("#nav_sp").toggleClass("active");
      $("body").toggleClass("hidden");
    });
    $(".nav_bottom-inr2 a").on("click", function() {
      $("#nav_sp").toggleClass("active");
      $("body").toggleClass("hidden");
    });
    $(".nav_bottom-btn")
      .not(".addinr")
      .on("click", function() {
        $("#nav_sp").toggleClass("active");
        $("body").toggleClass("hidden");
      });
    $(".addinr").on("click", function(e) {
      $(this).toggleClass("active");
      $(this)
        .next()
        .slideToggle();
      e.preventDefault();
    });
  });
} else {
  $(function() {
    $(window).on("scroll load", function() {
      var element = $(".nav-fixed"),
        scroll = $(window).scrollTop(),
        height = 400;
      if (scroll > height) {
        element.addClass("active");
      } else {
        element.removeClass("active");
      }
    });
  });
}
(function(d) {
  var config = {
      kitId: "pto8imq",
      scriptTimeout: 3000,
      async: true
    },
    h = d.documentElement,
    t = setTimeout(function() {
      h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
    }, config.scriptTimeout),
    tk = d.createElement("script"),
    f = false,
    s = d.getElementsByTagName("script")[0],
    a;
  h.className += " wf-loading";
  tk.src = "https://use.typekit.net/" + config.kitId + ".js";
  tk.async = true;
  tk.onload = tk.onreadystatechange = function() {
    a = this.readyState;
    if (f || (a && a != "complete" && a != "loaded")) return;
    f = true;
    clearTimeout(t);
    try {
      Typekit.load(config);
    } catch (e) {}
  };
  s.parentNode.insertBefore(tk, s);
})(document);
