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
$id=$_REQUEST['n_serie'];

$tipo=$_POST['tipo'];
$fecha= $_POST['Fecha'];
$marca=$_POST['marca'];
$modelo=$_POST['modelo'];
$kil=$_POST['kilometraje'];
$des= $_POST['Descripcion'];



$query="UPDATE vehiculo SET tipo_veiculo='$tipo', fecha_a='$fecha',marca='$marca' , modelo='$modelo', descripcion='$des', kilometraje='$kil' WHERE n_serie='$id' ";



$resultado=$conexion->query($query);
if($resultado) {
header("location: ../../mostrar/tab_veiculos.php");
}
else{
	echo "insercion no exitosa";
}
mysqli_free_result($resultado);
	mysqli_close($conexion);
 ?>