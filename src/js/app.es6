document.addEventListener("DOMContentLoaded", () => {
  const constants = {
    body: document.querySelector('body'),
    menu: document.querySelector('.menu--condensed'),
    menuTrigger: document.querySelector('[data=menu-trigger]'),
    menuDismiss: document.querySelector('[data=menu-dismiss]'),
    mediumBreakpoint: 720,
    menuIsOpen: 'menu-is-visible',
  };

  constants.menuTrigger.onclick = () => {
    menuOpen();
  }

  constants.menuDismiss.onclick = () => {
    menuClose();
  }

  let menuOpen = () => {
    classie.addClass(constants.body, constants.menuIsOpen);
    classie.addClass(constants.menu, constants.menuIsOpen);
  }

  let menuClose = () => {
    classie.removeClass(constants.body, constants.menuIsOpen);
    classie.removeClass(constants.menu, constants.menuIsOpen);
  }
});
