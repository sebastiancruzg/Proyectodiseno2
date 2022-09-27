function getInfo(){

$.getJSON('post.php', {var1: defdefdate1, var2: defdefdate2}, function (data, textStatus, jqXHR) {
    
    console.log(data);

    let latgot = data.map(a => a.latitud);
    let longot = data.map(a => a.longitud);

    latgot = latgot.map(e => parseFloat(e));
    longot = longot.map(e => parseFloat(e));


    var gotlocations = []
    for (var i = 0; i < latgot.length; i++) {
    gotlocations[i] = [latgot[i],longot[i]];
    }

    if (!gotlocations.length){
        document.getElementById("noresults").showModal();
        
    }
    else{
        clearmap()
        polyline2 = L.polyline(gotlocations, {color: 'blue'}).addTo(map);
        map.setView(gotlocations[0], 15);
    }
});

}