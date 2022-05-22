<?php
    

    include("../Otros/cabecera.php");
  
    //include_once("../Otros/cabeceraBienvenida.php");
    include("../BaseDatos/bbdd.php");

    $consulta = "Select id,nombre,genero,fecha_lanzamiento,img,precio from media";

    $resultado = mysqli_query($conexion, $consulta);
    
?>

<table class='table table-dark' width='100%'>
<th>nombre</th>
<th>genero</th>
<th>fecha_lanzamiento</th>
<th></th>
<th>precio</th>

<?php while ($columna = mysqli_fetch_array( $resultado )){?>
        <form method="get"> 
        <tr>
        <input type="hidden" name="id" value="<?php echo $columna['id'] ?>">
        <td><?php echo $columna['nombre']?></td>
        <td><?php echo $columna['genero']?></td>
        <td><?php echo $columna['fecha_lanzamiento']?></td>
        <td><?php echo '<img class="imgtabla" src = "data:image/jpg;base64,' . base64_encode($columna['img']) . '" width = 100px" height = "100px"/>' ?></td>
        <td><?php echo $columna['precio']?></td>
        <?php if(isset($_SESSION['login'])){?>

                <td><button class="btn btn-dark" name="agregar" ?><i class="fa-solid fa-cart-plus" ></i></button></td>
        <?php } ?>
        </form>
        </tr>
  
    <?php } ?>

    </table>

<?php include("../Otros/pie.php"); ?>