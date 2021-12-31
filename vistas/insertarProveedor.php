
<div class="wrapper">
	<div class="container-fluid">
		<!-- Page-Title -->
		<div class="row">
			<div class="col-sm-12">
				<div class="page-title-box">
					<div class="btn-group pull-right">
						<ol class="breadcrumb hide-phone p-0 m-0">
							<li class="breadcrumb-item"><a href="#">Genesis</a></li>
							<li class="breadcrumb-item active">Administrador</li>
						</ol>
					</div>
					<h4 class="page-title"></h4>
				</div>
			</div>
		</div>
		<!-- end page title end breadcrumb -->
		<div class="row">
			<div class="col-md-4" id="row1" name=row1 >
				<h1>Formulario Proveedor</h1>
				<form method="POST" class="guardar_datos" id="guardar_los_datos" action="../controladores/ControladorProveedor.php">
					<input type="hidden" name="insertar_valores" value="si_insertalo">
					<div class="form-group">
						<label for="tipo">tipo</label>
						<select class="form-control" autocomplete="off" name="tipoP" id="tipoP" placeholder="Ingrese su opcion">
							<option value="1" class="form-group">Persona Natural</option>
							<option value="2" class="form-group">Persona Juridica</option>
						</select>
					</div>
					<div clas="natural">
					<div class="form-group">
						<label for="nombre">Nombre:</label>
						<input type="text" class="form-control" name="nombre" id="nombre" autocomplete="off" required="true" placeholder="Ingrese nombre">
					</div>
			
			            <div class="form-group">
						<label for="apellido">apellido:</label>
						<input type="text" class="form-control" name="apellido" id="apellido" autocomplete="off" required="true" placeholder="Ingrese apellido">
					</div>
					<div class="form-group">
						<label for="correo">Dirección:</label>
						<input type="text" class="form-control" name="direccion" id="direccion" autocomplete="off" required="true" placeholder="Ingrese Dirección">
					</div>
					<div class="form-group">
						<label for="telefono">telefono:</label>
						<input type="phone" class="form-control" name="telefono" id="telefono" autocomplete="off" required="true" placeholder="Ingrese telefono">
					</div>
					</div>
					
					<div class="form-group">
						<label for="apellido">NIT:</label>
						<input type="text" class="form-control" name="apellido" id="apellido" autocomplete="off" required="true" placeholder="Ingrese apellido">
					</div>
					<div class="form-group">
						<label for="">CNR:</label>
						<input type="text" class="form-control" name="cnr" id="cnr" autocomplete="off" required="true" placeholder="Ingrese apellido">
					</div>
					<h3>Datos del encargado</h3>
					<div class="form-group">
						<label for="nombre">Nombre:</label>
						<input type="text" class="form-control" name="nombre" id="nombre" autocomplete="off" required="true" placeholder="Ingrese nombre completo">
					</div clas="Juridica">
				
				<div>
					<button type="submit" class="btn btn-primary"><img src="./public/imagenes/guardar.png" height="40" width="40" onclick="" class="rounded-circle" ></button>
					<button type="reset" id="resetear" name="resetear" class="btn btn-danger"><img src="./public/imagenes/eliminar.png" height="40" width="40" onclick="" class="rounded-circle" ></button>
				</div>
			</form>
          </div>
			<div class="col-md-8">
				<h1>Datos registrados</h1>

				<div id="aqui_la_tabla">
				
			        <table class="table table-bordered">
				      <thead>
					    <tr>
						<th>N°</th>
						<th>Fecha</th>
						<th>cliente</th>
						<th>Total</th>
						<th>N° Comprobante</th>
						<th>Fecha Entrega</th>
						<th>Vendedor</th>
						<th>estado</th>
						<th>Acciones</th>
					   </tr>
				     </thead>
				<tbody>
					 <tr>
				   <td>1</td>
				   <td>12/08/21</td>
				   <td>Selena Renderos</td>
				   <td>$40.00</td>
				   <td>0012</td>
				   <td>01/09/21</td>  <!-- esta fecha siempre debe ser mayor segun dias que necesite la libreria para compretar pedido -->
				   <td>Oscar Urias</td>
				   <td>Pendiente</td>
				   <td>
								<button  type="button" class="btn btn-primary"><img src="./public/imagenes/agregar.png" height="40" width="40" onclick=""class="rounded-circle"></button>
								<button type="button" class="btn btn-danger btn_eliminar" data-id="'.$row['idtusuario'].'"><img src="./public/imagenes/lista.png" height="40" width="40" onclick=""class="rounded-circle"></button>
							</td>
			          <tr>
				</tbody>
			</table>
				</div>
			</div>
		</div>
	</div>
</div> <!-- end container -->
</div>
<!-- end wrapper -->
<script>

$(function(){
	console.log("Esta funcionando");
	cargar_ajax();
	$(document).on("click",".btn_eliminar",function(event){
		event.preventDefault();
		var elemento = $(this);
		var id = elemento.attr("data-id");
		console.log("El id es: ",id);
		var datos = {"eliminar_datos":"si_eliminalos","id":id}
		$.ajax({
			dataType: "json",
			method: "POST",
			url:'./controladores/ControladorProveedor.php',
			data : datos,
		}).done(function(mensaje) {
			if(mensaje[0]=="Exito"){
				alert("Datos eliminados correctamente");
				cargar_ajax();
			}else{
				alert("Datos no eliminados");
			}
		});
	});
	$("#guardar_los_datos").submit(function (event){
		event.preventDefault();
		var datos = $("#guardar_los_datos").serialize();
		console.log("esto trae datosLOV: ",datos);
		$.ajax({
			dataType: "json",
			method: "POST",
			url:'./controladores/ControladorProveedor.php',
			data : datos,
		}).done(function(mensaje) {
			if(mensaje[0]=="Exito"){
				$("#guardar_los_datos").trigger("reset");
				alert("Datos insertados correctamente",mensaje[1]);
				cargar_ajax();
			}else{
				console.error("Los datos no fueron insertados".href=,mensaje);
			}
		});
	});
});
function cargar_ajax(){
	console.log("llega a la funcion ajax");
	// return;
	var datos = {"consultar_info":"este_es_el_valor"};
	$.ajax({
		dataType: "json",
		method: "POST",
		url:'./controladores/ControladorProveedor.php',
		data : datos,
	}).done(function(json) {
		console.log("Estos datos retorna: ",json);
		if (json[0]=="error") {
			console.error("Ocurrio un error");
		}else{
			$("#aqui_la_tabla").empty().html(json[1]);
		}
	}).fail(function() {
		alert( "error". );
	}).always(function() {
		console.log( "complete" );
	});
}
</script>