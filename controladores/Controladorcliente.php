<?php
require_once("Conexion.php");
	$instancia = new Conexion();
	$conectar = $instancia->obtene_conexion();

	if (isset($_POST['eliminar_datos']) && $_POST['eliminar_datos']=="si_eliminalos") {

		try {
			$sql = "DELETE FROM cliente where idCliente = ? ";
			$statement = $conectar->prepare($sql);
			$statement->execute(array($_POST['id']));
			$cuantos = $statement->rowCount();
			print json_encode(array("Exito",$_POST));
		} catch (Exception $e) {
			print json_encode(array("Error",$e));
		}

	}else if (isset($_POST['insertar_valores']) && $_POST['insertar_valores']=="si_insertalo") {
		try {
			$sql = "INSERT INTO cliente(nombre,apellido,direccion,telefono,dui)values(?,?,?,?,?)";
			$statement = $conectar->prepare($sql);
			$statement->execute(array($_POST['nombre'],$_POST['apellido'],$_POST['direccion'],$_POST['telefono'],$_POST['dui']));
			$cuantos  = $statement->rowCount();
			print json_encode(array("Exito",$_POST));
		} catch (Exception $e) {
			print json_encode(array("Error",$e->getMessage(),$e->getLine(),$_POST));
		}

	}else if (isset($_POST['consultar_info']) && $_POST['consultar_info']=="este_es_el_valor") {
		
		
		$sql = "SELECT *FROM cliente order by idCliente";
		$statement = $conectar->prepare($sql);
		$statement->execute();
		$datos = $statement->fetchAll();
		$html=$html_td="";
        $con=0;
		foreach ($datos as $row){
			$con=$con+1;
			$html_td.='<tr>';
				$html_td.='<td>'.$con.'</td>';
				$html_td.='<td>'.$row['nombre'].'</td>';
				$html_td.='<td>'.$row['apellido'].'</td>';
				$html_td.='<td>'.$row['direccion'].'</td>';
				$html_td.='<td>'.$row['telefono'].'</td>';
				$html_td.='<td>'.$row['dui'].'</td>';
				$html_td.='<td>
								<button  type="button" class="btn btn-primary"><img src="./public/imagenes/agregar.png" height="40" width="40" onclick=""class="rounded-circle"></button>
								<button type="button" class="btn btn-danger btn_eliminar" data-id="'.$row['idCliente'].'"><img src="./public/imagenes/lista.png" height="40" width="40" onclick=""class="rounded-circle"></button>

							</td>';
			$html_td.='<tr>';
		}
		$html='
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>N°</th>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Dirección</th>
						<th>Telefono</th>
						<th>DUI</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
					'.$html_td.'
				</tbody>
			</table>';
            

		$afectados = $statement->rowCount();
		print json_encode(
			array("exito",$html,$_POST,$datos,$afectados)
		);

	}else{
		print json_encode(array("error",$_POST));
	}
	


?>
