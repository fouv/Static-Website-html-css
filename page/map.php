

<div id="MAP-CONTAINER"
    <h2 id="anchor_map" class="title2">Nos restaurants</h2>
        <div id="map"></div>

            <script type="text/javascript">
                $(function() {
                    $("#map").googleMap({
                  zoom: 10, // Initial zoom level (optional)
                  coords: [48.895651, 2.290569], // Map center (optional)
                  type: "ROADMAP" // Map type (optional)
                });
              })
            </script>

            <script type="text/javascript">

                var map;
                function initMap() {
                    map = new google.maps.Map(document.getElementById('map'), {
                        center: {lat: -34.397, lng: 150.644},
                        zoom: 8
                    });
                }
            
            </script>
</div>