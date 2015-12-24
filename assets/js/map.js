(function($) {

/*
*  new_map
*
*  This function will render a Google Map onto the selected jQuery element
*
*  @type  function
*  @date  8/11/2013
*  @since 4.3.0
*
*  @param $el (jQuery element)
*  @return  n/a
*/

/*
 * Colors
 */

 var $reddishPink = "#fc3159",
     $purpishBrown = "#493c41",
     $beige = "#f8f1e9",
     $black = "#343434",
     $gray = "#f7f7f7",
     $warmGray = "#737373",
     $maize = "#f7d043",
     $green = "#66FF66";

function new_map( $el ) {

  // var
  var $markers = $el.find('.marker');

  //var
  var stylesArray = [
    {
      featureType: "road.local",
      elementType: "geometry.fill",
      stylers:
      [
          { visibility: "on" },
          {color: $maize}
      ]
    },
    {
      featureType: "landscape.natural",
      elementType: "geometry.fill",
      stylers:
      [
          { visibility: "off" },
          {color: $beige}
      ]
    },
    {
      featureType: "road.local",
      elementType: "labels.text.fill",
      stylers:
      [
          { visibility: "on" },
          {color: '#FFFFFF'}
      ]
    },
    {
      featureType: "road.local",
      elementType: "labels.text.stroke",
      stylers:
      [
          { visibility: "on" },
          {color: '#000000'}
      ]
    },
    {
      featureType: "poi",
      elementType: "labels.text.fill",
      stylers:
      [
          { visibility: "on" },
          {color: '#FFFFFF'}
      ]
    },
    {
      featureType: "poi",
      elementType: "labels.text.stroke",
      stylers:
      [
          { visibility: "off" },
          {color: '#000000'}
      ]
    }
  ]


  // vars
  var args = {
    zoom    : 24,
    center    : new google.maps.LatLng(0, 0),
    scrollwheel: false,
    mapTypeId : google.maps.MapTypeId.ROADMAP
  };


  // create map
  var map = new google.maps.Map( $el[0], args);

  var styledMap = new google.maps.StyledMapType(stylesArray,
      {name: "Styled Map"}
  );
  map.mapTypes.set('map_style', styledMap);
  map.setMapTypeId('map_style');

  // add a markers reference
  map.markers = [];


  // add markers
  $markers.each(function(){

      add_marker( $(this), map );

  });


  // center map
  center_map( map );


  // return
  return map;

}

/*
*  add_marker
*
*  This function will add a marker to the selected Google Map
*
*  @type  function
*  @date  8/11/2013
*  @since 4.3.0
*
*  @param $marker (jQuery element)
*  @param map (Google Map object)
*  @return  n/a
*/

function add_marker( $marker, map ) {

  // Dibujando un  Marcador Personalizado.
  var svgDibujado = {
      path: 'M0.05-20.53c-3.89,0-7.05,3.16-7.05,7.05C-7-9.59,0.05-1,0.05-1S7.1-9.59,7.1-13.48C7.1-17.38,3.94-20.53,0.05-20.53z M0.05-11.28c-1.74,0-3.15-1.41-3.15-3.16c0-1.74,1.41-3.15,3.15-3.15c1.74,0,3.16,1.41,3.16,3.15C3.2-12.69,1.79-11.28,0.05-11.28z',
      fillColor: "#D4145A",
      fillOpacity: 1,
      scale: 3,
      strokeColor: "white",
      strokeWeight: 2
  };
  var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

  // Creando el marcador para el mapa
  var marker = new google.maps.Marker({
      position: latlng,
      icon: svgDibujado, /* aqui va el nombre de la variable del dibujo*/
      title:"Estamos aquí",
      draggable:true,
      animation: google.maps.Animation.BOUNCE,/*Se agrega la animacion aqui  DROP que cae al momento de crear el maker , BOUNCE que debe rebotar*/
      map:map
  });
  // var

  // // create marker
  // var marker = new google.maps.Marker({
  //   position  : latlng,
  //   map     : map
  // });

  // add to array
  map.markers.push( marker );

  // if marker contains HTML, add it to an infoWindow
  if( $marker.html() )
  {
    // create info window
    var infowindow = new google.maps.InfoWindow({
      content   : $marker.html()
    });

    // show info window when marker is clicked
    google.maps.event.addListener(marker, 'click', function() {

      infowindow.open( map, marker );

    });
  }

}

/*
*  center_map
*
*  This function will center the map, showing all markers attached to this map
*
*  @type  function
*  @date  8/11/2013
*  @since 4.3.0
*
*  @param map (Google Map object)
*  @return  n/a
*/

function center_map( map ) {

  // vars
  var bounds = new google.maps.LatLngBounds();

  // loop through all markers and create bounds
  $.each( map.markers, function( i, marker ){

    var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

    bounds.extend( latlng );

  });

  // only 1 marker?
  if( map.markers.length == 1 )
  {
    // set center of map
      map.setCenter( bounds.getCenter() );
      map.setZoom( 16 );
  }
  else
  {
    // fit to bounds
    map.fitBounds( bounds );
  }

}

/*
*  document ready
*
*  This function will render each map when the document is ready (page has loaded)
*
*  @type  function
*  @date  8/11/2013
*  @since 5.0.0
*
*  @param n/a
*  @return  n/a
*/
// global var
var map = null;

$(document).ready(function(){

  $('.acf-map').each(function(){

    // create map
    map = new_map( $(this) );

  });

});

})(jQuery);
