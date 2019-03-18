<!DOCTYPE HTML>
<html lang="es">
<meta charset="utf-8">
<head>
	<title>Modificar un Usuario </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="text/css" href="../../imagenes/brote.ico">
	<link rel="stylesheet" type="text/css" href="estilos.css">
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
    <a class="nav-link" href="../../mostrar/tab_usu.php"> Atrás </a>
  </li>

  
</ul>

<center>
<?php
$id=$_REQUEST['id'];

include("conexion.php");
$query="SELECT * FROM usuarios WHERE id='$id'";
$resultado=$conexion->query($query);
$row=$resultado->fetch_assoc();
	?>
<form  action="upd_usu.php?id=<?php echo $row['id'];?>" method="POST"  class="form-register">
<body text="blue">
	<h2 class="form-titulo">Modificar un Usuario</h2>
	<body >

	<div class="contenedor-inputs">

		<input type="text" REQUIRED name="nomb" placeholder="Nombre" value="<?php echo $row['nombre'];?>" class="input-100" >

		<input type="text" REQUIRED name="aP" placeholder="Primer Apellido" value="<?php echo $row['a_paterno'];?>" class="input-100" >

		<input type="text" REQUIRED name="aM" placeholder="Segundo Materno" value="<?php echo $row['a_materno'];?>" class="input-100">

		<input type="text" REQUIRED name="tel" placeholder="&#128241; Numero Telefonico" value="<?php echo $row['numero_t'];?>" class="input-50">

		<input type="password" REQUIRED name="pas" placeholder="Contraseña" value="" class="input-100">


		<input type="submit" value="Modificar" class="btn-enviar">
	</div>
	
	</form>
</center>

<?php
mysqli_free_result($resultado);
	mysqli_close($conexion);
	?>


</body>
</html>