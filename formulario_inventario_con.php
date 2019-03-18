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
  <title>Inventario </title>
  <link rel="stylesheet" type="text/css" href="estilos.css">
  <link rel="stylesheet" type="text/css" href="modificar/estilos.css">
    <link rel="stylesheet" type="text/css" href="modificar/estilos.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</head>
<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link active" href="#"> <img src="../imagenes/pina.png"></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="../mostrar/tan_inventario.php"> Atrás </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="../menu.php"> Menú </a>
  </li>
  
</ul>

<body>
  <?php 

include ("conexion.php");
$id_compra=$_REQUEST['id_compra'];
$query="SELECT * FROM productos WHERE id_compra = '$id_compra' ";
$resultado=$conexion->query($query);
while ($row=$resultado->fetch_assoc()) {

  $precio=$row['precio'];
  $cantidad=$row['cantidad'];
?>
<center>
<div class="container">

  <p>Se Agrego a Proveedores la siguiente informacion </p>
  <blockquote class="blockquote">
    <p>Producto :   <?php echo $row['descripcion'];?></a>
      La Cantidad de  <?php echo number_format($cantidad,1);?>  
      Con un Precio de  $<?php echo number_format($precio,2);?> 
    </p>

    
    <footer class="blockquote-footer">Quiere guardarlo tambien en su Inventario</footer>

<a href="../mostrar/tab_productos.php?id_proveedor=<?php echo $row['id_proveedor'];?>" class="btn btn-danger">Cancelar</a>
<a href="../altas/formulario_inventario_n.php?id_compra=<?php echo $row['id_compra'];?>" class="btn btn-danger">Dar de alta producto</a>

  </blockquote>

</div>
</center>
<center>
<?php
}
$id_compra=$_REQUEST['id_compra'];

include("conexion.php");
$query="SELECT * FROM productos WHERE id_compra='$id_compra'";
$resultado=$conexion->query($query);

$row=$resultado->fetch_assoc();
  ?>
  <form   action="guardar_inventario_con.php"  method="POST"  class="form-register" >
  <h2 class="form-titulo">Añadiendo productos al Inventario </h2>
  <div class="contenedor-inputs">

 
   <label >Nombre</label>
<select REQUIRED id="id_producto" name="id_producto"  class="input-100">
      <?php 

include ("conexion.php");
$query2="SELECT * FROM inventario";
$resultado2=$conexion->query($query2);
while ($row2=$resultado2->fetch_assoc()) {
  
?>
      

<option value="<?php echo $row2['id_producto'];?>"> <?php echo $row2['nombre'];?> </option>



      <?php 
      } ?>
      </select>
    </div>

  <div class="form-group">
    <label for="">Precio</label>
      <input type="text" REQUIRED pattern="[0-9_-]{1,15}" name="precio" placeholder="Precio..." value="<?php echo $row['precio'];?>"  class="input-50">
    </div>
    <div class="form-group">
      <label for="">Cantidad</label>
      <input type="text" REQUIRED pattern="[0-9_-]{1,10}" name="cantidad" placeholder="Cantidad..." value="<?php echo $row['cantidad'];?>"  class="input-50">
      
        </div>

    <input type="submit" value="Actualizar"  class="btn-enviar">
    </div>
  </form>

<?php



mysqli_free_result($resultado);
  mysqli_close($conexion);
  ?>
</center>
</body>
</html>
