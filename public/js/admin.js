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
/******/ 	return __webpack_require__(__webpack_require__.s = 4);
/******/ })
/************************************************************************/
/******/ ({

/***/ 4:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(5);


/***/ }),

/***/ 5:
/***/ (function(module, exports) {

$(document).foundation();
/*! slidereveal - v1.1.2 - 2016-05-16
* https://github.com/nnattawat/slidereveal
* Copyright (c) 2016 Nattawat Nonsung; Licensed MIT */
!function (a) {
    var b = function b(a, _b) {
        var c = a.css("padding-" + _b);return c ? +c.substring(0, c.length - 2) : 0;
    },
        c = function c(a) {
        var c = b(a, "left"),
            d = b(a, "right");return a.width() + c + d + "px";
    },
        d = function d(b, c) {
        var d = { width: 250, push: !0, position: "left", speed: 300, trigger: void 0, autoEscape: !0, show: function show() {}, shown: function shown() {}, hidden: function hidden() {}, hide: function hide() {}, top: 0, overlay: !1, zIndex: 1049, overlayColor: "rgba(0,0,0,0.5)" };this.setting = a.extend(d, c), this.element = b, this.init();
    };a.extend(d.prototype, { init: function init() {
            var b = this,
                d = this.setting,
                e = this.element,
                f = "all ease " + d.speed + "ms";e.css({ position: "fixed", width: d.width, transition: f, height: "100%", top: d.top }).css(d.position, "-" + c(e)), d.overlay && (e.css("z-index", d.zIndex), b.overlayElement = a("<div class='slide-reveal-overlay'></div>").hide().css({ position: "fixed", top: 0, left: 0, height: "100%", width: "100%", "z-index": d.zIndex - 1, "background-color": d.overlayColor }).click(function () {
                b.hide();
            }), a("body").prepend(b.overlayElement)), e.data("slide-reveal", !1), d.push && a("body").css({ position: "relative", "overflow-x": "hidden", transition: f, left: "0px" }), d.trigger && d.trigger.length > 0 && d.trigger.on("click.slideReveal", function () {
                e.data("slide-reveal") ? b.hide() : b.show();
            }), d.autoEscape && a(document).on("keydown.slideReveal", function (c) {
                0 === a("input:focus, textarea:focus").length && 27 === c.keyCode && e.data("slide-reveal") && b.hide();
            });
        }, show: function show(b) {
            var d = this.setting,
                e = this.element,
                f = this.overlayElement;(void 0 === b || b) && d.show(e), d.overlay && f.show(), e.css(d.position, "0px"), d.push && ("left" === d.position ? a("body").css("left", c(e)) : a("body").css("left", "-" + c(e))), e.data("slide-reveal", !0), (void 0 === b || b) && setTimeout(function () {
                d.shown(e);
            }, d.speed);
        }, hide: function hide(b) {
            var d = this.setting,
                e = this.element,
                f = this.overlayElement;(void 0 === b || b) && d.hide(e), d.push && a("body").css("left", "0px"), e.css(d.position, "-" + c(e)), e.data("slide-reveal", !1), (void 0 === b || b) && setTimeout(function () {
                d.overlay && f.hide(), d.hidden(e);
            }, d.speed);
        }, toggle: function toggle(a) {
            var b = this.element;b.data("slide-reveal") ? this.hide(a) : this.show(a);
        }, remove: function remove() {
            this.element.removeData("slide-reveal-model"), this.setting.trigger && this.setting.trigger.length > 0 && this.setting.trigger.off(".slideReveal"), this.overlayElement && this.overlayElement.length > 0 && this.overlayElement.remove();
        } }), a.fn.slideReveal = function (b, c) {
        return void 0 !== b && "string" == typeof b ? this.each(function () {
            var d = a(this).data("slide-reveal-model");"show" === b ? d.show(c) : "hide" === b ? d.hide(c) : "toggle" === b && d.toggle(c);
        }) : this.each(function () {
            a(this).data("slide-reveal-model") && a(this).data("slide-reveal-model").remove(), a(this).data("slide-reveal-model", new d(a(this), b));
        }), this;
    };
}(jQuery);
function initTinyMCE() {
    tinymce.init({
        selector: 'textarea.rte',
        branding: 'false',
        plugins: ['advlist autolink lists link image charmap preview hr anchor pagebreak', 'searchreplace wordcount visualblocks visualchars code fullscreen', 'insertdatetime media nonbreaking save table contextmenu directionality', 'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc help'],
        menubar: '',
        toolbar: 'fullscreen | undo redo | styleselect | forecolor backcolor | bold italic underline | alighleft aligncenter alignright alignjustify | bullist numlist outdent indent | table | link image | code',
        plugin_preview_height: 800,
        plugin_preview_width: 1200,
        convert_urls: false,
        content_css: [window.site_css],
        visual: false,
        relative_urls: false,
        visualblocks_default_state: false,
        end_container_on_empty_block: true,
        force_root_block: 'p'
    });
}

initTinyMCE();

$(document).ready(function () {
    // Start of slider functions
    $slider = $('#slider').slideReveal({
        'overlay': true,
        'width': 400,
        'push': false,
        'position': 'right'
    });
    $slider.find('button.cancel').on('click', function () {
        $slider.slideReveal("hide");
    });
    $slider.find('button.confirm').on('click', function () {
        var route = $(this).data('route');
        var token = $("meta[name='csrf-token']").attr('content');
        console.log(token);
        if (route == undefined) {
            $slider.slideReveal("hide");
        } else {

            $.ajax({
                url: route,
                method: "delete",
                headers: {
                    'X-CSRF-TOKEN': token
                },
                success: function success(data) {
                    $slider.slideReveal("hide");
                    location.reload();
                }
            });
        }
    });
    $('a.delete').each(function () {
        $(this).on('click', function (event) {
            event.preventDefault();
            var route = $(this).data('route');
            var message = $(this).data('message');
            $slider.find('#confirm-message').html(message);
            $slider.find('button.confirm').data('route', route);
            $slider.slideReveal("show");
        });
    });

    // Logout links.
    $('a#logout-link').on('click', function () {
        $(this).find('form#logout-form').submit();
    });
});

/***/ })

/******/ });