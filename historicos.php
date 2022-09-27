<!DOCTYPE html>
    <html lang="en">
<head> 
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

        <title> Historicos </title>
</head>

<?php   
ob_start();
include("post.php");
?>

<body>
    <div>
        
        <h1>Historicos</h1>
        
    </div>
    

        <input
            id="start"
            name="start"
            type="datetime-local"
            value="2022-09-24T08:30"/>

        <input
            id="end"
            name="end"
            type="datetime-local"
            value="2022-09-28T08:30"/>

        <button onclick="getInfo()" > Click Here! </button>

    <a href="index.php"> main page </a>

    <script src="/historicos.js"></script>

    
</body>


</html>