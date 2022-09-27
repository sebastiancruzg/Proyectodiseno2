<!DOCTYPE html>
    <html lang="en">
<head> 
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

        <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

        <title> Historicos </title>
</head>

<body>
    <div>
        
        <h1>Historicos</h1>
        
    </div>
    
        <input
            id="start"
            name="start"
            type="datetime-local"
            value="2022-09-26T22:56"/>

        <input
            id="end"
            name="end"
            type="datetime-local"
            value="2022-09-29T00:39"/>

        <button onclick="getInfo()" > Click Here! </button>

    <a href="index.php"> main page </a>

    <script src="/historicos.js"></script>

    
</body>


</html>