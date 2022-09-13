var coord = {
    lat: 0,
    lng: 0
};

var map;
var marker; 

async function getData (){

    const response = await fetch("/TheTrackerApp/data.php");
    const data = await response.json();
    console.log(data);
    coord={
        lat:Number(data.Latitude) , 
        lng:Number(data.Longitude)
    }
    marker.setPosition(coord)
    map.setCenter(coord)
    document.getElementById("Latitud").innerText=data.Latitude;
    document.getElementById("Longitud").innerText=data.Longitude;
    document.getElementById("Date").innerText=data.Date;
}
setInterval(getData,3000);

function iniciarMap(){

    map = new google.maps.Map(document.getElementById('map'),{
        zoom: 15,
        center: coord
    });
    
    marker = new google.maps.Marker({
        position: coord,
        map: map
    });

}

