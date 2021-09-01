<?php
require_once '../Conexion.php';
$objeto = new Conexion();
$conexion = $objeto->conectar();

$consulta = "SELECT * FROM persona";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);

print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;
/*
 * 
 * 
 */
