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

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

throw new Error("Module build failed (from ./node_modules/babel-loader/lib/index.js):\nSyntaxError: C:\\laragon\\www\\done\\resources\\js\\app.js: Unexpected token (58:10)\n\n\u001b[0m \u001b[90m 56 | \u001b[39m              }\u001b[0m\n\u001b[0m \u001b[90m 57 | \u001b[39m            }\u001b[0m\n\u001b[0m\u001b[31m\u001b[1m>\u001b[22m\u001b[39m\u001b[90m 58 | \u001b[39m          }     \u001b[0m\n\u001b[0m \u001b[90m    | \u001b[39m          \u001b[31m\u001b[1m^\u001b[22m\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 59 | \u001b[39m      })\u001b[0m\n\u001b[0m \u001b[90m 60 | \u001b[39m  })\u001b[0m\n\u001b[0m \u001b[90m 61 | \u001b[39m\u001b[0m\n    at Parser.raise (C:\\laragon\\www\\done\\node_modules\\@babel\\parser\\lib\\index.js:6325:17)\n    at Parser.unexpected (C:\\laragon\\www\\done\\node_modules\\@babel\\parser\\lib\\index.js:7642:16)\n    at Parser.parseExprAtom (C:\\laragon\\www\\done\\node_modules\\@babel\\parser\\lib\\index.js:8841:20)\n    at Parser.parseExprSubscripts (C:\\laragon\\www\\done\\node_modules\\@babel\\parser\\lib\\index.js:8412:23)\n    at Parser.parseMaybeUnary (C:\\laragon\\www\\done\\node_modules\\@babel\\parser\\lib\\index.js:8392:21)\n    at Parser.parseExprOps (C:\\laragon\\www\\done\\node_modules\\@babel\\parser\\lib\\index.js:8267:23)\n    at Parser.parseMaybeConditional (C:\\laragon\\www\\done\\node_modules\\@babel\\parser\\lib\\index.js:8240:23)\n    at Parser.parseMaybeAssign (C:\\laragon\\www\\done\\node_modules\\@babel\\parser\\lib\\index.js:8187:21)\n    at Parser.parseExpression (C:\\laragon\\www\\done\\node_modules\\@babel\\parser\\lib\\index.js:8135:23)\n    at Parser.parseStatementContent (C:\\laragon\\www\\done\\node_modules\\@babel\\parser\\lib\\index.js:9958:23)\n    at Parser.parseStatement (C:\\laragon\\www\\done\\node_modules\\@babel\\parser\\lib\\index.js:9829:17)\n    at Parser.parseBlockOrModuleBlockBody (C:\\laragon\\www\\done\\node_modules\\@babel\\parser\\lib\\index.js:10405:25)\n    at Parser.parseBlockBody (C:\\laragon\\www\\done\\node_modules\\@babel\\parser\\lib\\index.js:10392:10)\n    at Parser.parseTopLevel (C:\\laragon\\www\\done\\node_modules\\@babel\\parser\\lib\\index.js:9758:10)\n    at Parser.parse (C:\\laragon\\www\\done\\node_modules\\@babel\\parser\\lib\\index.js:11270:17)\n    at parse (C:\\laragon\\www\\done\\node_modules\\@babel\\parser\\lib\\index.js:11306:38)\n    at parser (C:\\laragon\\www\\done\\node_modules\\@babel\\core\\lib\\transformation\\normalize-file.js:170:34)\n    at normalizeFile (C:\\laragon\\www\\done\\node_modules\\@babel\\core\\lib\\transformation\\normalize-file.js:138:11)\n    at runSync (C:\\laragon\\www\\done\\node_modules\\@babel\\core\\lib\\transformation\\index.js:44:43)\n    at runAsync (C:\\laragon\\www\\done\\node_modules\\@babel\\core\\lib\\transformation\\index.js:35:14)\n    at process.nextTick (C:\\laragon\\www\\done\\node_modules\\@babel\\core\\lib\\transform.js:34:34)\n    at process._tickCallback (internal/process/next_tick.js:61:11)");

window.Vue = __webpack_require__(/*! vue */ "./node_modules/vue/dist/vue.common.js");
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */
// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', __webpack_require__(/*! ./components/ExampleComponent.vue */ "./resources/js/components/ExampleComponent.vue")["default"]);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
// const app = new Vue({
//     el: '#app',
// });

$(function () {
  // Draggables declare
  $("#draggable1").draggable({
    revert: "invalid",
    zIndex: 1001
  });
  $("#draggable2").draggable({
    revert: "invalid",
    zIndex: 1001
  });
  $("#draggable3").draggable({
    revert: "invalid",
    zIndex: 1001
  });
  $("#draggable4").draggable({
    revert: "invalid",
    zIndex: 1001
  }); // Behaviour drop/drag

  for (i = 1; i <= 6; i++) {
    $("#dropZone" + i).droppable({
      zIndex: 1,
      tolerance: "fit",
      drop: function drop(event, ui) {
        $droppedOn = $(this);
        $dragged = ui.draggable;
        $droppedOnData = $droppedOn.data('zone');
        $draggedData = $dragged.data('mod'); //Clone module

        $clone = $dragged.clone();
        $clone.css({
          'left': '',
          'top': ''
        });
        $clone.draggable({
          revert: "invalid",
          zIndex: 1001
        });
        $clone.draggable("option", "ui-draggable-dragging", false);
        $clone.draggable("option", "resizable", false);
        $dragged.after($clone);
        $(this).append($dragged);
        $dragged.css({
          'left': '0px',
          'top': '0px'
        });
        $dragged.empty(".anim");
        /* drop animation */

        $dragged.animate({
          backgroundColor: "#fff",
          height: "100%",
          width: "100%"
        }, 1000);
        /*close btn on modules*/

        $closeButton = $('<button type="button" class="btn-outline-danger cst-button">X</button>');
        $parent = $(this);
        $closeButton.on("click", $parent, function (parentButton) {
          parentButton.data.droppable('option', 'disabled', false);
          parentButton.data.empty();
        }); //Behaviour by draggable category and ajax requests for each

        /*cat 1*/

        if ($dragged.data('category') == "1") {
          $dragged.append('<form class="textForm" method="post"></form>');
          $textArea = $('<textarea id="textArea" class="cst-textarea" placeholder="Votre texte ici..."></textarea>');
          $dragged.find('.textForm').append($textArea);
          $textArea.keyup({
            dragged: $dragged
          }, function (e) {
            $.ajaxSetup({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });
            $.ajax({
              url: '/main/text',
              dataType: "json",
              method: "POST",
              data: 'text=' + $(this).val() + '&line-id=' + e.data.dragged.data('line-id'),
              complete: function complete(data) {
                $result = data.responseJSON;
                console.log($result);
              }
            });
          });
        }

        ;
        /*cat 2*/

        if ($dragged.data('category') == "2") {
          $dragged.append('<img id="preview" class="ill-mod-photo" src="img/polaroid.png"><form method="post"  enctype="multipart/form-data"><div class="form-group file-parent"></div></form>');
          $fileInput = $('<input type="file" class="form-control-file">');
          $dragged.find('.file-parent').append($fileInput); // on rajoute dragged comme argument qui va se coller dans l'event e (à e.data.dragged)
          // ça permet d'appeler cet élément dragged au moment de l'event sans devoir rechercher avec
          // des parents de parents etc.

          $fileInput.on('change', {
            dragged: $dragged
          }, function (e) {
            var thatTarget = e.currentTarget;

            if (thatTarget.files && thatTarget.files[0]) {
              $myData = new FormData();
              $myData.append('image', thatTarget.files[0]);
              $myData.append('line-id', e.data.dragged.data('line-id'));
              $.ajaxSetup({
                headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
              });
              $.ajax({
                method: 'POST',
                url: '/main/image',
                data: $myData,
                contentType: false,
                processData: false
              }).done(function (data) {
                $result = data.responseJSON;
                console.log(data);
              }).fail(function (data) {});
            }

            ;
          });
        }

        ;
        /*cat 3*/

        if ($dragged.data('category') == "3") {
          $dragged.append('<div class"row"><button class="design-button"><img src="img/ville1.png" /></button><button class="design-button"><img src="img/texture1.jpg" /></button><button class="design-button"><img src="img/perso1.png"/></button><button class="design-button"><img src="img/arab2.png"/></button><button class="design-button"><img src="img/arab3.png"/></button></div><div class"row"><button class="design-button"><img src="img/chat1.jpg" /></button><button class="design-button"><img src="img/chat3.jpg" /></button><button class="design-button"><img src="img/livres.jpg" /></button></button><button class="design-button"><img src="img/arab4.png" /></button></button><button class="design-button"><img src="img/tempete.jpg" /></button><button class="design-button"><img src="img/tempete.jpg" /></button></button></button><button class="design-button"><img src="img/tempete.jpg" /></button><button class="design-button"><img src="img/tempete.jpg" /></button></button></button><button class="design-button"><img src="img/tempete.jpg" /></button></button></button><button class="design-button"><img src="img/tempete.jpg" /></button><button class="design-button"><img src="img/tempete.jpg" /></button></div>');
        }

        $(".design-button").on("click", function (e) {
          e.preventDefault();
          $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
          $.ajax({
            url: '/design',
            dataType: "json",
            method: "POST",
            data: 'design=' + $('.design-button'),
            complete: function complete(data) {
              $result = data.responseJSON;
              console.log($result);
            }
          });
        });
        /*red cross button on each dragged*/

        $dragged.append($closeButton).addClass("text-right");
        $dragged.draggable("option", "disabled", true);
        $(this).droppable('option', 'disabled', true); // $droppedOn $dragged 

        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')
          }
        });
        $.ajax({
          url: '/main/ajax',
          dataType: "json",
          method: "POST",
          data: 'zone=' + $droppedOnData + '&module=' + $draggedData + '&weekId=' + window.weekId,
          complete: function complete(data) {
            $result = data.responseJSON;
            console.log($result);
            $dragged.attr('data-line-id', $result['id']);
            /* for (var i = 0; i < $result.length; i++) {
                var zone = $('div[data-zone="' + $result[i]['zone_id'] + '"]');
                  $.each($result[i], function () {
                      zone.html($result[i]['content']);
                  });
              }*/
          }
        });
      }
    });
  }

  ;
  /*Ajax toDo*/

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
        $result = data.responseJSON;
        console.log($result);

        if ($result['toDo'] && $result['category']) {
          $('#list-items').append("<div class='row' class='list'><div class='col-md-8'>" + $result['toDo'] + " </div> <div class='col-md-2 text-center'><input type='checkbox'></div><div class='col-md-2'><a class='deleteList' data-delete='" + $result['category'] + "'><i class='far fa-trash-alt'></i></a></div></div>");
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
          $('#list-items').append("<div class='row' class='list'><div class='col-md-8'>" + $result[i]['content'] + " </div> <div class='col-md-2 text-center'><input type='checkbox'></div><div class='col-md-2'><a class='deleteList' data-delete='" + $result[i]['id'] + "'><i class='far fa-trash-alt'></i></a></div></div>");
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
  $(document).on('click', '.checkbox', function () {
    $valueCheck = $(this).val();
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')
      }
    });
    $.ajax({
      url: '/toDo/checkBox',
      dataType: 'json',
      method: 'POST',
      data: 'id=' + $(this).data('checkbox') + '&value=' + $valueCheck,
      complete: function complete(data) {
        $result = data.responseJSON;
        console.log($result);
      }
    });
  });
});

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! C:\laragon\www\done\resources\js\app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! C:\laragon\www\done\resources\sass\app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });