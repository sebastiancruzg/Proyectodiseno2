<!DOCTYPE html>
    <html lang="en">
    <head> 
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
            id="party"
            type="datetime-local"
            name="partydate"
            value="2017-06-01T08:30" />

            <a href="index.php">main page </a>

        <div id="map" style="height: 500px">
        </div>

	<script type="text/javascript">

    var Map = L.map('map'). setView([<?php echo $arr->{"latitude"}?>, <?php echo $arr->{"longitude"}?>], 13)
    var marker = L.marker([<?php echo $arr->{"latitude"}?>, <?php echo $arr->{"longitude"}?>]).addTo(Map)
    
    </script>


    <script src="/data.js"></script>
    
    </body>


</html>