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
/******/ 	return __webpack_require__(__webpack_require__.s = "./public/js/custom.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./public/js/custom.js":
/*!*****************************!*\
  !*** ./public/js/custom.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("let btn_complex = document.getElementById('btn-complex');\nlet complex = document.getElementById('complex');\nbtn_complex.addEventListener('click', function() {\n    hideClassTabs();\n    btn_complex.classList.add('btn-tab-active');\n    show(complex);\n});\n\nlet btn_hygiene = document.getElementById('btn-hygiene');\nlet hygiene = document.getElementById('hygiene');\nbtn_hygiene.addEventListener('click', function() {\n    hideClassTabs();\n    btn_hygiene.classList.add('btn-tab-active');\n    show(hygiene);\n});\n\nlet btn_washing_drying = document.getElementById('btn-washing-drying');\nlet washing_drying = document.getElementById('washing-drying');\nbtn_washing_drying.addEventListener('click', function() {\n    hideClassTabs();\n    btn_washing_drying.classList.add('btn-tab-active');\n    show(washing_drying);\n});\n\nlet btn_trimming = document.getElementById('btn-trimming');\nlet trimming = document.getElementById('trimming');\nbtn_trimming.addEventListener('click', function() {\n    hideClassTabs();\n    btn_trimming.classList.add('btn-tab-active');\n    show(trimming);\n});\n\nlet btn_express_molt = document.getElementById('btn-express-molt');\nlet express_molt = document.getElementById('express-molt');\nbtn_express_molt.addEventListener('click', function() {\n    hideClassTabs();\n    btn_express_molt.classList.add('btn-tab-active');\n    show(express_molt);\n});\n\nlet btn_cats = document.getElementById('btn-cats');\nlet cats = document.getElementById('cats');\nbtn_cats.addEventListener('click', function() {\n    hideClassTabs();\n    btn_cats.classList.add('btn-tab-active');\n    show(cats);\n});\n\nlet btn_additional_services = document.getElementById('btn-additional-services');\nlet additional_services = document.getElementById('additional-services');\nbtn_additional_services.addEventListener('click', function() {\n    hideClassTabs();\n    btn_additional_services.classList.add('btn-tab-active');\n    show(additional_services);\n});\n\n// ************ Показывать и скрывать цены complex\nlet hideElements = function(els_list) {\n    for (let i = 0; i < els_list.length; i++) {\n        els_list[i].classList.add('hidden');\n    }\n}\n\n// ************ Global vars\nlet _class_ = '';\nlet remove_class_list\n// ************ END Global vars\n\nlet head_small_complex = document.getElementById('head-small-complex');\nlet tbody_small_complex = document.getElementById('tbody-small-complex');\nlet head_middle_complex = document.getElementById('head-middle-complex');\nlet tbody_middle_complex = document.getElementById('tbody-middle-complex');\nlet head_large_complex = document.getElementById('head-large-complex');\nlet tbody_large_complex = document.getElementById('tbody-large-complex');\nlet head_mestizo_complex = document.getElementById('head-mestizo-complex');\nlet tbody_mestizo_complex = document.getElementById('tbody-mestizo-complex');\n\nhead_small_complex.addEventListener('click', function() {\n    _class_ = tbody_small_complex.getAttribute('class');\n\n    hideElements([tbody_small_complex, tbody_middle_complex, tbody_large_complex, tbody_mestizo_complex]);\n\n    if (_class_ == 'hidden') {\n        tbody_small_complex.classList.remove('hidden');\n    } else {\n        tbody_small_complex.classList.add('hidden');\n    }\n});\n\nhead_middle_complex.addEventListener('click', function() {\n    _class_ = tbody_middle_complex.getAttribute('class');\n\n    hideElements([tbody_small_complex, tbody_middle_complex, tbody_large_complex, tbody_mestizo_complex]);\n\n    if (_class_ == 'hidden') {\n        tbody_middle_complex.classList.remove('hidden');\n    } else {\n        tbody_middle_complex.classList.add('hidden');\n    }\n});\n\nhead_large_complex.addEventListener('click', function() {\n    _class_ = tbody_large_complex.getAttribute('class');\n\n    hideElements([tbody_small_complex, tbody_middle_complex, tbody_large_complex, tbody_mestizo_complex]);\n\n    if (_class_ == 'hidden') {\n        tbody_large_complex.classList.remove('hidden');\n    } else {\n        tbody_large_complex.classList.add('hidden');\n    }\n});\n\nhead_mestizo_complex.addEventListener('click', function() {\n    // magicActions(tbody_mestizo_complex);\n\n    _class_ = tbody_mestizo_complex.getAttribute('class');\n\n    hideElements([tbody_small_complex, tbody_middle_complex, tbody_large_complex, tbody_mestizo_complex]);\n\n    if (_class_ == 'hidden') {\n        tbody_mestizo_complex.classList.remove('hidden');\n    } else {\n        tbody_mestizo_complex.classList.add('hidden');\n    }\n});\n\n// Гигиена\nlet head_small_hygiene = document.getElementById('head-small-hygiene');\nlet tbody_small_hygiene = document.getElementById('tbody-small-hygiene');\nlet head_middle_hygiene = document.getElementById('head-middle-hygiene');\nlet tbody_middle_hygiene = document.getElementById('tbody-middle-hygiene');\nlet head_large_hygiene = document.getElementById('head-large-hygiene');\nlet tbody_large_hygiene = document.getElementById('tbody-large-hygiene');\nlet head_mestizo_hygiene = document.getElementById('head-mestizo-hygiene');\nlet tbody_mestizo_hygiene = document.getElementById('tbody-mestizo-hygiene');\nremove_class_list = [tbody_small_hygiene, tbody_middle_hygiene, tbody_large_hygiene, tbody_mestizo_hygiene];\n\nhead_small_hygiene.addEventListener('click', function() {\n    _class_ = tbody_small_hygiene.getAttribute('class');\n\n    hideElements(remove_class_list);\n\n    if (_class_ == 'hidden') {\n        tbody_small_hygiene.classList.remove('hidden');\n    } else {\n        tbody_small_hygiene.classList.add('hidden');\n    }\n});\n\nhead_middle_hygiene.addEventListener('click', function() {\n    _class_ = tbody_middle_hygiene.getAttribute('class');\n\n    hideElements(remove_class_list);\n\n    if (_class_ == 'hidden') {\n        tbody_middle_hygiene.classList.remove('hidden');\n    } else {\n        tbody_middle_hygiene.classList.add('hidden');\n    }\n});\n\nhead_large_hygiene.addEventListener('click', function() {\n    _class_ = tbody_large_hygiene.getAttribute('class');\n\n    hideElements(remove_class_list);\n\n    if (_class_ == 'hidden') {\n        tbody_large_hygiene.classList.remove('hidden');\n    } else {\n        tbody_large_hygiene.classList.add('hidden');\n    }\n});\n\nhead_mestizo_hygiene.addEventListener('click', function() {\n    _class_ = tbody_mestizo_hygiene.getAttribute('class');\n\n    hideElements(remove_class_list);\n\n    if (_class_ == 'hidden') {\n        tbody_mestizo_hygiene.classList.remove('hidden');\n    } else {\n        tbody_mestizo_hygiene.classList.add('hidden');\n    }\n});\n\n// Мытье-сушка\nlet head_small_washing = document.getElementById('head-small-washing');\nlet tbody_small_washing = document.getElementById('tbody-small-washing');\nlet head_middle_washing = document.getElementById('head-middle-washing');\nlet tbody_middle_washing = document.getElementById('tbody-middle-washing');\nlet head_large_washing = document.getElementById('head-large-washing');\nlet tbody_large_washing = document.getElementById('tbody-large-washing');\nlet head_mestizo_washing = document.getElementById('head-mestizo-washing');\nlet tbody_mestizo_washing = document.getElementById('tbody-mestizo-washing');\nremove_class_list = [tbody_small_washing, tbody_middle_washing, tbody_large_washing, tbody_mestizo_washing];\n\nhead_small_washing.addEventListener('click', function() {\n    _class_ = tbody_small_washing.getAttribute('class');\n\n    hideElements(remove_class_list);\n\n    if (_class_ == 'hidden') {\n        tbody_small_washing.classList.remove('hidden');\n    } else {\n        tbody_small_washing.classList.add('hidden');\n    }\n});\n\nhead_middle_washing.addEventListener('click', function() {\n    _class_ = tbody_middle_washing.getAttribute('class');\n\n    hideElements(remove_class_list);\n\n    if (_class_ == 'hidden') {\n        tbody_middle_washing.classList.remove('hidden');\n    } else {\n        tbody_middle_washing.classList.add('hidden');\n    }\n});\n\nhead_large_washing.addEventListener('click', function() {\n    _class_ = tbody_large_washing.getAttribute('class');\n\n    hideElements(remove_class_list);\n\n    if (_class_ == 'hidden') {\n        tbody_large_washing.classList.remove('hidden');\n    } else {\n        tbody_large_washing.classList.add('hidden');\n    }\n});\n\nhead_mestizo_washing.addEventListener('click', function() {\n    _class_ = tbody_mestizo_washing.getAttribute('class');\n\n    hideElements(remove_class_list);\n\n    if (_class_ == 'hidden') {\n        tbody_mestizo_washing.classList.remove('hidden');\n    } else {\n        tbody_mestizo_washing.classList.add('hidden');\n    }\n});\n\n// Express molt\nlet head_small_express = document.getElementById('head-small-express');\nlet tbody_small_express = document.getElementById('tbody-small-express');\nlet head_middle_express = document.getElementById('head-middle-express');\nlet tbody_middle_express = document.getElementById('tbody-middle-express');\nlet head_large_express = document.getElementById('head-large-express');\nlet tbody_large_express = document.getElementById('tbody-large-express');\nlet head_mestizo_express = document.getElementById('head-mestizo-express');\nlet tbody_mestizo_express = document.getElementById('tbody-mestizo-express');\nremove_class_list = [tbody_small_express, tbody_middle_express, tbody_large_express, tbody_mestizo_express];\n\nhead_small_express.addEventListener('click', function() {\n    _class_ = tbody_small_express.getAttribute('class');\n\n    hideElements(remove_class_list);\n\n    if (_class_ == 'hidden') {\n        tbody_small_express.classList.remove('hidden');\n    } else {\n        tbody_small_express.classList.add('hidden');\n    }\n});\n\nhead_middle_express.addEventListener('click', function() {\n    _class_ = tbody_middle_express.getAttribute('class');\n\n    hideElements(remove_class_list);\n\n    if (_class_ == 'hidden') {\n        tbody_middle_express.classList.remove('hidden');\n    } else {\n        tbody_middle_express.classList.add('hidden');\n    }\n});\n\nhead_large_express.addEventListener('click', function() {\n    _class_ = tbody_large_express.getAttribute('class');\n\n    hideElements(remove_class_list);\n\n    if (_class_ == 'hidden') {\n        tbody_large_express.classList.remove('hidden');\n    } else {\n        tbody_large_express.classList.add('hidden');\n    }\n});\n\nhead_mestizo_express.addEventListener('click', function() {\n    _class_ = tbody_mestizo_express.getAttribute('class');\n\n    hideElements(remove_class_list);\n\n    if (_class_ == 'hidden') {\n        tbody_mestizo_express.classList.remove('hidden');\n    } else {\n        tbody_mestizo_express.classList.add('hidden');\n    }\n});\n\n// Trimming\nlet head_main_trimming = document.getElementById('head-main-trimming');\nlet tbody_main_trimming = document.getElementById('tbody-main-trimming');\nlet head_mestizo_trimming = document.getElementById('head-mestizo-trimming');\nlet tbody_mestizo_trimming = document.getElementById('tbody-mestizo-trimming');\nremove_class_list = [tbody_main_trimming, tbody_mestizo_trimming];\n\nhead_main_trimming.addEventListener('click', function() {\n    _class_ = tbody_main_trimming.getAttribute('class');\n\n    hideElements(remove_class_list);\n\n    if (_class_ == 'hidden') {\n        tbody_main_trimming.classList.remove('hidden');\n    } else {\n        tbody_main_trimming.classList.add('hidden');\n    }\n});\n\nhead_mestizo_trimming.addEventListener('click', function() {\n    _class_ = tbody_mestizo_trimming.getAttribute('class');\n\n    hideElements(remove_class_list);\n\n    if (_class_ == 'hidden') {\n        tbody_mestizo_trimming.classList.remove('hidden');\n    } else {\n        tbody_mestizo_trimming.classList.add('hidden');\n    }\n});\n\n// ************* END\n\nlet magicActions = function(el) {\n    _class_ = el.getAttribute('class');\n\n    console.log(_class_, el);\n\n    hideElements([tbody_small_complex, tbody_middle_complex, tbody_large_complex, tbody_mestizo_complex]);\n\n    if (_class_ == 'hidden') {\n        el.remove('hidden');\n        console.log('test')\n    } else {\n        el.add('hidden');\n    }\n}\n\n// Mobile\n// Complex small\n// let complex_mobile_arrow_up = document.getElementById('complex-mobile-arrow-up');\n// let complex_mobile_arrow_down = document.getElementById('complex-mobile-arrow-down');\n\n// let complex_mobile_plus_up = document.getElementById('complex-mobile-plus-up');\n// let complex_mobile_plus_down = document.getElementById('complex-mobile-plus-down');\n\n// let complex_mobile_small = document.getElementById('complex-mobile-small');\n// complex_mobile_small.addEventListener('click', function() {\n//     if (complex_mobile_small.classList.contains('collapsed')) {\n//         complex_mobile_arrow_up.classList.add('hide');\n//         complex_mobile_arrow_down.classList.remove('hide');\n\n//         complex_mobile_plus_up.classList.add('hide');\n//         complex_mobile_plus_down.classList.remove('hide');\n\n//         console.log('collapsed');\n//     } else {\n//         complex_mobile_arrow_up.classList.remove('hide');\n//         complex_mobile_arrow_down.classList.add('hide');\n\n//         complex_mobile_plus_up.classList.remove('hide');\n//         complex_mobile_plus_down.classList.add('hide');\n\n//         console.log('NO collapsed');\n//     }\n\n//     console.log('complex_mobile_small.addEventListener');\n// });\n\n// Complex middle\n// let complex_middle_arrow_up = document.getElementById('complex-middle-arrow-up');\n// let complex_middle_arrow_down = document.getElementById('complex-middle-arrow-down');\n\n// let complex_middle_plus_up = document.getElementById('complex-middle-plus-up');\n// let complex_middle_plus_down = document.getElementById('complex-middle-plus-down');\n\n// let complex_mobile_middle = document.getElementById('complex-mobile-middle');\n// complex_mobile_middle.addEventListener('click', function() {\n//     if (complex_mobile_middle.classList.contains('collapsed')) {\n//         complex_middle_arrow_up.classList.add('hide');\n//         complex_middle_arrow_down.classList.remove('hide');\n\n//         complex_middle_plus_up.classList.add('hide');\n//         complex_middle_plus_down.classList.remove('hide');\n\n//         console.log('collapsed middle');\n//     } else {\n//         complex_middle_arrow_up.classList.remove('hide');\n//         complex_middle_arrow_down.classList.add('hide');\n\n//         complex_middle_plus_up.classList.remove('hide');\n//         complex_middle_plus_down.classList.add('hide');\n\n//         console.log('NO collapsed middle');\n//     }\n// });\n\n// Complex large\n// let complex_large_arrow_up = document.getElementById('complex-large-arrow-up');\n// let complex_large_arrow_down = document.getElementById('complex-large-arrow-down');\n\n// let complex_large_plus_up = document.getElementById('complex-large-plus-up');\n// let complex_large_plus_down = document.getElementById('complex-large-plus-down');\n\n// let complex_mobile_large = document.getElementById('complex-mobile-large');\n// complex_mobile_large.addEventListener('click', function() {\n//     if (complex_mobile_large.classList.contains('collapsed')) {\n//         complex_large_arrow_up.classList.add('hide');\n//         complex_large_arrow_down.classList.remove('hide');\n\n//         complex_large_plus_up.classList.add('hide');\n//         complex_large_plus_down.classList.remove('hide');\n\n//         console.log('collapsed large');\n//     } else {\n//         complex_large_arrow_up.classList.remove('hide');\n//         complex_large_arrow_down.classList.add('hide');\n\n//         complex_large_plus_up.classList.remove('hide');\n//         complex_large_plus_down.classList.add('hide');\n\n//         console.log('NO collapsed large');\n//     }\n// });\n\n// Complex mestizo\n// let complex_mestizo_arrow_up = document.getElementById('complex-mestizo-arrow-up');\n// let complex_mestizo_arrow_down = document.getElementById('complex-mestizo-arrow-down');\n\n// let complex_mestizo_plus_up = document.getElementById('complex-mestizo-plus-up');\n// let complex_mestizo_plus_down = document.getElementById('complex-mestizo-plus-down');\n\n// let complex_mobile_mestizo = document.getElementById('complex-mobile-mestizo');\n// complex_mobile_mestizo.addEventListener('click', function() {\n//     if (complex_mobile_mestizo.classList.contains('collapsed')) {\n//         complex_mestizo_arrow_up.classList.add('hide');\n//         complex_mestizo_arrow_down.classList.remove('hide');\n\n//         complex_mestizo_plus_up.classList.add('hide');\n//         complex_mestizo_plus_down.classList.remove('hide');\n\n//         console.log('collapsed mestizo');\n//     } else {\n//         complex_mestizo_arrow_up.classList.remove('hide');\n//         complex_mestizo_arrow_down.classList.add('hide');\n\n//         complex_mestizo_plus_up.classList.remove('hide');\n//         complex_mestizo_plus_down.classList.add('hide');\n\n//         console.log('NO collapsed mestizo');\n//     }\n// });\n\n\n\n\n\n\n\n\n\n// let btn_complex_mobile = document.getElementById('btn-complex-mobile');\n// let complex_mobile = document.getElementById('complex-mobile');\n// btn_complex_mobile.addEventListener('click', function() {\n//     hideClassTabs();\n//     btn_complex_mobile.classList.add('btn-tab-active');\n//     show(complex_mobile);\n// });\n\n// let btn_hygiene_mobile = document.getElementById('btn-hygiene-mobile');\n// let hygiene_mobile = document.getElementById('hygiene-mobile');\n// btn_hygiene_mobile.addEventListener('click', function() {\n//     hideClassTabs();\n//     btn_hygiene_mobile.classList.add('btn-tab-active');\n//     show(hygiene_mobile);\n// });\n//\n// let btn_washing_drying_mobile = document.getElementById('btn-washing-drying-mobile');\n// let washing_drying_mobile = document.getElementById('washing-drying-mobile');\n// btn_washing_drying_mobile.addEventListener('click', function() {\n//     hideClassTabs();\n//     btn_washing_drying_mobile.classList.add('btn-tab-active');\n//     show(washing_drying_mobile);\n// });\n//\n// let btn_trimming_mobile = document.getElementById('btn-trimming-mobile');\n// let trimming_mobile = document.getElementById('trimming-mobile');\n// btn_trimming_mobile.addEventListener('click', function() {\n//     hideClassTabs();\n//     btn_trimming_mobile.classList.add('btn-tab-active');\n//     show(trimming_mobile);\n// });\n//\n// let btn_express_molt_mobile = document.getElementById('btn-express-molt-mobile');\n// let express_molt_mobile = document.getElementById('express-molt-mobile');\n// btn_express_molt_mobile.addEventListener('click', function() {\n//     hideClassTabs();\n//     btn_express_molt_mobile.classList.add('btn-tab-active');\n//     show(express_molt_mobile);\n// });\n//\n// let btn_cats_mobile = document.getElementById('btn-cats-mobile');\n// let cats_mobile = document.getElementById('cats-mobile');\n// btn_cats_mobile.addEventListener('click', function() {\n//     hideClassTabs();\n//     btn_cats_mobile.classList.add('btn-tab-active');\n//     show(cats_mobile);\n// });\n//\n// let btn_additional_services_mobile = document.getElementById('btn-additional-services-mobile');\n// let additional_services_mobile = document.getElementById('additional-services-mobile');\n// btn_additional_services_mobile.addEventListener('click', function() {\n//     hideClassTabs();\n//     btn_additional_services_mobile.classList.add('btn-tab-active');\n//     show(additional_services_mobile);\n// });\n\nfunction log(data) {\n    console.log(data);\n}\n\nfunction hideClassTabs() {\n    let tab_btn = document.getElementsByClassName('tab-btn');\n    let tabs_price = document.getElementsByClassName('tabs-price');\n\n    for (let i = 0; i < tab_btn.length; i++) {\n        tab_btn[i].classList.remove('btn-tab-active');\n    }\n\n    for (let i = 0; i < tabs_price.length; i++) {\n        tabs_price[i].classList.add('hidden');\n    }\n}\n\nfunction hide(el) {\n    el.classList.add('hidden');\n}\n\nfunction show(el) {\n    el.classList.remove('hidden');\n}\n\nconst codeTarget = (code, target) => {\n    ym(code,'reachGoal',target)\n    log('codeTarget()')\n}\n\n// ym(70137172,'reachGoal','nazhatie-na-knopku-zapis')\n// ym(70137172,'reachGoal','nazhatie-na-telefon')\n\nconst setCookie = (name, value) => {\n    document.cookie = encodeURIComponent(name) + '=' + encodeURIComponent(value)\n    let cookie = document.cookie\n    console.log('cookie = ', cookie)\n}\n\n// возвращает куки с указанным name,\n// или undefined, если ничего не найдено\nfunction getCookie(name) {\n    let matches = document.cookie.match(new RegExp(\n        \"(?:^|; )\" + name.replace(/([\\.$?*|{}\\(\\)\\[\\]\\\\\\/\\+^])/g, '\\\\$1') + \"=([^;]*)\"\n    ));\n\n    return matches ? decodeURIComponent(matches[1]) : undefined;\n}\n\nfunction deleteCookie(name) {\n    setCookie(name, '', {\n        'max-age': -1\n    })\n}\n\n\n//# sourceURL=webpack:///./public/js/custom.js?");

/***/ })

/******/ });