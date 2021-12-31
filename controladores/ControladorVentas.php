<?php 
	
	require_once("Conexion.php");
	$instancia = new Conexion();
	$conectar = $instancia->obtene_conexion();

	if (isset($_POST['eliminar_datos']) && $_POST['eliminar_datos']=="si_eliminalos") {

		try {
			$sql = "DELETE FROM ventas where idVentas = ? ";
			$statement = $conectar->prepare($sql);
			$statement->execute(array($_POST['id']));
			$cuantos = $statement->rowCount();
			print json_encode(array("Exito",$_POST));
		} catch (Exception $e) {
			print json_encode(array("Error",$e));
		}

	}else if (isset($_POST['insertar_valores']) && $_POST['insertar_valores']=="si_insertalo") {
		try {
			$sql = "INSERT INTO vetas(fechaV,total,cliente_idCliente,comprobante_idComprobante,usuario_idtusuario)values(?,?,?,?,?)";
			$statement = $conectar->prepare($sql);
			$statement->execute(array($_POST['fecha'],$_POST['total'],$_POST['idcliente'],$_POST['comprobante'],$_POST['idusuario']));
			$cuantos  = $statement->rowCount();
			print json_encode(array("Exito",$_POST));
		} catch (Exception $e) {
			print json_encode(array("Error",$e->getMessage(),$e->getLine(),$_POST));
		}

	}else if (isset($_POST['consultar_info']) && $_POST['consultar_info']=="este_es_el_valor") {
		
		
		$sql = "SELECT *FROM ventas order by cliente_idCliente DESC";
		$statement = $conectar->prepare($sql);
		$statement->execute();
		$datos = $statement->fetchAll();
		$html=$html_td="";
        $con=0;
		foreach ($datos as $row){
			$con=$con+1;
			$html_td.='<tr>';
				$html_td.='<td>'.$con.'</td>';
				$html_td.='<td>'.$row['fechaV'].'</td>';
				$html_td.='<td>'.$row['cliente_idCliente'].'</td>';
				$html_td.='<td>'.$row['comprobante_idComprobante'].'</td>';
				$html_td.='<td>'.$row['total'].'</td>';
				$html_td.='<td>'.$row['usuario_idusuario'].'</td>';
				$html_td.='<td>
								<button  type="button" class="btn btn-primary"><img src="./public/imagenes/agregar.png" height="40" width="40" onclick=""class="rounded-circle"></button>
								<button type="button" class="btn btn-danger btn_eliminar" data-id="'.$row['idtusuario'].'"><img src="./public/imagenes/lista.png" height="40" width="40" onclick=""class="rounded-circle"></button>

							</td>';
			$html_td.='<tr>';
		}
		$html='
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>N°</th>
						<th>Fecha</th>
						<th>Cliente</th>
						<th>N° Comprobante</th>
						<th>Total</th>
						<th>Vendedor</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					'.$html_td.'
				</tbody>
			</table>';
               
               

        if (isset($_POST['insertar_valores']) && $_POST['insertar_valores']=="si_insertalo") {
		try {
			$sql = "INSERT INTO cliente(dui,nombre,apellido,telefono,direccion)values(?,?,?,?,?)";
			$statement = $conectar->prepare($sql);
			$statement->execute(array($_POST['dui'],$_POST['nombre'],$_POST['apellido'],$_POST['telefono'],$_POST['direccion']));
			$cuantos  = $statement->rowCount();
			print json_encode(array("Exito en registrar el cliente",$_POST));
		} catch (Exception $e) {
			print json_encode(array("Error al registrar el cliente",$e->getMessage(),$e->getLine(),$_POST));
		}

	}

        
		$afectados = $statement->rowCount();
		print json_encode(
			array("exito",$html,$_POST,$datos,$afectados)
		);

	}else{
		print json_encode(array("error",$_POST,date("Y-m-d G:i:s")));
	}
	


?>