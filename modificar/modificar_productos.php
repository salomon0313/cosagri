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
$id_compra=$_REQUEST['id_compra'];
include("conexion.php");
$query="SELECT * FROM productos WHERE id_compra='$id_compra'";
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
        <a class="nav-link" href="../../mostrar/tab_productos.php?id_proveedor=<?php echo $row['id_proveedor'];?>">Atrás </a>
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
$id_compra=$_REQUEST['id_compra'];
include("conexion.php");

$query="SELECT * FROM productos WHERE id_compra='$id_compra'";
$resultado3=$conexion->query($query);
$row=$resultado3->fetch_assoc();
  ?>

	<form  action="upd_compra.php?id_compra=<?php echo $row['id_compra'];?>" method="POST"  class="form-register" >
  <h2 class="form-titulo">Productos</h2>
  <div class="contenedor-inputs">
    <input type="date" REQUIRED  name="fecha" placeholder="F. Adquisicion 0000-00-00" value="<?php echo $row['fecha'];?>"  class="input-50">
    
   <input type="text" REQUIRED pattern="{1,10}" name="vale" placeholder="# Vale..." value="<?php echo $row['vale'];?>"  class="input-50">

      <input type="text" REQUIRED pattern="{1,100}" name="descripcion" placeholder="Descripcion..." value="<?php echo $row['descripcion'];?>"  class="input-100">
      <input type="number" REQUIRED pattern="[0-9_-]{1,15}" name="precio" placeholder="Precio..." value="<?php echo $row['precio'];?>"  class="input-50">
      <input type="number" REQUIRED pattern="[0-9_-]{1,10}" name="cantidad" placeholder="Cantidad..." value="<?php echo $row['cantidad'];?>"  class="input-50">
      <input type="text" REQUIRED pattern="{1,30}" name="unidad" placeholder="Unidad..." value="<?php echo $row['unidad'];?>"  class="input-50">
      <input type="number" REQUIRED pattern="[0-9_-]{1,10}" name="abono" placeholder="Abono..." value="<?php echo $row['abono'];?>"  class="input-50">

    <input type="submit" value="ACEPTAR"  class="btn-enviar">
    </div>
		</div>
	</form>
<?php
mysqli_free_result($resultado3);
  mysqli_close($conexion);
  ?>
</center>
</body>
</html>
