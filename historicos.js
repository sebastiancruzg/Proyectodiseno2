function getInfo(){

    var star= document.getElementById('start').value;
    var en= document.getElementById('start').value;
    var start=star.replace('T','');
    var end=en.replace('T','');

$.getJSON('post.php', {var1: "start", var2: "start"}, function (data, textStatus, jqXHR) {
    
    var lati = data.map(a => a.latitude);
    var long = data.map(a => a.longitude);

    console.log(lati);
    console.log(long);
    
});

}