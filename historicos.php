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

    <form id="form">
    
        <input
            id="start"
            name="start"
            type="datetime-local"
            datetime="YYYY-MM-DDThh:mm:ssTZD"/>

        <input
            id="end"
            name="end"
            type="datetime-local"
            datetime="YYYY-MM-DDThh:mm:ssTZD"/>

        <button type="submit" > Click Here! </button>

    </form>

    <a href="index.php"> main page </a>

    <script src="/historicos.js"></script>

</body>


</html>