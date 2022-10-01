const tilesProvider = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png'

L.tileLayer(tilesProvider,{
    maxZoom: 18,
    attribution: '© OpenStreetMap'
}).addTo(Map)

var Map = L.map('map'). setView([10.494963, -75.131142] , 9);


