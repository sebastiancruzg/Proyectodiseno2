var marker=L.marker([0,0]);

Map.on('click', function(e) {

    marker.remove(Map);

    marker.setLatLng(e.latlng).addTo(Map);

    var lat= e.latlng.lat;
    var lng= e.latlng.lng;

    

    $.getJSON('maphp.php', {var1: lat, var2: lng}, function (data, textStatus, jqXHR) {
        
        marker.bindPopup ('Su vehículo pasó por este lugar en las siguinetes fechas: ' + data[0].Datemy + ' , ' + data[10].Datemy + ' , ' + data[20].Datemy + ' , ' + data[30].Datemy + ' , ' + data[40].Datemy ).on('click');  
        console.log(data);
        

         
          });
          

        

        
        markersLayer.addLayer(marker);
    });

    

    
      

