var form = document.getElementById('form');

form.addEventListener('submit',function(e){
    e.preventDefault();
    console.log('click')
    var datos= new FormData(form);
    
    var star= document.getElementById('start').value;
    var start=star.replace('T','');
    var en= document.getElementById('start').value;
    var end=en.replace('T','');

    console.log(end);
    console.log(start);
})