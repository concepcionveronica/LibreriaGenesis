<?php
require_once("Conexion.php");
	$instancia = new Conexion();
	$conectar = $instancia->obtene_conexion();

	//$sql1="SELECT idproveedor , nombre FROM proveedor ORDER BY idproveedor ASC";
	//$resultado=$conectar->query($sql1);

	if (isset($_POST['eliminar_datos']) && $_POST['eliminar_datos']=="si_eliminalos") {

		try {
			$sql = "DELETE FROM producto where idProducto = ? ";
			$statement = $conectar->prepare($sql);
			$statement->execute(array($_POST['id']));
			$cuantos = $statement->rowCount();
			print json_encode(array("Exito",$_POST));
		} catch (Exception $e) {
			print json_encode(array("Error",$e));
		}

	}else if (isset($_POST['insertar_valores']) && $_POST['insertar_valores']=="si_insertalo") {
		try {
            if($_POST['proveedor']){}
			$sql = "INSERT INTO producto(nombre,marca,stock,valor,proveedor)values(?,?,?,?,?)";
			$statement = $conectar->prepare($sql);
			$statement->execute(array($_POST['nombre'],$_POST['marca'],$_POST['stock'],$_POST['valor'],$_POST['proveedor']));
			$cuantos  = $statement->rowCount();
			print json_encode(array("Exito",$_POST));
		} catch (Exception $e) {
			print json_encode(array("Error",$e->getMessage(),$e->getLine(),$_POST));
		}

	}else if (isset($_POST['consultar_info']) && $_POST['consultar_info']=="este_es_el_valor") {
		$sql = "SELECT *FROM producto order by idProducto";
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
				$html_td.='<td>'.$row['marca'].'</td>';
				$html_td.='<td>'.$row['stock'].'</td>';
				$html_td.='<td>'.$row['valor'].'</td>';
				$html_td.='<td>'.$row['proveedor'].'</td>';
				$html_td.='<td>
								<button  type="button" class="btn btn-primary btn_editar"  data-id="'.$row['id'].'"><img src="./public/imagenes/agregar.png" height="40" width="40" onclick=""class="rounded-circle"></button>
								<button type="button" class="btn btn-danger btn_eliminar" data-id="'.$row['idProducto'].'"><img src="./public/imagenes/lista.png" height="40" width="40" onclick=""class="rounded-circle"></button>

							</td>';
			$html_td.='<tr>';
		}
		$html='
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>N°</th>
						<th>Nombre</th>
						<th>Marca</th>
						<th>Stock</th>
						<th>Valor</th>
						<th>Proveedor</th>
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
		if(onclick=btn-danger){}}
		print json_encode(array("error",$_POST));
	}
	


?>