const tilesProvider = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png'

L.tileLayer(tilesProvider,{
    maxZoom: 18,
    attribution: '© OpenStreetMap'
}).addTo(Map)

var marker = L.marker([0,0])
var latref=0;
var longref=0;
//this is try 2
async function getData (){

    

    const response = await fetch("data.php");
    const data = await response.json();
    console.log(data);

    marker.setLatLng([data.latitude, data.longitude]).addTo(Map) 

    //Poly
    if(latref!=0){

        var latlngs = [];
        latlngs=[[latref,longref],[data.latitude,data.longitude]];   
        var polyline = L.polyline(latlngs,).addTo(Map)

    }

    document.getElementById("Latitude").innerText=data.latitude;
    document.getElementById("Longitude").innerText=data.longitude;
    document.getElementById("Date").innerText=data.date;

    latref=data.latitude;
    longref=data.longitude;
}
setInterval(getData,3000);



