<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tracker APP</title>
</head>

<?php   
ob_start();
include("data.php");
$arr=json_decode(ob_get_clean());
?>

<body>
    <div>
        
        <h1>Tracker</h1>
        
    </div>
    
    <div>
        <h3>Latitude : <span id="Latitud"><?php echo $arr->{"Latitude"}?></span></h3>

    </div>
    
    <div>
        <h3>Longitude : <span id="Longitud"><?php echo $arr->{"Longitude"}?></span> </h3>
    </div>

    <div>
        <h3>Date/Hour : <span id="Date"><?php echo $arr->{"Date"}?></span></h3>
    </div>

<script src="/TheTrackerApp/data.js">
</script>





</body>



</html>