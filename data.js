async function getData (){

    const response = await fetch("/TheTrackerApp/data.php");
    const data = await response.json();
    console.log(data);
    document.getElementById("Latitud").innerText=data.Latitude;
    document.getElementById("Longitud").innerText=data.Longitude;
    document.getElementById("Date").innerText=data.Date;

    //map
    var coord = {lat:data.Latitude ,lng: data.Longitude};
    var map = new google.maps.Map(document.getElementById('map'),{
      zoom: 10,
      center: coord
    });
    var marker = new google.maps.Marker({
      position: coord,
      map: map
    });
    

}
setInterval(getData,3000);