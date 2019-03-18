<?php
   if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    if(!isset($_SESSION["id_usuario"]))
    {
      header("location: ../../index.html");
    }

?><!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="text/css" href="../../imagenes/brote.ico">
	<title>C. Veiculos </title>
	<link rel="stylesheet" type="text/css" href="estilos.css"><link rel="stylesheet" type="text/css" href="modificar/estilos.css">
		<link rel="stylesheet" type="text/css" href="modificar/estilos.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</head>
<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link active" href="#"> <img src="../../imagenes/pina.png"></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="../../mostrar/tab_veiculos.php"> Atrás </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="../../menu.php"> Menú </a>
  </li>
  
</ul>

<body>
<center>
<?php
$n_serie=$_REQUEST['n_serie'];

include("conexion.php");
$query="SELECT * FROM vehiculo WHERE n_serie='$n_serie'";
$resultado=$conexion->query($query);
$row=$resultado->fetch_assoc();
	?>
	<form   action="upd_a_trasportes.php?n_serie=<?php echo $row['n_serie'];?>"  method="POST"  class="form-register" >
	<h2 class="form-titulo">Modificar Registro de Automovil </h2>
	<div class="contenedor-inputs">

    <select REQUIRED id="tipo" name="tipo" value="<?php echo $row['tipo_veiculo'];?>" class="input-50">
<option value="Camioneta"> CAMIONETA </option>
<option value="Camion"> CAMION </option>
<option value="Automovil"> AUTOMOVIL</option>
<option value="Tractocamion"> TRACTOCAMION </option>
</select>

 
		<input type="date" REQUIRED  name="Fecha" placeholder="F. Adquisicion 0000-00-00" value="<?php echo $row['fecha_a'];?>"  class="input-50">
    <input type="text" REQUIRED pattern="{1,29}"  name="marca" placeholder="Marca..." value="<?php echo $row['marca'];?>"  class="input-50">
    <input type="text" REQUIRED pattern="{1,29}" name="modelo" placeholder="Modelo..." value="<?php echo $row['modelo'];?>"  class="input-50">
    <input type="text" REQUIRED pattern="[0-9_-]{1,29}" name="kilometraje" placeholder="Kilometraje..." value="<?php echo $row['kilometraje'];?>"  class="input-100">
		
			<input type="text" REQUIRED pattern="{1,40}" name="Descripcion" placeholder="Descripcion..." value="<?php echo $row['descripcion'];?>"  class="input-100">
		<input type="submit" value="ACEPTAR"  class="btn-enviar">
		</div>
	</form>
<?php
mysqli_free_result($resultado);
  mysqli_close($conexion);
  ?>
</center>
</body>
</html>
