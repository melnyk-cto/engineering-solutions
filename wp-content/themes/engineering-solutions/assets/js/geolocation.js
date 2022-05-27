jQuery(document).ready(function ($) {
  $.ajax({
    url: 'https://ipinfo.io',
    type: 'GET',
    dataType: 'json',
    success: function (response) {
      console.log(response.country, 'country');
    },
    error: function (error) {
      if (error.status === 429) {
        console.log('Не работает на localhost!');
      }
    }
  });
});
