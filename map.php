<?php
echo '
<script src="java.js" charset="utf-8"></script>
<body onLoad="initialize()">
<link rel="stylesheet" href="css/legend.css">
 <div id="map" style="width: 100%; height: 70rem;"></div>
  <div id="legend">
   <ul>
     <li>   <image src= "img/shoppingcentre.ico"> Shopping Centre</image> </li>
      <li>   <image src= "img/fuel.ico"> </image>Petrol Station </li>
       <li>   <image src= "img/clothing.ico"> </image>Shopping Outlet </li>
        <li>   <image src= "img/restaurant.ico"> </image>Restaurant </li>
   </ul>
  </div>
  <div>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBr-cMsWYQHAG8DxMAl3aSD8SQ1I0AkEO8&callback=initMap&libraries=places&v=weekly"
      async
    ></script>
    </div>
</body>






'
?>
