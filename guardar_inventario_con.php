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

$id_producto= $_POST['id_producto'];

$precio=$_POST['precio'];

$cantidad=$_POST['cantidad'];

$total_N=$precio*$cantidad;

$sql="SELECT * FROM inventario WHERE id_producto='$id_producto'";
$resultado4=$conexion->query($sql);
$row8=$resultado4->fetch_assoc();

$precio_a=$row8['precio'];

$cantidad_a=$row8['cantidad'];

$total_A=$precio_a*$cantidad_a;

$n_cantidad=$cantidad+$cantidad_a;

$aux=$total_A+$total_N;

$precio_n=$aux/$n_cantidad;

$query="UPDATE inventario SET precio='$precio_n',cantidad='$n_cantidad' WHERE id_producto='$id_producto' ";

$resultado=$conexion->query($query);
if($resultado) {
header("location: ../mostrar/tab_inventario.php");
}
else{
	echo "insercion no exitosa";
}

mysqli_free_result($resultado);
	mysqli_close($conexion);
 ?>