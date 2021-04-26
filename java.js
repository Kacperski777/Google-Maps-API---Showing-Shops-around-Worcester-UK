night = [
  {
    "featureType": "administrative",
    "elementType": "geometry",
    "stylers": [
      {
        "visibility": "on"
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
    "featureType": "administrative.neighborhood",
    "elementType": "labels",
    "stylers": [
      {
        "color": "#f5f4f4"
      }
    ]
  },
  {
    "featureType": "landscape",
    "stylers": [
      {
        "color": "#787878"
      }
    ]
  },
  {
    "featureType": "landscape",
    "elementType": "geometry",
    "stylers": [
      {
        "weight": 1
      }
    ]
  },
  {
    "featureType": "landscape.man_made",
    "stylers": [
      {
        "color": "#4f4f4f"
      }
    ]
  },
  {
    "featureType": "landscape.natural",
    "elementType": "labels",
    "stylers": [
      {
        "color": "#f5f4f4"
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
        "color": "#b0b0b0"
      },
      {
        "visibility": "simplified"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels",
    "stylers": [
      {
        "color": "#ffffff"
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
        "color": "#ffffff"
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
        "color": "#ffffff"
      },
      {
        "visibility": "simplified"
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
        "visibility": "simplified"
      }
    ]
  },
  {
    "featureType": "transit",
    "stylers": [
      {
        "color": "#f3e2e2"
      },
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#75e3ff"
      },
      {
        "saturation": -15
      },
      {
        "lightness": -100
      },
      {
        "visibility": "simplified"
      }
    ]
  }
]


day = [
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
//declare a reference to the map object name it map
var map;

//Declare a reference to the infoObj for the infowindow name it inforobj
var InforObj = [];
var i;

function time(){
  var date = new Date();

  if (date.getHours() > 8 && date.getHours() < 20){
    return day;
  }
  else{
    return night;
  }
}


//set the initialize settings for the map
function initialize(){
  var latlng = new google.maps.LatLng(52.192001,-2.220000);
  const WORCESTER_BOUNDS = {
  north: 52.24525086256363,
  south: 52.14582876876193,
  west: -2.3185013774541093,
  east: -2.107416040295635,
};
//init the map options
  var mapOptions = {
    zoom:15,
    center:latlng,
    disableDefaultUI: true,
    fullscreenControl: true,
    minZoom: 14,
    maxZoom: 17,
    restriction: {
     latLngBounds: WORCESTER_BOUNDS,
     strictBounds: false,
   },
    styles: time()
  }
  map = new google.maps.Map(document.getElementById('map'),mapOptions);
  // Create a <script> tag .
const script = document.createElement("script");
// Set the json java data as the source
script.src =
  "test.js";
document.getElementsByTagName("head")[0].appendChild(script);
}

//Create a list of icons
icons = {
   shopping: {
     icon: "img/shoppingcentre.ico", //shopping cart
   },
   fuel: {
     icon: "img/fuel.ico", //fuel icon
   },
   clothing: {
     icon: "img/clothing.ico", //clothing icon
   },
   restaurant: {
     icon: "img/restaurant.ico", //knife and fork
   },
 };

 // Loop through the results array and place a marker for each
  // set of coordinates.
  eqfeed_callback = function (results) {
  for (let i = 0; i < results.features.length; i++) {


      const coords = results.features[i].geometry.coordinates;
      const latLng = new google.maps.LatLng(coords[1], coords[0]);
      const contentString =
       '<div id="content"><h1 style="font-size: 30px; color: purple">' + results.features[i].geometry.name +
          '</h1>' + '<h2 style="font-size: 15px; color: purple">' + results.features[i].geometry.Address + '</h2>' +
          '<p style="font-size: 12px; color: purple">' + results.features[i].geometry.Description  +'</p> </div>';


   //create a marker within the for loop
      const marker = new google.maps.Marker({
        position: latLng,
        icon: icons[results.features[i].geometry.type].icon,
        map: map,
      });
   //create an info window in the for loop keeping them in scope
      const infowindow = new google.maps.InfoWindow({
          content: contentString,
          maxWidth: 200

      });
      google.maps.event.addListener(map, "click", function(event) {
          infowindow.close();
      });

   //when a map is clicked exectue this function opening an infowindow using the google maps library,
      google.maps.event.addListener(marker, 'click', (function(marker, i) {
       return function() {
         infowindow.close();
         infowindow.setContent(contentString);
         map.setCenter(marker.getPosition());
         map.setZoom(50);
         infowindow.open(map, marker);
       }
     })(marker, i));
    }




  }
