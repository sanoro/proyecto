<?php 
    include("../Otros/cabecera.php");
    include("../BaseDatos/bbdd.php");


    $consulta=mysqli_query($conexion,'Select * from metodo_pago_user where id_user='.$_SESSION['id']) or die("error select");


    $row_cnt = mysqli_num_rows($consulta);
 


?>


            <?php     
                if($row_cnt<=0){
                   header("Location: nuevometodopago.php");

                    
                 } else{ 

                    ?>
                    <table class='table table-dark' width='100%'>

                    <th>Número</th>
                    <th>Nombre</th>
                    <th>Fecha Caducidad</th>
                    <th>Detalles</th>

                    <?php while ($columna= mysqli_fetch_array( $consulta)){?>
                            <form method="POST"> 
                            <tr>
                            <input type="hidden" name="id" value="<?php echo $columna['id_metodo'] ?>">
                            <td><?php echo $columna['num']?></td>
                            <td><?php echo $columna['nombre']?></td>
                            <td><?php echo $columna['fechacaducidad']?></td>
                            <td><?php echo $columna['detalles']?></td>
                            <td><a class='btn btn-outline-danger fas fa-trash-alt' href="<?php echo "deletemetodo.php?id_metodo=".$columna['id_metodo']?>"></a></td>

                            
                            </form>
                            </tr>
                    
                     <?php }
                     
                     } ?>
  


</table>
                    

                <a class="btn btn-primary" name="anyadir"  href="nuevometodopago.php">Añadir tarjeta</a>        


                                            
                
           
    
              

    




<?php     include("../Otros/pie.php"); ?>
