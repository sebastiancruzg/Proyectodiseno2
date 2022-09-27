var form = document.getElementById('form');

form.addEventListener('submit',function(e){
    e.preventDefault();
    console.log('click')
    var datos= new FormData(form);
    
    var star= document.getElementById('start').value;
    var en= document.getElementById('end').value;
    
    var start=star.replace('T',' ');
    var end=en.replace('T',' ');

    console.log(start);
    console.log(end);


})