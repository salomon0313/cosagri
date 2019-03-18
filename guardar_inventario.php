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






$nombre=$_POST['nombre'];
$des= $_POST['descripcion'];
$precio=$_POST['precio'];
//$cantidad=$_POST['cantidad'];
$cantidad=0;
$unidad= $_POST['unidad'];

$limite_m=$_POST['limite'];


$query="INSERT INTO inventario (nombre,descripcion,precio,cantidad,unidad,limite_m)VALUES('$nombre','$des','$precio','$cantidad','$unidad','$limite_m')";




$resultado=$conexion->query($query);
if($resultado){
	header("location: ../mostrar/tab_inventario.php");

}else{
	
}



mysqli_free_result($resultado);
	mysqli_close($conexion);
 ?> 


