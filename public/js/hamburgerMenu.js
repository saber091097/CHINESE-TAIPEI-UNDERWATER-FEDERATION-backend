(function($) {
    "use strict";

    var app = function() {
      var body = undefined;
      var menu = undefined;
      var menuItems = undefined;
      var init = function init() {
        body = document.querySelector('body');
        menu = document.querySelector('.menu-icon');
        menuItems = document.querySelectorAll('.hamburger__list-item');
        applyListeners();
      };

      var applyListeners = function applyListeners() {
        menu.addEventListener('click', function() {
          return toggleClass(body, 'nav-active');
        });

        Array.from( menuItems ).forEach(function( menuItem ) {
          menuItem.addEventListener('click', function( event ) { // add event here so you have access to it!
            event.stopPropagation(); // call stopPropagation() first
            return toggleClass(body, 'nav-active'); // Once you return, the function stops.
          });
        });
      };

      var toggleClass = function toggleClass(element, stringClass) {
        if (element.classList.contains(stringClass))
          element.classList.remove(stringClass);
        else element.classList.add(stringClass);
      };
      init();
    }();
  })(jQuery);
