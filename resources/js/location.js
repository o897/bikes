function myMap() {
  var mapProp= {
    center:new google.maps.LatLng(-25.507856, 28.017113),
    zoom:14,
  };
  var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
  }