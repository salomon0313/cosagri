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

$importe=$precio*$cantidad;


$total=$importe-$abono;



$query="INSERT INTO productos (id_proveedor,fecha,vale,descripcion,precio,cantidad,unidad,importe,abono,total)VALUES('$id_proveedor','$fecha','$vale','$des','$precio','$cantidad','$unidad','$importe','$abono','$total')";

$resultado=$conexion->query($query);


    $sql="SELECT * FROM productos WHERE vale='$vale'";
$resultado4=$conexion->query($sql);
$row8=$resultado4->fetch_assoc();
$id_compra=$row8['id_compra'];

if($resultado){

        header("location: ../altas/formulario_inventario_con.php?id_compra=$id_compra");
	//header("location: ../mostrar/tab_productos.php?id_proveedor=$id_proveedor");

}else{
	
}



mysqli_free_result($resultado);
	mysqli_close($conexion);
 ?> 


