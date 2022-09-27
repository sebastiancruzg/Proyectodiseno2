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
    include("post.php");
    ?>

<body>
    <div>
        
        <h1>Historicos</h1>
        
    </div>

    <form method="get" target="blank" name="form" action="post.php">
    
        <input
            name="start"
            type="datetime-local"
            datetime="YYYY-MM-DDThh:mm:ssTZD"/>

        <input
            name="end"
            type="datetime-local"
            datetime="YYYY-MM-DDThh:mm:ssTZD"/>

        <button type="submit" > Click Here! </button>

    </form>

    <a href="index.php"> main page </a>

    <script src="/historicos.js"></script>

</body>


</html>