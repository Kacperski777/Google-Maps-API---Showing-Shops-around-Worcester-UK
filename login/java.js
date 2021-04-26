


var map;
var InforObj = [];
var i;
function initialize(){
  var latlng = new google.maps.LatLng(52.192001,-2.220000);
  const WORCESTER_BOUNDS = {
  north: 52.24525086256363,
  south: 52.14582876876193,
  west: -2.3185013774541093,
  east: -2.107416040295635,
};
  var mapOptions = {
    zoom:13,
    center:latlng,
    disableDefaultUI: true,
    fullscreenControl: true,
    minZoom: 14,
    maxZoom: 17,
    restriction: {
     latLngBounds: WORCESTER_BOUNDS,
     strictBounds: false,
   },
    styles: [
  {
    "featureType": "administrative",
    "elementType": "geometry",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "administrative.neighborhood",
    "stylers": [
      {
        "color": "#000000"
      },
      {
        "saturation": -50
      },
      {
        "lightness": 35
      },
      {
        "visibility": "simplified"
      }
    ]
  },
  {
    "featureType": "landscape",
    "stylers": [
      {
        "color": "#ffffff"
      }
    ]
  },
  {
    "featureType": "landscape",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#ededed"
      },
      {
        "weight": 1
      }
    ]
  },
  {
    "featureType": "landscape.man_made",
    "stylers": [
      {
        "color": "#ffffff"
      }
    ]
  },
  {
    "featureType": "landscape.natural",
    "elementType": "labels",
    "stylers": [
      {
        "color": "#000000"
      },
      {
        "visibility": "simplified"
      }
    ]
  },
  {
    "featureType": "poi",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "stylers": [
      {
        "color": "#fcdef3"
      },
      {
        "visibility": "simplified"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#f394f5"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "labels.icon",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "road.arterial",
    "elementType": "labels",
    "stylers": [
      {
        "color": "#000000"
      },
      {
        "visibility": "simplified"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#d818c5"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "labels",
    "stylers": [
      {
        "visibility": "on"
      },
      {
        "weight": 4
      }
    ]
  },
  {
    "featureType": "road.local",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "transit",
    "stylers": [
      {
        "color": "#fcdef3"
      },
      {
        "visibility": "off"
      }
    ]
  }
]
  }
  map = new google.maps.Map(document.getElementById('map'),mapOptions);
  // Create a <script> tag and set the USGS URL as the source.
const script = document.createElement("script");
// This example uses a local copy of the GeoJSON stored at
// http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/2.5_week.geojsonp
script.src =
  "test.js";
document.getElementsByTagName("head")[0].appendChild(script);
}


icons = {
   shopping: {
     icon: "img/shoppingcentre.ico",
   },
   fuel: {
     icon: "img/fuel.ico",
   },
   clothing: {
     icon: "img/clothing.ico",
   },
   restaurant: {
     icon: "img/restaurant.ico",
   },
 };

// Loop through the results array and place a marker for each
// set of coordinates.
eqfeed_callback = function (results) {
for (let i = 0; i < results.features.length; i++) {


  const coords = results.features[i].geometry.coordinates;
  const latLng = new google.maps.LatLng(coords[1], coords[0]);
  const contentString = '<div id="content"><h1 style="font-size: 30px; color: purple">' + results.features[i].geometry.name +
      '</h1><p style="font-size: 20px; color: purple">Lorem ipsum dolor sit amet, vix mutat posse suscipit id, vel ea tantas omittam detraxit.</p></div>';

  const marker = new google.maps.Marker({
    position: latLng,
    icon: icons[results.features[i].geometry.type].icon,
    map: map,
  });

  const infowindow = new google.maps.InfoWindow({
      content: contentString,
      maxWidth: 200

  });

  marker.addListener('click', function () {
      infowindow.open(marker.get('map'), marker);
      InforObj[0] = infowindow;
  });
}



}
