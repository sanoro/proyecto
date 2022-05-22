<?php 
    include("../Otros/cabecera.php");
    include("../BaseDatos/bbdd.php");

    $consulta = "Select id,nombre,precio,fecha_lanzamiento from usuario";

    $resultado = mysqli_query($conexion, $consulta);
    
?>

<h1><?php echo 'Bienvenid@, ' .$_SESSION['username'].''?></h1>

<a class="btn btn-primary" href="listapedidos.php">Mis pedidos</a>
<a class="btn btn-primary" href="listametodospago.php">Metodos Pago</a>
<a class="btn btn-primary" href="listadirecciones.php">Direcciones</a>

























<?php include("../Otros/pie.php"); ?>
