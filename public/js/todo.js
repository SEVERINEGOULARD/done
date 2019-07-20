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
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/todo.js":
/*!******************************!*\
  !*** ./resources/js/todo.js ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

/*Ajax toDo*/
$(function () {
  $('#sendToDo').on('click', function (e) {
    e.preventDefault();
    $toDo = $('#toDo').val();
    $category = $('#category').val();
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')
      }
    });
    $.ajax({
      url: '/toDo',
      dataType: "json",
      method: "POST",
      data: 'toDo=' + $toDo + '&category=' + $category,
      complete: function complete(data) {
        $result = data.responseJSON; // console.log($result);

        if ($result['toDo'] && $result['category']) {
          $('#list-items').append("<div class='row' class='list'><div class='col-sm-8 col-md-8'>" + $result['toDo'] + " </div><div class='col-sm-2 col-md-2'><a class='deleteList' data-delete='" + $result['category'] + "'><i class='cursor far fa-trash-alt'></i></a></div><div class='col-sm-2 col-md-2'><a class ='crossedList' data-crossed='" + $result[i]['id'] + "'><i class='cursor fas fa-check-circle  cst-icon-done'></i></a></div></div>");
        }
      }
    });
  });
  $('#chooseCat').on('change', function (e) {
    e.preventDefault();
    $chooseCat = $('#chooseCat').val();
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')
      }
    });
    $.ajax({
      url: '/toDo/chooseCat',
      dataType: "json",
      method: "POST",
      data: 'category=' + $chooseCat,
      complete: function complete(data) {
        $result = data.responseJSON;
        $('#list-items').empty();

        for (var i = 0; i < $result.length; i++) {
          var tdlt = $result[i]['done'] == 1 ? ' tdlt ' : '';
          $('#list-items').append("<div class='row list'><div class='col-8 cst-done" + tdlt + "'>" + $result[i]['content'] + " </div><div class='col-2'><a class='deleteList' data-delete='" + $result[i]['id'] + "'><i class='cursor far fa-trash-alt'></i></a></div><div class='col-sm-2 col-md-2'><a class ='crossedList' data-crossed='" + $result[i]['id'] + "'><i class='cursor fas fa-check-circle cst-icon-done'></i></a></div></div>");
        }
      }
    });
  });
  $(document).on('click', '.deleteList', function (e) {
    e.preventDefault();
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')
      }
    });
    $.ajax({
      url: '/toDo/delete',
      dataType: 'json',
      method: 'POST',
      data: 'id=' + $(this).data('delete'),
      complete: function complete(data) {
        $result = data.responseJSON;
        $('a[data-delete="' + $result['id'] + '"]').parent().parent().remove();
      }
    });
  });
  $(document).on('click', '.crossedList', function (e) {
    e.preventDefault();
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')
      }
    });
    $.ajax({
      url: '/toDo/crossed',
      dataType: 'json',
      method: 'POST',
      data: 'id=' + $(this).data('crossed'),
      complete: function complete(data) {
        $result = data.responseJSON;
        $('a[data-crossed="' + $result.id + '"]').parent().parent().css('textDecoration', 'line-through');
      }
    });
  });
});

/***/ }),

/***/ 2:
/*!************************************!*\
  !*** multi ./resources/js/todo.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\laragon\www\done\resources\js\todo.js */"./resources/js/todo.js");


/***/ })

/******/ });