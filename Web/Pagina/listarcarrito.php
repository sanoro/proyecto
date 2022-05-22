<?php     
    include("../Otros/cabecera.php");
    include("../BaseDatos/bbdd.php");

    $consulta = 'Select id_lista,nombre,img,precio,cantidad from media_pedido  where id_usuario='.$_SESSION['id'];

    $resultado = mysqli_query($conexion, $consulta);

    $row_cnt = mysqli_num_rows($resultado);
    if($row_cnt<=0){
        echo "<div class='alert alert-success' role='alert'>NO hay nada en el carrito</div>";
    }else{
?>

<table class='table table-dark' width='100%'>
<th>nombre</th>
<th></th>
<th>precio</th>
<th></th>
<?php while ($columna = mysqli_fetch_array( $resultado )){?>
        <form method="get"> 
        <tr>
        <input type="hidden" name="id" value="<?php echo $columna['id_lista'] ?>">
        <td><?php echo $columna['nombre']?></td>
        <td><?php echo '<img class="imgtabla" src = "data:image/jpg;base64,' . base64_encode($columna['img']) . '" width = 100px" height = "100px"/>' ?></td>
        <td><?php echo $columna['precio']?></td>
        <td><a class='btn btn-outline-danger fas fa-trash-alt' href="<?php echo "deletemedia.php?id_lista=".$columna['id_lista']?>"></a></td>
        </form>
        </tr>
  
    <?php } ?>
    </table>

<a class='btn btn-primary ' href="pedido.php" >Comprar</a>





<?php } include("../Otros/pie.php"); ?>
