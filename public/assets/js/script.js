function contenido_seccion(ruta){
    $.ajax({
        url:   ruta,
        type:  'post',
		data: {'seccion':'test'},
        beforeSend: function () {
    		$("#div_vista_cont").html("Procesando, espere...");
        },
        success:  function (response) {
            $("#div_vista_cont").html(response);//imprime lo que devuelve
        }
    });
}
