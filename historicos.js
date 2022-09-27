var form = document.getElementById('form');

form.addEventListener('submit',function(e){
    e.preventDefault();
    console.log('click')
    var datos= new FormData(form);
    
    console.log(document.getElementById('start').value);
    console.log(document.getElementById('end').value);

})