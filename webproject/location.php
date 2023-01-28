<!DOCTYPE html>
<!--weeb-->
<html>
<head>
  <meta charset ="utf-8">
  <title>بذرة </title>
  <h1><img src="https://i.dlpng.com/static/png/6647896_preview.png" alt= "bathrah logo" width="200" height="150"></h1>
  
  <style>
    h1 {

      text-align: center;
    }
  ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #daf1e4;
          text-align: center;
    }
    li {
        float: right;
    }

    li a {
        display: block;
        color: #1c4a30;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    li a:hover {
        background-color: #7dcfa7;
    }

.show:hover ul.list-categories{
  max-height: inherit;
  opacity: 1;
  background-color: #7dcfa7;
  display: block;
}

.list-categories{
  list-style-type: none;
  padding: 0px;
  margin: 0px;
  max-height: 0px;
  opacity: 0;
  overflow: hidden;
  transition: opacity 300ms ease;
}

</style>
</head>
<body>

<ul>
  <li><a href="login.php">تسجيل</a></li>
  <li><a href="index.php">الرئيسية</a></li>
  <li><a href="location.php">مشاتل بجواري </a></li>
  <li><div class="show"><a href="types.php">التصنيفات</a>
<ul class="list-categories">
<li><a href="indoorplants.php">النباتات الداخلية </a> <br>
  </li><br/>
  <br/> 
  <li><a href="outdoorplants.php">النباتات الخارجية</a>
  <br></li><br/> <br/>
  <li><a href="flowerscactus.php">زهور وصبار<br></a>
  </li><br/> <br/>
   <li><a href="harmfulplants.php">نباتات ضارة للحيوانات<br></a>
  </li><br/> <br/>
</ul>
</div>
    <li> <div class="show"><a>حسابي</a>
    <ul class="list-categories">
      <li><a href="logout.php">تسجيل الخروج</a>
      </li></ul>
    </ul>
  </div>
 

<br><br><br>

<div class="pac-card" id="pac-card">
    <div>
        <div id="label">Location search</div>
    </div>
    <div id="pac-container">
        <input id="pac-input" type="text" placeholder="Enter a location">
        <div id="location-error"></div>
    </div>
</div>
<div id="map"></div>
<div id="infowindow-content">
    <img src="" width="16" height="16" id="place-icon"> <span
        id="place-name" class="title"></span><br> <span
        id="place-address"></span>
</div>

<script>
  function initMap() {
    var centerCoordinates = new google.maps.LatLng(37.6, -95.665);
    var map = new http:google.maps.Map(document.getElementById('map'), {
      center : centerCoordinates,
      zoom : 4
    });
    var card = document.getElementById('pac-card');
    var input = document.getElementById('pac-input');
    var infowindowContent = document.getElementById('infowindow-content');

    map.controls[http:google.maps.ControlPosition.TOP_RIGHT].push(card);

    var autocomplete = new google.maps.places.Autocomplete(input);
    var infowindow = new google.maps.InfoWindow();
    infowindow.setContent(infowindowContent);

    var marker = new google.maps.Marker({
      map : map
    });

    autocomplete.addListener('place_changed',function() {
      document.getElementById("location-error").style.display = 'none';
      infowindow.close();
      marker.setVisible(false);
      var place = autocomplete.getPlace();
      if (!place.geometry) {
        document.getElementById("location-error").style.display = 'inline-block';
        document.getElementById("location-error").innerHTML = "Cannot Locate '" + input.value + "' on map";
        return;
      }

      map.fitBounds(place.geometry.viewport);
      marker.setPosition(place.geometry.location);
      marker.setVisible(true);

      infowindowContent.children['place-icon'].src = place.icon;
      infowindowContent.children['place-name'].textContent = http://place.name;
      infowindowContent.children['place-address'].textContent = input.value;
      http:infowindow.open(map, marker);
    });
  }
</script>
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCXMpUMMrjVgbWeWF99SfuFQhe06-ST62s&libraries=places&callback=initMap"
    async defer></script>

</body>
</html>