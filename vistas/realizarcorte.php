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
				<div class="col-md-4" id="row1" name=row1>
					<h1>Formulario Corte Caja</h1>
					<form method="POST" class="guardar_datos" id="guardar_los_datos" action="./controladores/ControladorCortecaja.php.php">
						<input type="hidden" name="insertar_valores" value="si_insertalo">
						<div class="form-group">
							<label for="nombre">Saldo de Apertura</label>
							<input type="text" class="form-control" name="nombre" id="nombre" data-inputmask="'alias': 'nombre'" autocomplete="off" required="true" placeholder="Ingrese nombre">
						</div>
						<div class="form-group">
							<label for="marca">lista de ventas Diarias</label>
							<div id="aqui_la_tabla">
						<!-- tabla simulada -->
						<table class="table table-bordered" {Style type = "text / css"tablescroll height: 150px;width: 50%; overflow:auto;}>
				      <thead>
					    <tr>
						<th>N°</th>
						<th>Fecha</th>
						<th>Total</th>
						<th>N° Comprobante</th>
						<th>Vendedor</th>
					   </tr>
				     </thead>
				<tbody>
					 <tr>
				   <td>1</td>
				   <td>12/08/21</td>
				   <td>$40.00</td>
				   <td>0012</td>
				   <td>Oscar Urias</td>
				   
							</td>
			          <tr>
				</tbody>
			</table>
						</div>
						<div class="form-group">
							<label for="stock">total efectivo:</label>
							<input type="text" class="form-control" name="stock" id="stock" autocomplete="off" required="true" placeholder="Ingrese stock de producto">
						</div>
						<div class="form-group">
							<label for="valor">Valor</label>
							<input type="text" class="form-control" name="valor" id="valor" autocomplete="off" required="true" placeholder="Ingrese valor">
						</div>
						
						</div>
						<button type="submit" class="btn btn-primary">Corte Caja<img src="./public/imagenes/guardar.png" height="40" width="40" onclick="" class="rounded-circle" ></button>
						
					</form>
				</div>
				<div class="col-md-8">
					<h1>Datos registrados</h1>
					<div id="aqui_la_tabla">
						<!-- tabla simulada -->
						<table class="table table-bordered">
				      <thead>
					    <tr>
						<th>N°</th>
						<th>Fecha</th>
						<th>cliente</th>
						<th>Total</th>
						<th>N° Comprobante</th>
						<th>Vendedor</th>
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
				   <td>Oscar Urias</td>
				   <td>
								<button  type="button" class="btn btn-success " ><img src="./public/imagenes/agregar.png" height="40" width="40" onclick=""class="rounded-circle"></button>
								
							</td>
			          <tr>
				</tbody>
			</table>
						<!-- fin de tabla simulada -->
						
					</div>
				</div><!--fin de col-->
			</div><!--fin de row-->
		</div> <!-- end container -->
	</div>