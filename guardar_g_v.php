<?php
include("conexion.php");

$n_serie=$_REQUEST['n_serie'];

$fecha= $_POST['fecha'];
$tipo=$_POST['tipo'];
$des= $_POST['descripcion'];
$costo=$_POST['Costo'];



$query="INSERT INTO gastos_v (fecha,n_serie,tipo_m,Descripcion,Costo)VALUES('$fecha','$n_serie','$tipo','$des','$costo')";




$resultado=$conexion->query($query);
if($resultado){
	header("location: ../mostrar/tab_pro_v.php?n_serie=$n_serie");

}else{
	header("location: formulario_pro_v.php?n_serie=$n_serie>");
}

 ?> }