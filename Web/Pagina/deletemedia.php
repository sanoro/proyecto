<?php
    include("../BaseDatos/bbdd.php");   
    $id=$_GET['id_lista'];
    $consulta="Delete from media_pedido where id_lista='".$id."'";
    $resultado= mysqli_query($conexion,$consulta);

    if($resultado==false){
        echo "Fallo total";
    }else{
        header('Location:./listarcarrito.php');
    }
?>