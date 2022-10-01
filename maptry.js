const tilesProvider = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png'

var Map = L.map('map'). setView([10.494963, -75.131142] , 9);

L.tileLayer(tilesProvider,{
    maxZoom: 18,
    attribution: '© OpenStreetMap'
}).addTo(Map)

var i=0;
Map.on('click', function(e) {
    if (i!=0){
        
    }
    var marker = L.marker(e.latlng).addTo(Map) 
    console.log(e.latlng)

});


