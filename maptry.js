const tilesProvider = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png'

var Map = L.map('map'). setView([10.494963, -75.131142] , 9);

L.tileLayer(tilesProvider,{
    maxZoom: 18,
    attribution: '© OpenStreetMap'
}).addTo(Map)

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

