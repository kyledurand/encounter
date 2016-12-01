const CLASSES = {
  MODAL: 'modal',
  MODAL_CLOSE: 'modal__close',
  MODAL_BACKDROP: 'modal-backdrop',
}

const STATES = {
  ACTIVE: 'is-active',
}

function submitFormToGoogle() {
  var location = $('#location').val();

  $.ajax({
    url: 'https://docs.google.com/forms/d/e/1FAIpQLSdCrs3S7JR7H9f25_ub0jjYbcUOAPJ0dCm3G5xdFh7_dJ4eXg/formResponse?embedded=true',
    data: { 'entry.1961619445': location },
    type: 'POST',
    dataType: 'xml',
    statusCode: {
      0: function () {
        // success function
      },
      200: function () {
        // success function
      }
    }
  });
}

function openModal(target) {
  $(`#${target}`).show();
  let $modalBackdrop = $(`.${CLASSES.MODAL_BACKDROP}`).addClass(STATES.ACTIVE);
  let $body = $('body').css('overflow', 'hidden');

  $(`.${CLASSES.MODAL_CLOSE}`).on('click', function() {
    $(`#${target}`).hide();
    $body.css('overflow', 'visible');
    $modalBackdrop.removeClass(STATES.ACTIVE);
  });

  function closeModal() {
    $(`#${target}`).hide();
    $body.css('overflow', 'visible');
    $modalBackdrop.removeClass(STATES.ACTIVE);
  }

  // $(`.${CLASSES.MODAL_BACKDROP}`).on('click', function() {
  //   closeModal();
  // })

  $(document).keyup(function(event) {
    if (event.keyCode == 27) {
      closeModal();
    }
  });
}
