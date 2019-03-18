<?php 
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    if(!isset($_SESSION["id_usuario"]))
    {
      header("location: ../index.html");
    }

    
include ("conexion.php");

$id=$_REQUEST['id_proveedor'];

$nom=$_POST['nombre'];

$tipo= $_POST['tipo'];

$direccion=$_POST['direccion'];

$n_tel= $_POST['n_tel'];

$email= $_POST['email'];




$query="UPDATE proveedores SET nombre='$nom',tipo_proveedor='$tipo', direccion='$direccion',n_tel='$n_tel' , email='$email' WHERE id_proveedor='$id' ";



$resultado=$conexion->query($query);
if($resultado) {
header("location: ../../mostrar/tab_proveedores.php");
}
else{
	echo "insercion no exitosa";
}
mysqli_free_result($resultado);
	mysqli_close($conexion);
 ?>