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
$id=$_REQUEST['id_gasto_v'];

$fecha=$_POST['fecha'];
$tipo=$_POST['tipo'];
$des=$_POST['descripcion'];
$costo=$_POST['Costo'];




 	$query="UPDATE gastos_v SET fecha='$fecha',tipo_m='$tipo',Descripcion='$des',Costo='$costo'WHERE id_gasto_v='$id' ";

$resultado=$conexion->query($query);
if($resultado) {

	$sql="SELECT * FROM gastos_v WHERE id_gasto_v='$id'";
$resultado4=$conexion->query($sql);
$row8=$resultado4->fetch_assoc();
$serie=$row8['n_serie'];

header("location: ../../mostrar/tab_pro_v.php?n_serie=$serie");

}
else{
	echo "insercion no exitosa";
}

mysqli_free_result($resultado);
	mysqli_close($conexion);
 ?>