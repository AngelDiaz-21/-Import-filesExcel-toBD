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