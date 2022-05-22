<?php 

    include("../Otros/cabecera.php");
    include("../BaseDatos/bbdd.php");

    $consulta = "Select id,nombre,precio,fecha_lanzamiento from usuario";

    $resultado = mysqli_query($conexion, $consulta);
    
?>

<div class="formpadre">
    <div class="form">
        <h2>Login</h2>
        <form method="post">
            <div class="divform">
                <p>Username</p>
                <input class="inputini" name="username" type="text" required>
            </div>
            <div class="divform">
                <p>Password</p>
                <input class="inputini" name="pass" type="password" required>
            </div>
                <div class="divform">
                    <button class="btn btn-dark " type="submit" name="submit" value="submit">Submit</button>
                    <a class="btn btn-info" href="../Pagina/registro.php">Registrarse</a>
                </div>
        </form>
    </div>
</div>


<?php

 
if (isset($_POST['submit'])) {

    
    $username = $_POST['username'];
    $pass=$_POST['pass'];
    $pasencript=sha1($pass);
    $consulta = mysqli_query($conexion,"SELECT * FROM usuario WHERE username='$username' and pass='$pasencript'");
    $row_cnt = mysqli_num_rows($consulta);
    if ($row_cnt<=0) {
         $mensaje='No existe este usuario o contraseña!';
    }else{
        $_SESSION['login'] = true;
        $_SESSION['carrito']= false;
        if ($row_cnt>0) {			
            $result = mysqli_fetch_array($consulta);	
            $_SESSION['id']=$result['id'];
            $_SESSION['username']=$result['username'];
            '<p>Login '.$_SESSION['username'].'</p>';
            header('location: usuario.php');
        } else {
            $mensaje="Username o password incorrecto!";
            session_destroy();
        }
    }
    ?>
    <div class="alert alert-danger" role="alert">
    <?php echo $mensaje ?>

    </div>
<?php } ?>

   
<?php include("../Otros/pie.php"); ?>

