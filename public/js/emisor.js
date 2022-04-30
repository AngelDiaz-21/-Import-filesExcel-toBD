// * Para obtener el select REGIMÉN FISCAL
var selectTipoPersona = document.getElementById('tipo_personaSelect');
if (selectTipoPersona) {
    // Detectamos el cambio del select y se llama change ese evento
    selectTipoPersona.addEventListener('change', (e) => {
        console.log(e.target.length);

        fetch('regimenFiscales', {
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

            console.log(data.lista);

            // Se inicializa
            var opciones = "<option value=''>Selecciona el regimen fiscal</option>";
            // La lista la recibe de los datos del controlaaor
            for (let i in data.lista) {
                opciones += '<option value="' + data.lista[i].clave_regimenFiscal + '">' + data.lista[i].descripcion + '</option>';
            }
            // Definimos en donde se ve de mostrar
            document.getElementById("regimenFiscal_claveSelect").innerHTML = opciones;
            // Que muestre el error
        }).catch(error => console.error('Error: ', error));
    });
}
