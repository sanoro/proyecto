<?php 
    include("../Otros/cabecera.php");
    include("../BaseDatos/bbdd.php");
    include("carritodentro.php");


    $id=$_GET["id"];
    $consulta = "Select id,nombre,genero,fecha_lanzamiento,autor,img,demo,precio from musica where id='".$id."'";
    $resultado = mysqli_query($conexion, $consulta);

    
?>
<div>
    
<table class='table table-dark' width='100%'>
    <?php while ($columna = mysqli_fetch_array( $resultado )){?>
        <form method="get"> 
        <tr>  
            <td>
                <input type="hidden" name="id" value="<?php echo $columna['id'] ?>">
                <p><?php echo "<h3>Nombre: ".$id=$columna["nombre"]."</h3>" ?></p>
                <p><?php echo "Genero: ".$id=$columna["genero"] ?></p>
                <p><?php echo "Fecha Lanzamiento: ".$id=$columna['fecha_lanzamiento']?></p>
                <p><?php echo "Autor: ".$id=$columna['autor']?></p>
                <p><?php echo "Precio: ".$id=$columna['precio']."€"?></p>
                <p><?php echo '<audio  controls> <source src = "data:audio/mp3;base64,' . base64_encode($id=$columna['demo']) . '"></audio controls> '?></p>
                <?php if(isset($_SESSION['login'])){?>
                    <button class="btn btn-outline-light" name="agregar"> Comprar </button>
                <?php } ?>
            </td>
            <td  width='50%'>
                <p><?php echo '<img  src = "data:image/jpg;base64,' . base64_encode($id=$columna['img']) . '" width = 70%" height = "70%"/>' ?></p>
            </td>
            </form>
        </tr>
</table>
<?php } ?>
</div>
 <?php include("../Otros/pie.php"); ?>