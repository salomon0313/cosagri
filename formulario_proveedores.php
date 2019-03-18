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
  <link rel="icon" type="text/css" href="../imagenes/brote.ico">
	<title>C. Veiculos </title>
  <link rel="icon" type="text/css" href="imagenes/brote.ico">
	<link rel="stylesheet" type="text/css" href="modificar/estilos.css">
		<link rel="stylesheet" type="text/css" href="modificar/estilos.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</head>
<nav class="navbar navbar-toggleable-md navbar-inverse bg-primary">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     
      <li class="nav-item">
        <a class="nav-link" href="../mostrar/tab_proveedores.php">Atrás </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../menu.php"> Menú </a>
      </li>

      </ul>

      </div>
   <a class="navbar-brand" href="#"> <img src="../imagenes/pina.png"> </a>
       
      </nav>
<body>
<center>
	<form  action="guardar_Proveedores.php" method="POST"  class="form-register" >
	<h2 class="form-titulo">Nuevo Proveedor</h2>
	<div class="contenedor-inputs">
		<input type="text" REQUIRED pattern="{4,30}" name="nombre" placeholder="Nombre... " value=""  class="input-50">
        <select REQUIRED id="tipo" name="tipo"  class="input-50">
<option value="Nacional"> Nacional </option>
<option value="Extrangero"> Extrangero </option>

</select>
		<input type="text" REQUIRED  name="direccion" placeholder="Direccion" value=""  class="input-50">
  
		<input type="text" REQUIRED pattern="[0-9_-]{1,15}"  name="n_tel" placeholder="Telefono..." value=""  class="input-50">

			
          <input type="text" REQUIRED pattern="{3,59}" name="email" placeholder="Email..." value=""  class="input-50">
      
		<input type="submit" value="ACEPTAR"  class="btn-enviar">
		</div>
	</form>

</center>
</body>
</html>
