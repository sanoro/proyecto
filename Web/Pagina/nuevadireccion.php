<?php 
    include("../Otros/cabecera.php");
    include("../BaseDatos/bbdd.php");



?> 
<div class="formregispadre">
    <div class="formregis">
    <form method="post">              
                    <div class="divform">
                    <h1>Dirección</h1>
                        <p>Calle</p>
                        <input class="inputini" name="calle" type="text"  required>
                    </div>
                    <div class="divform">
                        <p>Número</p>
                        <input class="inputini" name="num" type="number"  required>
                    </div>
                    <div class="divform">
                        <p>Puerta</p>
                        <input class="inputini" name="puerta" type="number"  required>
                    </div>
                    <div class="divform">
                        <p>Localidad</p>
                        <input class="inputini" name="localidad" type="text" required>
                    </div>
                    <div class="divform">
                        <p>Provincia</p>
                        <input class="inputini" name="provincia" type="text" required >
                    </div>
                    <div class="divform">
                        <p>CP</p>
                        <input class="inputini" name="cp" type="number"  required>
                    </div>
                    <?php if(isset($_POST['submit']) ){
                        
                        $calle=$_POST['calle'];
                        $numero=$_POST['num'];
                        $puerta=$_POST['puerta'];
                        $localidad=$_POST['localidad'];
                        $provincia=$_POST['provincia'];
                        $cp=$_POST['cp'];
                        $consulta2 = $conexion->prepare("INSERT INTO direcciones(id_user,calle,num,puerta,localidad,provincia,cp)VALUES(?,?,?,?,?,?,?)") or die("error insert");
                        $consulta2->bind_Param("isiissi",$_SESSION['id'],$calle,$numero,$puerta,$localidad, $provincia,$cp);
                        $consulta2->execute();
                        $consulta2->store_result();
                     
                        if($consulta2==true){
                            header('location: usuario.php');
                        }
                    }?>
                     <div class="divform">
                    <button class="btn btn-primary" type="submit" name="submit" value="submit">Submit</button>        
                </div>
            </form>
        </div>
</div>

<?php     include("../Otros/pie.php"); ?>
