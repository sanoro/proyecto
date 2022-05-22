<?php
    include("../BaseDatos/bbdd.php");   
    $id=$_GET['id_metodo'];
    $consulta="Delete from metodo_pago_user where id_metodo='".$id."'";
    $resultado= mysqli_query($conexion,$consulta);


    if($resultado==false){
        echo "Fallo total";
    }else{

            header('Location:./listametodospago.php');
        
    }
?>