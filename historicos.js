function getInfo(){

$.getJSON('post.php', {var1: "2022-09-26 22:56:21", var2: "2022-09-29 00:39:00"}, function (data, textStatus, jqXHR) {
    
    console.log(data);

});

}