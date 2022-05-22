<?php 
    include("../Otros/cabecera.php");
    include("../BaseDatos/bbdd.php");
    $_SESSION['pedidonum']=true;

    $consulta=mysqli_query($conexion,'Select * from pedido where userid='.$_SESSION['id']) or die("error select");
    $row_cnt = mysqli_num_rows($consulta);
 


?>
<div>
    <table class='table table-dark' width='100%'>
                    <th>Fecha</th>
                    <th>Dirección</th>
                    <th>Total</th>

                    <div>
                    <?php while ($columna= mysqli_fetch_array( $consulta)){?>
                        <div class="a-fixed-left-grid a-spacing-none">
                            <form method="POST"> 
                            <tr>
                            <input type="hidden" name="id" value="<?php echo $id=$columna['id'] ?>">
                            <td><?php echo $columna['fecha']?></td>
                            <td><?php echo $columna['direccion']?></td>
                            <td><?php echo $columna['total']."€"?></td>
                    </tr>
                     <?php }

                     $consulta = mysqli_query($conexion,'Select id_lista,nombre,img,precio,cantidad,id_pedido from media_pedido where id_usuario='.$_SESSION['id']);
                     ?>
                     </div>
                     </div>
                     <div class="a-row">
                     
        
                     <?php 
 
                        while ($columna= mysqli_fetch_array( $consulta)){?>
                        <div class="a-fixed-left-grid a-spacing-none">
                            <input type="hidden" name="id" value="<?php echo $idmed=$columna['id'] ?>">
                            
                                
                            <td><?php echo "Nombre:".$columna['nombre']?></td>
                            <td><?php echo '<img class="imgtabla" src = "data:image/jpg;base64,' . base64_encode($columna['img']) . '" width = 100px" height = "100px"/>' ?></td>
                            <td><?php echo "Precio:".$columna['precio']?></td>
                            
                       
                            </tr>
                        </div>
                    
                     <?php 
                    }?>
                    <button class="btn btn-primary" type="submit" name="s" >Aceptar</button>
                    </form>
                    <?php if(isset($_POST['s'])){
                        echo "<div class='alert alert-success' role='alert'>Se ha agregado correctamente</div>";

                       /* $consulta=$conexion->prepare("Delete from media_pedido where id_usuario=?");
                        $consulta->bind_Param("i",$_SESSION['id']);
                        $consulta->execute();
                        $consulta->store_result();
                        unset($_SESSION['pedidonum']);*/

                    }
            
                    ?>
                     </table>
                     </div>
  
  


    </div>

   


                                            
                
           
    
              

    




<?php     include("../Otros/pie.php"); ?>
