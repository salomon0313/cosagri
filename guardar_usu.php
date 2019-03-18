<?php 
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    if(!isset($_SESSION["id_usuario"]))
    {
      header("location: ../index.html");
    }

$nom=$_POST['nomb'];
$ape=$_POST['aP'];
$ape2=$_POST['aP2'];
$tel=$_POST['tel'];
$us= $_POST['id'];
$pass= $_POST['pas'];

$tip=$_POST['tipo'];


include("conexion.php");
		$query="INSERT INTO usuarios(id,nombre,a_materno,a_paterno,numero_t,pass,privilegio)VALUES('$us','$nom','$ape','$ape2','$tel','$pass2','$tip')";


$resultado=$conexion->query($query);
if($resultado){
	header("location: ../mostrar/tab_usu.php");

}else{
	echo "error insercion";
	header("location: formulario_usu.php");
}

		



mysqli_free_result($resultado);
	mysqli_close($conexion);



 ?>