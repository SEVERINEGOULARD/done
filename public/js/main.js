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

throw new Error("Module build failed (from ./node_modules/babel-loader/lib/index.js):\nSyntaxError: C:\\laragon\\www\\done\\resources\\js\\main.js: Unexpected token (42:8)\n\n\u001b[0m \u001b[90m 40 | \u001b[39m            })\u001b[33m;\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 41 | \u001b[39m        }\u001b[0m\n\u001b[0m\u001b[31m\u001b[1m>\u001b[22m\u001b[39m\u001b[90m 42 | \u001b[39m        \u001b[36melse\u001b[39m {\u001b[0m\n\u001b[0m \u001b[90m    | \u001b[39m        \u001b[31m\u001b[1m^\u001b[22m\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 43 | \u001b[39m            $dragged\u001b[33m.\u001b[39mcss({\u001b[0m\n\u001b[0m \u001b[90m 44 | \u001b[39m                \u001b[90m// backgroundColor: \"#fff\",\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 45 | \u001b[39m                height\u001b[33m:\u001b[39m \u001b[32m\"100%\"\u001b[39m\u001b[33m,\u001b[39m\u001b[0m\n    at Parser.raise (C:\\laragon\\www\\done\\node_modules\\@babel\\parser\\lib\\index.js:6325:17)\n    at Parser.unexpected (C:\\laragon\\www\\done\\node_modules\\@babel\\parser\\lib\\index.js:7642:16)\n    at Parser.parseExprAtom (C:\\laragon\\www\\done\\node_modules\\@babel\\parser\\lib\\index.js:8841:20)\n    at Parser.parseExprSubscripts (C:\\laragon\\www\\done\\node_modules\\@babel\\parser\\lib\\index.js:8412:23)\n    at Parser.parseMaybeUnary (C:\\laragon\\www\\done\\node_modules\\@babel\\parser\\lib\\index.js:8392:21)\n    at Parser.parseExprOps (C:\\laragon\\www\\done\\node_modules\\@babel\\parser\\lib\\index.js:8267:23)\n    at Parser.parseMaybeConditional (C:\\laragon\\www\\done\\node_modules\\@babel\\parser\\lib\\index.js:8240:23)\n    at Parser.parseMaybeAssign (C:\\laragon\\www\\done\\node_modules\\@babel\\parser\\lib\\index.js:8187:21)\n    at Parser.parseExpression (C:\\laragon\\www\\done\\node_modules\\@babel\\parser\\lib\\index.js:8135:23)\n    at Parser.parseStatementContent (C:\\laragon\\www\\done\\node_modules\\@babel\\parser\\lib\\index.js:9958:23)\n    at Parser.parseStatement (C:\\laragon\\www\\done\\node_modules\\@babel\\parser\\lib\\index.js:9829:17)\n    at Parser.parseBlockOrModuleBlockBody (C:\\laragon\\www\\done\\node_modules\\@babel\\parser\\lib\\index.js:10405:25)\n    at Parser.parseBlockBody (C:\\laragon\\www\\done\\node_modules\\@babel\\parser\\lib\\index.js:10392:10)\n    at Parser.parseBlock (C:\\laragon\\www\\done\\node_modules\\@babel\\parser\\lib\\index.js:10376:10)\n    at Parser.parseFunctionBody (C:\\laragon\\www\\done\\node_modules\\@babel\\parser\\lib\\index.js:9424:24)\n    at Parser.parseFunctionBodyAndFinish (C:\\laragon\\www\\done\\node_modules\\@babel\\parser\\lib\\index.js:9394:10)\n    at withTopicForbiddingContext (C:\\laragon\\www\\done\\node_modules\\@babel\\parser\\lib\\index.js:10535:12)\n    at Parser.withTopicForbiddingContext (C:\\laragon\\www\\done\\node_modules\\@babel\\parser\\lib\\index.js:9702:14)\n    at Parser.parseFunction (C:\\laragon\\www\\done\\node_modules\\@babel\\parser\\lib\\index.js:10534:10)\n    at Parser.parseFunctionExpression (C:\\laragon\\www\\done\\node_modules\\@babel\\parser\\lib\\index.js:8877:17)\n    at Parser.parseExprAtom (C:\\laragon\\www\\done\\node_modules\\@babel\\parser\\lib\\index.js:8790:21)\n    at Parser.parseExprSubscripts (C:\\laragon\\www\\done\\node_modules\\@babel\\parser\\lib\\index.js:8412:23)\n    at Parser.parseMaybeUnary (C:\\laragon\\www\\done\\node_modules\\@babel\\parser\\lib\\index.js:8392:21)\n    at Parser.parseExprOps (C:\\laragon\\www\\done\\node_modules\\@babel\\parser\\lib\\index.js:8267:23)\n    at Parser.parseMaybeConditional (C:\\laragon\\www\\done\\node_modules\\@babel\\parser\\lib\\index.js:8240:23)\n    at Parser.parseMaybeAssign (C:\\laragon\\www\\done\\node_modules\\@babel\\parser\\lib\\index.js:8187:21)\n    at Parser.parseExprListItem (C:\\laragon\\www\\done\\node_modules\\@babel\\parser\\lib\\index.js:9491:18)\n    at Parser.parseCallExpressionArguments (C:\\laragon\\www\\done\\node_modules\\@babel\\parser\\lib\\index.js:8621:22)\n    at Parser.parseSubscript (C:\\laragon\\www\\done\\node_modules\\@babel\\parser\\lib\\index.js:8514:29)\n    at Parser.parseSubscripts (C:\\laragon\\www\\done\\node_modules\\@babel\\parser\\lib\\index.js:8433:19)\n    at Parser.parseExprSubscripts (C:\\laragon\\www\\done\\node_modules\\@babel\\parser\\lib\\index.js:8422:17)\n    at Parser.parseMaybeUnary (C:\\laragon\\www\\done\\node_modules\\@babel\\parser\\lib\\index.js:8392:21)\n    at Parser.parseExprOps (C:\\laragon\\www\\done\\node_modules\\@babel\\parser\\lib\\index.js:8267:23)\n    at Parser.parseMaybeConditional (C:\\laragon\\www\\done\\node_modules\\@babel\\parser\\lib\\index.js:8240:23)\n    at Parser.parseMaybeAssign (C:\\laragon\\www\\done\\node_modules\\@babel\\parser\\lib\\index.js:8187:21)\n    at Parser.parseExpression (C:\\laragon\\www\\done\\node_modules\\@babel\\parser\\lib\\index.js:8135:23)");

/***/ }),

/***/ 1:
/*!************************************!*\
  !*** multi ./resources/js/main.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\laragon\www\done\resources\js\main.js */"./resources/js/main.js");


/***/ })

/******/ });