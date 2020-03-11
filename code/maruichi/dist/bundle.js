/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./src/index.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/css/main.scss":
/*!***************************!*\
  !*** ./src/css/main.scss ***!
  \***************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./src/index.js":
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _css_main_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./css/main.scss */ "./src/css/main.scss");
/* harmony import */ var _css_main_scss__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_css_main_scss__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _js_common__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./js/common */ "./src/js/common.js");
/* harmony import */ var _js_common__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_js_common__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _js_faq__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./js/faq */ "./src/js/faq.js");
/* harmony import */ var _js_faq__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_js_faq__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _js_interior__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./js/interior */ "./src/js/interior.js");
/* harmony import */ var _js_interior__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_js_interior__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _js_recruit__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./js/recruit */ "./src/js/recruit.js");
/* harmony import */ var _js_recruit__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_js_recruit__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var _js_reserve__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./js/reserve */ "./src/js/reserve.js");
/* harmony import */ var _js_reserve__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(_js_reserve__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var _js_route__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./js/route */ "./src/js/route.js");
/* harmony import */ var _js_route__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(_js_route__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var _js_top__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./js/top */ "./src/js/top.js");
/* harmony import */ var _js_top__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(_js_top__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var _js_userguide__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./js/userguide */ "./src/js/userguide.js");
/* harmony import */ var _js_userguide__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(_js_userguide__WEBPACK_IMPORTED_MODULE_8__);










/***/ }),

/***/ "./src/js/common.js":
/*!**************************!*\
  !*** ./src/js/common.js ***!
  \**************************/
/*! no static exports found */
/***/ (function(module, exports) {

function dropsort() {
  var browser = document.sort_form.sort.value;
  location.href = browser;
}

var outhover;
$(function () {
  var headerHight = 68; //ヘッダーの高さをpx指定
  //*ページ内リンクの指定

  $("a[href^='#']").click(function () {
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? "html" : href);
    var position = target.offset().top - headerHight; //ヘッダの高さ分位置をずらす

    $("html, body").animate({
      scrollTop: position
    }, 550, "swing");
    return false;
  }); //*ページ外リンクの指定*/

  $(window).on("load", function () {
    var url = $(location).attr("href");

    if (url.indexOf("#") != -1) {
      var anchor = url.split("#");
      var target = $("#" + anchor[anchor.length - 1]);

      if (target.length) {
        var pos = Math.floor(target.offset().top) - 70;
        $("html, body").animate({
          scrollTop: pos
        }, 500);
      }
    }
  }); //ホバーメニュー

  $(".fixed-link-list-cell").hover(function () {
    clearTimeout(outhover);
    sethover = setTimeout($.proxy(function () {
      var sib = $(this).siblings();

      for (var i = 0; i < 5; i++) {
        $(sib[i]).removeClass("active");
      }

      $(this).addClass("active");
      $(".sub-inr").removeClass("active");
      $(".sub-inr", this).addClass("active");
      $(".sub-inr").not(".active").fadeOut(150);
      setTimeout($.proxy(function () {
        $(".sub-inr", this).fadeIn(150);
      }, this), 150);
    }, this), 200);
  }, function () {
    clearTimeout(sethover);
    outhover = setTimeout(function () {
      $(".sub-inr").fadeOut(100);
      $(".sub-inr").removeClass("active");
    }, 500);
  });
  $(".btn_emergency").on("click", function () {
    $(".area-content_emergency").toggleClass("active");
  });
  $(".sort_form--top").on("click", function (e) {
    $(this).parent().toggleClass("active");
    $(this).next().slideToggle();
    e.preventDefault();
  });
  $(".sort_form--bottom li a").click(function (e) {
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
}); // sp,pc分岐

var windowWidth = $(window).width();
var windowSm = 812;

if (windowWidth <= windowSm) {
  $(function () {
    // spナビ開閉
    $(".nav_top-right").on("click", function () {
      $("#nav_sp").toggleClass("active");
      $("body").toggleClass("hidden");
    });
    $(".nav_bottom-inr2 a").on("click", function () {
      $("#nav_sp").toggleClass("active");
      $("body").toggleClass("hidden");
    });
    $(".nav_bottom-btn").not(".addinr").on("click", function () {
      $("#nav_sp").toggleClass("active");
      $("body").toggleClass("hidden");
    });
    $(".addinr").on("click", function (e) {
      $(this).toggleClass("active");
      $(this).next().slideToggle();
      e.preventDefault();
    });
  });
} else {
  $(function () {
    $(window).on("scroll load", function () {
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

(function (d) {
  var config = {
    kitId: "pto8imq",
    scriptTimeout: 3000,
    async: true
  },
      h = d.documentElement,
      t = setTimeout(function () {
    h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
  }, config.scriptTimeout),
      tk = d.createElement("script"),
      f = false,
      s = d.getElementsByTagName("script")[0],
      a;
  h.className += " wf-loading";
  tk.src = "https://use.typekit.net/" + config.kitId + ".js";
  tk.async = true;

  tk.onload = tk.onreadystatechange = function () {
    a = this.readyState;
    if (f || a && a != "complete" && a != "loaded") return;
    f = true;
    clearTimeout(t);

    try {
      Typekit.load(config);
    } catch (e) {}
  };

  s.parentNode.insertBefore(tk, s);
})(document);

/***/ }),

/***/ "./src/js/faq.js":
/*!***********************!*\
  !*** ./src/js/faq.js ***!
  \***********************/
/*! no static exports found */
/***/ (function(module, exports) {

$(function () {
  if ($("body").hasClass("page-template-page-faq")) {
    $(function () {
      $(".open-btn").on("click", function (event) {
        $(this).toggleClass("active");
        $(this).next().slideToggle();
        event.preventDefault();
      });
    });
    var windowWidth = $(window).width();
    var windowSm = 812;

    if (windowWidth <= windowSm) {//横幅640px以下のとき（つまりスマホ時）に行う処理を書く
    } else {}
  }
});

/***/ }),

/***/ "./src/js/interior.js":
/*!****************************!*\
  !*** ./src/js/interior.js ***!
  \****************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(function () {
  if ($("body").hasClass("page-template-page-interior")) {
    $(function () {
      $("#slider").slick({
        dots: true,
        prevArrow: '<img src="/_system/wp-content/themes/wp-voice/img/exreserve/interior_slide-prev.svg" class="slide-arrow prev-arrow">',
        nextArrow: '<img src="/_system/wp-content/themes/wp-voice/img/exreserve/interior_slide-next.svg" class="slide-arrow next-arrow">'
      });
      $(function () {
        $(".iziModal_iframe").iziModal({
          iframe: true,
          width: 600,
          overlayColor: "rgba(0, 0, 0, 0.5)",
          padding: 40,
          background: "white",
          dots: true,
          closeButton: true
        });
      });
    });
    var windowWidth = $(window).width();
    var windowSm = 812;

    if (windowWidth <= windowSm) {//横幅640px以下のとき（つまりスマホ時）に行う処理を書く
    } else {}
  }
});

/***/ }),

/***/ "./src/js/recruit.js":
/*!***************************!*\
  !*** ./src/js/recruit.js ***!
  \***************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(function () {
  if ($("body").hasClass("page-template-page-recruit")) {
    $(function () {
      $(".open-btn").on("click", function (event) {
        $(this).toggleClass("active");
        $(this).next().slideToggle();
        event.preventDefault();
      });
      $(".mainv--list").slick({
        autoplay: true,
        autoplaySpeed: 3000,
        dots: false,
        fade: true,
        accessibility: false,
        arrows: false
      });
    });
    var windowWidth = $(window).width();
    var windowSm = 812;

    if (windowWidth <= windowSm) {//横幅640px以下のとき（つまりスマホ時）に行う処理を書く
    } else {}
  }
});

/***/ }),

/***/ "./src/js/reserve.js":
/*!***************************!*\
  !*** ./src/js/reserve.js ***!
  \***************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(function () {
  if ($("body").hasClass("page-template-page-reserve")) {
    $("#contact-btn-submit").after($("<img/>").attr({
      src: "/_system/wp-content/themes/wp-voice/img/cmn/ico_arrow_w-min.svg",
      "class": "submit-img"
    }));
    var windowWidth = $(window).width();
    var windowSm = 460;

    if (windowWidth <= windowSm) {
      //横幅640px以下のとき（つまりスマホ時）に行う処理を書く
      $(function () {
        $(".view-sp").slick({
          autoplay: true,
          speed: 1000,
          dots: true,
          centerMode: true,
          centerPadding: "10%"
        });
        $("input#form--tel").prop("type", "tel");
        $("input#form--mail01 , input#form--mail02").prop("type", "email");
      });
    } else {
      $(function () {
        $(".iziModal_01,.iziModal_02,.iziModal_03,.iziModal_04,.iziModal_05,.iziModal_06,.iziModal_07,.iziModal_08,.iziModal_09").iziModal({
          width: 780,
          closeButton: true,
          navigateCaption: false,
          onOpened: function onOpened() {
            $("body").addClass("hidden");
          },
          onClosed: function onClosed() {
            $("body").removeClass("hidden");
          }
        });
      });
    }
  }
});

/***/ }),

/***/ "./src/js/route.js":
/*!*************************!*\
  !*** ./src/js/route.js ***!
  \*************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(function () {
  if ($("body").hasClass("page-template-page-route")) {
    $(window).on("load", function () {
      var path = location.pathname;
      console.log(path);

      if (path == "/exreserve/route-01/") {
        $(".tab-list-cell").eq(0).addClass("active");
        console.log("01");
      } else if (path == "/exreserve/route-02/") {
        $(".tab-list-cell").eq(1).addClass("active");
      } else if (path == "/exreserve/route-03/") {
        $(".tab-list-cell").eq(2).addClass("active");
      } else if (path == "/exreserve/route-04/") {
        $(".tab-list-cell").eq(3).addClass("active");
      }
    });
    var windowWidth = $(window).width();
    var windowSm = 460;

    if (windowWidth <= windowSm) {//横幅640px以下のとき（つまりスマホ時）に行う処理を書く
    } else {}
  }
});

/***/ }),

/***/ "./src/js/top.js":
/*!***********************!*\
  !*** ./src/js/top.js ***!
  \***********************/
/*! no static exports found */
/***/ (function(module, exports) {

$(function () {
  if ($("body").hasClass("home")) {
    $(function () {
      $(".area_sort-top").on("click", function (event) {
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
    var anim = lottie.loadAnimation({
      container: document.getElementById("bodymovin-wrapper"),
      renderer: "svg",
      loop: true,
      autoplay: true,
      path: "/_system/wp-content/themes/wp-voice/dist/data.json"
    });
    var windowWidth = $(window).width();
    var windowSm = 812;

    if (windowWidth <= windowSm) {//横幅640px以下のとき（つまりスマホ時）に行う処理を書く
    } else {}
  }
});

/***/ }),

/***/ "./src/js/userguide.js":
/*!*****************************!*\
  !*** ./src/js/userguide.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(function () {
  if ($("body").hasClass("page-template-page-userguide")) {
    $(function () {
      $(".open-btn").on("click", function (event) {
        $(this).toggleClass("active");
        $(this).next().slideToggle();
        event.preventDefault();
      });
    });
    var windowWidth = $(window).width();
    var windowSm = 812;

    if (windowWidth <= windowSm) {//横幅640px以下のとき（つまりスマホ時）に行う処理を書く
    } else {}
  }
});

/***/ })

/******/ });
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vd2VicGFjay9ib290c3RyYXAiLCJ3ZWJwYWNrOi8vLy4vc3JjL2Nzcy9tYWluLnNjc3MiLCJ3ZWJwYWNrOi8vLy4vc3JjL2luZGV4LmpzIiwid2VicGFjazovLy8uL3NyYy9qcy9jb21tb24uanMiLCJ3ZWJwYWNrOi8vLy4vc3JjL2pzL2ZhcS5qcyIsIndlYnBhY2s6Ly8vLi9zcmMvanMvaW50ZXJpb3IuanMiLCJ3ZWJwYWNrOi8vLy4vc3JjL2pzL3JlY3J1aXQuanMiLCJ3ZWJwYWNrOi8vLy4vc3JjL2pzL3Jlc2VydmUuanMiLCJ3ZWJwYWNrOi8vLy4vc3JjL2pzL3JvdXRlLmpzIiwid2VicGFjazovLy8uL3NyYy9qcy90b3AuanMiLCJ3ZWJwYWNrOi8vLy4vc3JjL2pzL3VzZXJndWlkZS5qcyJdLCJuYW1lcyI6WyJkcm9wc29ydCIsImJyb3dzZXIiLCJkb2N1bWVudCIsInNvcnRfZm9ybSIsInNvcnQiLCJ2YWx1ZSIsImxvY2F0aW9uIiwiaHJlZiIsIm91dGhvdmVyIiwiJCIsImhlYWRlckhpZ2h0IiwiY2xpY2siLCJhdHRyIiwidGFyZ2V0IiwicG9zaXRpb24iLCJvZmZzZXQiLCJ0b3AiLCJhbmltYXRlIiwic2Nyb2xsVG9wIiwid2luZG93Iiwib24iLCJ1cmwiLCJpbmRleE9mIiwiYW5jaG9yIiwic3BsaXQiLCJsZW5ndGgiLCJwb3MiLCJNYXRoIiwiZmxvb3IiLCJob3ZlciIsImNsZWFyVGltZW91dCIsInNldGhvdmVyIiwic2V0VGltZW91dCIsInByb3h5Iiwic2liIiwic2libGluZ3MiLCJpIiwicmVtb3ZlQ2xhc3MiLCJhZGRDbGFzcyIsIm5vdCIsImZhZGVPdXQiLCJmYWRlSW4iLCJ0b2dnbGVDbGFzcyIsImUiLCJwYXJlbnQiLCJuZXh0Iiwic2xpZGVUb2dnbGUiLCJwcmV2ZW50RGVmYXVsdCIsIiRyZXBsYWNlRWxlbSIsInJlcGxhY2VTcCIsInJlcGxhY2VQYyIsInJlcGxhY2VXaWR0aCIsImltYWdlU3dpdGNoIiwid2luZG93V2lkdGgiLCJwYXJzZUludCIsIndpZHRoIiwiZWFjaCIsIiR0aGlzIiwicmVwbGFjZSIsInJlc2l6ZVRpbWVyIiwid2luZG93U20iLCJlbGVtZW50Iiwic2Nyb2xsIiwiaGVpZ2h0IiwiZCIsImNvbmZpZyIsImtpdElkIiwic2NyaXB0VGltZW91dCIsImFzeW5jIiwiaCIsImRvY3VtZW50RWxlbWVudCIsInQiLCJjbGFzc05hbWUiLCJ0ayIsImNyZWF0ZUVsZW1lbnQiLCJmIiwicyIsImdldEVsZW1lbnRzQnlUYWdOYW1lIiwiYSIsInNyYyIsIm9ubG9hZCIsIm9ucmVhZHlzdGF0ZWNoYW5nZSIsInJlYWR5U3RhdGUiLCJUeXBla2l0IiwibG9hZCIsInBhcmVudE5vZGUiLCJpbnNlcnRCZWZvcmUiLCJoYXNDbGFzcyIsImV2ZW50Iiwic2xpY2siLCJkb3RzIiwicHJldkFycm93IiwibmV4dEFycm93IiwiaXppTW9kYWwiLCJpZnJhbWUiLCJvdmVybGF5Q29sb3IiLCJwYWRkaW5nIiwiYmFja2dyb3VuZCIsImNsb3NlQnV0dG9uIiwiYXV0b3BsYXkiLCJhdXRvcGxheVNwZWVkIiwiZmFkZSIsImFjY2Vzc2liaWxpdHkiLCJhcnJvd3MiLCJhZnRlciIsInNwZWVkIiwiY2VudGVyTW9kZSIsImNlbnRlclBhZGRpbmciLCJwcm9wIiwibmF2aWdhdGVDYXB0aW9uIiwib25PcGVuZWQiLCJvbkNsb3NlZCIsInBhdGgiLCJwYXRobmFtZSIsImNvbnNvbGUiLCJsb2ciLCJlcSIsImFuaW0iLCJsb3R0aWUiLCJsb2FkQW5pbWF0aW9uIiwiY29udGFpbmVyIiwiZ2V0RWxlbWVudEJ5SWQiLCJyZW5kZXJlciIsImxvb3AiXSwibWFwcGluZ3MiOiI7UUFBQTtRQUNBOztRQUVBO1FBQ0E7O1FBRUE7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7O1FBRUE7UUFDQTs7UUFFQTtRQUNBOztRQUVBO1FBQ0E7UUFDQTs7O1FBR0E7UUFDQTs7UUFFQTtRQUNBOztRQUVBO1FBQ0E7UUFD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bEJBLENBQUQsQyIsImZpbGUiOiJidW5kbGUuanMiLCJzb3VyY2VzQ29udGVudCI6WyIgXHQvLyBUaGUgbW9kdWxlIGNhY2hlXG4gXHR2YXIgaW5zdGFsbGVkTW9kdWxlcyA9IHt9O1xuXG4gXHQvLyBUaGUgcmVxdWlyZSBmdW5jdGlvblxuIFx0ZnVuY3Rpb24gX193ZWJwYWNrX3JlcXVpcmVfXyhtb2R1bGVJZCkge1xuXG4gXHRcdC8vIENoZWNrIGlmIG1vZHVsZSBpcyBpbiBjYWNoZVxuIFx0XHRpZihpbnN0YWxsZWRNb2R1bGVzW21vZHVsZUlkXSkge1xuIFx0XHRcdHJldHVybiBpbnN0YWxsZWRNb2R1bGVzW21vZHVsZUlkXS5leHBvcnRzO1xuIFx0XHR9XG4gXHRcdC8vIENyZWF0ZSBhIG5ldyBtb2R1bGUgKGFuZCBwdXQgaXQgaW50byB0aGUgY2FjaGUpXG4gXHRcdHZhciBtb2R1bGUgPSBpbnN0YWxsZWRNb2R1bGVzW21vZHVsZUlkXSA9IHtcbiBcdFx0XHRpOiBtb2R1bGVJZCxcbiBcdFx0XHRsOiBmYWxzZSxcbiBcdFx0XHRleHBvcnRzOiB7fVxuIFx0XHR9O1xuXG4gXHRcdC8vIEV4ZWN1dGUgdGhlIG1vZHVsZSBmdW5jdGlvblxuIFx0XHRtb2R1bGVzW21vZHVsZUlkXS5jYWxsKG1vZHVsZS5leHBvcnRzLCBtb2R1bGUsIG1vZHVsZS5leHBvcnRzLCBfX3dlYnBhY2tfcmVxdWlyZV9fKTtcblxuIFx0XHQvLyBGbGFnIHRoZSBtb2R1bGUgYXMgbG9hZGVkXG4gXHRcdG1vZHVsZS5sID0gdHJ1ZTtcblxuIFx0XHQvLyBSZXR1cm4gdGhlIGV4cG9ydHMgb2YgdGhlIG1vZHVsZVxuIFx0XHRyZXR1cm4gbW9kdWxlLmV4cG9ydHM7XG4gXHR9XG5cblxuIFx0Ly8gZXhwb3NlIHRoZSBtb2R1bGVzIG9iamVjdCAoX193ZWJwYWNrX21vZHVsZXNfXylcbiBcdF9fd2VicGFja19yZXF1aXJlX18ubSA9IG1vZHVsZXM7XG5cbiBcdC8vIGV4cG9zZSB0aGUgbW9kdWxlIGNhY2hlXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLmMgPSBpbnN0YWxsZWRNb2R1bGVzO1xuXG4gXHQvLyBkZWZpbmUgZ2V0dGVyIGZ1bmN0aW9uIGZvciBoYXJtb255IGV4cG9ydHNcbiBcdF9fd2VicGFja19yZXF1aXJlX18uZCA9IGZ1bmN0aW9uKGV4cG9ydHMsIG5hbWUsIGdldHRlcikge1xuIFx0XHRpZighX193ZWJwYWNrX3JlcXVpcmVfXy5vKGV4cG9ydHMsIG5hbWUpKSB7XG4gXHRcdFx0T2JqZWN0LmRlZmluZVByb3BlcnR5KGV4cG9ydHMsIG5hbWUsIHsgZW51bWVyYWJsZTogdHJ1ZSwgZ2V0OiBnZXR0ZXIgfSk7XG4gXHRcdH1cbiBcdH07XG5cbiBcdC8vIGRlZmluZSBfX2VzTW9kdWxlIG9uIGV4cG9ydHNcbiBcdF9fd2VicGFja19yZXF1aXJlX18uciA9IGZ1bmN0aW9uKGV4cG9ydHMpIHtcbiBcdFx0aWYodHlwZW9mIFN5bWJvbCAhPT0gJ3VuZGVmaW5lZCcgJiYgU3ltYm9sLnRvU3RyaW5nVGFnKSB7XG4gXHRcdFx0T2JqZWN0LmRlZmluZVByb3BlcnR5KGV4cG9ydHMsIFN5bWJvbC50b1N0cmluZ1RhZywgeyB2YWx1ZTogJ01vZHVsZScgfSk7XG4gXHRcdH1cbiBcdFx0T2JqZWN0LmRlZmluZVByb3BlcnR5KGV4cG9ydHMsICdfX2VzTW9kdWxlJywgeyB2YWx1ZTogdHJ1ZSB9KTtcbiBcdH07XG5cbiBcdC8vIGNyZWF0ZSBhIGZha2UgbmFtZXNwYWNlIG9iamVjdFxuIFx0Ly8gbW9kZSAmIDE6IHZhbHVlIGlzIGEgbW9kdWxlIGlkLCByZXF1aXJlIGl0XG4gXHQvLyBtb2RlICYgMjogbWVyZ2UgYWxsIHByb3BlcnRpZXMgb2YgdmFsdWUgaW50byB0aGUgbnNcbiBcdC8vIG1vZGUgJiA0OiByZXR1cm4gdmFsdWUgd2hlbiBhbHJlYWR5IG5zIG9iamVjdFxuIFx0Ly8gbW9kZSAmIDh8MTogYmVoYXZlIGxpa2UgcmVxdWlyZVxuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy50ID0gZnVuY3Rpb24odmFsdWUsIG1vZGUpIHtcbiBcdFx0aWYobW9kZSAmIDEpIHZhbHVlID0gX193ZWJwYWNrX3JlcXVpcmVfXyh2YWx1ZSk7XG4gXHRcdGlmKG1vZGUgJiA4KSByZXR1cm4gdmFsdWU7XG4gXHRcdGlmKChtb2RlICYgNCkgJiYgdHlwZW9mIHZhbHVlID09PSAnb2JqZWN0JyAmJiB2YWx1ZSAmJiB2YWx1ZS5fX2VzTW9kdWxlKSByZXR1cm4gdmFsdWU7XG4gXHRcdHZhciBucyA9IE9iamVjdC5jcmVhdGUobnVsbCk7XG4gXHRcdF9fd2VicGFja19yZXF1aXJlX18ucihucyk7XG4gXHRcdE9iamVjdC5kZWZpbmVQcm9wZXJ0eShucywgJ2RlZmF1bHQnLCB7IGVudW1lcmFibGU6IHRydWUsIHZhbHVlOiB2YWx1ZSB9KTtcbiBcdFx0aWYobW9kZSAmIDIgJiYgdHlwZW9mIHZhbHVlICE9ICdzdHJpbmcnKSBmb3IodmFyIGtleSBpbiB2YWx1ZSkgX193ZWJwYWNrX3JlcXVpcmVfXy5kKG5zLCBrZXksIGZ1bmN0aW9uKGtleSkgeyByZXR1cm4gdmFsdWVba2V5XTsgfS5iaW5kKG51bGwsIGtleSkpO1xuIFx0XHRyZXR1cm4gbnM7XG4gXHR9O1xuXG4gXHQvLyBnZXREZWZhdWx0RXhwb3J0IGZ1bmN0aW9uIGZvciBjb21wYXRpYmlsaXR5IHdpdGggbm9uLWhhcm1vbnkgbW9kdWxlc1xuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5uID0gZnVuY3Rpb24obW9kdWxlKSB7XG4gXHRcdHZhciBnZXR0ZXIgPSBtb2R1bGUgJiYgbW9kdWxlLl9fZXNNb2R1bGUgP1xuIFx0XHRcdGZ1bmN0aW9uIGdldERlZmF1bHQoKSB7IHJldHVybiBtb2R1bGVbJ2RlZmF1bHQnXTsgfSA6XG4gXHRcdFx0ZnVuY3Rpb24gZ2V0TW9kdWxlRXhwb3J0cygpIHsgcmV0dXJuIG1vZHVsZTsgfTtcbiBcdFx0X193ZWJwYWNrX3JlcXVpcmVfXy5kKGdldHRlciwgJ2EnLCBnZXR0ZXIpO1xuIFx0XHRyZXR1cm4gZ2V0dGVyO1xuIFx0fTtcblxuIFx0Ly8gT2JqZWN0LnByb3RvdHlwZS5oYXNPd25Qcm9wZXJ0eS5jYWxsXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLm8gPSBmdW5jdGlvbihvYmplY3QsIHByb3BlcnR5KSB7IHJldHVybiBPYmplY3QucHJvdG90eXBlLmhhc093blByb3BlcnR5LmNhbGwob2JqZWN0LCBwcm9wZXJ0eSk7IH07XG5cbiBcdC8vIF9fd2VicGFja19wdWJsaWNfcGF0aF9fXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLnAgPSBcIlwiO1xuXG5cbiBcdC8vIExvYWQgZW50cnkgbW9kdWxlIGFuZCByZXR1cm4gZXhwb3J0c1xuIFx0cmV0dXJuIF9fd2VicGFja19yZXF1aXJlX18oX193ZWJwYWNrX3JlcXVpcmVfXy5zID0gXCIuL3NyYy9pbmRleC5qc1wiKTtcbiIsIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpbiIsImltcG9ydCBcIi4vY3NzL21haW4uc2Nzc1wiO1xuaW1wb3J0IFwiLi9qcy9jb21tb25cIjtcbmltcG9ydCBcIi4vanMvZmFxXCI7XG5pbXBvcnQgXCIuL2pzL2ludGVyaW9yXCI7XG5pbXBvcnQgXCIuL2pzL3JlY3J1aXRcIjtcbmltcG9ydCBcIi4vanMvcmVzZXJ2ZVwiO1xuaW1wb3J0IFwiLi9qcy9yb3V0ZVwiO1xuaW1wb3J0IFwiLi9qcy90b3BcIjtcbmltcG9ydCBcIi4vanMvdXNlcmd1aWRlXCI7XG4iLCJmdW5jdGlvbiBkcm9wc29ydCgpIHtcbiAgdmFyIGJyb3dzZXIgPSBkb2N1bWVudC5zb3J0X2Zvcm0uc29ydC52YWx1ZTtcbiAgbG9jYXRpb24uaHJlZiA9IGJyb3dzZXI7XG59XG52YXIgb3V0aG92ZXI7XG4kKGZ1bmN0aW9uKCkge1xuICB2YXIgaGVhZGVySGlnaHQgPSA2ODsgLy/jg5jjg4Pjg4Djg7zjga7pq5jjgZXjgpJweOaMh+WumlxuICAvLyrjg5rjg7zjgrjlhoXjg6rjg7Pjgq/jga7mjIflrppcbiAgJChcImFbaHJlZl49JyMnXVwiKS5jbGljayhmdW5jdGlvbigpIHtcbiAgICB2YXIgaHJlZiA9ICQodGhpcykuYXR0cihcImhyZWZcIik7XG4gICAgdmFyIHRhcmdldCA9ICQoaHJlZiA9PSBcIiNcIiB8fCBocmVmID09IFwiXCIgPyBcImh0bWxcIiA6IGhyZWYpO1xuICAgIHZhciBwb3NpdGlvbiA9IHRhcmdldC5vZmZzZXQoKS50b3AgLSBoZWFkZXJIaWdodDsgLy/jg5jjg4Pjg4Djga7pq5jjgZXliIbkvY3nva7jgpLjgZrjgonjgZlcbiAgICAkKFwiaHRtbCwgYm9keVwiKS5hbmltYXRlKHsgc2Nyb2xsVG9wOiBwb3NpdGlvbiB9LCA1NTAsIFwic3dpbmdcIik7XG4gICAgcmV0dXJuIGZhbHNlO1xuICB9KTtcbiAgLy8q44Oa44O844K45aSW44Oq44Oz44Kv44Gu5oyH5a6aKi9cbiAgJCh3aW5kb3cpLm9uKFwibG9hZFwiLCBmdW5jdGlvbigpIHtcbiAgICB2YXIgdXJsID0gJChsb2NhdGlvbikuYXR0cihcImhyZWZcIik7XG4gICAgaWYgKHVybC5pbmRleE9mKFwiI1wiKSAhPSAtMSkge1xuICAgICAgdmFyIGFuY2hvciA9IHVybC5zcGxpdChcIiNcIik7XG4gICAgICB2YXIgdGFyZ2V0ID0gJChcIiNcIiArIGFuY2hvclthbmNob3IubGVuZ3RoIC0gMV0pO1xuICAgICAgaWYgKHRhcmdldC5sZW5ndGgpIHtcbiAgICAgICAgdmFyIHBvcyA9IE1hdGguZmxvb3IodGFyZ2V0Lm9mZnNldCgpLnRvcCkgLSA3MDtcbiAgICAgICAgJChcImh0bWwsIGJvZHlcIikuYW5pbWF0ZSh7IHNjcm9sbFRvcDogcG9zIH0sIDUwMCk7XG4gICAgICB9XG4gICAgfVxuICB9KTtcblxuICAvL+ODm+ODkOODvOODoeODi+ODpeODvFxuICAkKFwiLmZpeGVkLWxpbmstbGlzdC1jZWxsXCIpLmhvdmVyKFxuICAgIGZ1bmN0aW9uKCkge1xuICAgICAgY2xlYXJUaW1lb3V0KG91dGhvdmVyKTtcbiAgICAgIHNldGhvdmVyID0gc2V0VGltZW91dChcbiAgICAgICAgJC5wcm94eShmdW5jdGlvbigpIHtcbiAgICAgICAgICB2YXIgc2liID0gJCh0aGlzKS5zaWJsaW5ncygpO1xuXG4gICAgICAgICAgZm9yICh2YXIgaSA9IDA7IGkgPCA1OyBpKyspIHtcbiAgICAgICAgICAgICQoc2liW2ldKS5yZW1vdmVDbGFzcyhcImFjdGl2ZVwiKTtcbiAgICAgICAgICB9XG5cbiAgICAgICAgICAkKHRoaXMpLmFkZENsYXNzKFwiYWN0aXZlXCIpO1xuICAgICAgICAgICQoXCIuc3ViLWluclwiKS5yZW1vdmVDbGFzcyhcImFjdGl2ZVwiKTtcbiAgICAgICAgICAkKFwiLnN1Yi1pbnJcIiwgdGhpcykuYWRkQ2xhc3MoXCJhY3RpdmVcIik7XG4gICAgICAgICAgJChcIi5zdWItaW5yXCIpXG4gICAgICAgICAgICAubm90KFwiLmFjdGl2ZVwiKVxuICAgICAgICAgICAgLmZhZGVPdXQoMTUwKTtcbiAgICAgICAgICBzZXRUaW1lb3V0KFxuICAgICAgICAgICAgJC5wcm94eShmdW5jdGlvbigpIHtcbiAgICAgICAgICAgICAgJChcIi5zdWItaW5yXCIsIHRoaXMpLmZhZGVJbigxNTApO1xuICAgICAgICAgICAgfSwgdGhpcyksXG4gICAgICAgICAgICAxNTBcbiAgICAgICAgICApO1xuICAgICAgICB9LCB0aGlzKSxcbiAgICAgICAgMjAwXG4gICAgICApO1xuICAgIH0sXG4gICAgZnVuY3Rpb24oKSB7XG4gICAgICBjbGVhclRpbWVvdXQoc2V0aG92ZXIpO1xuICAgICAgb3V0aG92ZXIgPSBzZXRUaW1lb3V0KGZ1bmN0aW9uKCkge1xuICAgICAgICAkKFwiLnN1Yi1pbnJcIikuZmFkZU91dCgxMDApO1xuICAgICAgICAkKFwiLnN1Yi1pbnJcIikucmVtb3ZlQ2xhc3MoXCJhY3RpdmVcIik7XG4gICAgICB9LCA1MDApO1xuICAgIH1cbiAgKTtcbiAgJChcIi5idG5fZW1lcmdlbmN5XCIpLm9uKFwiY2xpY2tcIiwgZnVuY3Rpb24oKSB7XG4gICAgJChcIi5hcmVhLWNvbnRlbnRfZW1lcmdlbmN5XCIpLnRvZ2dsZUNsYXNzKFwiYWN0aXZlXCIpO1xuICB9KTtcbiAgJChcIi5zb3J0X2Zvcm0tLXRvcFwiKS5vbihcImNsaWNrXCIsIGZ1bmN0aW9uKGUpIHtcbiAgICAkKHRoaXMpXG4gICAgICAucGFyZW50KClcbiAgICAgIC50b2dnbGVDbGFzcyhcImFjdGl2ZVwiKTtcbiAgICAkKHRoaXMpXG4gICAgICAubmV4dCgpXG4gICAgICAuc2xpZGVUb2dnbGUoKTtcbiAgICBlLnByZXZlbnREZWZhdWx0KCk7XG4gIH0pO1xuICAkKFwiLnNvcnRfZm9ybS0tYm90dG9tIGxpIGFcIikuY2xpY2soZnVuY3Rpb24oZSkge1xuICAgICQoXCIuc29ydF9mb3JtLS1ib3R0b21cIikuc2xpZGVUb2dnbGUoKTtcbiAgICAkKFwiLmMtLWxhbmdfZm9ybVwiKS50b2dnbGVDbGFzcyhcImFjdGl2ZVwiKTtcbiAgICBlLnByZXZlbnREZWZhdWx0KCk7XG4gIH0pO1xuXG4gIHZhciAkcmVwbGFjZUVsZW0gPSAkKFwiLnN3aXRjaFwiKTtcbiAgdmFyIHJlcGxhY2VTcCA9IFwiX3NwLlwiO1xuICB2YXIgcmVwbGFjZVBjID0gXCJfcGMuXCI7XG4gIHZhciByZXBsYWNlV2lkdGggPSA0ODA7XG5cbiAgZnVuY3Rpb24gaW1hZ2VTd2l0Y2goKSB7XG4gICAgdmFyIHdpbmRvd1dpZHRoID0gcGFyc2VJbnQoJCh3aW5kb3cpLndpZHRoKCkpO1xuICAgICRyZXBsYWNlRWxlbS5lYWNoKGZ1bmN0aW9uKCkge1xuICAgICAgdmFyICR0aGlzID0gJCh0aGlzKTtcblxuICAgICAgaWYgKHdpbmRvd1dpZHRoID49IHJlcGxhY2VXaWR0aCkge1xuICAgICAgICAkdGhpcy5hdHRyKFwic3JjXCIsICR0aGlzLmF0dHIoXCJzcmNcIikucmVwbGFjZShyZXBsYWNlU3AsIHJlcGxhY2VQYykpO1xuICAgICAgfSBlbHNlIHtcbiAgICAgICAgJHRoaXMuYXR0cihcInNyY1wiLCAkdGhpcy5hdHRyKFwic3JjXCIpLnJlcGxhY2UocmVwbGFjZVBjLCByZXBsYWNlU3ApKTtcbiAgICAgIH1cbiAgICB9KTtcbiAgfVxuXG4gIGltYWdlU3dpdGNoKCk7XG4gIHZhciByZXNpemVUaW1lcjtcbiAgJCh3aW5kb3cpLm9uKFwicmVzaXplXCIsIGZ1bmN0aW9uKCkge1xuICAgIGNsZWFyVGltZW91dChyZXNpemVUaW1lcik7XG4gICAgcmVzaXplVGltZXIgPSBzZXRUaW1lb3V0KGZ1bmN0aW9uKCkge1xuICAgICAgaW1hZ2VTd2l0Y2goKTtcbiAgICB9LCAyMDApO1xuICB9KTtcbn0pO1xuXG4vLyBzcCxwY+WIhuWykFxudmFyIHdpbmRvd1dpZHRoID0gJCh3aW5kb3cpLndpZHRoKCk7XG52YXIgd2luZG93U20gPSA4MTI7XG5pZiAod2luZG93V2lkdGggPD0gd2luZG93U20pIHtcbiAgJChmdW5jdGlvbigpIHtcbiAgICAvLyBzcOODiuODk+mWi+mWiVxuICAgICQoXCIubmF2X3RvcC1yaWdodFwiKS5vbihcImNsaWNrXCIsIGZ1bmN0aW9uKCkge1xuICAgICAgJChcIiNuYXZfc3BcIikudG9nZ2xlQ2xhc3MoXCJhY3RpdmVcIik7XG4gICAgICAkKFwiYm9keVwiKS50b2dnbGVDbGFzcyhcImhpZGRlblwiKTtcbiAgICB9KTtcbiAgICAkKFwiLm5hdl9ib3R0b20taW5yMiBhXCIpLm9uKFwiY2xpY2tcIiwgZnVuY3Rpb24oKSB7XG4gICAgICAkKFwiI25hdl9zcFwiKS50b2dnbGVDbGFzcyhcImFjdGl2ZVwiKTtcbiAgICAgICQoXCJib2R5XCIpLnRvZ2dsZUNsYXNzKFwiaGlkZGVuXCIpO1xuICAgIH0pO1xuICAgICQoXCIubmF2X2JvdHRvbS1idG5cIilcbiAgICAgIC5ub3QoXCIuYWRkaW5yXCIpXG4gICAgICAub24oXCJjbGlja1wiLCBmdW5jdGlvbigpIHtcbiAgICAgICAgJChcIiNuYXZfc3BcIikudG9nZ2xlQ2xhc3MoXCJhY3RpdmVcIik7XG4gICAgICAgICQoXCJib2R5XCIpLnRvZ2dsZUNsYXNzKFwiaGlkZGVuXCIpO1xuICAgICAgfSk7XG4gICAgJChcIi5hZGRpbnJcIikub24oXCJjbGlja1wiLCBmdW5jdGlvbihlKSB7XG4gICAgICAkKHRoaXMpLnRvZ2dsZUNsYXNzKFwiYWN0aXZlXCIpO1xuICAgICAgJCh0aGlzKVxuICAgICAgICAubmV4dCgpXG4gICAgICAgIC5zbGlkZVRvZ2dsZSgpO1xuICAgICAgZS5wcmV2ZW50RGVmYXVsdCgpO1xuICAgIH0pO1xuICB9KTtcbn0gZWxzZSB7XG4gICQoZnVuY3Rpb24oKSB7XG4gICAgJCh3aW5kb3cpLm9uKFwic2Nyb2xsIGxvYWRcIiwgZnVuY3Rpb24oKSB7XG4gICAgICB2YXIgZWxlbWVudCA9ICQoXCIubmF2LWZpeGVkXCIpLFxuICAgICAgICBzY3JvbGwgPSAkKHdpbmRvdykuc2Nyb2xsVG9wKCksXG4gICAgICAgIGhlaWdodCA9IDQwMDtcbiAgICAgIGlmIChzY3JvbGwgPiBoZWlnaHQpIHtcbiAgICAgICAgZWxlbWVudC5hZGRDbGFzcyhcImFjdGl2ZVwiKTtcbiAgICAgIH0gZWxzZSB7XG4gICAgICAgIGVsZW1lbnQucmVtb3ZlQ2xhc3MoXCJhY3RpdmVcIik7XG4gICAgICB9XG4gICAgfSk7XG4gIH0pO1xufVxuKGZ1bmN0aW9uKGQpIHtcbiAgdmFyIGNvbmZpZyA9IHtcbiAgICAgIGtpdElkOiBcInB0bzhpbXFcIixcbiAgICAgIHNjcmlwdFRpbWVvdXQ6IDMwMDAsXG4gICAgICBhc3luYzogdHJ1ZVxuICAgIH0sXG4gICAgaCA9IGQuZG9jdW1lbnRFbGVtZW50LFxuICAgIHQgPSBzZXRUaW1lb3V0KGZ1bmN0aW9uKCkge1xuICAgICAgaC5jbGFzc05hbWUgPSBoLmNsYXNzTmFtZS5yZXBsYWNlKC9cXGJ3Zi1sb2FkaW5nXFxiL2csIFwiXCIpICsgXCIgd2YtaW5hY3RpdmVcIjtcbiAgICB9LCBjb25maWcuc2NyaXB0VGltZW91dCksXG4gICAgdGsgPSBkLmNyZWF0ZUVsZW1lbnQoXCJzY3JpcHRcIiksXG4gICAgZiA9IGZhbHNlLFxuICAgIHMgPSBkLmdldEVsZW1lbnRzQnlUYWdOYW1lKFwic2NyaXB0XCIpWzBdLFxuICAgIGE7XG4gIGguY2xhc3NOYW1lICs9IFwiIHdmLWxvYWRpbmdcIjtcbiAgdGsuc3JjID0gXCJodHRwczovL3VzZS50eXBla2l0Lm5ldC9cIiArIGNvbmZpZy5raXRJZCArIFwiLmpzXCI7XG4gIHRrLmFzeW5jID0gdHJ1ZTtcbiAgdGsub25sb2FkID0gdGsub25yZWFkeXN0YXRlY2hhbmdlID0gZnVuY3Rpb24oKSB7XG4gICAgYSA9IHRoaXMucmVhZHlTdGF0ZTtcbiAgICBpZiAoZiB8fCAoYSAmJiBhICE9IFwiY29tcGxldGVcIiAmJiBhICE9IFwibG9hZGVkXCIpKSByZXR1cm47XG4gICAgZiA9IHRydWU7XG4gICAgY2xlYXJUaW1lb3V0KHQpO1xuICAgIHRyeSB7XG4gICAgICBUeXBla2l0LmxvYWQoY29uZmlnKTtcbiAgICB9IGNhdGNoIChlKSB7fVxuICB9O1xuICBzLnBhcmVudE5vZGUuaW5zZXJ0QmVmb3JlKHRrLCBzKTtcbn0pKGRvY3VtZW50KTtcbiIsIiQoZnVuY3Rpb24oKSB7XG4gIGlmICgkKFwiYm9keVwiKS5oYXNDbGFzcyhcInBhZ2UtdGVtcGxhdGUtcGFnZS1mYXFcIikpIHtcbiAgICAkKGZ1bmN0aW9uKCkge1xuICAgICAgJChcIi5vcGVuLWJ0blwiKS5vbihcImNsaWNrXCIsIGZ1bmN0aW9uKGV2ZW50KSB7XG4gICAgICAgICQodGhpcykudG9nZ2xlQ2xhc3MoXCJhY3RpdmVcIik7XG4gICAgICAgICQodGhpcylcbiAgICAgICAgICAubmV4dCgpXG4gICAgICAgICAgLnNsaWRlVG9nZ2xlKCk7XG4gICAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KCk7XG4gICAgICB9KTtcbiAgICB9KTtcbiAgICB2YXIgd2luZG93V2lkdGggPSAkKHdpbmRvdykud2lkdGgoKTtcbiAgICB2YXIgd2luZG93U20gPSA4MTI7XG4gICAgaWYgKHdpbmRvd1dpZHRoIDw9IHdpbmRvd1NtKSB7XG4gICAgICAvL+aoquW5hTY0MHB45Lul5LiL44Gu44Go44GN77yI44Gk44G+44KK44K544Oe44Ob5pmC77yJ44Gr6KGM44GG5Yem55CG44KS5pu444GPXG4gICAgfSBlbHNlIHtcbiAgICB9XG4gIH1cbn0pO1xuIiwiJChmdW5jdGlvbigpIHtcbiAgaWYgKCQoXCJib2R5XCIpLmhhc0NsYXNzKFwicGFnZS10ZW1wbGF0ZS1wYWdlLWludGVyaW9yXCIpKSB7XG4gICAgJChmdW5jdGlvbigpIHtcbiAgICAgICQoXCIjc2xpZGVyXCIpLnNsaWNrKHtcbiAgICAgICAgZG90czogdHJ1ZSxcbiAgICAgICAgcHJldkFycm93OlxuICAgICAgICAgICc8aW1nIHNyYz1cIi9fc3lzdGVtL3dwLWNvbnRlbnQvdGhlbWVzL3dwLXZvaWNlL2ltZy9leHJlc2VydmUvaW50ZXJpb3Jfc2xpZGUtcHJldi5zdmdcIiBjbGFzcz1cInNsaWRlLWFycm93IHByZXYtYXJyb3dcIj4nLFxuICAgICAgICBuZXh0QXJyb3c6XG4gICAgICAgICAgJzxpbWcgc3JjPVwiL19zeXN0ZW0vd3AtY29udGVudC90aGVtZXMvd3Atdm9pY2UvaW1nL2V4cmVzZXJ2ZS9pbnRlcmlvcl9zbGlkZS1uZXh0LnN2Z1wiIGNsYXNzPVwic2xpZGUtYXJyb3cgbmV4dC1hcnJvd1wiPidcbiAgICAgIH0pO1xuICAgICAgJChmdW5jdGlvbigpIHtcbiAgICAgICAgJChcIi5pemlNb2RhbF9pZnJhbWVcIikuaXppTW9kYWwoe1xuICAgICAgICAgIGlmcmFtZTogdHJ1ZSxcbiAgICAgICAgICB3aWR0aDogNjAwLFxuICAgICAgICAgIG92ZXJsYXlDb2xvcjogXCJyZ2JhKDAsIDAsIDAsIDAuNSlcIixcbiAgICAgICAgICBwYWRkaW5nOiA0MCxcbiAgICAgICAgICBiYWNrZ3JvdW5kOiBcIndoaXRlXCIsXG4gICAgICAgICAgZG90czogdHJ1ZSxcbiAgICAgICAgICBjbG9zZUJ1dHRvbjogdHJ1ZVxuICAgICAgICB9KTtcbiAgICAgIH0pO1xuICAgIH0pO1xuICAgIHZhciB3aW5kb3dXaWR0aCA9ICQod2luZG93KS53aWR0aCgpO1xuICAgIHZhciB3aW5kb3dTbSA9IDgxMjtcbiAgICBpZiAod2luZG93V2lkdGggPD0gd2luZG93U20pIHtcbiAgICAgIC8v5qiq5bmFNjQwcHjku6XkuIvjga7jgajjgY3vvIjjgaTjgb7jgorjgrnjg57jg5vmmYLvvInjgavooYzjgYblh6bnkIbjgpLmm7jjgY9cbiAgICB9IGVsc2Uge1xuICAgIH1cbiAgfVxufSk7XG4iLCIkKGZ1bmN0aW9uKCkge1xuICBpZiAoJChcImJvZHlcIikuaGFzQ2xhc3MoXCJwYWdlLXRlbXBsYXRlLXBhZ2UtcmVjcnVpdFwiKSkge1xuICAgICQoZnVuY3Rpb24oKSB7XG4gICAgICAkKFwiLm9wZW4tYnRuXCIpLm9uKFwiY2xpY2tcIiwgZnVuY3Rpb24oZXZlbnQpIHtcbiAgICAgICAgJCh0aGlzKS50b2dnbGVDbGFzcyhcImFjdGl2ZVwiKTtcbiAgICAgICAgJCh0aGlzKVxuICAgICAgICAgIC5uZXh0KClcbiAgICAgICAgICAuc2xpZGVUb2dnbGUoKTtcbiAgICAgICAgZXZlbnQucHJldmVudERlZmF1bHQoKTtcbiAgICAgIH0pO1xuICAgICAgJChcIi5tYWludi0tbGlzdFwiKS5zbGljayh7XG4gICAgICAgIGF1dG9wbGF5OiB0cnVlLFxuICAgICAgICBhdXRvcGxheVNwZWVkOiAzMDAwLFxuICAgICAgICBkb3RzOiBmYWxzZSxcbiAgICAgICAgZmFkZTogdHJ1ZSxcbiAgICAgICAgYWNjZXNzaWJpbGl0eTogZmFsc2UsXG4gICAgICAgIGFycm93czogZmFsc2VcbiAgICAgIH0pO1xuICAgIH0pO1xuICAgIHZhciB3aW5kb3dXaWR0aCA9ICQod2luZG93KS53aWR0aCgpO1xuICAgIHZhciB3aW5kb3dTbSA9IDgxMjtcbiAgICBpZiAod2luZG93V2lkdGggPD0gd2luZG93U20pIHtcbiAgICAgIC8v5qiq5bmFNjQwcHjku6XkuIvjga7jgajjgY3vvIjjgaTjgb7jgorjgrnjg57jg5vmmYLvvInjgavooYzjgYblh6bnkIbjgpLmm7jjgY9cbiAgICB9IGVsc2Uge1xuICAgIH1cbiAgfVxufSk7XG4iLCIkKGZ1bmN0aW9uKCkge1xuICBpZiAoJChcImJvZHlcIikuaGFzQ2xhc3MoXCJwYWdlLXRlbXBsYXRlLXBhZ2UtcmVzZXJ2ZVwiKSkge1xuICAgICQoXCIjY29udGFjdC1idG4tc3VibWl0XCIpLmFmdGVyKFxuICAgICAgJChcIjxpbWcvPlwiKS5hdHRyKHtcbiAgICAgICAgc3JjOiBcIi9fc3lzdGVtL3dwLWNvbnRlbnQvdGhlbWVzL3dwLXZvaWNlL2ltZy9jbW4vaWNvX2Fycm93X3ctbWluLnN2Z1wiLFxuICAgICAgICBjbGFzczogXCJzdWJtaXQtaW1nXCJcbiAgICAgIH0pXG4gICAgKTtcbiAgICB2YXIgd2luZG93V2lkdGggPSAkKHdpbmRvdykud2lkdGgoKTtcbiAgICB2YXIgd2luZG93U20gPSA0NjA7XG4gICAgaWYgKHdpbmRvd1dpZHRoIDw9IHdpbmRvd1NtKSB7XG4gICAgICAvL+aoquW5hTY0MHB45Lul5LiL44Gu44Go44GN77yI44Gk44G+44KK44K544Oe44Ob5pmC77yJ44Gr6KGM44GG5Yem55CG44KS5pu444GPXG4gICAgICAkKGZ1bmN0aW9uKCkge1xuICAgICAgICAkKFwiLnZpZXctc3BcIikuc2xpY2soe1xuICAgICAgICAgIGF1dG9wbGF5OiB0cnVlLFxuICAgICAgICAgIHNwZWVkOiAxMDAwLFxuICAgICAgICAgIGRvdHM6IHRydWUsXG4gICAgICAgICAgY2VudGVyTW9kZTogdHJ1ZSxcbiAgICAgICAgICBjZW50ZXJQYWRkaW5nOiBcIjEwJVwiXG4gICAgICAgIH0pO1xuICAgICAgICAkKFwiaW5wdXQjZm9ybS0tdGVsXCIpLnByb3AoXCJ0eXBlXCIsIFwidGVsXCIpO1xuICAgICAgICAkKFwiaW5wdXQjZm9ybS0tbWFpbDAxICwgaW5wdXQjZm9ybS0tbWFpbDAyXCIpLnByb3AoXCJ0eXBlXCIsIFwiZW1haWxcIik7XG4gICAgICB9KTtcbiAgICB9IGVsc2Uge1xuICAgICAgJChmdW5jdGlvbigpIHtcbiAgICAgICAgJChcbiAgICAgICAgICBcIi5pemlNb2RhbF8wMSwuaXppTW9kYWxfMDIsLml6aU1vZGFsXzAzLC5pemlNb2RhbF8wNCwuaXppTW9kYWxfMDUsLml6aU1vZGFsXzA2LC5pemlNb2RhbF8wNywuaXppTW9kYWxfMDgsLml6aU1vZGFsXzA5XCJcbiAgICAgICAgKS5pemlNb2RhbCh7XG4gICAgICAgICAgd2lkdGg6IDc4MCxcbiAgICAgICAgICBjbG9zZUJ1dHRvbjogdHJ1ZSxcbiAgICAgICAgICBuYXZpZ2F0ZUNhcHRpb246IGZhbHNlLFxuICAgICAgICAgIG9uT3BlbmVkOiBmdW5jdGlvbigpIHtcbiAgICAgICAgICAgICQoXCJib2R5XCIpLmFkZENsYXNzKFwiaGlkZGVuXCIpO1xuICAgICAgICAgIH0sXG4gICAgICAgICAgb25DbG9zZWQ6IGZ1bmN0aW9uKCkge1xuICAgICAgICAgICAgJChcImJvZHlcIikucmVtb3ZlQ2xhc3MoXCJoaWRkZW5cIik7XG4gICAgICAgICAgfVxuICAgICAgICB9KTtcbiAgICAgIH0pO1xuICAgIH1cbiAgfVxufSk7XG4iLCIkKGZ1bmN0aW9uKCkge1xuICBpZiAoJChcImJvZHlcIikuaGFzQ2xhc3MoXCJwYWdlLXRlbXBsYXRlLXBhZ2Utcm91dGVcIikpIHtcbiAgICAkKHdpbmRvdykub24oXCJsb2FkXCIsIGZ1bmN0aW9uKCkge1xuICAgICAgdmFyIHBhdGggPSBsb2NhdGlvbi5wYXRobmFtZTtcbiAgICAgIGNvbnNvbGUubG9nKHBhdGgpO1xuICAgICAgaWYgKHBhdGggPT0gXCIvZXhyZXNlcnZlL3JvdXRlLTAxL1wiKSB7XG4gICAgICAgICQoXCIudGFiLWxpc3QtY2VsbFwiKVxuICAgICAgICAgIC5lcSgwKVxuICAgICAgICAgIC5hZGRDbGFzcyhcImFjdGl2ZVwiKTtcbiAgICAgICAgY29uc29sZS5sb2coXCIwMVwiKTtcbiAgICAgIH0gZWxzZSBpZiAocGF0aCA9PSBcIi9leHJlc2VydmUvcm91dGUtMDIvXCIpIHtcbiAgICAgICAgJChcIi50YWItbGlzdC1jZWxsXCIpXG4gICAgICAgICAgLmVxKDEpXG4gICAgICAgICAgLmFkZENsYXNzKFwiYWN0aXZlXCIpO1xuICAgICAgfSBlbHNlIGlmIChwYXRoID09IFwiL2V4cmVzZXJ2ZS9yb3V0ZS0wMy9cIikge1xuICAgICAgICAkKFwiLnRhYi1saXN0LWNlbGxcIilcbiAgICAgICAgICAuZXEoMilcbiAgICAgICAgICAuYWRkQ2xhc3MoXCJhY3RpdmVcIik7XG4gICAgICB9IGVsc2UgaWYgKHBhdGggPT0gXCIvZXhyZXNlcnZlL3JvdXRlLTA0L1wiKSB7XG4gICAgICAgICQoXCIudGFiLWxpc3QtY2VsbFwiKVxuICAgICAgICAgIC5lcSgzKVxuICAgICAgICAgIC5hZGRDbGFzcyhcImFjdGl2ZVwiKTtcbiAgICAgIH1cbiAgICB9KTtcblxuICAgIHZhciB3aW5kb3dXaWR0aCA9ICQod2luZG93KS53aWR0aCgpO1xuICAgIHZhciB3aW5kb3dTbSA9IDQ2MDtcbiAgICBpZiAod2luZG93V2lkdGggPD0gd2luZG93U20pIHtcbiAgICAgIC8v5qiq5bmFNjQwcHjku6XkuIvjga7jgajjgY3vvIjjgaTjgb7jgorjgrnjg57jg5vmmYLvvInjgavooYzjgYblh6bnkIbjgpLmm7jjgY9cbiAgICB9IGVsc2Uge1xuICAgIH1cbiAgfVxufSk7XG4iLCIkKGZ1bmN0aW9uKCkge1xuICBpZiAoJChcImJvZHlcIikuaGFzQ2xhc3MoXCJob21lXCIpKSB7XG4gICAgJChmdW5jdGlvbigpIHtcbiAgICAgICQoXCIuYXJlYV9zb3J0LXRvcFwiKS5vbihcImNsaWNrXCIsIGZ1bmN0aW9uKGV2ZW50KSB7XG4gICAgICAgICQoXCIubWFpbnYtLWFyZWFfc29ydFwiKS50b2dnbGVDbGFzcyhcImFjdGl2ZVwiKTtcbiAgICAgICAgZXZlbnQucHJldmVudERlZmF1bHQoKTtcbiAgICAgIH0pO1xuICAgICAgJChcIi5tYWludi0tbGlzdFwiKS5zbGljayh7XG4gICAgICAgIGF1dG9wbGF5OiB0cnVlLFxuICAgICAgICBhdXRvcGxheVNwZWVkOiA2MDAwLFxuICAgICAgICBkb3RzOiBmYWxzZSxcbiAgICAgICAgZmFkZTogdHJ1ZSxcbiAgICAgICAgYWNjZXNzaWJpbGl0eTogZmFsc2UsXG4gICAgICAgIGFycm93czogZmFsc2VcbiAgICAgIH0pO1xuICAgIH0pO1xuICAgIGNvbnN0IGFuaW0gPSBsb3R0aWUubG9hZEFuaW1hdGlvbih7XG4gICAgICBjb250YWluZXI6IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwiYm9keW1vdmluLXdyYXBwZXJcIiksXG4gICAgICByZW5kZXJlcjogXCJzdmdcIixcbiAgICAgIGxvb3A6IHRydWUsXG4gICAgICBhdXRvcGxheTogdHJ1ZSxcbiAgICAgIHBhdGg6IFwiL19zeXN0ZW0vd3AtY29udGVudC90aGVtZXMvd3Atdm9pY2UvZGlzdC9kYXRhLmpzb25cIlxuICAgIH0pO1xuICAgIHZhciB3aW5kb3dXaWR0aCA9ICQod2luZG93KS53aWR0aCgpO1xuICAgIHZhciB3aW5kb3dTbSA9IDgxMjtcbiAgICBpZiAod2luZG93V2lkdGggPD0gd2luZG93U20pIHtcbiAgICAgIC8v5qiq5bmFNjQwcHjku6XkuIvjga7jgajjgY3vvIjjgaTjgb7jgorjgrnjg57jg5vmmYLvvInjgavooYzjgYblh6bnkIbjgpLmm7jjgY9cbiAgICB9IGVsc2Uge1xuICAgIH1cbiAgfVxufSk7XG4iLCIkKGZ1bmN0aW9uKCkge1xuICBpZiAoJChcImJvZHlcIikuaGFzQ2xhc3MoXCJwYWdlLXRlbXBsYXRlLXBhZ2UtdXNlcmd1aWRlXCIpKSB7XG4gICAgJChmdW5jdGlvbigpIHtcbiAgICAgICQoXCIub3Blbi1idG5cIikub24oXCJjbGlja1wiLCBmdW5jdGlvbihldmVudCkge1xuICAgICAgICAkKHRoaXMpLnRvZ2dsZUNsYXNzKFwiYWN0aXZlXCIpO1xuICAgICAgICAkKHRoaXMpXG4gICAgICAgICAgLm5leHQoKVxuICAgICAgICAgIC5zbGlkZVRvZ2dsZSgpO1xuICAgICAgICBldmVudC5wcmV2ZW50RGVmYXVsdCgpO1xuICAgICAgfSk7XG4gICAgfSk7XG4gICAgdmFyIHdpbmRvd1dpZHRoID0gJCh3aW5kb3cpLndpZHRoKCk7XG4gICAgdmFyIHdpbmRvd1NtID0gODEyO1xuICAgIGlmICh3aW5kb3dXaWR0aCA8PSB3aW5kb3dTbSkge1xuICAgICAgLy/mqKrluYU2NDBweOS7peS4i+OBruOBqOOBje+8iOOBpOOBvuOCiuOCueODnuODm+aZgu+8ieOBq+ihjOOBhuWHpueQhuOCkuabuOOBj1xuICAgIH0gZWxzZSB7XG4gICAgfVxuICB9XG59KTtcbiJdLCJzb3VyY2VSb290IjoiIn0=