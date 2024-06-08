<!DOCTYPE html>
<html lang="en">
   <head>
     
   @include('home.css')
   
   <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
    crossorigin=""/>

    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
    crossorigin=""></script>
    
    <style>
        body {
            padding: 0;
            margin: 0;
        }
        html, body, #map {
            height: 100%;
            width: 100%;
        }
    </style>

   <body class="main-layout">
    
      <header>
         @include('home.header')
      </header>
     
      <div id="map"></div>
  
       
     
         @include('home.footer')

         <script>


            var map = L.map('map');
            map.setView([51.505, -0.09], 13);

            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(map);


            navigator.geolocation.watchPosition(success, error);

            let marker, circle, zoomed;



            function success(pos){

                
                const lat = pos.coords.latitude;
                const lng = pos.coords.longitude;
                const accuracy = pos.coords.accuracy;

                if (marker) {
                    map.removeLayer(marker);
                    map.removeLayer(circle);
                }

                marker = L.marker([lat, lng]).addTo(map)
                circle = L.circle([lat, lng], { radius: accuracy }).addTo(map);

                if (!zoomed) {
                    zoome = map.fitBounds(circle.getBounds());
                }

                

            }



            function error(err) {

                    if (err.code === 1){
                        alert("Berikan Izin Lokasi");
                    } else {
                        alert("tidak bisa mendapatkan lokasi");
                    }

            }


        </script>
   </body>
</html>