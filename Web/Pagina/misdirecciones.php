<?php 
    include("../Otros/cabecera.php");
    include("../BaseDatos/bbdd.php");

    $consulta= mysqli_query($conexion,'Select * from direcciones where id_user='.$_SESSION['id']) or die("error select");

    $row_cnt = mysqli_num_rows($consulta);
 

?>

<div class="formregispadre">
    <div class="formregis">
    <form method="post">
            <?php     
                if($row_cnt<=0){
                   header("Location: nuevadireccion.php");

                    
                 } else{ ?>

                    
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected>Direcciones</option>
                            <?php while($columna = mysqli_fetch_array( $consulta )) {?>
                                <option ><?php echo $columna['calle'].",num. ".$columna['num'].",pta. ".$columna['puerta'].",localidad: ",$columna['localidad']?></option>
                            
                            <?php } ?>
                            
                        </select>
                        <div class="divform">
                            <button class="btn btn-primary" name="anyadir"  type="submit">Añadir Dirección</button>        
                        </div>
                    </div>
                                            
                    
                <?php if(isset($_POST['anyadir'])){
                        header("Location: nuevadireccion.php");

                } 
            
            
            
                 
                }?>
                
                <div class="divform">
                    <button class="btn btn-primary" type="submit" name="submit" value="submit">Submit</button>        
                </div>
              

    
        </form>
    </div>
</div>


<?php     include("../Otros/pie.php"); ?>
