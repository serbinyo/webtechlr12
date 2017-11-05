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
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
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
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 3);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */,
/* 1 */,
/* 2 */,
/* 3 */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(4);


/***/ }),
/* 4 */
/***/ (function(module, exports) {

var addHideHandler, addJQueryHandler, indexator, sendAjax;

addHideHandler = function(sourceId, targetId) {
  var handler, sourceNode;
  sourceNode = document.getElementById(sourceId);
  handler = function() {
    var elementStyle, targetNode;
    targetNode = document.getElementById(targetId);
    elementStyle = targetNode.style.display;
    if (elementStyle === 'none') {
      targetNode.style.display = 'block';
    } else {
      targetNode.style.display = 'none';
    }
  };
  sourceNode.onclick = handler;
};

addJQueryHandler = function(JQBtnOpenId, JQeditBoxId, $) {
  $(JQBtnOpenId).click(function() {
    var elementStyle;
    elementStyle = $(JQeditBoxId).css('display');
    if (elementStyle === 'none') {
      $(JQeditBoxId).css('display', 'block');
    } else {
      $(JQeditBoxId).css('display', 'none');
    }
  });
};

sendAjax = function(JQSubmitId, JQeditformId, JQeditBoxId, $) {
  $(JQSubmitId).click(function(e) {
    e.preventDefault();
    //информация о происходящем в ассинхронном запросе для пользователя
    $('.wrap_result').css('color', 'green').text('Редактирование публикации').fadeIn(500, function() {
      var data;
      //плавно показываем блок(500мс), затем выполняем функцию
      data = $(JQeditformId).serializeArray();
      $.ajax({
        url: $(JQeditformId).attr('action'),
        data: data,
        type: 'POST',
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        datatype: 'JSON',
        success: function(html) {
          if (html.error) {
            $('.wrap_result').css('color', 'red').append('<br/><strong>Заполните все поля</strong>').delay(900).fadeOut(500);
          } else if (html.success) {
            $('.wrap_result').css('color', 'blue').append('<br/><strong>Публикация отредактирована</strong>').delay(900).fadeOut(500, function() {
              $(JQeditBoxId).css('display', 'none');
              $('#ttl' + html['article']['article_id']).text(html['article']['title']);
              $('#img' + html['article']['article_id']).attr({
                'src': html['article']['image'],
                'alt': html['article']['image']
              });
              $('#bdy' + html['article']['article_id']).html(html['article']['body']);
            });
          }
        },
        error: function() {
          $('.wrap_result').css('color', 'red').append('<br/><strong>Ошибка</strong>').delay(900).fadeOut(500);
        }
      });
    });
  });
};

indexator = function($) {
  var JQArticleId, JQBtnOpenId, JQSubmitId, JQeditBoxId, JQeditformId, addbtn, article, articleId, btnOpenId, editbox, editboxId, editform, editformId, i, submit, submitId;
  addbtn = document.getElementsByClassName('blog_update_link');
  editbox = document.getElementsByClassName('blog_editcontainer');
  editform = document.getElementsByClassName('editform');
  submit = document.getElementsByClassName('edit_submit');
  article = document.getElementsByClassName('blog_container');
  JQeditBoxId = [];
  JQeditformId = [];
  JQArticleId = [];
  JQSubmitId = [];
  JQBtnOpenId = [];
  i = 0;
  while (i < addbtn.length) {
    articleId = article[i].id;
    JQArticleId[i] = '#' + articleId;
    btnOpenId = addbtn[i].id;
    JQBtnOpenId[i] = '#' + btnOpenId;
    editboxId = editbox[i].id;
    JQeditBoxId[i] = '#' + editboxId;
    editformId = editform[i].id;
    JQeditformId[i] = '#' + editformId;
    submitId = submit[i].id;
    JQSubmitId[i] = '#' + submitId;
    //addHideHandler(btnOpenId, editboxId);
    addJQueryHandler(JQBtnOpenId[i], JQeditBoxId[i], $);
    sendAjax(JQSubmitId[i], JQeditformId[i], JQeditBoxId[i], $);
    i++;
  }
  return JQArticleId;
};

jQuery(document).ready(function($) {
  var ArticleId;
  ArticleId = indexator($);
  //обработчик для формы добавления НОВОЙ публикации
  $('#addform').on('click', '#addform-submit', function(e) {
    e.preventDefault();
    //информация о происходящем в ассинхронном запросе для пользователя
    $('.wrap_result').css('color', 'green').text('Сохранение публикации').fadeIn(500, function() {
      var data;
      //плавно показываем блок(500мс), затем выполняем функцию
      data = $('#addform').serializeArray();
      $("#addform")[0].reset();
      $.ajax({
        url: $('#addform').attr('action'),
        data: data,
        type: 'POST',
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        datatype: 'JSON',
        success: function(html) {
          if (html.error) {
            $('.wrap_result').css('color', 'red').append('<br/><strong>Заполните все поля</strong>').delay(900).fadeOut(500);
          } else if (html.success) {
            $('.wrap_result').css('color', 'blue').append('<br/><strong>Публикация сохранена</strong>').delay(900).fadeOut(500, function() {
              $('#articles').prepend(html.article);
              $('input').off();
              $('.blog_update_link').off();
              $(ArticleId[ArticleId.length - 1]).remove();
              ArticleId = indexator($);
            });
          }
        },
        error: function() {
          $('.wrap_result').css('color', 'red').append('<br/><strong>Ошибка</strong>').delay(900).fadeOut(500);
        }
      });
    });
  });
});


/***/ })
/******/ ]);