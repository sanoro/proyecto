<?php 
    include("../Otros/cabecera.php");
    include("../BaseDatos/bbdd.php");
    $_SESSION['pedidonum']=true;

    $consulta=mysqli_query($conexion,'Select * from pedido where userid='.$_SESSION['id']) or die("error select");
    $row_cnt = mysqli_num_rows($consulta);
 
    
    $row_cnt = mysqli_num_rows($consulta);
    if($row_cnt<=0){
        echo "<div class='alert alert-success' role='alert'>No hay nada en Pedidos</div>";
    }else{

?>
<div>
    <table class='table table-dark' width='100%'>
                    <th>Fecha</th>
                    <th>Dirección</th>
                    <th>Total</th>
                    <th></th>
                    <th></th>
                    <th></th>

                    <div>

                        <div class="a-fixed-left-grid a-spacing-none">
                            <form method="POST"> 
                        
                        <tr>

                        </tr>
                        <?php 
                        if($row_cnt<=0){

                        }
                        while ($columna= mysqli_fetch_array( $consulta)){ ?>
                        <tr>
                        <div class="a-fixed-left-grid a-spacing-none">
                            <input type="hidden" name="id" value="<?php echo $id=$columna['id'] ?>">
                            <td><?php echo $columna["fecha"] ?>
                            <td><?php echo $columna["direccion"] ?>
                            <td><?php echo $columna["total"] ?>
                            <td><?php echo "Nombre: ".$columna['nombre']?></td>
                            <td><?php echo '<img class="imgtabla" src = "data:image/jpg;base64,' . base64_encode($columna['img']) . '" width = 100px" height = "100px"/>' ?></td>
                            <td></td>
                            
                       
                        </div>
                        </tr>
                        <?php } ?>


                    
                                       
                    <?php if(isset($_POST['s'])){

                        echo "<div class='alert alert-success' role='alert'>Se ha realizado el pedido correctamente</div>";

                    }
            
                    ?>
                     </table>
                     </div>
                     <button class="btn btn-primary" type="submit" name="s" >Aceptar</button>
                     </form>
  


    </div>

   


                                            
                
           
    
              

    




<?php  } include("../Otros/pie.php"); ?>
