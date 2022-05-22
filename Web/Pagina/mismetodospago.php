<?php
    include("../Otros/cabecera.php");
    include("../BaseDatos/bbdd.php");

    $consulta = 'Select  metodo_pago_user(id_user,num) where id_usuario='.$_SESSION['id'];
    $resultado = mysqli_query($conexion, $consulta);

   
    /*$consulta = 'Select metodo_pago(num,nombre,detalles) where id_usuario='.$_SESSION['id'];
    $resultado = mysqli_query($conexion, $consulta);*/
    





?>


<div class="formregispadre">
    <div class="formregis">

        <h2>Seleccione la dirección</h2>

        <form method="post">
            
       
        
       
        <div class="input-group">
                    
            <div class="divform">
                <input type="radio" name="tarjeta" value="MasterCard">
                <label >Mastercard</label>
            </div>

            <div class="divform">
                <input type="radio" name="tarjeta" value="Visa">
                <label >Visa</label>
            </div>
               
        </div>
        <div class="divform">
            <button class="btn btn-primary" type="submit" name="submit" value="submit">Submit</button>        
        </div>
        </form>
    </div>
</div>