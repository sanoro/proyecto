<?php
    include("../BaseDatos/bbdd.php");   
    $id=$_GET['id_direccion'];
    $consulta="Delete from direcciones where id_direccion='".$id."'";
    $resultado= mysqli_query($conexion,$consulta);


    if($resultado==false){
        echo "Fallo total";
    }else{

            header('Location:./listadirecciones.php');
        
    }
?>