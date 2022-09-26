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

        <title> Historicos </title>
    </head>

    <?php   
    ob_start();
    include("data.php");
    $arr=json_decode(ob_get_clean());
    ?>

<body>
        <div>
            
            <h1>Historicos</h1>
            
        </div>

        <input
            id="start"
            type="datetime-local"
            name="partydate"
            value="2017-06-01T08:30" />

        <input
            id="end"
            type="datetime-local"
            name="partydate"
            value="2017-06-01T08:30" />

        <button onclick="click()">

          Click Here!

        </button>
 
        <p id="demo"></p>

            <a href="index.php"> main page </a>


        <div id="map" style="height: 500px">
        </div>

	<script type="text/javascript">

        var Map = L.map('map'). setView([<?php echo $arr->{"latitude"}?>, <?php echo $arr->{"longitude"}?>], 13)
        var marker = L.marker([<?php echo $arr->{"latitude"}?>, <?php echo $arr->{"longitude"}?>]).addTo(Map)
    
    </script>

    <script type="text/javascript">
        function click() {

            var start=document.getElementById("start").value;
            var end=document.getElementById("end").value; 
            
            document.getElementById("demo").innerHTML = start;

        }
    </script>

    <script src="/data.js"></script>
    
    </body>


</html>