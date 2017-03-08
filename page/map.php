<!doctype html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" media="all">
    <meta name="generator" content="Codeply">
    <title>Map</title>

    </head>
    <body>
        <header>

        </header>

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




        <footer>

        </footer>

            <script
                    src="https://code.jquery.com/jquery-3.1.1.js"
                    integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
                    crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
            <script src="./js/jquery.easing.min.js"></script>
            <script src="./js/wow.js"></script>
            <script src="./js/scripts.js"></script>
            <script async defer type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDKKUKqjb6fRmXB5kU-dplXrn3Qr0Oud3A"></script>
            <script type="text/javascript" src="./js/jquery.googlemap.js"></script>


    </body>
</html>