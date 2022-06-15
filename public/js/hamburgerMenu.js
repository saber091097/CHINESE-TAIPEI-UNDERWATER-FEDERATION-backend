// hamburger 展開的效果 開始
(function ($) {
    "use strict";

    var app = (function () {
        var body = undefined;
        var menu = undefined;
        var menuItems = undefined;
        var init = function init() {
            body = document.querySelector("body");
            menu = document.querySelector(".menu-icon");
            menuItems = document.querySelectorAll(".hamburger__list-item");
            applyListeners();
        };

        var applyListeners = function applyListeners() {
            menu.addEventListener("click", function () {
                return toggleClass(body, "nav-active");
            });

            Array.from(menuItems).forEach(function (menuItem) {
                menuItem.addEventListener("click", function (event) {
                    // add event here so you have access to it!
                    event.stopPropagation(); // call stopPropagation() first
                    return toggleClass(body, "nav-active"); // Once you return, the function stops.
                });
            });
        };

        var toggleClass = function toggleClass(element, stringClass) {
            if (element.classList.contains(stringClass))
                element.classList.remove(stringClass);
            else element.classList.add(stringClass);
        };
        init();
    })();
})(jQuery);
// hamburger 展開的效果 結束

// hamburger 關於我們 dropdown 換頁效果開始
$(document).ready(function () {
    $(".searchBtn").click(function () {
        $(".searchBox").fadeIn();
        $(".bg-blur").fadeIn();
        $("body").addClass("bodyfixed");
        $(".gnb").stop().fadeOut();
        $("header").stop().removeClass("open");
        $(".navBtn").stop().removeClass("openNav");
    });

    $(".searchClose").click(function () {
        $(".searchBox").fadeOut();
        $(".bg-blur").fadeOut();
        $("body").removeClass("bodyfixed");
    });

    $(".navBtn").click(function () {
        $(".gnb").fadeToggle();
        $("header").toggleClass("open");
        $("body").toggleClass("bodyfixed");
        $(".navBtn").toggleClass("openNav");
    });

    $(".menu").click(function () {
        $(this).siblings(".submenu").addClass("subOpen");
    });

    $(".subtitle").click(function () {
        $(".submenu").removeClass("subOpen");
    });
});
// hamburger 關於我們 dropdown 換頁效果 結束
