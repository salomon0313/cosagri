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

$sql="SELECT * FROM productos WHERE id_compra='$id'";
$resultado4=$conexion->query($sql);
$row8=$resultado4->fetch_assoc();

$abono_a=$row8['abono'];

$abono=$_POST['abono'];

$abono_n=$abono_a+$abono;





 	$query="UPDATE productos SET abono='$abono_n' WHERE id_compra='$id' ";

$resultado=$conexion->query($query);
if($resultado) {

	
$proveedor=$row8['id_proveedor'];

header("location: ../../mostrar/tab_productos.php?id_proveedor=$proveedor");

}
else{
	echo "insercion no exitosa";
}

mysqli_free_result($resultado);
mysqli_free_result($resultado4);
	mysqli_close($conexion);
 ?>