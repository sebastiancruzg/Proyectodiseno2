
L.tileLayer(tilesProvider,{
    maxZoom: 18,
    attribution: '© OpenStreetMap'
}).addTo(Map)

var marker2 = L.marker([0,0])
var latref2=0;
var longref2=0;
async function getData (){

    

    const response = await fetch("data2.php");
    const data = await response.json();
    console.log(data);

    marker2.setLatLng([data.latitude, data.longitude]).addTo(Map) 

    //Poly
    if(latref2!=0){

        var latlngs2 = [];
        latlngs2=[[latref2,longref2],[data.latitude,data.longitude]];   
        var polyline = L.polyline(latlngs2,{color: 'orange'}).addTo(Map)

    }

    document.getElementById("Latitude2").innerText=data.latitude;
    document.getElementById("Longitude2").innerText=data.longitude;
    document.getElementById("Date2").innerText=data.date;

    latref2=data.latitude;
    longref2=data.longitude;
    
}
setInterval(getData,3000);