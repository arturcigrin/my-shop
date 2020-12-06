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
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/users/scss/theme.scss":
/*!*****************************************!*\
  !*** ./resources/users/scss/theme.scss ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/users/vendor/init_plugins.js":
/*!************************************************!*\
  !*** ./resources/users/vendor/init_plugins.js ***!
  \************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(window).on('load', function () {
  // initialization of HSMegaMenu component
  $('.js-mega-menu').HSMegaMenu({
    event: 'hover',
    direction: 'horizontal',
    pageContainer: $('.container'),
    breakpoint: 767.98,
    hideTimeOut: 0
  }); // initialization of svg injector module

  $.HSCore.components.HSSVGIngector.init('.js-svg-injector');
});
$(document).on('ready', function () {
  // initialization of header
  $.HSCore.components.HSHeader.init($('#header')); // initialization of animation

  $.HSCore.components.HSOnScrollAnimation.init('[data-animation]'); // initialization of unfold component

  $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
    afterOpen: function afterOpen() {
      $(this).find('input[type="search"]').focus();
    }
  }); // initialization of popups

  $.HSCore.components.HSFancyBox.init('.js-fancybox'); // initialization of countdowns

  var countdowns = $.HSCore.components.HSCountdown.init('.js-countdown', {
    yearsElSelector: '.js-cd-years',
    monthsElSelector: '.js-cd-months',
    daysElSelector: '.js-cd-days',
    hoursElSelector: '.js-cd-hours',
    minutesElSelector: '.js-cd-minutes',
    secondsElSelector: '.js-cd-seconds'
  }); // initialization of malihu scrollbar

  $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar')); // initialization of forms

  $.HSCore.components.HSFocusState.init(); // initialization of form validation

  $.HSCore.components.HSValidation.init('.js-validate', {
    rules: {
      confirmPassword: {
        equalTo: '#signupPassword'
      }
    }
  }); // initialization of show animations

  $.HSCore.components.HSShowAnimation.init('.js-animation-link'); // initialization of fancybox

  $.HSCore.components.HSFancyBox.init('.js-fancybox'); // initialization of slick carousel

  $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel'); // initialization of go to

  $.HSCore.components.HSGoTo.init('.js-go-to'); // initialization of hamburgers

  $.HSCore.components.HSHamburgers.init('#hamburgerTrigger'); // initialization of unfold component

  $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
    beforeClose: function beforeClose() {
      $('#hamburgerTrigger').removeClass('is-active');
    },
    afterClose: function afterClose() {
      $('#headerSidebarList .collapse.show').collapse('hide');
    }
  });
  $('#headerSidebarList [data-toggle="collapse"]').on('click', function (e) {
    e.preventDefault();
    var target = $(this).data('target');

    if ($(this).attr('aria-expanded') === "true") {
      $(target).collapse('hide');
    } else {
      $(target).collapse('show');
    }
  }); // initialization of unfold component

  $.HSCore.components.HSUnfold.init($('[data-unfold-target]')); // initialization of select picker

  $.HSCore.components.HSSelectPicker.init('.js-select');
});

/***/ }),

/***/ 0:
/*!****************************************************************************************!*\
  !*** multi ./resources/users/vendor/init_plugins.js ./resources/users/scss/theme.scss ***!
  \****************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! D:\OpenServer\domains\my-shop\resources\users\vendor\init_plugins.js */"./resources/users/vendor/init_plugins.js");
module.exports = __webpack_require__(/*! D:\OpenServer\domains\my-shop\resources\users\scss\theme.scss */"./resources/users/scss/theme.scss");


/***/ })

/******/ });