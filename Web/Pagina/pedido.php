<?php 
    include("../Otros/cabecera.php");
    include("../BaseDatos/bbdd.php");
   

    $consulta = "Select * from usuario where id=".$_SESSION['id'];
    $resultado = mysqli_query($conexion, $consulta);
    $columna = mysqli_fetch_array( $resultado );

    $consulta2= mysqli_query($conexion,'Select * from metodo_pago_user where id_user='.$_SESSION['id']) or die("error select 1");

    $row_cnt2 = mysqli_num_rows($consulta2);
 



    $consulta4= mysqli_query($conexion,'Select * from direcciones where id_user='.$_SESSION['id']) or die("error select 2");

    $row_cnt4= mysqli_num_rows($consulta4);

    $consulta5= mysqli_query($conexion,'Select precio from media_pedido where id_usuario='.$_SESSION['id']) or die("error select 3");

    $row_cnt5= mysqli_num_rows($consulta4);



?>
<div class="formregispadre">
    <div class="formregis">

        <h2>Pedidos</h2>

        <form method="post">
            <div class="divform">
                
                <input type="hidden" class="inputini" name="id" type="text" >
            </div>

            <div class="divform">
                <input class="inputini" name="userid" type="hidden" value="<?php echo $columna['id']?>" >
            </div>
            <div class="divform">
            </div>
            <?php if($row_cnt2<=0){ ?>
                    <a class="btn btn-primary" name="anyadir"  href="nuevometodopago.php" type="submit">Añadir Metodo Pago</a>        

                    
                <?php } else{ 
               
                    ?>
                    
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected>Metodos Pagos</option>
                           
                            <?php while($columna = mysqli_fetch_array( $consulta2 )) {?>
                                <option value="<?php echo $idmetodo=$columna['id_metodo'] ?>"><?php echo "Numero: ".$columna['num'].",nombre. ".$columna['nombre'].",tarjeta. ".$columna['detalles']?></option>
                            
                            <?php } ?>
                        </select>
            
                    </div>
                                            
                
            <?php }
            ?>

        


            <?php if($row_cnt4<=0){?>
                    <a class="btn btn-primary" name="anyadir"  href="nuevadireccion.php" type="submit">Añadir Dirección</a>              
                 <?php } else{ ?>

                    
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected>Direcciones</option>
                            <?php while($columna = mysqli_fetch_array( $consulta4 )) {?>
                                <option value="<?php echo $id=$columna['calle'] ?>"><?php echo "Calle: ".$columna['calle'].",num. ".$columna['num'].",pta. ".$columna['puerta'].",localidad: ",$columna['localidad']?></option>
                            
                            <?php } ?>
                           
                        </select>
                    </div>
                <?php } ?>      
            <div class="divform">
                
            </div>
            <div class="divform">
            <?php $total=0; 
                while($columna = mysqli_fetch_array( $consulta5 )) {
                            $total=$total+$columna['precio']   ;                         
                    } ?>
            </div>
            <div class="divform">
                <button class="btn btn-primary" type="submit" name="submit" >Submit</button>
            </div>
        </form>
    </div>
</div>
<?php 
    if(isset($_POST['submit'])){
    $userid=$_POST['userid'];
    $fecha=date('Y-m-d');
    
      $consulta = $conexion->prepare("INSERT INTO pedido(userid,fecha,num_pago_user,direccion,total)VALUES(?,?,?,?,?)" )or die("error al insertar");
      $consulta->bind_Param("isssi",$userid,$fecha,$idmetodo,$id,$total);
      $consulta->execute();
      $consulta->store_result();
      $consulta2 = $conexion->prepare("INSERT INTO linea_pedido(userid,fecha,num_pago_user,direccion,total)VALUES(?,?,?,?,?)" )or die("error al insertar");

      if($consulta==true){
          header("location: listapedidos.php");
      }

    }


?>

<?php include("../Otros/pie.php"); ?>