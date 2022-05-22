<?php 
    include("../Otros/cabecera.php");
    include("../BaseDatos/bbdd.php");

    $consulta = "Select id from metodo_pago ";
    $resultado = mysqli_query($conexion, $consulta);

?> 

<div class="formregispadre">
    <div class="formregis">
                <form method="post">              
                    <div class="divform">
                    <h1>Tarjeta</h1>
                    <input class="inputini" name="id" type="hidden"  required>


                        <p>Número</p>
                        <input class="inputini" name="numero" type="number"  required>
                    </div>
                    <div class="divform">
                        <p>Nombre</p>
                        <input class="inputini" name="nombre" type="text"  required>
                    </div>
                    <div class="divform">
                        <p>Fecha Caducidad</p>
                        <input class="inputini" name="fecha" type="number"  required>
                    </div>
                    <div class="divform">
                        <p>Cvv</p>
                        <input class="inputini" name="cvv" type="number" required >
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="tarjeta" id="mastercard" value="mastercard" checked>
                        <label class="form-check-label" for="mastercard">
                            MasterCard
                        </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="tarjeta" id="visa" value="visa">
                    <label class="form-check-label" for="visa">
                        Visa
                    </label>
                    </div>
                    <div class="divform">
                    <button class="btn btn-primary" type="submit" name="submit" value="submit">Submit</button>        
                </div>
            </form>
                    <?php 
                        if(isset($_POST['submit'])){
                        $id=$_POST['id'];
                        $numero=$_POST['numero'];
                        $nombre=$_POST['nombre'];
                        $fecha=$_POST['fecha'];
                        $cvv=$_POST['cvv'];
                        $tarjeta=$_POST['tarjeta'];

                        $consulta = $conexion->prepare("INSERT INTO metodo_pago(num,nombre,detalles,fechacaducidad,cvv)VALUES(?,?,?,?,?)" )or die("error al insertar");
                        $consulta->bind_Param("issii",$numero,$nombre,$tarjeta,$fecha,$cvv);
                        $consulta->execute();
                        $consulta->store_result();
                     
                        if($consulta==True){
                            $consulta = 'Select * from metodo_pago order by id desc limit 1';
                            $resultado = mysqli_query($conexion, $consulta);
                            $columna = mysqli_fetch_array( $resultado ); ?>
                            <?php $consulta2 = $conexion->prepare("INSERT INTO metodo_pago_user(id_user,id_metodo,num,nombre,detalles,fechacaducidad,cvv)VALUES(?,?,?,?,?,?,?)" )or die("error al insertar 2");
                            $consulta2->bind_Param("iiissii",$_SESSION['id'],$columna['id'],$columna['num'],$columna['nombre'],$columna['detalles'],$columna['fechacaducidad'],$columna['cvv']);
                            $consulta2->execute();
                            $consulta2->store_result();
                          
                           if($consulta2==true){
                                header('location: usuario.php');
                    
                            }
                        }
                        }
                    ?>

        </div>
</div>

<?php     include("../Otros/pie.php"); ?>