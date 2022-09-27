function getInfo(){

    var star= document.getElementById('start').value;
    var en= document.getElementById('start').value;
    var start=star.replace('T','');
    var end=en.replace('T','');

$.getJSON('post.php', {var1: "start", var2: "start"}, function (data, textStatus, jqXHR) {
    
    console.log(data);

});

}