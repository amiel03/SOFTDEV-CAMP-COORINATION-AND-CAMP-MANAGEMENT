<header>



        <script type="text/javascript">


    //<![CDATA[
    var map;
    var markers = [];
    var infoWindow;
    var locationSelect;


    function load() {
      map = new google.maps.Map(document.getElementById("map"), {
        center: new google.maps.LatLng(12.8797, 121.7740),
        zoom: 5,
        mapTypeId: 'roadmap',
        mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU}
      });
      infoWindow = new google.maps.InfoWindow();




      /*if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }*/

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        };
      /*locationSelect = document.getElementById("locationSelect");
      locationSelect.onchange = function() {
        var markerNum = locationSelect.options[locationSelect.selectedIndex].value;
        if (markerNum != "none"){
          google.maps.event.trigger(markers[markerNum], 'click');
        }
      };*/
   }

   function searchLocations() {
     var address = document.getElementById("addressInput").value;
     var geocoder = new google.maps.Geocoder();
     geocoder.geocode({address: address}, function(results, status) {
       if (status == google.maps.GeocoderStatus.OK) {
        searchLocationsNear(results[0].geometry.location);
       } else {
         alert(address + ' not found');
       }
     });
   }

  /* function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 8,
          center: {lat: 6.75255, lng: 124.80163}
        });
        var geocoder = new google.maps.Geocoder();

        document.getElementById('submit').addEventListener('click', function() {
          geocodeAddress(geocoder, map);
        });
      }

      function geocodeAddress(geocoder, resultsMap) {
        var address = document.getElementById('address').value;
        geocoder.geocode({'address': address}, function(results, status) {
          if (status === 'OK') {
            resultsMap.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({
              map: resultsMap,
              position: results[0].geometry.location
            });
          } else {
            alert('Geocode was not successful for the following reason: ' + status);
          }
        });
      }*/

   function clearLocations() {
     infoWindow.close();
     for (var i = 0; i < markers.length; i++) {
       markers[i].setMap(null);
     }
     markers.length = 0;

     locationSelect.innerHTML = "";
     var option = document.createElement("option");
     option.value = "none";
     option.innerHTML = "See all results:";
     locationSelect.appendChild(option);
   }

   function searchLocationsNear(center) {
     clearLocations();

     var radius = document.getElementById('radiusSelect').value;
     var searchUrl = 'phpsqlsearch_genxml.php?lat=' + center.lat() + '&lng=' + center.lng() + '&radius=' + radius;
     downloadUrl(searchUrl, function(data) {
       var xml = parseXml(data);
       var markerNodes = xml.documentElement.getElementsByTagName("marker");
       var bounds = new google.maps.LatLngBounds();
       for (var i = 0; i < markerNodes.length; i++) {
         var name = markerNodes[i].getAttribute("name");
         var address = markerNodes[i].getAttribute("address");
         var distance = parseFloat(markerNodes[i].getAttribute("distance"));
         var latlng = new google.maps.LatLng(
              parseFloat(markerNodes[i].getAttribute("lat")),
              parseFloat(markerNodes[i].getAttribute("lng")));

         createOption(name, distance, i);
         createMarker(latlng, name, address);
         bounds.extend(latlng);
       }
       map.fitBounds(bounds);
       locationSelect.style.visibility = "visible";
       locationSelect.onchange = function() {
         var markerNum = locationSelect.options[locationSelect.selectedIndex].value;
         google.maps.event.trigger(markers[markerNum], 'click');
       };
      });
    }

    function createMarker(latlng, name, address) {
      var html = "<b>" + name + "</b> <br/>" + address;
      var marker = new google.maps.Marker({
        map: map,
        position: latlng
      });
      google.maps.event.addListener(marker, 'click', function() {
        infoWindow.setContent(html);
        infoWindow.open(map, marker);
      });
      markers.push(marker);
    }

    function createOption(name, distance, num) {
      var option = document.createElement("option");
      option.value = num;
      option.innerHTML = name + "(" + distance.toFixed(1) + ")";
      locationSelect.appendChild(option);
    }

    function downloadUrl(url, callback) {
      var request = window.ActiveXObject ?
          new ActiveXObject('Microsoft.XMLHTTP') :
          new XMLHttpRequest;

      request.onreadystatechange = function() {
        if (request.readyState == 4) {
          request.onreadystatechange = doNothing;
          callback(request.responseText, request.status);
        }
      };

      request.open('GET', url, true);
      request.send(null);
    }

    function parseXml(str) {
      if (window.ActiveXObject) {
        var doc = new ActiveXObject('Microsoft.XMLDOM');
        doc.loadXML(str);
        return doc;
      } else if (window.DOMParser) {
        return (new DOMParser).parseFromString(str, 'text/xml');
      }
    }


    function requesttent(){

       open("request_tent.php");
    }


  var legend = document.getElementById('legend');
for (var style in styles) {
  var name = style.name;
  var icon = style.icon;
  var div = document.createElement('div');
  div.innerHTML = '<img src="' + icon + '"> ' + name;
  legend.appendChild(div);
}

map.controls[google.maps.ControlPosition.RIGHT_BOTTOM].push(document.getElementById('legend'));

  </script>
  </head>

<br/>
<br/>
<br/>
<br/>
<br/>


  <body style="margin:0px; padding:0px;" onload="load()">

<center><iframe src="https://www.google.com/maps/d/embed?mid=1H2UjN64kURTClb-t-PY9tLpb14M" width="950" height="500"></iframe></center>
                <!--<div class="intro-lead-in">Welcome To Our Studio!</div>
                <div class="intro-heading">It's Nice To Meet You</div>-->
                <br/>
                <br/>
<a href="request_tent.php" class="page-scroll btn btn-xl">Request For Tent?</a>
<a href="view_evacuees.php" class="page-scroll btn btn-xl">View Registered Evacuees</a>


    <!--<div>
	Location:
     <input type="text" id="addressInput" size="10"/>
    <select id="radiusSelect">
      <option value="25" selected>25mi</option>
      <option value="100">100mi</option>
      <option value="200">200mi</option>
    </select>-->

    <!--<input type="button" onclick="initMap()" value="Search"/>
    </div></br>
	<input type="button" onclick="searchCamp()" value="Search Camp"/>
	<input type="button" onclick="searchEvac()" value="Search Evacuation Centers"/>
	<input type="button" onclick="mapList()" value="Map Directory"/>
  <div><select id="locationSelect" style="width:100%;visibility:hidden"></select></div>-->
  <div id="map" style="width: 100%; height: 10%"></div>
  <!--<div id="legend"><h3>Legend</h3></div>-->




  </body>

  </center>
 <!-- 6.75255, 124.80163 - Phil
14.60770, 120.98202 - Manila
11.2543, 124.9617 - Tacloban
AIzaSyB2n2JXYxGi0aCarhZ1old66kznkM4JS5Y - API KEY -->

</html>
 </header>
