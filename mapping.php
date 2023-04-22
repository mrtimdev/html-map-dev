<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" >
    <style>
        .map {
            height: 100vh;
        }
    </style>
</head>
<body>
    <div id="map" class="map">

    </div>

    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
    <script>
        // var map = L.map('map', {
        //     crs: L.CRS.Simple,
        //     minZoom: -5
        // });
        // var bounds = [[0,0], [1021.5,1023]];
        // var image = L.imageOverlay('./image-project-2.png', bounds).addTo(map);
        // var sol = L.latLng([ 145, 175.2 ]);
        // L.marker(sol).addTo(map);
        // map.setView( [0, 0], 1);



        

        const map = L.map('map', {
            crs: L.CRS.Simple
        });

        const bounds = [[0, 0], [1000, 1000]];
        const image = L.imageOverlay('./image-project-2.png', bounds).addTo(map);

        map.fitBounds(bounds);
        // map.on('click', function(e) {   
        //     console.log({e})     
        //     var popLocation= e.latlng;
        //     var popup = L.popup()
        //     .setLatLng(popLocation)
        //     .setContent('<p>Hello world!<br />This is a nice popup.</p>')
        //     .openOn(map);        
        // });
        var sol = L.latLng([ 368.5996323725111, 267.99211393093265 ]);
        L.marker(sol).addTo(map);
        var sol2 = L.latLng([ 445.74555446106905, 285.48908594660725 ]);
        L.marker(sol2).addTo(map);


        map.on('contextmenu',(e) => {
            console.log({e})
            L.popup()
            .setLatLng(e.latlng)
            .setContent(`<p class="btn btn-primary mark_sold_out">Mark as sold out</p>`)
            .addTo(map)
            .openOn(map);
        });

        L.Control.Watermark = L.Control.extend({
            onAdd: function(map) {
                var img = L.DomUtil.create('p');

                img.innerText = 'PTJ';
                img.style.width = '200px';

                return img;
            },

            onRemove: function(map) {
                // Nothing to do here
            }
        });

        L.control.watermark = function(opts) {
            return new L.Control.Watermark(opts);
        }

        L.control.watermark({ position: 'bottomleft' }).addTo(map);


        $(function() {
            $(document).on('click', '.mark_sold_out',function() {
                alert('Are sour! Mark as sold out.!');
            })
        })
    </script>

</body>
</html>