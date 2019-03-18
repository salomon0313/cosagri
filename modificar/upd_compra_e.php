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
$id=$_REQUEST['id_compra'];


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

 	$query="UPDATE productos_e SET fecha='$fecha',vale='$vale',descripcion='$des',precio='$precio',cantidad='$cantidad',unidad='$unidad',abono_d='$abono',importe_d='$importe',total_mx='$total'WHERE id_compra_e='$id' ";

$resultado=$conexion->query($query);
if($resultado) {

	$sql="SELECT * FROM productos_e WHERE id_compra_e='$id'";
$resultado4=$conexion->query($sql);
$row8=$resultado4->fetch_assoc();
$proveedor=$row8['id_proveedor'];

header("location: ../../mostrar/tab_productos_e.php?id_proveedor=$proveedor");

}
else{
	echo "insercion no exitosa";
}

mysqli_free_result($resultado);
mysqli_free_result($resultado4);
	mysqli_close($conexion);
 ?>