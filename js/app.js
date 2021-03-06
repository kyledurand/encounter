var showTermsParam = 'showTermsOfService';
var termsLink = 'TermsLink';

var CLASSES = {
  MODAL: 'modal',
  MODAL_CLOSE: 'modal__close',
  MODAL_BACKDROP: 'modal-backdrop',
};

var STATES = {
  ACTIVE: 'is-active',
};

function submitFormToGoogle() {
  var location = $('#location').val();

  $.ajax({
    url:
      'https://docs.google.com/forms/d/e/1FAIpQLSdCrs3S7JR7H9f25_ub0jjYbcUOAPJ0dCm3G5xdFh7_dJ4eXg/formResponse?embedded=true',
    data: {'entry.1961619445': location},
    type: 'POST',
    dataType: 'xml',
    statusCode: {
      0: function _() {
        // success function
      },
      200: function _() {
        // success function
      },
    },
  });
}

function openModal(target) {
  $('#' + target).show();
  var $modalBackdrop = $('.' + CLASSES.MODAL_BACKDROP).addClass(STATES.ACTIVE);
  var $body = $('body').css('overflow', 'hidden');

  $('.' + CLASSES.MODAL_CLOSE).on('click', function() {
    $('#' + target).hide();
    $body.css('overflow', 'visible');
    $modalBackdrop.removeClass(STATES.ACTIVE);
  });

  function closeModal() {
    $('#' + target).hide();
    $body.css('overflow', 'visible');
    $modalBackdrop.removeClass(STATES.ACTIVE);
  }

  $(document).keyup(function(event) {
    if (event.keyCode == 27) {
      closeModal();
    }
  });
}

$(document).ready(() => {
  const url = new URL(window.location);
  const params = url.searchParams;
  const showModal = params.get(showTermsParam);
  if (showModal === 'true') {
    const link = document.getElementById(termsLink);
    link.click();
  }
});
