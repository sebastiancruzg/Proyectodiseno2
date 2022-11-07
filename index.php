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

        <link href="styles/header.css" rel="stylesheet" type="text/css">

        <title>Hugin tracker</title>

        <link rel="icon" href="/img/logo4.png" type="image/icon type">
    </head>

    <?php   
    ob_start();
    include("data.php");
    $arr=json_decode(ob_get_clean());
    ?>

    <?php   
    ob_start();
    include("data2.php");
    $arr2=json_decode(ob_get_clean());
    ?>

<body>
    <div class="header">
        
        <h1 class="titulo"> Hugin tracker </h1>
        
    </div>

    <div class="nav-bg">
        <nav class="navegacion-principal contenedor">
            <a href="index.php">Recorrido en tiempo real</a>
            <a href="historicos.php">Recorrido historico</a>
        </nav>
    </div>
        
    <section class="hero">
        <div class="contenido-hero">
            <h2>Rastreo de vehículo en tiempo real</h2> 
            <div class="ubicacion">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="88" height="88" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFC107" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z"/>
                    <circle cx="12" cy="11" r="3" />
                    <path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 0 1 -2.827 0l-4.244-4.243a8 8 0 1 1 11.314 0z" />
                </svg>
                <p>Barranquilla, Atlántico</p>
            </div>
            
        </div> <!-- .contenido-hero --> 
    </section>

    <main class="contenedor sombra">

        <div>
            <h3>Vehículo 1</h3>
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

        <div>
            <h3>Vehículo 2</h3>
        </div>

        <div>
        
            <h3>Latitude : <span id="Latitude2"><?php echo $arr2->{"latitude"}?></span></h3>

        </div>
        
        <div>
            <h3>Longitude : <span id="Longitude2"><?php echo $arr2->{"longitude"}?></span> </h3>
        </div>

        <div>
            <h3>Date/Hour : <span id="Date2"><?php echo $arr2->{"date"}?></span></h3>
        </div>
         
       

       
        

        <div id="map" style="height: 500px"></div>

	<script type="text/javascript">

    var Map = L.map('map'). setView([<?php echo $arr->{"latitude"}?>, <?php echo $arr->{"longitude"}?>], 13)
    var marker = L.marker([<?php echo $arr->{"latitude"}?>, <?php echo $arr->{"longitude"}?>]).addTo(Map)

    
    var marker2 = L.marker([<?php echo $arr2->{"latitude"}?>, <?php echo $arr2->{"longitude"}?>]).addTo(Map)

    
    
    </script>
    
        <h2>Nuestros Servicios</h2>

        <div class="servicios">
            <section class="servicio">
                <h3>Ubicación en tiempo real</h3>
                <div class="iconos">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-2" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <line x1="18" y1="6" x2="18" y2="6.01" />
                        <path d="M18 13l-3.5 -5a4 4 0 1 1 7 0l-3.5 5" />
                        <polyline points="10.5 4.75 9 4 3 7 3 20 9 17 15 20 21 17 21 15" />
                        <line x1="9" y1="4" x2="9" y2="17" />
                        <line x1="15" y1="15" x2="15" y2="20" />
                      </svg>
                </div>
                <p>En Hugin tracker se tiene la gran facilidad de poder observar el recorrido en tiempo real de cualquier vehículo con el fin de garantizar su seguridad y confianza. </p>
            </section>
        
            <section class="servicio">
                <h3>App y página web</h3>
                <div class="iconos">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-android" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z"/>
                        <line x1="4" y1="10" x2="4" y2="16" />
                        <line x1="20" y1="10" x2="20" y2="16" />
                        <path d="M7 9h10v8a1 1 0 0 1 -1 1h-8a1 1 0 0 1 -1 -1v-8a5 5 0 0 1 10 0" />
                        <line x1="8" y1="3" x2="9" y2="5" />
                        <line x1="16" y1="3" x2="15" y2="5" />
                        <line x1="9" y1="18" x2="9" y2="21" />
                        <line x1="15" y1="18" x2="15" y2="21" />
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-apple" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z"/>
                        <path d="M9 7c-3 0-4 3-4 5.5 0 3 2 7.5 4 7.5 1.088-.046 1.679-.5 3-.5 1.312 0 1.5.5 3 .5s4-3 4-5c-.028-.01-2.472-.403-2.5-3-.019-2.17 2.416-2.954 2.5-3-1.023-1.492-2.951-1.963-3.5-2-1.433-.111-2.83 1-3.5 1-.68 0-1.9-1-3-1z" />
                        <path d="M12 4a2 2 0 0 0 2 -2a2 2 0 0 0 -2 2" />
                    </svg>
                </div>
                <p> El uso de este sistema de rastreo es muy sencillo, ya que solo se tiene que descarga a una aplicación y acceder al sitio web donde se puede observar la ubicación del vehículo. </p>
            </section>

            <section class="servicio">
                <h3>Recorrido completo</h3>
                <div class="iconos">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pins" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M10.828 9.828a4 4 0 1 0 -5.656 0l2.828 2.829l2.828 -2.829z" />
                        <line x1="8" y1="7" x2="8" y2="7.01" />
                        <path d="M18.828 17.828a4 4 0 1 0 -5.656 0l2.828 2.829l2.828 -2.829z" />
                        <line x1="16" y1="15" x2="16" y2="15.01" />
                      </svg>
                </div>
                <p> Para brindar una mayor seguridad, también se cuenta con la opción de poder observar el recorrido histórico del vehículo, permitiendo localizar por intervalo de horas o por el lugar donde estuvo. </p>
            </section>
        </div> <!--.servicios-->
    



    <script src="/data.js"></script>
    <script src="/data2.js"></script>
    
    </body>

    </html>