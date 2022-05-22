<?php 
    //include("../BaseDatos/bbdd.php");
	session_start();
	session_destroy();
	/*$consulta = mysqli_query($conexion,"SELECT * FROM media_pedido ");
    $row_cnt = mysqli_num_rows($consulta);
	if($row_cnt>0){
		$consultaborrar=$conexion->prepare("TRUNCATE TABLE `media_pedido`" )or die("error");
		$consultaborrar->execute();
	}*/

	header('location: index.php');

 ?>