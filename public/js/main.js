// Funcion para desactivar los botones si no tienen un archivo excel cargado en el input
$("#fileInput").change(function(){
    $("button").prop("disabled", this.files.length == 0);
});

// Funcion para activar el select de municipios
$('#estado_select').change(function(){
    $('#municipio_select').removeAttr('disabled');
});

// Funcion para activar el select de localidades
$('#estado_select').change(function(){
    $('#localidad_select').removeAttr('disabled');
});

// Necesitamos el token de laravel
// const csrfToken = document.head.querySelector("[name~=csrf-token][content]").content;

// Detectamos el cambio del select y se llama change ese evento
document.getElementById('estado_select').addEventListener('change',(e)=>{
    fetch('municipios',{
        method: 'POST',
        // Lo que vamos a enviar y del otro lado espera un texto
        body:    JSON.stringify({texto : e.target.value}),
        headers:{
            'Content-Type': 'application/json',
            'X-CSRF-Token': document.head.querySelector("[name~=csrf-token][content]").content
        }
        // Hacemos uso de una promesa y recibe un response(variable que puede tener cualquier nombre)
    }).then(response =>{
        // Que lo parsee
        return response.json()
    }).then(data =>{
        // Se inicializa
        var opciones = "<option value=''>Selecciona un municipio</option>";
        // La lista la recibe de los datos del controlaaor
        for(let i in data.lista){
            opciones += '<option value="'+data.lista[i].clave_Municipio+'">'+data.lista[i].nombre_Municipio+'</option>';
        }
        // Definimos en donde se ve de mostrar
        document.getElementById("municipio_select").innerHTML = opciones;
        // Que muestre el error
    }).catch(error => console.error('Error: ', error));
});

// Para obtener LOCALIDADES
document.getElementById('estado_select').addEventListener('change',(e)=>{
    fetch('localidades',{
        method: 'POST',
        body:    JSON.stringify({texto : e.target.value}),
        headers:{
            'Content-Type': 'application/json',
            'X-CSRF-Token': document.head.querySelector("[name~=csrf-token][content]").content
        }
    }).then(response =>{
        return response.json()
    }).then(data =>{
        var opciones = "<option value=''>Selecciona una localidad</option>";
        for(let i in data.lista){
            opciones += '<option value="'+data.lista[i].clave_Localidad+'">'+data.lista[i].nombre_Localidad+'</option>';
        }
        document.getElementById("localidad_select").innerHTML = opciones;
    }).catch(error => console.error(error));
});