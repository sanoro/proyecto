<?php
  $mensaje="";
if(isset($_GET['agregar'])){ 
  $id=$_GET['id'];
if(!$_SESSION['carrito']){
  
  $nombre="";
  $genero="";
  $fecha="";
  $img="";
  $precio="";
  
  $res= $conexion -> query('Select id,nombre,genero,fecha_lanzamiento,img,precio from media  where id='.$id) or die("error 1");
  $fila =mysqli_fetch_row($res);
  $nombre=$fila[1];
  $genero=$fila[2];
  $fecha=$fila[3];
  $img=$fila[4];
  $precio=$fila[5];
  $productos=array(
    'id'=> $id,
    'nombre'=> $nombre,
    'genero'=> $genero,
    'fecha_lanzamiento'=> $fecha,
    'img' => $img,
    'precio'=>$precio
);  

    $_SESSION['carrito'][0]=$productos;
 

    $consulta = $conexion->prepare("INSERT INTO media_pedido(id,nombre,precio,img,id_usuario)VALUES(?,?,?,?,?)" )or die("error 2");
    $consulta->bind_Param("isdsi", $id,$nombre,$precio,$img,$_SESSION['id']);
    $consulta->execute();
    $consulta->get_result();

  

}else{

      if(isset($id)){
        $numeroproducto=count($_SESSION['carrito']);
        $nombre="";
        $genero="";
        $fecha="";
        $img="";
        $precio="";
          $res= $conexion -> query('Select id,nombre,genero,fecha_lanzamiento,img,precio,cantidad from media where id='.$id) or die("error3");
          $fila =mysqli_fetch_row($res);
          $nombre=$fila[1];
          $genero=$fila[2];
          $fecha=$fila[3];
          $img=$fila[4];
          $precio=$fila[5];
          $cantidad=1;
            $productos=array(
              'id'=> $id,
              'nombre'=> $nombre,
              'genero'=> $genero,
              'fecha_lanzamiento'=> $fecha,
              'img' => $img,
              'precio'=> $precio,
              'cantidad'=>$cantidad
            );    
         

        $_SESSION['carrito'][$numeroproducto]=$productos;   

        $consulta = $conexion->prepare("INSERT INTO media_pedido(id,nombre,precio,img,id_usuario,cantidad)VALUES(?,?,?,?,?,?)" )or die("error 4");
        $consulta->bind_Param("isdsii", $id,$nombre,$precio,$img,$_SESSION['id'],$cantidad);
        $consulta->execute();
        $consulta->get_result();
      }

    
    $_SESSION['carrito'][$numeroproducto]=$productos;
    //header( "Location:".$_SERVER['PHP_SELF'] );  
  }
  //$mensaje=print_r($_SESSION['carrito'],true);
  echo "<div class='alert alert-success' role='alert'>Se ha agregado correctamente</div>";
  //recargan la misma página
  header( "Location:".$_SERVER['PHP_SELF'] );  

}
?>

