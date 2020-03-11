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
    //sp
  });
} else {
  $(function() {
    //pc
  });
}

(function(d) {
  var config = {
      kitId: "dxr4ctf",
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
