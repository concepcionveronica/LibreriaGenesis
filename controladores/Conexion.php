<?php
define('DATABASE','dblibreria');
define('HOST','localhost');
define('USERNAME','root');
define('PASSWORD','');
class Conexion
{
    function obtene_conexion(){
    try {
    $pdo = new PDO(
    'mysql:dbname='.DATABASE.
    ';host='.HOST.
    ';port:3306',
    USERNAME,
    PASSWORD,
    array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
    );
    return $pdo;
    } catch (Exception $e) {
    return $e->getMessage().$e->getLine();


    }
    }


    function cerrar_sesion($pdo){
    $pdo=null;
    }
}

/*
$instancia = new Conexion();
$conectar = $instancia->obtene_conexion();


$sql = "SELECT *FROM usuario";
$statement = $conectar->prepare($sql);
$statement->execute();
$datos = $statement->fetchAll();


print_r($datos);*/
?>
