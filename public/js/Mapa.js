window.addEventListener( 'load',iniciartMap,false);

function iniciartMap(){
    var lati = document.getElementById( "lat" ).value;
    var lngo = document.getElementById( "lng" ).value;
    var Texto = document.getElementById( "lng" ).value;
    var lugar= {lat: parseFloat(lati), lng: parseFloat(lngo) }
    var map = new google.maps.Map(document.getElementById('map'), {
        center: lugar,
        zoom: 13
      });
      var marker = new google.maps.Marker({
        position: lugar,
        map: map,
        title: 'Lugar'
      });

}