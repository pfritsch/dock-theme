<section id="map" class="contact-map">
</section>

<script>
  var map;
  var styles = {
    default: null,
    silver: [
      {
        elementType: 'geometry',
        stylers: [{color: '#f5f5f5'}]
      },
      {
        elementType: 'labels.icon',
        stylers: [{visibility: 'off'}]
      },
      {
        elementType: 'labels.text.fill',
        stylers: [{color: '#5A5F60'}]
      },
      {
        elementType: 'labels.text.stroke',
        stylers: [{color: '#f5f5f5'}]
      },
      {
        featureType: 'administrative.land_parcel',
        elementType: 'labels.text.fill',
        stylers: [{color: '#bdbdbd'}]
      },
      {
        featureType: 'poi',
        elementType: 'geometry',
        stylers: [{color: '#eeeeee'}]
      },
      {
        featureType: 'poi',
        elementType: 'labels.text.fill',
        stylers: [{color: '#1E2324'}]
      },
      {
        featureType: 'poi.park',
        elementType: 'geometry',
        stylers: [{color: '#e5e5e5'}]
      },
      {
        featureType: 'poi.park',
        elementType: 'labels.text.fill',
        stylers: [{color: '#B7BBBD'}]
      },
      {
        featureType: 'road',
        elementType: 'geometry',
        stylers: [{color: '#ffffff'}]
      },
      {
        featureType: 'road.arterial',
        elementType: 'labels.text.fill',
        stylers: [{color: '#757575'}]
      },
      {
        featureType: 'road.highway',
        elementType: 'geometry',
        stylers: [{color: '#dadada'}]
      },
      {
        featureType: 'road.highway',
        elementType: 'labels.text.fill',
        stylers: [{color: '#5A5F60'}]
      },
      {
        featureType: 'road.local',
        elementType: 'labels.text.fill',
        stylers: [{color: '#B7BBBD'}]
      },
      {
        featureType: 'transit.line',
        elementType: 'geometry',
        stylers: [{color: '#e5e5e5'}]
      },
      {
        featureType: 'transit.station',
        elementType: 'geometry',
        stylers: [{color: '#eeeeee'}]
      },
      {
        featureType: 'water',
        elementType: 'geometry',
        stylers: [{color: '#c9c9c9'}]
      },
      {
        featureType: 'water',
        elementType: 'labels.text.fill',
        stylers: [{color: '#B7BBBD'}]
      }
    ]
  };
  function initMap() {

    var myLatLng = {lat: 47.6577622, lng: 7.2720663999999715};

    // Create the map with no initial style specified.
    // It therefore has default styling.
    map = new google.maps.Map(document.getElementById('map'), {
      center: myLatLng,
      scrollwheel: false,
      zoom: 11,
      mapTypeControl: false,
      styles: styles['silver']
    });

    // Create a marker and set its position.
    var marker = new google.maps.Marker({
      map: map,
      position: myLatLng,
      title: 'Hello World!',
      icon: '<?php echo get_template_directory_uri(); ?>/assets/images/marker.png'
    });

    var contentString = '<div id="content">'+
     '<h2>DOSDA SCHRECK Architectes</h2>'+
     '<div id="bodyContent">'+
     '<p>31 rue de Rollingen<br />68720 TAGOLSHEIM<br />FRANCE</p>'+
     '<p><a href="https://www.google.fr/maps/place/DOSDA+SCHRECK+architectes/@47.6577622,7.2720664,15z/data=!4m5!3m4!1s0x0:0xaea68f6263dfe252!8m2!3d47.6577622!4d7.2720664" target="_blank">'+
     'Voir sur google maps</a> '+
     '</p>'+
     '</div>'+
     '</div>';

    var infowindow = new google.maps.InfoWindow({
      content: contentString
    });

    marker.addListener('click', function() {
      infowindow.open(map, marker);
    });
  }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCOpVMDuqE1zCZJYi_q9u6hh9T893B7kr4&callback=initMap" async defer></script>
