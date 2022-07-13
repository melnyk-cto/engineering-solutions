jQuery(document).ready(function ($) {
  const submitButton = $('#contact-form-submit');
  const form = $('#contact-form');

  if (!submitButton[0]) return;

  const options = {
    type: "POST",
    url: ajax_form_object.url,
    data: {
      action: 'ajax_form_action_contact_us',
      nonce: ajax_form_object.nonce,
    },
    beforeSubmit: function () {
      submitButton.html('Sending...');
    },
    success: function (request) {
      // Если все поля заполнены, отправляем данные и меняем надпись на кнопке
      form.after('<div class="notification notification_accept">' + request.data + '</div>').slideDown();
      submitButton.html('The order has been sent');
      form.addClass('d-none');
    },
    error: function () {
      form.after('<div class="notification notification_error">Не удалось отправить, исправьте ошибки</div>').slideDown();
      submitButton.html('Submit');
    }
  };

  form.ajaxForm(options);
});