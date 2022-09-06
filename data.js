async function getData (){

    const response = await fetch("/TheTrackerApp/data.php");
    const data = await response.json();
    console.log(data);
    document.getElementById("Latitud").innerText=data.Latitude;
    document.getElementById("Longitud").innerText=data.Longitude;
    document.getElementById("Date").innerText=data.Date;

    
}
setInterval(getData,3000);