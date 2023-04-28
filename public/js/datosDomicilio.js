// * Para obtener el select MUNICIPIOS
let selectEstado = document.getElementById('estado_select');
if (selectEstado) {
    // Detectamos el cambio del select y se llama change ese evento
    selectEstado.addEventListener('change', (e) => {
        fetch('municipios', {
            method: 'POST',
            // Lo que vamos a enviar y del otro lado espera un texto
            body: JSON.stringify({ texto: e.target.value }),
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-Token': document.head.querySelector("[name~=csrf-token][content]").content
            }
            // Hacemos uso de una promesa y recibe un response(variable que puede tener cualquier nombre)
        }).then(response => {
            // Que lo parsee
            return response.json()
        }).then(data => {
            // Se inicializa
            let opciones = "<option disabled selected value=''>Selecciona un municipio</option>";
            // La lista la recibe de los datos del controlaaor
            for (let i in data.lista) {
                opciones += '<option value="' + data.lista[i].clave_Municipio + '">' + data.lista[i].nombre_Municipio + ' - '  + data.lista[i].clave_Municipio + '</option>';
            }
            // Definimos en donde se ve de mostrar
            document.getElementById("municipio_select").innerHTML = opciones;
            // Que muestre el error
        }).catch(error => console.error('Error: ', error));
    });
}

// * Para obtener el select LOCALIDADES
let selectLocalidad = document.getElementById('estado_select');
// * verificar que un elemento con el ID específico exista antes de relacionarlo con un evento
if (selectLocalidad) {
    selectLocalidad.addEventListener('change', (e) => {
        fetch('localidades', {
            method: 'POST',
            body: JSON.stringify({ texto: e.target.value }),
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-Token': document.head.querySelector("[name~=csrf-token][content]").content
            }
        }).then(response => {
            return response.json()
        }).then(data => {
            let opciones = "<option disabled selected value=''>Selecciona una localidad</option>";
            for (let i in data.lista) {
                opciones += '<option value="' + data.lista[i].clave_Localidad + '">' + data.lista[i].nombre_Localidad + ' - ' + data.lista[i].clave_Localidad + '</option>';
            }
            document.getElementById("localidad_select").innerHTML = opciones;
        }).catch(error => console.error(error));
    });
}

function countCodigoPostal(obj) {
    let countCP = 5;
    let strLength = obj.value.length;

    if (strLength === countCP) {
        let selectColonia = document.getElementById('inputCodigoPostal');
        if (selectColonia) {
            
            selectColonia.addEventListener('change', (e) => {
                fetch('colonias', {
                    method: 'POST',
                    body: JSON.stringify({ texto: e.target.value }),
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-Token': document.head.querySelector("[name~=csrf-token][content]").content
                    }
                }).then(response => {
                    return response.json()
                }).then(data => {
                    let opciones = "<option disabled selected value=''>Selecciona una colonia</option>";
                    for (let i in data.lista) {
                        opciones += '<option value="' + data.lista[i].clave_Colonia + '">' + data.lista[i].nombre_Asentamiento + ' - ' + data.lista[i].clave_Colonia + '</option>';
                    }
                    document.getElementById("colonia_select").innerHTML = opciones;
                }).catch(error => console.error(error));
            });
            // * Quitamos el foco del input al terminar de escribir
            selectColonia.blur(); 
        }
    }else if (strLength < countCP){
        let opciones = "<option disabled selected value=''>Selecciona una colonia</option>";
        document.getElementById("colonia_select").innerHTML = opciones;
    }
}

// * Para limitar que solo se escriban números del 1-9
$(document).ready(function () {
    $('input#inputCodigoPostal')
        .keypress(function (event) {
            if (event.which < 48 || event.which > 57 || this.value.length === 5) {
                return false;
            }
        });
});

// * Para evitar pegar texto
window.onload = function () {
    let myInput = document.getElementById('input#inputCodigoPostal');
    if(myInput){
        myInput.onpaste = function (e) {
            e.preventDefault();
            alert("esta acción está prohibida");
        }
    }
}