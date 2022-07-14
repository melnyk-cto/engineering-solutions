document.addEventListener('DOMContentLoaded', function () {
  // TODO: need fix url
  const iconBase = 'http://localhost/engineering-solutions/wp-content/uploads/2022/06/circle-e1654600134418.png';
  const googleMap = document.getElementById('google-map');

  const mapRender = (myPosition) => {
    if (googleMap) {
      const map = new google.maps.Map(googleMap, {
        center: myPosition,
        zoom: 4,
        scrollwheel: true,
      });

      // set my location
      new google.maps.Marker({
        position: myPosition,
        map,
      });

      // get all markers
      for (let i = 0; i < markers.length; i++) {
        const allLocations = new google.maps.Marker({
          position: {lat: Number(markers[i].lat), lng: Number(markers[i].lng)},
          map,
          icon: iconBase,
          title: markers[i].address,
        });

        // add meta keys
        allLocations.metadata = {
          id: markers[i].id,
        };

        const mapDescription = document.getElementsByClassName('map-description');

        google.maps.event.addListener(allLocations, 'click', function () {
          const metadataId = allLocations.metadata.id;
          const dataId = mapDescription[i].getAttribute('data-id');

          for (let k = 0; k < markers.length; k++) {
            mapDescription[k].classList.remove('active');
          }
          if (dataId === metadataId) {
            mapDescription[i].classList.add('active');
          }
        });
      }

      // add overlay for map
      const mapElement = document.querySelector('#google-map')
      const mapWrapper = document.querySelector('#map')
      mapWrapper.classList.add('scrolloff');
      mapWrapper.addEventListener('click', function (e) {
        mapWrapper.classList.remove('scrolloff');
      })
      mapElement.addEventListener('mouseleave', function (e) {
        mapWrapper.classList.add('scrolloff');
      })
    }
    new Swiper('.map-slider', {
      slidesPerView: 1,
      spaceBetween: 15,
      navigation: {
        nextEl: '.swiper-button-next-map',
        prevEl: '.swiper-button-prev-map',
      },
    });
  }
  const success = (position) => {
    let myLatLng = {lat: position.coords.latitude, lng: position.coords.longitude};
    mapRender(myLatLng);
  }

  const error = (err) => {
    const alert = document.getElementsByClassName('alert')[0];

    let myLatLng = {lat: 52.2042666, lng: 0.1149085};
    mapRender(myLatLng);

    alert.classList.remove('d-none');
    setTimeout(() => alert.classList.add('d-none'), 4000);
    console.log(`ERROR(${err.code}): ${err.message}`);
  }

  navigator.geolocation.getCurrentPosition(success, error);
});
