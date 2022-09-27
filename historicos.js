const tilesProvider = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png'

var Map = L.map('map'). setView([0,0] , 13);

L.tileLayer(tilesProvider,{
    maxZoom: 18,
    attribution: '© OpenStreetMap'
}).addTo(Map)

function getInfo(){
    var star= document.getElementById('start').value;
    var en= document.getElementById('start').value;
    var start=star.replace('T',' ');
    var end=en.replace('T',' ');

$.getJSON('post.php', {var1: "start", var2: "start"}, function (data, textStatus, jqXHR) {
    console.log(data);
    var lati = data.map(a => a.Latitude);
    var long = data.map(a => a.Longitude);

    var locations = []
            for (var i = 0; i < lati.length; i++) {
            locations[i] = [lati[i],long[i]];
            }

     var Map = L.map('map'). setView(locations[0] , 13)
     var polyline = L.polyline(locations).addTo(Map);

     
    
});

}