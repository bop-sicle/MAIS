<?php 
    session_start();
   include('includes/header.php');
   include('includes/navbar.php');
   include('add_user.php');
   include('includes/config.php');
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    
                    
<!DOCTYPE html >
  <head>
    <meta name="viewport" content="initial-scale=3.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>BAMIS - Map </title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>

<html>
  <body>
    <div id="map"></div>
<div class="container">
    <script>
      var customLabel = {
        restaurant: {
          label: ''
        },
        bar: {
          label: ''
        }
      };

        function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: new google.maps.LatLng(14.012647988527924, 120.78764153842982),
          zoom: 12
        });
        var infoWindow = new google.maps.InfoWindow;

          // Change this depending on the name of your PHP or XML file
          downloadUrl('xml.php', function(data) {
            var xml = data.responseXML;
            var markers = xml.documentElement.getElementsByTagName('marker');
            Array.prototype.forEach.call(markers, function(markerElem) {
              var id = markerElem.getAttribute('id');
              var name = markerElem.getAttribute('name');
              var address = markerElem.getAttribute('address');
              var type = markerElem.getAttribute('type');
              var contact = markerElem.getAttribute('contact');
              var crops = markerElem.getAttribute('crops');
              var livestock = markerElem.getAttribute('livestock');
              var point = new google.maps.LatLng(
                  parseFloat(markerElem.getAttribute('lat')),
                  parseFloat(markerElem.getAttribute('lng')));

              var infowincontent = document.createElement('div');
              var strong = document.createElement('strong');
              strong.textContent = name
              infowincontent.appendChild(strong);
              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = address
              infowincontent.appendChild(text);
              var icon = customLabel[type] || {};
              var marker = new google.maps.Marker({
                map: map,
                position: point,
                label: icon.label
              });

              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = contact
              infowincontent.appendChild(text);

              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = crops
              infowincontent.appendChild(text);

              infowincontent.appendChild(document.createElement('br'));

              var text = document.createElement('text');
              text.textContent = livestock
              infowincontent.appendChild(text);
            

              marker.addListener('click', function() {
                infoWindow.setContent(infowincontent);
                infoWindow.open(map, marker);
              });
            });
          });
        }



      function downloadUrl(url, callback) {
        var request = window.ActiveXObject ?
            new ActiveXObject('Microsoft.XMLHTTP') :
            new XMLHttpRequest;

        request.onreadystatechange = function() {
          if (request.readyState == 4) {
            request.onreadystatechange = doNothing;
            callback(request, request.status);
          }
        };

        request.open('GET', url, true);
        request.send(null);
      }

      function doNothing() {}
    </script>

<script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtS7FKa0Htep0uWLufFtDhMQCtB0I8VjI&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
    </div>
  </body>
</html>

                            


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


<?php 
   include('../includes/footer.php');
   include('../includes/scripts.php');
?>