<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
        integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
        crossorigin=""/>

        <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
        integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
        crossorigin=""></script>

        <title> Tracker APP</title>
    </head>

    <?php   
    ob_start();
    include("data.php");
    $arr=json_decode(ob_get_clean());
    ?>

    <body>
        <div>
            
            <h1>Tracker try5</h1>
            
        </div>
        
        <div>
            <h3>Latitude : <span id="Latitude"><?php echo $arr->{"latitude"}?></span></h3>

        </div>
        
        <div>
            <h3>Longitude : <span id="Longitude"><?php echo $arr->{"longitude"}?></span> </h3>
        </div>

        <div>
            <h3>Date/Hour : <span id="Date"><?php echo $arr->{"date"}?></span></h3>
        </div>

        <div id="map" style="height: 500px"></div>

	<script type="text/javascript">

    var Map = L.map('map'). setView([<?php echo $arr->{"latitude"}?>, <?php echo $arr->{"longitude"}?>], 13)
    var marker = L.marker([<?php echo $arr->{"latitude"}?>, <?php echo $arr->{"longitude"}?>]).addTo(Map)
    
    </script>


    <script src="/data.js"></script>
    
    </body>

    </html>