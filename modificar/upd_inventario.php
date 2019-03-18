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

$id=$_REQUEST['id_producto'];


$nombre= $_POST['nombre'];
$des= $_POST['descripcion'];

$unidad= $_POST['unidad'];

$limite_m=$_POST['limite'];




$query="UPDATE inventario SET nombre='$nombre',descripcion='$des',unidad='$unidad',limite_m='$limite_m'WHERE id_producto='$id' ";



$resultado=$conexion->query($query);
if($resultado) {
header("location: ../../mostrar/tab_inventario.php");
}
else{
	echo "insercion no exitosa";
}

mysqli_free_result($resultado);
	mysqli_close($conexion);
 ?>