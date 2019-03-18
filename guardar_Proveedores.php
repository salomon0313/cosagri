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
$tipo= $_POST['tipo'];
$direccion=$_POST['direccion'];
$n_tel= $_POST['n_tel'];
$email= $_POST['email'];



$query="INSERT INTO proveedores(nombre,tipo_proveedor,direccion,n_tel,email)VALUES('$nombre','$tipo','$direccion','$n_tel','$email')";

$resultado=$conexion->query($query);
if($resultado){
	header("location: ../mostrar/tab_proveedores.php");

}else{
	
}

mysqli_free_result($resultado);
	mysqli_close($conexion);

 ?> 