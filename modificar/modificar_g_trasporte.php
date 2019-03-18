<?php
   if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    if(!isset($_SESSION["id_usuario"]))
    {
      header("location: ../index.html");
    }

?><!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="text/css" href="../../imagenes/brote.ico">
	<title>Veiculos </title>
  <link rel="icon" type="text/css" href="imagenes/brote.ico">
	<link rel="stylesheet" type="text/css" href="../modificar/estilos.css">
		<link rel="stylesheet" type="text/css" href="../modificar/estilos.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</head>
<?php
$id_gasto_v=$_REQUEST['id_gasto_v'];
include("conexion.php");
$query="SELECT * FROM gastos_v WHERE id_gasto_v='$id_gasto_v'";
$resultado3=$conexion->query($query);
$row=$resultado3->fetch_assoc();
  ?>
<nav class="navbar navbar-toggleable-md navbar-inverse bg-primary">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     
      <li class="nav-item">
        <a class="nav-link" href="../../mostrar/tab_pro_v.php?n_serie=<?php echo $row['n_serie'];?>">Atrás </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../../menu.php"> Menú </a>
      </li>

      </ul>

      </div>
   <a class="navbar-brand" href="#"> <img src="../../imagenes/pina.png"> </a>
       
      </nav>
<body>
<center>

<?php
$id_gasto_v=$_REQUEST['id_gasto_v'];
include("conexion.php");

$query="SELECT * FROM gastos_v WHERE id_gasto_v='$id_gasto_v'";
$resultado3=$conexion->query($query);
$row=$resultado3->fetch_assoc();
  ?>

	<form  action="upd_g_v.php?id_gasto_v=<?php echo $row['id_gasto_v'];?>" method="POST"  class="form-register" >
	<h2 class="form-titulo">Gastos Vehiculos</h2>
	<div class="contenedor-inputs">
		<input type="date" REQUIRED  name="fecha" placeholder="F. Adquisicion 0000-00-00" value="<?php echo $row['fecha'];?>"  class="input-50">

    <?php 
    $compara= $row['tipo_m'];
    $comp="Correctivo";

      if(strcmp($compara, $comp) === 0)
      {


    ?>
    <select REQUIRED id="tipo" name="tipo" value="" class="input-50">
<option value="Correctivo"> Correctivo </option>
<option value="Preventivo"> Preventivo </option>

</select>
<?php
}else
{

?>
  <select REQUIRED id="tipo" name="tipo" value="" class="input-50">

<option value="Preventivo"> Preventivo </option>
<option value="Correctivo"> Correctivo </option>


</select>

<?php 
}
 ?>
	
      <input type="text" REQUIRED pattern="{1,100}" name="descripcion" placeholder="Descripcion..." value="<?php echo $row['Descripcion'];?>"  class="input-100">
          <input type="text" REQUIRED pattern="[0-9_-]{1,15}" name="Costo" placeholder="Costo..." value="<?php echo $row['Costo'];?>"  class="input-50">
		<input type="submit" value="ACEPTAR"  class="btn-enviar">
		</div>
	</form>
<?php
mysqli_free_result($resultado3);
  mysqli_close($conexion);
  ?>
</center>
</body>
</html>
