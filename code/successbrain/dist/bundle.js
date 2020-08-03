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
/* harmony import */ var _js_modernizer__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./js/modernizer */ "./src/js/modernizer.js");
/* harmony import */ var _js_modernizer__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_js_modernizer__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _js_top__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./js/top */ "./src/js/top.js");
/* harmony import */ var _js_top__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_js_top__WEBPACK_IMPORTED_MODULE_3__);





/***/ }),

/***/ "./src/js/common.js":
/*!**************************!*\
  !*** ./src/js/common.js ***!
  \**************************/
/*! no static exports found */
/***/ (function(module, exports) {

var outhover;
$(function () {
  if ($("body").attr("class").match("home|page-template-page-statement")) {
    $('.c--navigation__inr--left').remove();
  }

  ;
  var headerHight = 80; //*ページ内リンクの指定

  $("a[href^='#']").click(function () {
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? "html" : href);
    var position = target.offset().top - headerHight;
    $("html, body").animate({
      scrollTop: position
    }, 550, "swing");
    return false;
  }); //*ページ外リンクの指定*/

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
  } // imgswitch


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
  }); // blur

  inView.offset(200);
  inView('.c--blurTarget').on('enter', function (el) {
    //入ったとき
    el.classList.add('c--blurActive');
  }); // nav

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
}); // sp,pc分岐

var windowWidth = $(window).width();
var windowSm = 812;

if (windowWidth <= windowSm) {
  $(function () {});
} else {
  $(function () {});
}

/***/ }),

/***/ "./src/js/modernizer.js":
/*!******************************!*\
  !*** ./src/js/modernizer.js ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _typeof(obj) { if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

/*! modernizr 3.6.0 (Custom Build) | MIT *
 * https://modernizr.com/download/?-webp-webpalpha-webpanimation-webplossless_webp_lossless-setclasses !*/
!function (A, e, n) {
  function a(A, e) {
    return _typeof(A) === e;
  }

  function o() {
    var A, e, n, o, s, i, r;

    for (var f in l) {
      if (l.hasOwnProperty(f)) {
        if (A = [], e = l[f], e.name && (A.push(e.name.toLowerCase()), e.options && e.options.aliases && e.options.aliases.length)) for (n = 0; n < e.options.aliases.length; n++) {
          A.push(e.options.aliases[n].toLowerCase());
        }

        for (o = a(e.fn, "function") ? e.fn() : e.fn, s = 0; s < A.length; s++) {
          i = A[s], r = i.split("."), 1 === r.length ? Modernizr[r[0]] = o : (!Modernizr[r[0]] || Modernizr[r[0]] instanceof Boolean || (Modernizr[r[0]] = new Boolean(Modernizr[r[0]])), Modernizr[r[0]][r[1]] = o), t.push((o ? "" : "no-") + r.join("-"));
        }
      }
    }
  }

  function s(A) {
    var e = c.className,
        n = Modernizr._config.classPrefix || "";

    if (u && (e = e.baseVal), Modernizr._config.enableJSClass) {
      var a = new RegExp("(^|\\s)" + n + "no-js(\\s|$)");
      e = e.replace(a, "$1" + n + "js$2");
    }

    Modernizr._config.enableClasses && (e += " " + n + A.join(" " + n), u ? c.className.baseVal = e : c.className = e);
  }

  function i(A, e) {
    if ("object" == _typeof(A)) for (var n in A) {
      f(A, n) && i(n, A[n]);
    } else {
      A = A.toLowerCase();
      var a = A.split("."),
          o = Modernizr[a[0]];
      if (2 == a.length && (o = o[a[1]]), "undefined" != typeof o) return Modernizr;
      e = "function" == typeof e ? e() : e, 1 == a.length ? Modernizr[a[0]] = e : (!Modernizr[a[0]] || Modernizr[a[0]] instanceof Boolean || (Modernizr[a[0]] = new Boolean(Modernizr[a[0]])), Modernizr[a[0]][a[1]] = e), s([(e && 0 != e ? "" : "no-") + a.join("-")]), Modernizr._trigger(A, e);
    }
    return Modernizr;
  }

  var t = [],
      l = [],
      r = {
    _version: "3.6.0",
    _config: {
      classPrefix: "",
      enableClasses: !0,
      enableJSClass: !0,
      usePrefixes: !0
    },
    _q: [],
    on: function on(A, e) {
      var n = this;
      setTimeout(function () {
        e(n[A]);
      }, 0);
    },
    addTest: function addTest(A, e, n) {
      l.push({
        name: A,
        fn: e,
        options: n
      });
    },
    addAsyncTest: function addAsyncTest(A) {
      l.push({
        name: null,
        fn: A
      });
    }
  },
      Modernizr = function Modernizr() {};

  Modernizr.prototype = r, Modernizr = new Modernizr();
  var f,
      c = e.documentElement,
      u = "svg" === c.nodeName.toLowerCase();
  !function () {
    var A = {}.hasOwnProperty;
    f = a(A, "undefined") || a(A.call, "undefined") ? function (A, e) {
      return e in A && a(A.constructor.prototype[e], "undefined");
    } : function (e, n) {
      return A.call(e, n);
    };
  }(), r._l = {}, r.on = function (A, e) {
    this._l[A] || (this._l[A] = []), this._l[A].push(e), Modernizr.hasOwnProperty(A) && setTimeout(function () {
      Modernizr._trigger(A, Modernizr[A]);
    }, 0);
  }, r._trigger = function (A, e) {
    if (this._l[A]) {
      var n = this._l[A];
      setTimeout(function () {
        var A, a;

        for (A = 0; A < n.length; A++) {
          (a = n[A])(e);
        }
      }, 0), delete this._l[A];
    }
  }, Modernizr._q.push(function () {
    r.addTest = i;
  }), Modernizr.addAsyncTest(function () {
    function A(A, e, n) {
      function a(e) {
        var a = e && "load" === e.type ? 1 == o.width : !1,
            s = "webp" === A;
        i(A, s && a ? new Boolean(a) : a), n && n(e);
      }

      var o = new Image();
      o.onerror = a, o.onload = a, o.src = e;
    }

    var e = [{
      uri: "data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoBAAEAAwA0JaQAA3AA/vuUAAA=",
      name: "webp"
    }, {
      uri: "data:image/webp;base64,UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAABBxAR/Q9ERP8DAABWUDggGAAAADABAJ0BKgEAAQADADQlpAADcAD++/1QAA==",
      name: "webp.alpha"
    }, {
      uri: "data:image/webp;base64,UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA",
      name: "webp.animation"
    }, {
      uri: "data:image/webp;base64,UklGRh4AAABXRUJQVlA4TBEAAAAvAAAAAAfQ//73v/+BiOh/AAA=",
      name: "webp.lossless"
    }],
        n = e.shift();
    A(n.name, n.uri, function (n) {
      if (n && "load" === n.type) for (var a = 0; a < e.length; a++) {
        A(e[a].name, e[a].uri);
      }
    });
  }), Modernizr.addAsyncTest(function () {
    var A = new Image();
    A.onerror = function () {
      i("webpanimation", !1, {
        aliases: ["webp-animation"]
      });
    }, A.onload = function () {
      i("webpanimation", 1 == A.width, {
        aliases: ["webp-animation"]
      });
    }, A.src = "data:image/webp;base64,UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA";
  }), Modernizr.addAsyncTest(function () {
    var A = new Image();
    A.onerror = function () {
      i("webpalpha", !1, {
        aliases: ["webp-alpha"]
      });
    }, A.onload = function () {
      i("webpalpha", 1 == A.width, {
        aliases: ["webp-alpha"]
      });
    }, A.src = "data:image/webp;base64,UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAABBxAR/Q9ERP8DAABWUDggGAAAADABAJ0BKgEAAQADADQlpAADcAD++/1QAA==";
  }), Modernizr.addAsyncTest(function () {
    var A = new Image();
    A.onerror = function () {
      i("webplossless", !1, {
        aliases: ["webp-lossless"]
      });
    }, A.onload = function () {
      i("webplossless", 1 == A.width, {
        aliases: ["webp-lossless"]
      });
    }, A.src = "data:image/webp;base64,UklGRh4AAABXRUJQVlA4TBEAAAAvAAAAAAfQ//73v/+BiOh/AAA=";
  }), o(), s(t), delete r.addTest, delete r.addAsyncTest;

  for (var p = 0; p < Modernizr._q.length; p++) {
    Modernizr._q[p]();
  }

  A.Modernizr = Modernizr;
}(window, document);

/***/ }),

/***/ "./src/js/top.js":
/*!***********************!*\
  !*** ./src/js/top.js ***!
  \***********************/
/*! no static exports found */
/***/ (function(module, exports) {

$(function () {
  if ($("body").hasClass("home")) {
    var windowWidth = $(window).width();
    var windowSm = 812;

    if (windowWidth <= windowSm) {
      //横幅640px以下のとき（つまりスマホ時）に行う処理を書く
      $('aside').remove();
      $('.interview__group').slick({
        dots: true,
        slidesToShow: 1,
        arrows: false,
        variableWidth: true,
        adaptiveHeight: true
      });
    } else {
      $(window).on('load scroll', function () {
        inView.offset(300);
        inView('.p-section').on('enter', function (el) {
          //入ったとき
          viewArray = document.getElementsByClassName(el);
          viewList = viewArray = [].slice.call(viewArray);
          viewId = '#' + $(el).attr('id');
          $('#aside_nav li').find('a').each(function () {
            var str_href = $(this).attr("href").replace(origin, "");

            if (viewId === str_href) {
              // 文字色変更
              $(this).parent().addClass("aside_nav__list--active");
            } else {
              $(this).parent().removeClass("aside_nav__list--active");
            }
          });
        });
      });
    }
  }
});

/***/ })

/******/ });
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vd2VicGFjay9ib290c3RyYXAiLCJ3ZWJwYWNrOi8vLy4vc3JjL2Nzcy9tYWluLnNjc3MiLCJ3ZWJwYWNrOi8vLy4vc3JjL2luZGV4LmpzIiwid2VicGFjazovLy8uL3NyYy9qcy9jb21tb24uanMiLCJ3ZWJwYWNrOi8vLy4vc3JjL2pzL21vZGVybml6ZXIuanMiLCJ3ZWJwYWNrOi8vLy4vc3JjL2pzL3RvcC5qcyJdLCJuYW1lcyI6WyJvdXRob3ZlciIsIiQiLCJhdHRyIiwibWF0Y2giLCJyZW1vdmUiLCJoZWFkZXJIaWdodCIsImNsaWNrIiwiaHJlZiIsInRhcmdldCIsInBvc2l0aW9uIiwib2Zmc2V0IiwidG9wIiwiYW5pbWF0ZSIsInNjcm9sbFRvcCIsImhlYWRlckhlaWdodCIsInVybEhhc2giLCJsb2NhdGlvbiIsImhhc2giLCJzdG9wIiwic2V0VGltZW91dCIsIiRyZXBsYWNlRWxlbSIsInJlcGxhY2VTcCIsInJlcGxhY2VQYyIsInJlcGxhY2VXaWR0aCIsImltYWdlU3dpdGNoIiwid2luZG93V2lkdGgiLCJwYXJzZUludCIsIndpbmRvdyIsIndpZHRoIiwiZWFjaCIsIiR0aGlzIiwicmVwbGFjZSIsInJlc2l6ZVRpbWVyIiwib24iLCJjbGVhclRpbWVvdXQiLCJpblZpZXciLCJlbCIsImNsYXNzTGlzdCIsImFkZCIsInNjcm9sbCIsImFkZENsYXNzIiwicmVtb3ZlQ2xhc3MiLCJ0b2dnbGVDbGFzcyIsIndpbmRvd1NtIiwiQSIsImUiLCJuIiwiYSIsIm8iLCJzIiwiaSIsInIiLCJmIiwibCIsImhhc093blByb3BlcnR5IiwibmFtZSIsInB1c2giLCJ0b0xvd2VyQ2FzZSIsIm9wdGlvbnMiLCJhbGlhc2VzIiwibGVuZ3RoIiwiZm4iLCJzcGxpdCIsIk1vZGVybml6ciIsIkJvb2xlYW4iLCJ0Iiwiam9pbiIsImMiLCJjbGFzc05hbWUiLCJfY29uZmlnIiwiY2xhc3NQcmVmaXgiLCJ1IiwiYmFzZVZhbCIsImVuYWJsZUpTQ2xhc3MiLCJSZWdFeHAiLCJlbmFibGVDbGFzc2VzIiwiX3RyaWdnZXIiLCJfdmVyc2lvbiIsInVzZVByZWZpeGVzIiwiX3EiLCJhZGRUZXN0IiwiYWRkQXN5bmNUZXN0IiwicHJvdG90eXBlIiwiZG9jdW1lbnRFbGVtZW50Iiwibm9kZU5hbWUiLCJjYWxsIiwiY29uc3RydWN0b3IiLCJfbCIsInR5cGUiLCJJbWFnZSIsIm9uZXJyb3IiLCJvbmxvYWQiLCJzcmMiLCJ1cmkiLCJzaGlmdCIsInAiLCJkb2N1bWVudCIsImhhc0NsYXNzIiwic2xpY2siLCJkb3RzIiwic2xpZGVzVG9TaG93IiwiYXJyb3dzIiwidmFyaWFibGVXaWR0aCIsImFkYXB0aXZlSGVpZ2h0Iiwidmlld0FycmF5IiwiZ2V0RWxlbWVudHNCeUNsYXNzTmFtZSIsInZpZXdMaXN0Iiwic2xpY2UiLCJ2aWV3SWQiLCJmaW5kIiwic3RyX2hyZWYiLCJvcmlnaW4iLCJwYXJlbnQiXSwibWFwcGluZ3MiOiI7UUFBQTtRQUNBOztRQUVBO1FBQ0E7O1FBRUE7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7O1FBRUE7UUFDQTs7UUFFQTtRQUNBOztRQUVBO1FBQ0E7UUFDQTs7O1FBR0E7UUFDQTs7UUFFQTtRQUNBOztRQUVBO1FBQ0E7UUFDQTtRQUNBLDBDQUEwQyxnQ0FBZ0M7UUFDMUU7UUFDQTs7UUFFQTtRQUNBO1FBQ0E7UUFDQSx3REFBd0Qsa0JBQWtCO1FBQzFFO1FBQ0EsaURBQWlELGNBQWM7UUFDL0Q7O1FBRUE7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBO1FBQ0E7UUFDQTtRQUNBLHlDQUF5QyxpQ0FBaUM7UUFDMUUsZ0hBQWdILG1CQUFtQixFQUFFO1FBQ3JJO1FBQ0E7O1FBRUE7UUFDQTtRQUNBO1FBQ0EsMkJBQTJCLDBCQUEwQixFQUFFO1FBQ3ZELGlDQUFpQyxlQUFlO1FBQ2hEO1FBQ0E7UUFDQTs7UUFFQTtRQUNBLHNEQUFzRCwrREFBK0Q7O1FBRXJIO1FBQ0E7OztRQUdBO1FB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O0FBQ0Q7QUFDRixXQVZEO0FBWUQsU0FsQkg7QUFtQkQsT0FyQkQ7QUFzQkQ7QUFDRjtBQUNGLENBdkNBLENBQUQsQyIsImZpbGUiOiJidW5kbGUuanMiLCJzb3VyY2VzQ29udGVudCI6WyIgXHQvLyBUaGUgbW9kdWxlIGNhY2hlXG4gXHR2YXIgaW5zdGFsbGVkTW9kdWxlcyA9IHt9O1xuXG4gXHQvLyBUaGUgcmVxdWlyZSBmdW5jdGlvblxuIFx0ZnVuY3Rpb24gX193ZWJwYWNrX3JlcXVpcmVfXyhtb2R1bGVJZCkge1xuXG4gXHRcdC8vIENoZWNrIGlmIG1vZHVsZSBpcyBpbiBjYWNoZVxuIFx0XHRpZihpbnN0YWxsZWRNb2R1bGVzW21vZHVsZUlkXSkge1xuIFx0XHRcdHJldHVybiBpbnN0YWxsZWRNb2R1bGVzW21vZHVsZUlkXS5leHBvcnRzO1xuIFx0XHR9XG4gXHRcdC8vIENyZWF0ZSBhIG5ldyBtb2R1bGUgKGFuZCBwdXQgaXQgaW50byB0aGUgY2FjaGUpXG4gXHRcdHZhciBtb2R1bGUgPSBpbnN0YWxsZWRNb2R1bGVzW21vZHVsZUlkXSA9IHtcbiBcdFx0XHRpOiBtb2R1bGVJZCxcbiBcdFx0XHRsOiBmYWxzZSxcbiBcdFx0XHRleHBvcnRzOiB7fVxuIFx0XHR9O1xuXG4gXHRcdC8vIEV4ZWN1dGUgdGhlIG1vZHVsZSBmdW5jdGlvblxuIFx0XHRtb2R1bGVzW21vZHVsZUlkXS5jYWxsKG1vZHVsZS5leHBvcnRzLCBtb2R1bGUsIG1vZHVsZS5leHBvcnRzLCBfX3dlYnBhY2tfcmVxdWlyZV9fKTtcblxuIFx0XHQvLyBGbGFnIHRoZSBtb2R1bGUgYXMgbG9hZGVkXG4gXHRcdG1vZHVsZS5sID0gdHJ1ZTtcblxuIFx0XHQvLyBSZXR1cm4gdGhlIGV4cG9ydHMgb2YgdGhlIG1vZHVsZVxuIFx0XHRyZXR1cm4gbW9kdWxlLmV4cG9ydHM7XG4gXHR9XG5cblxuIFx0Ly8gZXhwb3NlIHRoZSBtb2R1bGVzIG9iamVjdCAoX193ZWJwYWNrX21vZHVsZXNfXylcbiBcdF9fd2VicGFja19yZXF1aXJlX18ubSA9IG1vZHVsZXM7XG5cbiBcdC8vIGV4cG9zZSB0aGUgbW9kdWxlIGNhY2hlXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLmMgPSBpbnN0YWxsZWRNb2R1bGVzO1xuXG4gXHQvLyBkZWZpbmUgZ2V0dGVyIGZ1bmN0aW9uIGZvciBoYXJtb255IGV4cG9ydHNcbiBcdF9fd2VicGFja19yZXF1aXJlX18uZCA9IGZ1bmN0aW9uKGV4cG9ydHMsIG5hbWUsIGdldHRlcikge1xuIFx0XHRpZighX193ZWJwYWNrX3JlcXVpcmVfXy5vKGV4cG9ydHMsIG5hbWUpKSB7XG4gXHRcdFx0T2JqZWN0LmRlZmluZVByb3BlcnR5KGV4cG9ydHMsIG5hbWUsIHsgZW51bWVyYWJsZTogdHJ1ZSwgZ2V0OiBnZXR0ZXIgfSk7XG4gXHRcdH1cbiBcdH07XG5cbiBcdC8vIGRlZmluZSBfX2VzTW9kdWxlIG9uIGV4cG9ydHNcbiBcdF9fd2VicGFja19yZXF1aXJlX18uciA9IGZ1bmN0aW9uKGV4cG9ydHMpIHtcbiBcdFx0aWYodHlwZW9mIFN5bWJvbCAhPT0gJ3VuZGVmaW5lZCcgJiYgU3ltYm9sLnRvU3RyaW5nVGFnKSB7XG4gXHRcdFx0T2JqZWN0LmRlZmluZVByb3BlcnR5KGV4cG9ydHMsIFN5bWJvbC50b1N0cmluZ1RhZywgeyB2YWx1ZTogJ01vZHVsZScgfSk7XG4gXHRcdH1cbiBcdFx0T2JqZWN0LmRlZmluZVByb3BlcnR5KGV4cG9ydHMsICdfX2VzTW9kdWxlJywgeyB2YWx1ZTogdHJ1ZSB9KTtcbiBcdH07XG5cbiBcdC8vIGNyZWF0ZSBhIGZha2UgbmFtZXNwYWNlIG9iamVjdFxuIFx0Ly8gbW9kZSAmIDE6IHZhbHVlIGlzIGEgbW9kdWxlIGlkLCByZXF1aXJlIGl0XG4gXHQvLyBtb2RlICYgMjogbWVyZ2UgYWxsIHByb3BlcnRpZXMgb2YgdmFsdWUgaW50byB0aGUgbnNcbiBcdC8vIG1vZGUgJiA0OiByZXR1cm4gdmFsdWUgd2hlbiBhbHJlYWR5IG5zIG9iamVjdFxuIFx0Ly8gbW9kZSAmIDh8MTogYmVoYXZlIGxpa2UgcmVxdWlyZVxuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy50ID0gZnVuY3Rpb24odmFsdWUsIG1vZGUpIHtcbiBcdFx0aWYobW9kZSAmIDEpIHZhbHVlID0gX193ZWJwYWNrX3JlcXVpcmVfXyh2YWx1ZSk7XG4gXHRcdGlmKG1vZGUgJiA4KSByZXR1cm4gdmFsdWU7XG4gXHRcdGlmKChtb2RlICYgNCkgJiYgdHlwZW9mIHZhbHVlID09PSAnb2JqZWN0JyAmJiB2YWx1ZSAmJiB2YWx1ZS5fX2VzTW9kdWxlKSByZXR1cm4gdmFsdWU7XG4gXHRcdHZhciBucyA9IE9iamVjdC5jcmVhdGUobnVsbCk7XG4gXHRcdF9fd2VicGFja19yZXF1aXJlX18ucihucyk7XG4gXHRcdE9iamVjdC5kZWZpbmVQcm9wZXJ0eShucywgJ2RlZmF1bHQnLCB7IGVudW1lcmFibGU6IHRydWUsIHZhbHVlOiB2YWx1ZSB9KTtcbiBcdFx0aWYobW9kZSAmIDIgJiYgdHlwZW9mIHZhbHVlICE9ICdzdHJpbmcnKSBmb3IodmFyIGtleSBpbiB2YWx1ZSkgX193ZWJwYWNrX3JlcXVpcmVfXy5kKG5zLCBrZXksIGZ1bmN0aW9uKGtleSkgeyByZXR1cm4gdmFsdWVba2V5XTsgfS5iaW5kKG51bGwsIGtleSkpO1xuIFx0XHRyZXR1cm4gbnM7XG4gXHR9O1xuXG4gXHQvLyBnZXREZWZhdWx0RXhwb3J0IGZ1bmN0aW9uIGZvciBjb21wYXRpYmlsaXR5IHdpdGggbm9uLWhhcm1vbnkgbW9kdWxlc1xuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5uID0gZnVuY3Rpb24obW9kdWxlKSB7XG4gXHRcdHZhciBnZXR0ZXIgPSBtb2R1bGUgJiYgbW9kdWxlLl9fZXNNb2R1bGUgP1xuIFx0XHRcdGZ1bmN0aW9uIGdldERlZmF1bHQoKSB7IHJldHVybiBtb2R1bGVbJ2RlZmF1bHQnXTsgfSA6XG4gXHRcdFx0ZnVuY3Rpb24gZ2V0TW9kdWxlRXhwb3J0cygpIHsgcmV0dXJuIG1vZHVsZTsgfTtcbiBcdFx0X193ZWJwYWNrX3JlcXVpcmVfXy5kKGdldHRlciwgJ2EnLCBnZXR0ZXIpO1xuIFx0XHRyZXR1cm4gZ2V0dGVyO1xuIFx0fTtcblxuIFx0Ly8gT2JqZWN0LnByb3RvdHlwZS5oYXNPd25Qcm9wZXJ0eS5jYWxsXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLm8gPSBmdW5jdGlvbihvYmplY3QsIHByb3BlcnR5KSB7IHJldHVybiBPYmplY3QucHJvdG90eXBlLmhhc093blByb3BlcnR5LmNhbGwob2JqZWN0LCBwcm9wZXJ0eSk7IH07XG5cbiBcdC8vIF9fd2VicGFja19wdWJsaWNfcGF0aF9fXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLnAgPSBcIlwiO1xuXG5cbiBcdC8vIExvYWQgZW50cnkgbW9kdWxlIGFuZCByZXR1cm4gZXhwb3J0c1xuIFx0cmV0dXJuIF9fd2VicGFja19yZXF1aXJlX18oX193ZWJwYWNrX3JlcXVpcmVfXy5zID0gXCIuL3NyYy9pbmRleC5qc1wiKTtcbiIsIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpbiIsImltcG9ydCBcIi4vY3NzL21haW4uc2Nzc1wiO1xuaW1wb3J0IFwiLi9qcy9jb21tb25cIjtcbmltcG9ydCBcIi4vanMvbW9kZXJuaXplclwiO1xuaW1wb3J0IFwiLi9qcy90b3BcIjsiLCJ2YXIgb3V0aG92ZXI7XG5cbiQoZnVuY3Rpb24gKCkge1xuICBpZiAoJChcImJvZHlcIikuYXR0cihcImNsYXNzXCIpLm1hdGNoKFwiaG9tZXxwYWdlLXRlbXBsYXRlLXBhZ2Utc3RhdGVtZW50XCIpKSB7XG4gICAgJCgnLmMtLW5hdmlnYXRpb25fX2luci0tbGVmdCcpLnJlbW92ZSgpO1xuICB9O1xuICB2YXIgaGVhZGVySGlnaHQgPSA4MDtcbiAgLy8q44Oa44O844K45YaF44Oq44Oz44Kv44Gu5oyH5a6aXG4gICQoXCJhW2hyZWZePScjJ11cIikuY2xpY2soZnVuY3Rpb24gKCkge1xuICAgIHZhciBocmVmID0gJCh0aGlzKS5hdHRyKFwiaHJlZlwiKTtcbiAgICB2YXIgdGFyZ2V0ID0gJChocmVmID09IFwiI1wiIHx8IGhyZWYgPT0gXCJcIiA/IFwiaHRtbFwiIDogaHJlZik7XG4gICAgdmFyIHBvc2l0aW9uID0gdGFyZ2V0Lm9mZnNldCgpLnRvcCAtIGhlYWRlckhpZ2h0O1xuICAgICQoXCJodG1sLCBib2R5XCIpLmFuaW1hdGUoe1xuICAgICAgc2Nyb2xsVG9wOiBwb3NpdGlvblxuICAgIH0sIDU1MCwgXCJzd2luZ1wiKTtcbiAgICByZXR1cm4gZmFsc2U7XG4gIH0pO1xuICAvLyrjg5rjg7zjgrjlpJbjg6rjg7Pjgq/jga7mjIflrpoqL1xuICB2YXIgaGVhZGVySGVpZ2h0ID0gODA7XG4gIHZhciB1cmxIYXNoID0gbG9jYXRpb24uaGFzaDtcbiAgaWYgKHVybEhhc2gpIHtcbiAgICAkKCdib2R5LGh0bWwnKS5zdG9wKCkuc2Nyb2xsVG9wKDApO1xuICAgIFxuICAgIHNldFRpbWVvdXQoZnVuY3Rpb24gKCkge1xuICAgICAgdmFyIHRhcmdldCA9ICQodXJsSGFzaCk7XG4gICAgICB2YXIgcG9zaXRpb24gPSB0YXJnZXQub2Zmc2V0KCkudG9wIC0gaGVhZGVySGVpZ2h0O1xuICAgICAgJCgnYm9keSxodG1sJykuc3RvcCgpLmFuaW1hdGUoe1xuICAgICAgICBzY3JvbGxUb3A6IHBvc2l0aW9uXG4gICAgICB9LCA1MDApO1xuICAgIH0sIDEwMCk7XG4gIH1cblxuICAvLyBpbWdzd2l0Y2hcbiAgdmFyICRyZXBsYWNlRWxlbSA9ICQoXCIuc3dpdGNoXCIpO1xuICB2YXIgcmVwbGFjZVNwID0gXCJfc3AuXCI7XG4gIHZhciByZXBsYWNlUGMgPSBcIl9wYy5cIjtcbiAgdmFyIHJlcGxhY2VXaWR0aCA9IDQ4MDtcblxuICBmdW5jdGlvbiBpbWFnZVN3aXRjaCgpIHtcbiAgICB2YXIgd2luZG93V2lkdGggPSBwYXJzZUludCgkKHdpbmRvdykud2lkdGgoKSk7XG4gICAgJHJlcGxhY2VFbGVtLmVhY2goZnVuY3Rpb24gKCkge1xuICAgICAgdmFyICR0aGlzID0gJCh0aGlzKTtcblxuICAgICAgaWYgKHdpbmRvd1dpZHRoID49IHJlcGxhY2VXaWR0aCkge1xuICAgICAgICAkdGhpcy5hdHRyKFwic3JjXCIsICR0aGlzLmF0dHIoXCJzcmNcIikucmVwbGFjZShyZXBsYWNlU3AsIHJlcGxhY2VQYykpO1xuICAgICAgfSBlbHNlIHtcbiAgICAgICAgJHRoaXMuYXR0cihcInNyY1wiLCAkdGhpcy5hdHRyKFwic3JjXCIpLnJlcGxhY2UocmVwbGFjZVBjLCByZXBsYWNlU3ApKTtcbiAgICAgIH1cbiAgICB9KTtcbiAgfVxuXG4gIGltYWdlU3dpdGNoKCk7XG4gIHZhciByZXNpemVUaW1lcjtcbiAgJCh3aW5kb3cpLm9uKFwicmVzaXplXCIsIGZ1bmN0aW9uICgpIHtcbiAgICBjbGVhclRpbWVvdXQocmVzaXplVGltZXIpO1xuICAgIHJlc2l6ZVRpbWVyID0gc2V0VGltZW91dChmdW5jdGlvbiAoKSB7XG4gICAgICBpbWFnZVN3aXRjaCgpO1xuICAgIH0sIDIwMCk7XG4gIH0pO1xuXG4gIC8vIGJsdXJcbiAgaW5WaWV3Lm9mZnNldCgyMDApO1xuICBpblZpZXcoJy5jLS1ibHVyVGFyZ2V0JylcbiAgICAub24oJ2VudGVyJywgZWwgPT4ge1xuICAgICAgLy/lhaXjgaPjgZ/jgajjgY1cbiAgICAgIGVsLmNsYXNzTGlzdC5hZGQoJ2MtLWJsdXJBY3RpdmUnKVxuICAgIH0pXG4gIC8vIG5hdlxuICAkKHdpbmRvdykuc2Nyb2xsKGZ1bmN0aW9uICgpIHtcbiAgICBpZiAoJCh3aW5kb3cpLnNjcm9sbFRvcCgpID4gNTAwKSB7XG4gICAgICAkKCcuYy0tbmF2aWdhdGlvbl9faW5yLS1sZWZ0JykuYWRkQ2xhc3MoJ3Njcm9sbFRvcCcpO1xuICAgIH0gZWxzZSB7XG4gICAgICAkKCcuYy0tbmF2aWdhdGlvbl9faW5yLS1sZWZ0JykucmVtb3ZlQ2xhc3MoJ3Njcm9sbFRvcCcpO1xuICAgIH1cbiAgfSk7XG4gICQoJy5jLS1uYXZpZ2F0aW9uLS1idG4nKS5vbignY2xpY2snLCBmdW5jdGlvbiAoKSB7XG4gICAgJCgnLmMtLW5hdmlnYXRpb24nKS50b2dnbGVDbGFzcygnbmF2LWFjdGl2ZScpO1xuICAgICQoJ2JvZHknKS50b2dnbGVDbGFzcygnaGlkZGVuJyk7XG4gIH0pO1xuICAkKCcuYy0tbmF2aWdhdGlvbl9faW5yLS1yaWdodCBhJykub24oJ2NsaWNrJywgZnVuY3Rpb24gKCkge1xuICAgICQoJy5jLS1uYXZpZ2F0aW9uJykucmVtb3ZlQ2xhc3MoJ25hdi1hY3RpdmUnKTtcbiAgICAkKCdib2R5JykucmVtb3ZlQ2xhc3MoJ2hpZGRlbicpO1xuICB9KTtcbn0pO1xuXG4vLyBzcCxwY+WIhuWykFxudmFyIHdpbmRvd1dpZHRoID0gJCh3aW5kb3cpLndpZHRoKCk7XG52YXIgd2luZG93U20gPSA4MTI7XG5pZiAod2luZG93V2lkdGggPD0gd2luZG93U20pIHtcbiAgJChmdW5jdGlvbiAoKSB7XG5cbiAgfSk7XG59IGVsc2Uge1xuICAkKGZ1bmN0aW9uICgpIHt9KTtcbn0iLCIvKiEgbW9kZXJuaXpyIDMuNi4wIChDdXN0b20gQnVpbGQpIHwgTUlUICpcbiAqIGh0dHBzOi8vbW9kZXJuaXpyLmNvbS9kb3dubG9hZC8/LXdlYnAtd2VicGFscGhhLXdlYnBhbmltYXRpb24td2VicGxvc3NsZXNzX3dlYnBfbG9zc2xlc3Mtc2V0Y2xhc3NlcyAhKi9cbiEgZnVuY3Rpb24gKEEsIGUsIG4pIHtcbiAgICBmdW5jdGlvbiBhKEEsIGUpIHtcbiAgICAgICAgcmV0dXJuIHR5cGVvZiBBID09PSBlXG4gICAgfVxuXG4gICAgZnVuY3Rpb24gbygpIHtcbiAgICAgICAgdmFyIEEsIGUsIG4sIG8sIHMsIGksIHI7XG4gICAgICAgIGZvciAodmFyIGYgaW4gbClcbiAgICAgICAgICAgIGlmIChsLmhhc093blByb3BlcnR5KGYpKSB7XG4gICAgICAgICAgICAgICAgaWYgKEEgPSBbXSwgZSA9IGxbZl0sIGUubmFtZSAmJiAoQS5wdXNoKGUubmFtZS50b0xvd2VyQ2FzZSgpKSwgZS5vcHRpb25zICYmIGUub3B0aW9ucy5hbGlhc2VzICYmIGUub3B0aW9ucy5hbGlhc2VzLmxlbmd0aCkpXG4gICAgICAgICAgICAgICAgICAgIGZvciAobiA9IDA7IG4gPCBlLm9wdGlvbnMuYWxpYXNlcy5sZW5ndGg7IG4rKykgQS5wdXNoKGUub3B0aW9ucy5hbGlhc2VzW25dLnRvTG93ZXJDYXNlKCkpO1xuICAgICAgICAgICAgICAgIGZvciAobyA9IGEoZS5mbiwgXCJmdW5jdGlvblwiKSA/IGUuZm4oKSA6IGUuZm4sIHMgPSAwOyBzIDwgQS5sZW5ndGg7IHMrKykgaSA9IEFbc10sIHIgPSBpLnNwbGl0KFwiLlwiKSwgMSA9PT0gci5sZW5ndGggPyBNb2Rlcm5penJbclswXV0gPSBvIDogKCFNb2Rlcm5penJbclswXV0gfHwgTW9kZXJuaXpyW3JbMF1dIGluc3RhbmNlb2YgQm9vbGVhbiB8fCAoTW9kZXJuaXpyW3JbMF1dID0gbmV3IEJvb2xlYW4oTW9kZXJuaXpyW3JbMF1dKSksIE1vZGVybml6cltyWzBdXVtyWzFdXSA9IG8pLCB0LnB1c2goKG8gPyBcIlwiIDogXCJuby1cIikgKyByLmpvaW4oXCItXCIpKVxuICAgICAgICAgICAgfVxuICAgIH1cblxuICAgIGZ1bmN0aW9uIHMoQSkge1xuICAgICAgICB2YXIgZSA9IGMuY2xhc3NOYW1lLFxuICAgICAgICAgICAgbiA9IE1vZGVybml6ci5fY29uZmlnLmNsYXNzUHJlZml4IHx8IFwiXCI7XG4gICAgICAgIGlmICh1ICYmIChlID0gZS5iYXNlVmFsKSwgTW9kZXJuaXpyLl9jb25maWcuZW5hYmxlSlNDbGFzcykge1xuICAgICAgICAgICAgdmFyIGEgPSBuZXcgUmVnRXhwKFwiKF58XFxcXHMpXCIgKyBuICsgXCJuby1qcyhcXFxcc3wkKVwiKTtcbiAgICAgICAgICAgIGUgPSBlLnJlcGxhY2UoYSwgXCIkMVwiICsgbiArIFwianMkMlwiKVxuICAgICAgICB9XG4gICAgICAgIE1vZGVybml6ci5fY29uZmlnLmVuYWJsZUNsYXNzZXMgJiYgKGUgKz0gXCIgXCIgKyBuICsgQS5qb2luKFwiIFwiICsgbiksIHUgPyBjLmNsYXNzTmFtZS5iYXNlVmFsID0gZSA6IGMuY2xhc3NOYW1lID0gZSlcbiAgICB9XG5cbiAgICBmdW5jdGlvbiBpKEEsIGUpIHtcbiAgICAgICAgaWYgKFwib2JqZWN0XCIgPT0gdHlwZW9mIEEpXG4gICAgICAgICAgICBmb3IgKHZhciBuIGluIEEpIGYoQSwgbikgJiYgaShuLCBBW25dKTtcbiAgICAgICAgZWxzZSB7XG4gICAgICAgICAgICBBID0gQS50b0xvd2VyQ2FzZSgpO1xuICAgICAgICAgICAgdmFyIGEgPSBBLnNwbGl0KFwiLlwiKSxcbiAgICAgICAgICAgICAgICBvID0gTW9kZXJuaXpyW2FbMF1dO1xuICAgICAgICAgICAgaWYgKDIgPT0gYS5sZW5ndGggJiYgKG8gPSBvW2FbMV1dKSwgXCJ1bmRlZmluZWRcIiAhPSB0eXBlb2YgbykgcmV0dXJuIE1vZGVybml6cjtcbiAgICAgICAgICAgIGUgPSBcImZ1bmN0aW9uXCIgPT0gdHlwZW9mIGUgPyBlKCkgOiBlLCAxID09IGEubGVuZ3RoID8gTW9kZXJuaXpyW2FbMF1dID0gZSA6ICghTW9kZXJuaXpyW2FbMF1dIHx8IE1vZGVybml6clthWzBdXSBpbnN0YW5jZW9mIEJvb2xlYW4gfHwgKE1vZGVybml6clthWzBdXSA9IG5ldyBCb29sZWFuKE1vZGVybml6clthWzBdXSkpLCBNb2Rlcm5penJbYVswXV1bYVsxXV0gPSBlKSwgcyhbKGUgJiYgMCAhPSBlID8gXCJcIiA6IFwibm8tXCIpICsgYS5qb2luKFwiLVwiKV0pLCBNb2Rlcm5penIuX3RyaWdnZXIoQSwgZSlcbiAgICAgICAgfVxuICAgICAgICByZXR1cm4gTW9kZXJuaXpyXG4gICAgfVxuICAgIHZhciB0ID0gW10sXG4gICAgICAgIGwgPSBbXSxcbiAgICAgICAgciA9IHtcbiAgICAgICAgICAgIF92ZXJzaW9uOiBcIjMuNi4wXCIsXG4gICAgICAgICAgICBfY29uZmlnOiB7XG4gICAgICAgICAgICAgICAgY2xhc3NQcmVmaXg6IFwiXCIsXG4gICAgICAgICAgICAgICAgZW5hYmxlQ2xhc3NlczogITAsXG4gICAgICAgICAgICAgICAgZW5hYmxlSlNDbGFzczogITAsXG4gICAgICAgICAgICAgICAgdXNlUHJlZml4ZXM6ICEwXG4gICAgICAgICAgICB9LFxuICAgICAgICAgICAgX3E6IFtdLFxuICAgICAgICAgICAgb246IGZ1bmN0aW9uIChBLCBlKSB7XG4gICAgICAgICAgICAgICAgdmFyIG4gPSB0aGlzO1xuICAgICAgICAgICAgICAgIHNldFRpbWVvdXQoZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgICAgICAgICBlKG5bQV0pXG4gICAgICAgICAgICAgICAgfSwgMClcbiAgICAgICAgICAgIH0sXG4gICAgICAgICAgICBhZGRUZXN0OiBmdW5jdGlvbiAoQSwgZSwgbikge1xuICAgICAgICAgICAgICAgIGwucHVzaCh7XG4gICAgICAgICAgICAgICAgICAgIG5hbWU6IEEsXG4gICAgICAgICAgICAgICAgICAgIGZuOiBlLFxuICAgICAgICAgICAgICAgICAgICBvcHRpb25zOiBuXG4gICAgICAgICAgICAgICAgfSlcbiAgICAgICAgICAgIH0sXG4gICAgICAgICAgICBhZGRBc3luY1Rlc3Q6IGZ1bmN0aW9uIChBKSB7XG4gICAgICAgICAgICAgICAgbC5wdXNoKHtcbiAgICAgICAgICAgICAgICAgICAgbmFtZTogbnVsbCxcbiAgICAgICAgICAgICAgICAgICAgZm46IEFcbiAgICAgICAgICAgICAgICB9KVxuICAgICAgICAgICAgfVxuICAgICAgICB9LFxuICAgICAgICBNb2Rlcm5penIgPSBmdW5jdGlvbiAoKSB7fTtcbiAgICBNb2Rlcm5penIucHJvdG90eXBlID0gciwgTW9kZXJuaXpyID0gbmV3IE1vZGVybml6cjtcbiAgICB2YXIgZiwgYyA9IGUuZG9jdW1lbnRFbGVtZW50LFxuICAgICAgICB1ID0gXCJzdmdcIiA9PT0gYy5ub2RlTmFtZS50b0xvd2VyQ2FzZSgpO1xuICAgICEgZnVuY3Rpb24gKCkge1xuICAgICAgICB2YXIgQSA9IHt9Lmhhc093blByb3BlcnR5O1xuICAgICAgICBmID0gYShBLCBcInVuZGVmaW5lZFwiKSB8fCBhKEEuY2FsbCwgXCJ1bmRlZmluZWRcIikgPyBmdW5jdGlvbiAoQSwgZSkge1xuICAgICAgICAgICAgcmV0dXJuIGUgaW4gQSAmJiBhKEEuY29uc3RydWN0b3IucHJvdG90eXBlW2VdLCBcInVuZGVmaW5lZFwiKVxuICAgICAgICB9IDogZnVuY3Rpb24gKGUsIG4pIHtcbiAgICAgICAgICAgIHJldHVybiBBLmNhbGwoZSwgbilcbiAgICAgICAgfVxuICAgIH0oKSwgci5fbCA9IHt9LCByLm9uID0gZnVuY3Rpb24gKEEsIGUpIHtcbiAgICAgICAgdGhpcy5fbFtBXSB8fCAodGhpcy5fbFtBXSA9IFtdKSwgdGhpcy5fbFtBXS5wdXNoKGUpLCBNb2Rlcm5penIuaGFzT3duUHJvcGVydHkoQSkgJiYgc2V0VGltZW91dChmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICBNb2Rlcm5penIuX3RyaWdnZXIoQSwgTW9kZXJuaXpyW0FdKVxuICAgICAgICB9LCAwKVxuICAgIH0sIHIuX3RyaWdnZXIgPSBmdW5jdGlvbiAoQSwgZSkge1xuICAgICAgICBpZiAodGhpcy5fbFtBXSkge1xuICAgICAgICAgICAgdmFyIG4gPSB0aGlzLl9sW0FdO1xuICAgICAgICAgICAgc2V0VGltZW91dChmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAgICAgdmFyIEEsIGE7XG4gICAgICAgICAgICAgICAgZm9yIChBID0gMDsgQSA8IG4ubGVuZ3RoOyBBKyspKGEgPSBuW0FdKShlKVxuICAgICAgICAgICAgfSwgMCksIGRlbGV0ZSB0aGlzLl9sW0FdXG4gICAgICAgIH1cbiAgICB9LCBNb2Rlcm5penIuX3EucHVzaChmdW5jdGlvbiAoKSB7XG4gICAgICAgIHIuYWRkVGVzdCA9IGlcbiAgICB9KSwgTW9kZXJuaXpyLmFkZEFzeW5jVGVzdChmdW5jdGlvbiAoKSB7XG4gICAgICAgIGZ1bmN0aW9uIEEoQSwgZSwgbikge1xuICAgICAgICAgICAgZnVuY3Rpb24gYShlKSB7XG4gICAgICAgICAgICAgICAgdmFyIGEgPSBlICYmIFwibG9hZFwiID09PSBlLnR5cGUgPyAxID09IG8ud2lkdGggOiAhMSxcbiAgICAgICAgICAgICAgICAgICAgcyA9IFwid2VicFwiID09PSBBO1xuICAgICAgICAgICAgICAgIGkoQSwgcyAmJiBhID8gbmV3IEJvb2xlYW4oYSkgOiBhKSwgbiAmJiBuKGUpXG4gICAgICAgICAgICB9XG4gICAgICAgICAgICB2YXIgbyA9IG5ldyBJbWFnZTtcbiAgICAgICAgICAgIG8ub25lcnJvciA9IGEsIG8ub25sb2FkID0gYSwgby5zcmMgPSBlXG4gICAgICAgIH1cbiAgICAgICAgdmFyIGUgPSBbe1xuICAgICAgICAgICAgICAgIHVyaTogXCJkYXRhOmltYWdlL3dlYnA7YmFzZTY0LFVrbEdSaVFBQUFCWFJVSlFWbEE0SUJnQUFBQXdBUUNkQVNvQkFBRUFBd0EwSmFRQUEzQUEvdnVVQUFBPVwiLFxuICAgICAgICAgICAgICAgIG5hbWU6IFwid2VicFwiXG4gICAgICAgICAgICB9LCB7XG4gICAgICAgICAgICAgICAgdXJpOiBcImRhdGE6aW1hZ2Uvd2VicDtiYXNlNjQsVWtsR1Jrb0FBQUJYUlVKUVZsQTRXQW9BQUFBUUFBQUFBQUFBQUFBQVFVeFFTQXdBQUFBQkJ4QVIvUTlFUlA4REFBQldVRGdnR0FBQUFEQUJBSjBCS2dFQUFRQURBRFFscEFBRGNBRCsrLzFRQUE9PVwiLFxuICAgICAgICAgICAgICAgIG5hbWU6IFwid2VicC5hbHBoYVwiXG4gICAgICAgICAgICB9LCB7XG4gICAgICAgICAgICAgICAgdXJpOiBcImRhdGE6aW1hZ2Uvd2VicDtiYXNlNjQsVWtsR1JsSUFBQUJYUlVKUVZsQTRXQW9BQUFBU0FBQUFBQUFBQUFBQVFVNUpUUVlBQUFELy8vLy9BQUJCVGsxR0pnQUFBQUFBQUFBQUFBQUFBQUFBQUdRQUFBQldVRGhNRFFBQUFDOEFBQUFRQnhBUkVZaUkvZ2NBXCIsXG4gICAgICAgICAgICAgICAgbmFtZTogXCJ3ZWJwLmFuaW1hdGlvblwiXG4gICAgICAgICAgICB9LCB7XG4gICAgICAgICAgICAgICAgdXJpOiBcImRhdGE6aW1hZ2Uvd2VicDtiYXNlNjQsVWtsR1JoNEFBQUJYUlVKUVZsQTRUQkVBQUFBdkFBQUFBQWZRLy83M3YvK0JpT2gvQUFBPVwiLFxuICAgICAgICAgICAgICAgIG5hbWU6IFwid2VicC5sb3NzbGVzc1wiXG4gICAgICAgICAgICB9XSxcbiAgICAgICAgICAgIG4gPSBlLnNoaWZ0KCk7XG4gICAgICAgIEEobi5uYW1lLCBuLnVyaSwgZnVuY3Rpb24gKG4pIHtcbiAgICAgICAgICAgIGlmIChuICYmIFwibG9hZFwiID09PSBuLnR5cGUpXG4gICAgICAgICAgICAgICAgZm9yICh2YXIgYSA9IDA7IGEgPCBlLmxlbmd0aDsgYSsrKSBBKGVbYV0ubmFtZSwgZVthXS51cmkpXG4gICAgICAgIH0pXG4gICAgfSksIE1vZGVybml6ci5hZGRBc3luY1Rlc3QoZnVuY3Rpb24gKCkge1xuICAgICAgICB2YXIgQSA9IG5ldyBJbWFnZTtcbiAgICAgICAgQS5vbmVycm9yID0gZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgaShcIndlYnBhbmltYXRpb25cIiwgITEsIHtcbiAgICAgICAgICAgICAgICBhbGlhc2VzOiBbXCJ3ZWJwLWFuaW1hdGlvblwiXVxuICAgICAgICAgICAgfSlcbiAgICAgICAgfSwgQS5vbmxvYWQgPSBmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICBpKFwid2VicGFuaW1hdGlvblwiLCAxID09IEEud2lkdGgsIHtcbiAgICAgICAgICAgICAgICBhbGlhc2VzOiBbXCJ3ZWJwLWFuaW1hdGlvblwiXVxuICAgICAgICAgICAgfSlcbiAgICAgICAgfSwgQS5zcmMgPSBcImRhdGE6aW1hZ2Uvd2VicDtiYXNlNjQsVWtsR1JsSUFBQUJYUlVKUVZsQTRXQW9BQUFBU0FBQUFBQUFBQUFBQVFVNUpUUVlBQUFELy8vLy9BQUJCVGsxR0pnQUFBQUFBQUFBQUFBQUFBQUFBQUdRQUFBQldVRGhNRFFBQUFDOEFBQUFRQnhBUkVZaUkvZ2NBXCJcbiAgICB9KSwgTW9kZXJuaXpyLmFkZEFzeW5jVGVzdChmdW5jdGlvbiAoKSB7XG4gICAgICAgIHZhciBBID0gbmV3IEltYWdlO1xuICAgICAgICBBLm9uZXJyb3IgPSBmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICBpKFwid2VicGFscGhhXCIsICExLCB7XG4gICAgICAgICAgICAgICAgYWxpYXNlczogW1wid2VicC1hbHBoYVwiXVxuICAgICAgICAgICAgfSlcbiAgICAgICAgfSwgQS5vbmxvYWQgPSBmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICBpKFwid2VicGFscGhhXCIsIDEgPT0gQS53aWR0aCwge1xuICAgICAgICAgICAgICAgIGFsaWFzZXM6IFtcIndlYnAtYWxwaGFcIl1cbiAgICAgICAgICAgIH0pXG4gICAgICAgIH0sIEEuc3JjID0gXCJkYXRhOmltYWdlL3dlYnA7YmFzZTY0LFVrbEdSa29BQUFCWFJVSlFWbEE0V0FvQUFBQVFBQUFBQUFBQUFBQUFRVXhRU0F3QUFBQUJCeEFSL1E5RVJQOERBQUJXVURnZ0dBQUFBREFCQUowQktnRUFBUUFEQURRbHBBQURjQUQrKy8xUUFBPT1cIlxuICAgIH0pLCBNb2Rlcm5penIuYWRkQXN5bmNUZXN0KGZ1bmN0aW9uICgpIHtcbiAgICAgICAgdmFyIEEgPSBuZXcgSW1hZ2U7XG4gICAgICAgIEEub25lcnJvciA9IGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgIGkoXCJ3ZWJwbG9zc2xlc3NcIiwgITEsIHtcbiAgICAgICAgICAgICAgICBhbGlhc2VzOiBbXCJ3ZWJwLWxvc3NsZXNzXCJdXG4gICAgICAgICAgICB9KVxuICAgICAgICB9LCBBLm9ubG9hZCA9IGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgIGkoXCJ3ZWJwbG9zc2xlc3NcIiwgMSA9PSBBLndpZHRoLCB7XG4gICAgICAgICAgICAgICAgYWxpYXNlczogW1wid2VicC1sb3NzbGVzc1wiXVxuICAgICAgICAgICAgfSlcbiAgICAgICAgfSwgQS5zcmMgPSBcImRhdGE6aW1hZ2Uvd2VicDtiYXNlNjQsVWtsR1JoNEFBQUJYUlVKUVZsQTRUQkVBQUFBdkFBQUFBQWZRLy83M3YvK0JpT2gvQUFBPVwiXG4gICAgfSksIG8oKSwgcyh0KSwgZGVsZXRlIHIuYWRkVGVzdCwgZGVsZXRlIHIuYWRkQXN5bmNUZXN0O1xuICAgIGZvciAodmFyIHAgPSAwOyBwIDwgTW9kZXJuaXpyLl9xLmxlbmd0aDsgcCsrKSBNb2Rlcm5penIuX3FbcF0oKTtcbiAgICBBLk1vZGVybml6ciA9IE1vZGVybml6clxufSh3aW5kb3csIGRvY3VtZW50KTsiLCIkKGZ1bmN0aW9uICgpIHtcbiAgaWYgKCQoXCJib2R5XCIpLmhhc0NsYXNzKFwiaG9tZVwiKSkge1xuICAgIHZhciB3aW5kb3dXaWR0aCA9ICQod2luZG93KS53aWR0aCgpO1xuICAgIHZhciB3aW5kb3dTbSA9IDgxMjtcbiAgICBpZiAod2luZG93V2lkdGggPD0gd2luZG93U20pIHtcbiAgICAgIC8v5qiq5bmFNjQwcHjku6XkuIvjga7jgajjgY3vvIjjgaTjgb7jgorjgrnjg57jg5vmmYLvvInjgavooYzjgYblh6bnkIbjgpLmm7jjgY9cbiAgICAgICQoJ2FzaWRlJykucmVtb3ZlKCk7XG4gICAgICAkKCcuaW50ZXJ2aWV3X19ncm91cCcpLnNsaWNrKHtcbiAgICAgICAgZG90czogdHJ1ZSxcbiAgICAgICAgc2xpZGVzVG9TaG93OiAxLFxuICAgICAgICBhcnJvd3M6IGZhbHNlLFxuICAgICAgICB2YXJpYWJsZVdpZHRoOiB0cnVlLFxuICAgICAgICBhZGFwdGl2ZUhlaWdodDogdHJ1ZSxcbiAgICAgIH0pO1xuICAgIH0gZWxzZSB7XG4gICAgICAkKHdpbmRvdykub24oJ2xvYWQgc2Nyb2xsJywgZnVuY3Rpb24gKCkge1xuICAgICAgICBpblZpZXcub2Zmc2V0KDMwMCk7XG4gICAgICAgIGluVmlldygnLnAtc2VjdGlvbicpXG4gICAgICAgICAgLm9uKCdlbnRlcicsIGVsID0+IHtcbiAgICAgICAgICAgIC8v5YWl44Gj44Gf44Go44GNXG4gICAgICAgICAgICB2aWV3QXJyYXkgPSBkb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKGVsKVxuICAgICAgICAgICAgdmlld0xpc3QgPSB2aWV3QXJyYXkgPSBbXS5zbGljZS5jYWxsKHZpZXdBcnJheSk7XG4gICAgICAgICAgICB2aWV3SWQgPSAnIycgKyAkKGVsKS5hdHRyKCdpZCcpO1xuICAgICAgICAgICAgJCgnI2FzaWRlX25hdiBsaScpLmZpbmQoJ2EnKS5lYWNoKGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgICAgdmFyIHN0cl9ocmVmID0gJCh0aGlzKVxuICAgICAgICAgICAgICAgIC5hdHRyKFwiaHJlZlwiKVxuICAgICAgICAgICAgICAgIC5yZXBsYWNlKG9yaWdpbiwgXCJcIik7XG4gICAgICAgICAgICAgIGlmICh2aWV3SWQgPT09IHN0cl9ocmVmKSB7XG4gICAgICAgICAgICAgICAgLy8g5paH5a2X6Imy5aSJ5pu0XG4gICAgICAgICAgICAgICAgJCh0aGlzKS5wYXJlbnQoKS5hZGRDbGFzcyhcImFzaWRlX25hdl9fbGlzdC0tYWN0aXZlXCIpO1xuICAgICAgICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgICAgICQodGhpcykucGFyZW50KCkucmVtb3ZlQ2xhc3MoXCJhc2lkZV9uYXZfX2xpc3QtLWFjdGl2ZVwiKTtcbiAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgfSk7XG5cbiAgICAgICAgICB9KVxuICAgICAgfSk7XG4gICAgfVxuICB9XG59KTsiXSwic291cmNlUm9vdCI6IiJ9