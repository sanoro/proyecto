<?php 
    include("../Otros/cabecera.php");
    include("../BaseDatos/bbdd.php");

    $consulta= mysqli_query($conexion,'Select * from direcciones where id_user='.$_SESSION['id']) or die("error select");

    $row_cnt = mysqli_num_rows($consulta);

?>


            <?php     
                if($row_cnt<=0){
                   header("Location: nuevadireccion.php");

                    
                 } else{ 
               
                    ?>
                    <table class='table table-dark' width='100%'>

                    <th>calle</th>
                    <th>num</th>
                    <th>puerta</th>
                    <th>loaclidad</th>
                    <th>provincia</th>
                    <th>cp</th>

                    <?php while ($columna = mysqli_fetch_array( $consulta )){?>
                            <form method="get"> 
                            <tr>
                            <input type="hidden" name="id" value="<?php echo $columna['id_direccion'] ?>">
                            <td><?php echo $columna['calle']?></td>
                            <td><?php echo $columna['calle']?></td>
                            <td><?php echo $columna['num']?></td>
                            <td><?php echo $columna['puerta']?></td>
                            <td><?php echo $columna['localidad']?></td>
                            <td><?php echo $columna['provincia']?></td>
                            <td><?php echo $columna['cp']?></td>
                            
                            <td><a class='btn btn-outline-danger fas fa-trash-alt' href="<?php echo "deletedireccion.php?id_direccion=".$columna['id_direccion']?>"></a></td>

                            
                            </form>
                            </tr>
                    
                     <?php }
                     
                     } ?>
  


</table>
                    

                <a class="btn btn-primary" name="anyadir"  href="nuevadireccion.php">Añadir Dirección</a>        


                                            
                
           
    
              

    




<?php     include("../Otros/pie.php"); ?>
