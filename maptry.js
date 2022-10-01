const tilesProvider = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png'

var Map = L.map('map'). setView([10.494963, -75.131142] , 9);

L.tileLayer(tilesProvider,{
    maxZoom: 18,
    attribution: '© OpenStreetMap'
}).addTo(Map)


var marker=L.marker([0,0]);


Map.on('click', function(e) {
    var radius = e.accuracy / 2;

    marker.remove(Map);

    marker.setLatLng(e.latlng).addTo(Map);
    L.circle(e.latlng, radius,
        {
          color: 'red',
          fillColor: '#f03',
          fillOpacity: 0.5,
          radius: 400
        }).addTo(map);
    console.log(e.latlng);

});

