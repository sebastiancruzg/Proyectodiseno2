
var marker=L.marker([0,0]);

Map.on('click', function(e) {

    marker.remove(Map);

    marker.setLatLng(e.latlng).addTo(Map);

    var lat= e.latlng.lat;
    var lng= e.latlng.lng;

    $.getJSON('maphp.php', {var1: lat, var2: lng}, function (data, textStatus, jqXHR) {
    
        console.log(data);
    
    });

});

