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
$id=$_REQUEST['id'];

$nom=$_POST['nomb'];
$ape=$_POST['aP'];
$ape2=$_POST['aM'];
$tel=$_POST['tel'];
$pass= $_POST['pas'];



 	$query="UPDATE usuarios SET nombre='$nom',a_paterno='$ape',a_materno='$ape2',numero_t='$tel',pass='$pass' WHERE id='$id' ";

$resultado=$conexion->query($query);
if($resultado) {
header("location: ../../mostrar/tab_usu.php");
}
else{
	echo "insercion no exitosa";
}

mysqli_free_result($resultado);
	mysqli_close($conexion);
 ?>