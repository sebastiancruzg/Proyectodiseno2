const tilesProvider = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png'

var Map = L.map('map'). setView([10.494963, -75.131142] , 9);

L.tileLayer(tilesProvider,{
    maxZoom: 18,
    attribution: '© OpenStreetMap'
}).addTo(Map)

var i=0;
var polylines;

function saveStart(){
    
    var star= document.getElementById('start').value;
    var start=star.replace('T',' ');
    document.getElementById('end').min=start;

}

function getInfo(){
    
    if (i>0){
        polylines.remove(Map);
    }

    var star= document.getElementById('start').value;
    var en= document.getElementById('end').value;
    var start=star.replace('T',' ');
    var end=en.replace('T',' ');

    console.log(start);
    console.log(end);

    i=1;
    
$.getJSON('post.php', {var1: start, var2: end}, function (data, textStatus, jqXHR) {
    
    var lati = data.map(a => a.Latitude);
    var long = data.map(a => a.Longitude);

    var locations = []
            for (var i = 0; i < lati.length; i++) {
            locations[i] = [lati[i],long[i]];
            }

    Map.setView(locations[0]);
    polylines = L.polyline(locations).addTo(Map);

});

}