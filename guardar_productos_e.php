<?php

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    if(!isset($_SESSION["id_usuario"]))
    {
      header("location: ../index.html");
    }

include("conexion.php");

$id_proveedor=$_REQUEST['id_proveedor'];


$fecha= $_POST['fecha'];

$vale=$_POST['vale'];
$des= $_POST['descripcion'];
$precio=$_POST['precio'];
$cantidad=$_POST['cantidad'];
$unidad= $_POST['unidad'];

$abono=$_POST['abono'];

$tc=$_POST['tc'];

$importe=$precio*$cantidad;


$total=$importe-$abono;

$total=$total*$tc;

$query="INSERT INTO productos_e (id_proveedor,fecha,vale,descripcion,precio,cantidad,unidad,importe_d,abono_d,tc,total_mx)VALUES('$id_proveedor','$fecha','$vale','$des','$precio','$cantidad','$unidad','$importe','$abono','$tc','$total')";



$resultado=$conexion->query($query);
if($resultado){
	header("location: ../mostrar/tab_productos_e.php?id_proveedor=$id_proveedor");

}else{
	
}



mysqli_free_result($resultado);
	mysqli_close($conexion);
 ?> 


