<div class="wrapper">
	<div class="container-fluid">
		<!-- Page-Title -->
		<div class="row">
			<div class="col-sm-12">
				<div class="page-title-box">
					<div class="btn-group pull-right">
						<ol class="breadcrumb hide-phone p-0 m-0">
							<li class="breadcrumb-item"><a href="#">Genesis</a></li>
							<li class="breadcrumb-item active">Vendedor</li>
						</ol>
					</div>                           					
					<h4 class="page-title"></h4>
				</div>
			</div>
		</div>
		<!-- end page title end breadcrumb -->
		<div class="row">
			<div class="col-md-4" id="row1" name=row1>
				<h1>Formulario Ventas</h1>
				<form method="POST" class="guardar_datos" id="guardar_los_datos" action="./controladores/controladorVentas.php">
					<input type="hidden" name="insertar_valores" value="si_insertalo">
					<div class="form-group">
						<label for="nombre">DUI</label>
						<input type="text" class="form-control" name="dui" id="dui" autocomplete="off" required="true" placeholder="ingrese dui" max="10" maxlength="10">	
					</div>
						<button  class="open-modal" onclick="document.getElementById('md_venta').style.display='block'">Agregar venta"></button>
					
					<div class="form-group">
                     <label>Fecha</label>
                      <input  class="form-control" type="date"  id="fecha" name="fecha" value="fecha">
                    </div>
					<div class="form-group">
                     <label>Total</label>
                      <input  class="form-control" type="text" name="total" value="total">
                    </div>
                    <div class="form-group">
                    <label>Efectivo</label>
                      <input class="form-control" type="text" name="total" value="total">
                    </div>

					<div class="form-check">
                          <div class="form-check">
  							<input class="form-check-input" type="radio" name="factura" id="factura">
  							<label class="form-check-label" for="factura">
  							  Factura
 						    </label>
						</div>
							<div class="form-check">
 						 		<input class="form-check-input" type="radio" name="ticket" id="ticket" checked>
 						 		<label class="form-check-label" for="ticket">
  							    Ticket
  								</label>
							</div>
					</div>
					<button type="submit" class="btn btn-primary">Generar Comprobante<img src="./public/imagenes/guardar.png" height="40" width="40" onclick=""></button>
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
						<th>Vendedor</th>
						<th>Acciones</th>
					   </tr>
				     </thead>
				<tbody>
					 <tr>
				   <td>1</td>
				   <td>12/08/21</td>
				   <td>SelenaRenderos</td>
				   <td>$40.00</td>
				   <td>0012</td>
				   <td>Oscar Urias</td>
				   <td>
								<button  type="button" class="btn btn-primary " ><img src="./public/imagenes/agregar.png" height="40" width="40" onclick=""class="rounded-circle"></button>
								<button type="button" class="btn btn-danger btn_eliminar" data-id="'.$row['idtusuario'].'"><img src="./public/imagenes/lista.png" height="40" width="40" onclick=""class="rounded-circle"></button>
							</td>
			          <tr>
				</tbody>
			</table>
				</div>
			</div>
		</div>
	</div> <!-- end container -->
</div>
<!-- end wrapper -->
<div class="modal fade" id="md_venta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id=exampleModalLabel>Agregar Venta</h5>
				<button type="<button" class="close" data-dismiss="modal" arial-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="agregarVentas" id="agregarVenta">
					<input type="hidden" name="insertar_valores" value="si_insertarlo">
					<div class="row">
						<form method="POST" class="guardar_datos" id="guardar_los_datos" action="./controladores/ControladorProducto.php">
						<input type="hidden" name="insertar_valores" value="si_insertalo">
						<div class="form-group">
							<label for="nombre">Nombre</label>
							<input type="text" class="form-control" name="nombre" id="nombre" data-inputmask="'alias': 'nombre'" autocomplete="off" required="true" placeholder="Ingrese nombre">
						</div>
						<div class="form-group">
							<label for="marca">Marca</label>
							<input type="text" class="form-control" name="marca" id="marca" autocomplete="off" required="true" placeholder="Ingrese marca">
						</div>
						<div class="form-group">
							<label for="stock">Stock</label>
							<input type="text" class="form-control" name="stock" id="stock" autocomplete="off" required="true" placeholder="Ingrese stock de producto">
						</div>
						<div class="form-group">
							<label for="valor">Valor</label>
							<input type="text" class="form-control" name="valor" id="valor" autocomplete="off" required="true" placeholder="Ingrese valor">
						</div>
						<div class="form-group" id="combobox" name="combobox" >

							<label for="proveedor">Proveedor</label>	
						<select for="proveedor"name="proveedor" type="text"class="form-control" autocomplete="off" name="proveedor" id="proveedor" data-input mask="'alias': 'proveedor'" placeholder="Ingrese proveedo"
						autocomplete="off" required="true">
						<?php 
				/*		$sql="SELECT idProveedor, nombre FROM proveedor   order by idProducto";
		                  $statement = $conectar->prepare($sql);
		                  $statement->execute();
		                  $datos = $statement->fetchAll(); */ ?>
                        <option value="0">selesccion proveedor</option>
                        <?php /* while($row=$resultado->fetch_assoc()) {  */ ?>  
                         <option value="<?php echo $row['idproveedor'] ?>"><?php/* echo $row['nombre']; */?></option>
                        	<?php /*  }  */?>
                         </select>
						</div>
						<button type="submit" class="btn btn-primary"><img src="./public/imagenes/guardar.png" height="40" width="40" onclick="" class="rounded-circle" ></button>
						<button type="reset" id="resetear" name="resetear" class="btn btn-danger"><img src="./public/imagenes/eliminar.png" height="40" width="40" onclick="" class="rounded-circle" ></button>
					</form>
					</div>
				</form>
			</div>
		</div>
		
	</div>
	
</div>

				<!---	<table>
						<caption>table title and/or explanatory text</caption>
						<thead>
							<tr>
								<th><<td colspan="" rowspan="" headers=""></td></th>
							</tr>z
						</thead>
						<tbody>
							<tr>
								<td>data</td>
							</tr>
						</tbody>
					</table>   -->
					