var geocoder;
var addressInner=document.getElementById('address');
function loadJSON(callback) {
  var xobj = new XMLHttpRequest();
      xobj.overrideMimeType("application/json");
  xobj.open('GET', 'data.json', true);
  xobj.onreadystatechange = function () {
        if (xobj.readyState == 4 && xobj.status == "200") {
          callback(xobj.responseText);
        }
  };
  xobj.send(null);
}





function init() {
  loadJSON( (response)=> {
   // Parsing JSON string into object
      var actual_JSON = JSON.parse(response);
      console.log(actual_JSON) ;
      actual_JSON.forEach(e => {
        console.log(e.Name);
		console.log(e.Category);
      });
     });
 }


var map;
let result=[null,null];
var i;
function initialize(){
  geocoder = new google.maps.Geocoder();
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
}
  function codeAddress(){
    var addressValue=document.getElementById('address').value;
    geocoder.geocode({'address':addressValue},function(results,status){
      if(status=="OK"){
        map.setCenter(results[0].geometry.location);
        console.log(results[0].geometry.location.lng())
        console.log(results[0].geometry.location.lat())
        i+=1;
        var marker=new google.maps.Marker({
          map:map,
          position:results[0].geometry.location,
        });
      }
        else{
          alert("you done fucked up")
        }
    });
  }
init();
