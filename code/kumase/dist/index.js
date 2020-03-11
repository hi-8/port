// Adobe Fonts
(function(d) {
  var config = {
      kitId: "huq2nsc",
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

//nav
$(function() {
  $(".drawer-toggle").on("click", function() {
    $("body").toggleClass("nav-active");
  });
});
$(window).bind("load", function() {
  // img switch
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

//loading
var isloaded = false;
var imgNum = imagesLoaded("body").images.length;
var loadedImg = 0;
var _loaded = false;
imagesLoaded("body").on("progress", function() {
  if (_loaded != true) {
    loadedImg++;
    $("#loading .progress").outerWidth((loadedImg / imgNum) * 100 + "%");
    if (loadedImg >= imgNum) {
      setTimeout(function() {
        $(window).trigger("loaded");
      }, 100);
    }
  }
});

setTimeout(function() {
  $(window).trigger("loaded");
}, 400);
$(window).on("loaded", function() {
  if (isloaded) return;
  _loaded = true;
  setTimeout(function() {
    $("#loading").fadeOut(1200, "swing", function() {
      isloaded = true;
    });
  }, 180);
});

//unker link
$(function() {
  var headerHight = 100; //ヘッダの高さ
  $("a[href^='#']").click(function() {
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? "html" : href);
    var position = target.offset().top - headerHight; //ヘッダの高さ分位置をずらす
    $("html, body").animate(
      {
        scrollTop: position
      },
      550,
      "swing"
    ); //この数値は移動スピード
    return false;
  });
});

//scroll

$(function() {
  $(window).on("scroll load", function() {
    $(".fadein").each(function() {
      var elemPos = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll > elemPos - windowHeight + 300) {
        $(this).addClass("scrollin");
      }
    });
  });
});
