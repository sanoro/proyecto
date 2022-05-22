<?php
$usuario="root";
$servidor="localhost";
$pass="";
$basededatos="tiendamultimedia";

$conexion = mysqli_connect($servidor, $usuario, $pass) or die ("No se ha podido conectar");

$db = mysqli_select_db($conexion, $basededatos) or die ("upps¡ Pues no se puede");

?>