'use strict';

document.addEventListener("DOMContentLoaded", function () {
  var constants = {
    body: document.querySelector('body'),
    menu: document.querySelector('.menu--condensed'),
    menuTrigger: document.querySelector('[data=menu-trigger]'),
    menuDismiss: document.querySelector('[data=menu-dismiss]'),
    mediumBreakpoint: 720,
    menuIsOpen: 'menu-is-visible'
  };

  constants.menuTrigger.onclick = function () {
    menuOpen();
  };

  constants.menuDismiss.onclick = function () {
    menuClose();
  };

  var menuOpen = function menuOpen() {
    classie.addClass(constants.body, constants.menuIsOpen);
    classie.addClass(constants.menu, constants.menuIsOpen);
  };

  var menuClose = function menuClose() {
    classie.removeClass(constants.body, constants.menuIsOpen);
    classie.removeClass(constants.menu, constants.menuIsOpen);
  };
});