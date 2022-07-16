jQuery(document).ready(function ($) {
  const error = (err) => {
    const alert = $(".alert");
    alert.removeClass('d-none');
    setTimeout(() => alert.addClass('d-none'), 4000);
    alert.text(err.message);
  }

  const success = (position) => {
    const latlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude); // New York, US
    new google.maps.Geocoder().geocode({'latLng': latlng}, function (results, status) {
      if (status === google.maps.GeocoderStatus.OK) {
        if (results[1]) {
          let country = null;
          for (let r = 0, rl = results.length; r < rl; r += 1) {
            const result = results[r];
            if (!country && result.types[0] === 'country') country = result.address_components[0].long_name;
            if (country) {
              break;
            }
          }
          console.log(country, 'country');
        }
      }
    });
  }

  navigator.geolocation.getCurrentPosition(success, error);
});