window.addEventListener( 'load',initMap,false);

function initMap(){
    var lati = document.getElementById( "lat" ).value;
    var lngo = document.getElementById( "lng" ).value;
    var lugar= {lat: parseFloat(lati), lng: parseFloat(lngo) }
    var map = new google.maps.Map(document.getElementById('map'), {
        center: lugar,
        zoom: 15
      });
      var marker = new google.maps.Marker({
        position: lugar,
        map: map,
        title: 'Lugar'
      });

    var input = document.getElementById('buscador'); 
    var autocomplete = new google.maps.places.Autocomplete(input);
    
    autocomplete.bindTo('bounds', map);


    autocomplete.addListener('place_changed', function() {
    
      var infowindow = new google.maps.InfoWindow();
      var marker = new google.maps.Marker({
        map: map,
        anchorPoint: new google.maps.Point(0, -29),
        title: 'Lugar Nuevo'
      });

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
      
      $('#lat').val(marker.position.lat());
      $('#lng').val(marker.position.lng());

      loc = new google.maps.LatLng(marker.position.lat(), marker.position.lng());
      bounds.extend(loc);
            
      map.panToBounds(bounds); 

    });

}