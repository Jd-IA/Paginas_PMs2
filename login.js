var formulario = document.getElementById('formu_login');
var respuesta = document.getElementById('respu');

formulario.addEventListener('submit', function(e){
    e.preventDefault();
    
    var datos = new FormData(formulario);

    console.log(datos.get('usser'));
    console.log(datos.get('passw'));
    


    fetch('login.php',{
        method:'POST',
        body: datos
    })
    .then(res => res.json())
    .then(data =>{console.log(data)
        if(data==='exito'){
            window.location="menu_PM.html"
        }
    } )

})