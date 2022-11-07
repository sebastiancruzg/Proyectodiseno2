var marker=L.marker([0,0]);

Map.on('click', function(e) {

    marker.remove(Map);

    marker.setLatLng(e.latlng).addTo(Map);

    var lat= e.latlng.lat;
    var lng= e.latlng.lng;

    

    $.getJSON('maphp.php', {var1: lat, var2: lng}, function (data, textStatus, jqXHR) {

        if (data.length == 0) {
            marker.bindPopup ('El vehiculo 1 no ha pasado por este lugar ' ).openPopup(); 
        }
        
        marker.bindPopup ('El vehículo 1 pasó por este lugar en las siguinetes fechas: ' + data[0].Datemy + ' , ' + data[10].Datemy + ' , ' + data[20].Datemy + ' , ' + data[30].Datemy + ' , ' + data[40].Datemy ).openPopup();  
        console.log(data);
        

         
          });

        
        
    });

    var marker2=L.marker([0,0]);

    Map.on('click', function(e) {
    
        marker2.remove(Map);
    
        marker2.setLatLng(e.latlng).addTo(Map);
    
        var lat= e.latlng.lat;
        var lng= e.latlng.lng;
    
        
    
        $.getJSON('maphp2.php', {var1: lat, var2: lng}, function (data, textStatus, jqXHR) {
    
            if (data.length == 0) {
                marker2.bindPopup ('El vehiculo 2 no ha pasado por este lugar ' ).openPopup(); 
            }
            
            marker2.bindPopup ('El vehículo 2 pasó por este lugar en las siguinetes fechas: ' + data[0].Datemy + ' , ' + data[10].Datemy + ' , ' + data[20].Datemy + ' , ' + data[30].Datemy + ' , ' + data[40].Datemy ).openPopup();  
            console.log(data);
            
    
             
              });
    
            
            markersLayer.addLayer(marker2);
        });
    

    

    

    
      

