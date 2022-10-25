<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
    integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
    crossorigin=""/>

    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
    integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
    crossorigin=""></script>

    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

    

    <title>Historicos</title>

    <link href="styles/header.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="/img/logo4.png" type="image/icon type">
</head>
    


<body>
    <div class="header">
        <img class="logo" src="/img/logo4.png" alt="Logo">
        <h1 class="titulo"> Hugin tracker </h1>
        
    </div>

<main class="contenedor sombra">
    
        <div>
            <h3>Seleccione las fechas que desea consultar</h3>
            <div class="calendar">
                <input onchange="saveStart()" id="start" name="start" type="datetime-local"  min="2022-09-26T22:56"/>
                <input id="end" name="end" type="datetime-local"/>
                <button class="buscar" onclick="getInfo()">Buscar</button>
            </div>
        </div>

    

    <div>
        <a class="pagina" href="index.php"> Página principal</a>
    </div>
    
  
    <div id="map" style="height: 500px"></div>
    <script src="/historicos2.js"></script>
    <script src="/maptry2.js"></script

</main>
</body>
</html>