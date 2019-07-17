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
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/main.js":
/*!******************************!*\
  !*** ./resources/js/main.js ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(function () {
  //$today = new Date().toISOString().substr(0, 10);
  //document.querySelector("#week").value = $today;
  //console.log($today);
  function getWeekNumber(d) {
    // Copy date so don't modify original
    d = new Date(Date.UTC(d.getFullYear(), d.getMonth(), d.getDate())); // Set to nearest Thursday: current date + 4 - current day number
    // Make Sunday's day number 7

    d.setUTCDate(d.getUTCDate() + 4 - (d.getUTCDay() || 7)); // Get first day of year

    var yearStart = new Date(Date.UTC(d.getUTCFullYear(), 0, 1)); // Calculate full weeks to nearest Thursday

    var weekNo = Math.ceil(((d - yearStart) / 86400000 + 1) / 7); // Return array of year and week number

    return [d.getUTCFullYear(), weekNo];
  }

  var result = getWeekNumber(new Date());
  var week = result[0] + '-W' + result[1];
  console.log(week);
  document.getElementById("week").value = week;
  /*Create TextArea*/

  function createTextArea(zone, content) {
    zone.append('<form class="textForm" method="post"></form>');
    $textArea = $('<textarea id="textArea" class="cst-textarea" placeholder="Votre texte ici..."></textarea>');
    $textArea.html(content);
    zone.find('.textForm').append($textArea);
    $textArea.keyup({
      dragged: zone
    }, function (e) {
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $.ajax({
        url: '/main/text',

        /*MainController->updateTextModule*/
        dataType: "json",
        method: "POST",
        data: 'text=' + $(this).val() + '&line-id=' + e.data.dragged.data('line-id')
      });
    });
  } //$zone contient $dragged 


  function prepareForInput($dragged, $zone, $animate) {
    $zone.droppable('option', 'disabled', 'true');
    $zone.append($dragged);
    $dragged.empty();
    $dragged.css({
      'left': '0px',
      'top': '0px'
    });

    if ($animate) {
      /* drop animation */
      $dragged.animate({
        backgroundColor: "#fff",
        height: "100%",
        width: "100%"
      }, 1000);
    } else {
      $dragged.css({
        backgroundColor: "#fff",
        height: "100%",
        width: "100%"
      });
    }
    /*close btn on modules*/


    $closeButton = $('<button type="button" class="btn-outline-danger cst-btn-close">X</button>');
    $parent = $zone;
    $closeButton.on("click", $parent, function (parentButton) {
      parentButton.data.droppable('option', 'disabled', false);
      $id = $(this).parent().data('lineId');
      console.log($id);
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $.ajax({
        url: '/main/delete',

        /*MainController->deleteModule*/
        dataType: "json",
        method: "POST",
        data: 'id=' + $id,
        complete: function complete(data) {
          $result = data.responseJSON;
          parentButton.data.empty();
        }
      });
    });
    /*red cross button on each dragged*/

    $dragged.append($closeButton).addClass("text-right");
  } //Display week choozen on select input


  $('#week').on('change', function (e) {
    e.preventDefault();
    displayUserWeek();
  });

  function displayUserWeek() {
    $weekValue = $('#week').val();
    window.weekNumber = parseInt($weekValue.substr(6, 7)); //store week number as an integer

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')
      }
    });
    $.ajax({
      url: '/main',
      //main controller->selectWeek
      dataType: "json",
      method: "POST",
      data: 'number=' + window.weekNumber,
      complete: function complete(data) {
        $result = data.responseJSON;
        console.log($result); // empty all areas

        for ($s = 1; $s <= 6; $s++) {
          var zone = $('div[data-zone=' + $s + ']');
          zone.html('');
          zone.droppable('option', 'disabled', false);
        }

        if ($result.length) {
          // Week has data
          // window.weekId = $result[0]['week_id'];
          //Pour tous les modules
          for (var i = 0; i < $result.length; i++) {
            //On identifie sa zone
            var zone = $('div[data-zone="' + $result[i]['zone_id'] + '"]'); //On crée une div intermédiaire (dans laquelle on append TextArea etc.) en clonant les icones à gauche
            //cela permet d'avoir le meme comportement en drag&drop et en choix de semaine

            $cloneDragged = $('#aside > div[data-mod=1]').clone();
            prepareForInput($cloneDragged, zone, false); //on remplit cette div intermédiaire avec l'élément qui correspond à la catégorie module_id

            if ($result[i]['module_id'] == 1) {
              createTextArea($cloneDragged, $result[i]['content']);
            }
          }
        }
      }
    });
  }
  /* Display modules by weeks */

  /*DRAGGABLES DECLARE*/


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
        $draggedData = $dragged.data('mod'); //Clone module to keep an icon aside

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
        prepareForInput($dragged, $(this), true);
        /*behaviour by draggable category and ajax request for each*/

        /*cat 1*/

        if ($dragged.data('category') == "1") {
          createTextArea($dragged, '');
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

                /*MainController -> uploadImageModule*/
                data: $myData,
                contentType: false,
                processData: false
              }).done(function (data) {
                $result = data.responseJSON;
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
            }
          });
        }); //$dragged.draggable("option", "disabled", true);
        //$(this).droppable('option', 'disabled', true);

        /*red cross button visible/hidden*/
        // $('.textArea').onmouseover = function () {
        //     $('.cst-btn-close').css('visibility', 'visible');
        // }
        // $droppedOn $dragged

        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')
          }
        });
        $.ajax({
          url: '/main/ajax',

          /*Main Controller -> InsertDrop*/
          dataType: "json",
          method: "POST",
          data: 'zone=' + $droppedOnData + '&module=' + $draggedData + '&weekId=' + window.weekNumber,
          complete: function complete(data) {
            $result = data.responseJSON;
            $dragged.attr('data-line-id', $result['id']);
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

        if ($('div[data-toDo="' + $result['category'] + '"]').length) {
          $('div[data-toDo="' + $result['category'] + '"]').html($result['content']);
        }

        $('#test').append("<p>" + $result['toDo'] + "</p>");
      }
    });
  });
  displayUserWeek();
});

/***/ }),

/***/ 1:
/*!************************************!*\
  !*** multi ./resources/js/main.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\xampp\htdocs\done\resources\js\main.js */"./resources/js/main.js");


/***/ })

/******/ });