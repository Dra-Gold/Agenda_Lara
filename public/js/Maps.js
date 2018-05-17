//Inicia el mapa en el documento
window.addEventListener("load",initMap,false);
//funcion que inicia el mapa
function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: -33.4488897, lng: -70.6692655 },
      zoom: 13
    });
    

   var input = /** @type {!HTMLInputElement} */(
        document.getElementById('pac-input'));


    var autocomplete = new google.maps.places.Autocomplete(input);
    autocomplete.bindTo('bounds', map);

    var infowindow = new google.maps.InfoWindow();
    var marker = new google.maps.Marker({
      map: map,
      anchorPoint: new google.maps.Point(0, -29)
    });

    autocomplete.addListener('place_changed', function() {
      infowindow.close();
      marker.setVisible(false);
      var place = autocomplete.getPlace();
      
      marker.setIcon(/** @type {google.maps.Icon} */({
        url: place.icon,
        size: new google.maps.Size(71, 71),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(17, 34),
        scaledSize: new google.maps.Size(35, 35)
      }));
      marker.setPosition(place.geometry.location);
      marker.setVisible(true);


      var address = '';
      if (place.address_components) {
        address = [
          (place.address_components[0] && place.address_components[0].short_name || ''),
          (place.address_components[1] && place.address_components[1].short_name || ''),
          (place.address_components[2] && place.address_components[2].short_name || '')
        ].join(' ');
      }

      infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
      infowindow.open(map, marker);

      bounds  = new google.maps.LatLngBounds();
      
      $('#latitud').val(marker.position.lat());
      $('#longitud').val(marker.position.lng());

      loc = new google.maps.LatLng(marker.position.lat(), marker.position.lng());
      bounds.extend(loc);
      map.fitBounds(bounds);       
      map.panToBounds(bounds); 

    });

}