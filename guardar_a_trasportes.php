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

$numero= $_POST['NumeroSerie'];
$fecha= $_POST['fecha'];
$tipo=$_POST['tipo'];
$marca=$_POST['marca'];
$modelo=$_POST['modelo'];
$des= $_POST['descripcion'];
$kil= $_POST['kilometraje'];

$query="INSERT INTO vehiculo(n_serie,tipo_veiculo,fecha_a,marca,modelo,descripcion,kilometraje)VALUES('$numero','$tipo','$fecha','$marca','$modelo','$des','$kil')";



$resultado=$conexion->query($query);
if($resultado){
	header("location: ../mostrar/tab_veiculos.php");

}else{
	header("location: formulario_c_trasporte.php");;
}


mysqli_free_result($resultado);
	mysqli_close($conexion);

 ?> 