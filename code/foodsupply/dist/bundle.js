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
/* harmony import */ var _js_dws__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./js/dws */ "./src/js/dws.js");
/* harmony import */ var _js_dws__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_js_dws__WEBPACK_IMPORTED_MODULE_2__);




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
  $(function () {//sp
  });
} else {
  $(function () {//pc
  });
}

(function (d) {
  var config = {
    kitId: "dxr4ctf",
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

/***/ "./src/js/dws.js":
/*!***********************!*\
  !*** ./src/js/dws.js ***!
  \***********************/
/*! no static exports found */
/***/ (function(module, exports) {

$(function () {
  if ($("body").hasClass("page-template-page-dws")) {
    $(".nav-open__btn").on("click", function () {
      $(".unfixed").toggleClass("active");
    });
    var windowWidth = $(window).width();
    var windowSm = 1260;

    if (windowWidth <= windowSm) {} else {
      $(window).on("load scroll", function () {
        $("#sec_introduction .dws-heading").each(function () {
          var position = $(this).offset().top;
          var scroll = $(window).scrollTop();
          var windowHeight = $(window).height(); // if (scroll > position - windowHeight) {
          //   $(".dws-header.fixed").addClass("active");
          // } else {
          //   $(".dws-header.fixed").removeClass("active");
          // }

          if (scroll > position - windowHeight) {
            $(".dws-header.fixed").slideDown();
          } else {
            $(".dws-header.fixed").slideUp();
          }
        });
      });
    }
  }
});

/***/ })

/******/ });
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vd2VicGFjay9ib290c3RyYXAiLCJ3ZWJwYWNrOi8vLy4vc3JjL2Nzcy9tYWluLnNjc3MiLCJ3ZWJwYWNrOi8vLy4vc3JjL2luZGV4LmpzIiwid2VicGFjazovLy8uL3NyYy9qcy9jb21tb24uanMiLCJ3ZWJwYWNrOi8vLy4vc3JjL2pzL2R3cy5qcyJdLCJuYW1lcyI6WyJkcm9wc29ydCIsImJyb3dzZXIiLCJkb2N1bWVudCIsInNvcnRfZm9ybSIsInNvcnQiLCJ2YWx1ZSIsImxvY2F0aW9uIiwiaHJlZiIsIm91dGhvdmVyIiwiJCIsImhlYWRlckhpZ2h0IiwiY2xpY2siLCJhdHRyIiwidGFyZ2V0IiwicG9zaXRpb24iLCJvZmZzZXQiLCJ0b3AiLCJhbmltYXRlIiwic2Nyb2xsVG9wIiwiJHJlcGxhY2VFbGVtIiwicmVwbGFjZVNwIiwicmVwbGFjZVBjIiwicmVwbGFjZVdpZHRoIiwiaW1hZ2VTd2l0Y2giLCJ3aW5kb3dXaWR0aCIsInBhcnNlSW50Iiwid2luZG93Iiwid2lkdGgiLCJlYWNoIiwiJHRoaXMiLCJyZXBsYWNlIiwicmVzaXplVGltZXIiLCJvbiIsImNsZWFyVGltZW91dCIsInNldFRpbWVvdXQiLCJ3aW5kb3dTbSIsImQiLCJjb25maWciLCJraXRJZCIsInNjcmlwdFRpbWVvdXQiLCJhc3luYyIsImgiLCJkb2N1bWVudEVsZW1lbnQiLCJ0IiwiY2xhc3NOYW1lIiwidGsiLCJjcmVhdGVFbGVtZW50IiwiZiIsInMiLCJnZXRFbGVtZW50c0J5VGFnTmFtZSIsImEiLCJzcmMiLCJvbmxvYWQiLCJvbnJlYWR5c3RhdGVjaGFuZ2UiLCJyZWFkeVN0YXRlIiwiVHlwZWtpdCIsImxvYWQiLCJlIiwicGFyZW50Tm9kZSIsImluc2VydEJlZm9yZSIsImhhc0NsYXNzIiwidG9nZ2xlQ2xhc3MiLCJzY3JvbGwiLCJ3aW5kb3dIZWlnaHQiLCJoZWlnaHQiLCJzbGlkZURvd24iLCJzbGlkZVVwIl0sIm1hcHBpbmdzIjoiO1FBQUE7UUFDQTs7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LENBREQsTUFDTztBQUNMMUIsT0FBQyxDQUFDaUIsTUFBRCxDQUFELENBQVVNLEVBQVYsQ0FBYSxhQUFiLEVBQTRCLFlBQVc7QUFDckN2QixTQUFDLENBQUMsZ0NBQUQsQ0FBRCxDQUFvQ21CLElBQXBDLENBQXlDLFlBQVc7QUFDbEQsY0FBSWQsUUFBUSxHQUFHTCxDQUFDLENBQUMsSUFBRCxDQUFELENBQVFNLE1BQVIsR0FBaUJDLEdBQWhDO0FBQ0EsY0FBSThDLE1BQU0sR0FBR3JELENBQUMsQ0FBQ2lCLE1BQUQsQ0FBRCxDQUFVUixTQUFWLEVBQWI7QUFDQSxjQUFJNkMsWUFBWSxHQUFHdEQsQ0FBQyxDQUFDaUIsTUFBRCxDQUFELENBQVVzQyxNQUFWLEVBQW5CLENBSGtELENBSWxEO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBQ0EsY0FBSUYsTUFBTSxHQUFHaEQsUUFBUSxHQUFHaUQsWUFBeEIsRUFBc0M7QUFDcEN0RCxhQUFDLENBQUMsbUJBQUQsQ0FBRCxDQUF1QndELFNBQXZCO0FBQ0QsV0FGRCxNQUVPO0FBQ0x4RCxhQUFDLENBQUMsbUJBQUQsQ0FBRCxDQUF1QnlELE9BQXZCO0FBQ0Q7QUFDRixTQWREO0FBZUQsT0FoQkQ7QUFpQkQ7QUFDRjtBQUNGLENBNUJBLENBQUQsQyIsImZpbGUiOiJidW5kbGUuanMiLCJzb3VyY2VzQ29udGVudCI6WyIgXHQvLyBUaGUgbW9kdWxlIGNhY2hlXG4gXHR2YXIgaW5zdGFsbGVkTW9kdWxlcyA9IHt9O1xuXG4gXHQvLyBUaGUgcmVxdWlyZSBmdW5jdGlvblxuIFx0ZnVuY3Rpb24gX193ZWJwYWNrX3JlcXVpcmVfXyhtb2R1bGVJZCkge1xuXG4gXHRcdC8vIENoZWNrIGlmIG1vZHVsZSBpcyBpbiBjYWNoZVxuIFx0XHRpZihpbnN0YWxsZWRNb2R1bGVzW21vZHVsZUlkXSkge1xuIFx0XHRcdHJldHVybiBpbnN0YWxsZWRNb2R1bGVzW21vZHVsZUlkXS5leHBvcnRzO1xuIFx0XHR9XG4gXHRcdC8vIENyZWF0ZSBhIG5ldyBtb2R1bGUgKGFuZCBwdXQgaXQgaW50byB0aGUgY2FjaGUpXG4gXHRcdHZhciBtb2R1bGUgPSBpbnN0YWxsZWRNb2R1bGVzW21vZHVsZUlkXSA9IHtcbiBcdFx0XHRpOiBtb2R1bGVJZCxcbiBcdFx0XHRsOiBmYWxzZSxcbiBcdFx0XHRleHBvcnRzOiB7fVxuIFx0XHR9O1xuXG4gXHRcdC8vIEV4ZWN1dGUgdGhlIG1vZHVsZSBmdW5jdGlvblxuIFx0XHRtb2R1bGVzW21vZHVsZUlkXS5jYWxsKG1vZHVsZS5leHBvcnRzLCBtb2R1bGUsIG1vZHVsZS5leHBvcnRzLCBfX3dlYnBhY2tfcmVxdWlyZV9fKTtcblxuIFx0XHQvLyBGbGFnIHRoZSBtb2R1bGUgYXMgbG9hZGVkXG4gXHRcdG1vZHVsZS5sID0gdHJ1ZTtcblxuIFx0XHQvLyBSZXR1cm4gdGhlIGV4cG9ydHMgb2YgdGhlIG1vZHVsZVxuIFx0XHRyZXR1cm4gbW9kdWxlLmV4cG9ydHM7XG4gXHR9XG5cblxuIFx0Ly8gZXhwb3NlIHRoZSBtb2R1bGVzIG9iamVjdCAoX193ZWJwYWNrX21vZHVsZXNfXylcbiBcdF9fd2VicGFja19yZXF1aXJlX18ubSA9IG1vZHVsZXM7XG5cbiBcdC8vIGV4cG9zZSB0aGUgbW9kdWxlIGNhY2hlXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLmMgPSBpbnN0YWxsZWRNb2R1bGVzO1xuXG4gXHQvLyBkZWZpbmUgZ2V0dGVyIGZ1bmN0aW9uIGZvciBoYXJtb255IGV4cG9ydHNcbiBcdF9fd2VicGFja19yZXF1aXJlX18uZCA9IGZ1bmN0aW9uKGV4cG9ydHMsIG5hbWUsIGdldHRlcikge1xuIFx0XHRpZighX193ZWJwYWNrX3JlcXVpcmVfXy5vKGV4cG9ydHMsIG5hbWUpKSB7XG4gXHRcdFx0T2JqZWN0LmRlZmluZVByb3BlcnR5KGV4cG9ydHMsIG5hbWUsIHsgZW51bWVyYWJsZTogdHJ1ZSwgZ2V0OiBnZXR0ZXIgfSk7XG4gXHRcdH1cbiBcdH07XG5cbiBcdC8vIGRlZmluZSBfX2VzTW9kdWxlIG9uIGV4cG9ydHNcbiBcdF9fd2VicGFja19yZXF1aXJlX18uciA9IGZ1bmN0aW9uKGV4cG9ydHMpIHtcbiBcdFx0aWYodHlwZW9mIFN5bWJvbCAhPT0gJ3VuZGVmaW5lZCcgJiYgU3ltYm9sLnRvU3RyaW5nVGFnKSB7XG4gXHRcdFx0T2JqZWN0LmRlZmluZVByb3BlcnR5KGV4cG9ydHMsIFN5bWJvbC50b1N0cmluZ1RhZywgeyB2YWx1ZTogJ01vZHVsZScgfSk7XG4gXHRcdH1cbiBcdFx0T2JqZWN0LmRlZmluZVByb3BlcnR5KGV4cG9ydHMsICdfX2VzTW9kdWxlJywgeyB2YWx1ZTogdHJ1ZSB9KTtcbiBcdH07XG5cbiBcdC8vIGNyZWF0ZSBhIGZha2UgbmFtZXNwYWNlIG9iamVjdFxuIFx0Ly8gbW9kZSAmIDE6IHZhbHVlIGlzIGEgbW9kdWxlIGlkLCByZXF1aXJlIGl0XG4gXHQvLyBtb2RlICYgMjogbWVyZ2UgYWxsIHByb3BlcnRpZXMgb2YgdmFsdWUgaW50byB0aGUgbnNcbiBcdC8vIG1vZGUgJiA0OiByZXR1cm4gdmFsdWUgd2hlbiBhbHJlYWR5IG5zIG9iamVjdFxuIFx0Ly8gbW9kZSAmIDh8MTogYmVoYXZlIGxpa2UgcmVxdWlyZVxuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy50ID0gZnVuY3Rpb24odmFsdWUsIG1vZGUpIHtcbiBcdFx0aWYobW9kZSAmIDEpIHZhbHVlID0gX193ZWJwYWNrX3JlcXVpcmVfXyh2YWx1ZSk7XG4gXHRcdGlmKG1vZGUgJiA4KSByZXR1cm4gdmFsdWU7XG4gXHRcdGlmKChtb2RlICYgNCkgJiYgdHlwZW9mIHZhbHVlID09PSAnb2JqZWN0JyAmJiB2YWx1ZSAmJiB2YWx1ZS5fX2VzTW9kdWxlKSByZXR1cm4gdmFsdWU7XG4gXHRcdHZhciBucyA9IE9iamVjdC5jcmVhdGUobnVsbCk7XG4gXHRcdF9fd2VicGFja19yZXF1aXJlX18ucihucyk7XG4gXHRcdE9iamVjdC5kZWZpbmVQcm9wZXJ0eShucywgJ2RlZmF1bHQnLCB7IGVudW1lcmFibGU6IHRydWUsIHZhbHVlOiB2YWx1ZSB9KTtcbiBcdFx0aWYobW9kZSAmIDIgJiYgdHlwZW9mIHZhbHVlICE9ICdzdHJpbmcnKSBmb3IodmFyIGtleSBpbiB2YWx1ZSkgX193ZWJwYWNrX3JlcXVpcmVfXy5kKG5zLCBrZXksIGZ1bmN0aW9uKGtleSkgeyByZXR1cm4gdmFsdWVba2V5XTsgfS5iaW5kKG51bGwsIGtleSkpO1xuIFx0XHRyZXR1cm4gbnM7XG4gXHR9O1xuXG4gXHQvLyBnZXREZWZhdWx0RXhwb3J0IGZ1bmN0aW9uIGZvciBjb21wYXRpYmlsaXR5IHdpdGggbm9uLWhhcm1vbnkgbW9kdWxlc1xuIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5uID0gZnVuY3Rpb24obW9kdWxlKSB7XG4gXHRcdHZhciBnZXR0ZXIgPSBtb2R1bGUgJiYgbW9kdWxlLl9fZXNNb2R1bGUgP1xuIFx0XHRcdGZ1bmN0aW9uIGdldERlZmF1bHQoKSB7IHJldHVybiBtb2R1bGVbJ2RlZmF1bHQnXTsgfSA6XG4gXHRcdFx0ZnVuY3Rpb24gZ2V0TW9kdWxlRXhwb3J0cygpIHsgcmV0dXJuIG1vZHVsZTsgfTtcbiBcdFx0X193ZWJwYWNrX3JlcXVpcmVfXy5kKGdldHRlciwgJ2EnLCBnZXR0ZXIpO1xuIFx0XHRyZXR1cm4gZ2V0dGVyO1xuIFx0fTtcblxuIFx0Ly8gT2JqZWN0LnByb3RvdHlwZS5oYXNPd25Qcm9wZXJ0eS5jYWxsXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLm8gPSBmdW5jdGlvbihvYmplY3QsIHByb3BlcnR5KSB7IHJldHVybiBPYmplY3QucHJvdG90eXBlLmhhc093blByb3BlcnR5LmNhbGwob2JqZWN0LCBwcm9wZXJ0eSk7IH07XG5cbiBcdC8vIF9fd2VicGFja19wdWJsaWNfcGF0aF9fXG4gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLnAgPSBcIlwiO1xuXG5cbiBcdC8vIExvYWQgZW50cnkgbW9kdWxlIGFuZCByZXR1cm4gZXhwb3J0c1xuIFx0cmV0dXJuIF9fd2VicGFja19yZXF1aXJlX18oX193ZWJwYWNrX3JlcXVpcmVfXy5zID0gXCIuL3NyYy9pbmRleC5qc1wiKTtcbiIsIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpbiIsImltcG9ydCBcIi4vY3NzL21haW4uc2Nzc1wiO1xuaW1wb3J0IFwiLi9qcy9jb21tb25cIjtcbmltcG9ydCBcIi4vanMvZHdzXCI7XG4iLCJmdW5jdGlvbiBkcm9wc29ydCgpIHtcbiAgdmFyIGJyb3dzZXIgPSBkb2N1bWVudC5zb3J0X2Zvcm0uc29ydC52YWx1ZTtcbiAgbG9jYXRpb24uaHJlZiA9IGJyb3dzZXI7XG59XG52YXIgb3V0aG92ZXI7XG4kKGZ1bmN0aW9uKCkge1xuICB2YXIgaGVhZGVySGlnaHQgPSA2ODsgLy/jg5jjg4Pjg4Djg7zjga7pq5jjgZXjgpJweOaMh+WumlxuICAvLyrjg5rjg7zjgrjlhoXjg6rjg7Pjgq/jga7mjIflrppcbiAgJChcImFbaHJlZl49JyMnXVwiKS5jbGljayhmdW5jdGlvbigpIHtcbiAgICB2YXIgaHJlZiA9ICQodGhpcykuYXR0cihcImhyZWZcIik7XG4gICAgdmFyIHRhcmdldCA9ICQoaHJlZiA9PSBcIiNcIiB8fCBocmVmID09IFwiXCIgPyBcImh0bWxcIiA6IGhyZWYpO1xuICAgIHZhciBwb3NpdGlvbiA9IHRhcmdldC5vZmZzZXQoKS50b3AgLSBoZWFkZXJIaWdodDsgLy/jg5jjg4Pjg4Djga7pq5jjgZXliIbkvY3nva7jgpLjgZrjgonjgZlcbiAgICAkKFwiaHRtbCwgYm9keVwiKS5hbmltYXRlKHsgc2Nyb2xsVG9wOiBwb3NpdGlvbiB9LCA1NTAsIFwic3dpbmdcIik7XG4gICAgcmV0dXJuIGZhbHNlO1xuICB9KTtcblxuICB2YXIgJHJlcGxhY2VFbGVtID0gJChcIi5zd2l0Y2hcIik7XG4gIHZhciByZXBsYWNlU3AgPSBcIl9zcC5cIjtcbiAgdmFyIHJlcGxhY2VQYyA9IFwiX3BjLlwiO1xuICB2YXIgcmVwbGFjZVdpZHRoID0gNDgwO1xuXG4gIGZ1bmN0aW9uIGltYWdlU3dpdGNoKCkge1xuICAgIHZhciB3aW5kb3dXaWR0aCA9IHBhcnNlSW50KCQod2luZG93KS53aWR0aCgpKTtcbiAgICAkcmVwbGFjZUVsZW0uZWFjaChmdW5jdGlvbigpIHtcbiAgICAgIHZhciAkdGhpcyA9ICQodGhpcyk7XG5cbiAgICAgIGlmICh3aW5kb3dXaWR0aCA+PSByZXBsYWNlV2lkdGgpIHtcbiAgICAgICAgJHRoaXMuYXR0cihcInNyY1wiLCAkdGhpcy5hdHRyKFwic3JjXCIpLnJlcGxhY2UocmVwbGFjZVNwLCByZXBsYWNlUGMpKTtcbiAgICAgIH0gZWxzZSB7XG4gICAgICAgICR0aGlzLmF0dHIoXCJzcmNcIiwgJHRoaXMuYXR0cihcInNyY1wiKS5yZXBsYWNlKHJlcGxhY2VQYywgcmVwbGFjZVNwKSk7XG4gICAgICB9XG4gICAgfSk7XG4gIH1cblxuICBpbWFnZVN3aXRjaCgpO1xuICB2YXIgcmVzaXplVGltZXI7XG4gICQod2luZG93KS5vbihcInJlc2l6ZVwiLCBmdW5jdGlvbigpIHtcbiAgICBjbGVhclRpbWVvdXQocmVzaXplVGltZXIpO1xuICAgIHJlc2l6ZVRpbWVyID0gc2V0VGltZW91dChmdW5jdGlvbigpIHtcbiAgICAgIGltYWdlU3dpdGNoKCk7XG4gICAgfSwgMjAwKTtcbiAgfSk7XG59KTtcbi8vIHNwLHBj5YiG5bKQXG52YXIgd2luZG93V2lkdGggPSAkKHdpbmRvdykud2lkdGgoKTtcbnZhciB3aW5kb3dTbSA9IDgxMjtcbmlmICh3aW5kb3dXaWR0aCA8PSB3aW5kb3dTbSkge1xuICAkKGZ1bmN0aW9uKCkge1xuICAgIC8vc3BcbiAgfSk7XG59IGVsc2Uge1xuICAkKGZ1bmN0aW9uKCkge1xuICAgIC8vcGNcbiAgfSk7XG59XG5cbihmdW5jdGlvbihkKSB7XG4gIHZhciBjb25maWcgPSB7XG4gICAgICBraXRJZDogXCJkeHI0Y3RmXCIsXG4gICAgICBzY3JpcHRUaW1lb3V0OiAzMDAwLFxuICAgICAgYXN5bmM6IHRydWVcbiAgICB9LFxuICAgIGggPSBkLmRvY3VtZW50RWxlbWVudCxcbiAgICB0ID0gc2V0VGltZW91dChmdW5jdGlvbigpIHtcbiAgICAgIGguY2xhc3NOYW1lID0gaC5jbGFzc05hbWUucmVwbGFjZSgvXFxid2YtbG9hZGluZ1xcYi9nLCBcIlwiKSArIFwiIHdmLWluYWN0aXZlXCI7XG4gICAgfSwgY29uZmlnLnNjcmlwdFRpbWVvdXQpLFxuICAgIHRrID0gZC5jcmVhdGVFbGVtZW50KFwic2NyaXB0XCIpLFxuICAgIGYgPSBmYWxzZSxcbiAgICBzID0gZC5nZXRFbGVtZW50c0J5VGFnTmFtZShcInNjcmlwdFwiKVswXSxcbiAgICBhO1xuICBoLmNsYXNzTmFtZSArPSBcIiB3Zi1sb2FkaW5nXCI7XG4gIHRrLnNyYyA9IFwiaHR0cHM6Ly91c2UudHlwZWtpdC5uZXQvXCIgKyBjb25maWcua2l0SWQgKyBcIi5qc1wiO1xuICB0ay5hc3luYyA9IHRydWU7XG4gIHRrLm9ubG9hZCA9IHRrLm9ucmVhZHlzdGF0ZWNoYW5nZSA9IGZ1bmN0aW9uKCkge1xuICAgIGEgPSB0aGlzLnJlYWR5U3RhdGU7XG4gICAgaWYgKGYgfHwgKGEgJiYgYSAhPSBcImNvbXBsZXRlXCIgJiYgYSAhPSBcImxvYWRlZFwiKSkgcmV0dXJuO1xuICAgIGYgPSB0cnVlO1xuICAgIGNsZWFyVGltZW91dCh0KTtcbiAgICB0cnkge1xuICAgICAgVHlwZWtpdC5sb2FkKGNvbmZpZyk7XG4gICAgfSBjYXRjaCAoZSkge31cbiAgfTtcbiAgcy5wYXJlbnROb2RlLmluc2VydEJlZm9yZSh0aywgcyk7XG59KShkb2N1bWVudCk7XG4iLCIkKGZ1bmN0aW9uKCkge1xuICBpZiAoJChcImJvZHlcIikuaGFzQ2xhc3MoXCJwYWdlLXRlbXBsYXRlLXBhZ2UtZHdzXCIpKSB7XG4gICAgJChcIi5uYXYtb3Blbl9fYnRuXCIpLm9uKFwiY2xpY2tcIiwgZnVuY3Rpb24oKSB7XG4gICAgICAkKFwiLnVuZml4ZWRcIikudG9nZ2xlQ2xhc3MoXCJhY3RpdmVcIik7XG4gICAgfSk7XG4gICAgdmFyIHdpbmRvd1dpZHRoID0gJCh3aW5kb3cpLndpZHRoKCk7XG4gICAgdmFyIHdpbmRvd1NtID0gMTI2MDtcbiAgICBpZiAod2luZG93V2lkdGggPD0gd2luZG93U20pIHtcbiAgICB9IGVsc2Uge1xuICAgICAgJCh3aW5kb3cpLm9uKFwibG9hZCBzY3JvbGxcIiwgZnVuY3Rpb24oKSB7XG4gICAgICAgICQoXCIjc2VjX2ludHJvZHVjdGlvbiAuZHdzLWhlYWRpbmdcIikuZWFjaChmdW5jdGlvbigpIHtcbiAgICAgICAgICB2YXIgcG9zaXRpb24gPSAkKHRoaXMpLm9mZnNldCgpLnRvcDtcbiAgICAgICAgICB2YXIgc2Nyb2xsID0gJCh3aW5kb3cpLnNjcm9sbFRvcCgpO1xuICAgICAgICAgIHZhciB3aW5kb3dIZWlnaHQgPSAkKHdpbmRvdykuaGVpZ2h0KCk7XG4gICAgICAgICAgLy8gaWYgKHNjcm9sbCA+IHBvc2l0aW9uIC0gd2luZG93SGVpZ2h0KSB7XG4gICAgICAgICAgLy8gICAkKFwiLmR3cy1oZWFkZXIuZml4ZWRcIikuYWRkQ2xhc3MoXCJhY3RpdmVcIik7XG4gICAgICAgICAgLy8gfSBlbHNlIHtcbiAgICAgICAgICAvLyAgICQoXCIuZHdzLWhlYWRlci5maXhlZFwiKS5yZW1vdmVDbGFzcyhcImFjdGl2ZVwiKTtcbiAgICAgICAgICAvLyB9XG4gICAgICAgICAgaWYgKHNjcm9sbCA+IHBvc2l0aW9uIC0gd2luZG93SGVpZ2h0KSB7XG4gICAgICAgICAgICAkKFwiLmR3cy1oZWFkZXIuZml4ZWRcIikuc2xpZGVEb3duKCk7XG4gICAgICAgICAgfSBlbHNlIHtcbiAgICAgICAgICAgICQoXCIuZHdzLWhlYWRlci5maXhlZFwiKS5zbGlkZVVwKCk7XG4gICAgICAgICAgfVxuICAgICAgICB9KTtcbiAgICAgIH0pO1xuICAgIH1cbiAgfVxufSk7XG4iXSwic291cmNlUm9vdCI6IiJ9