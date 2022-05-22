<?php 
    include("../Otros/cabecera.php");
    include("../BaseDatos/bbdd.php");
    /*Crea una sesión o reanuda la actual basada en un identificador de sesión pasado mediante una petición GET o POST, o pasado mediante una cookie*/
    
?>

<div class="formregispadre">
    <div class="formregis">

        <h2>Registro</h2>

        <form method="post">
            <div class="divform">
                <p>Nombre</p>
                <input class="inputini" name="nombre" type="text"  required>
            </div>
            <div class="divform">
                <p>Apellido</p>
                <input class="inputini" name="apellido" type="text"  required>
            </div>
            <div class="divform">
                <p>Username</p>
                <input class="inputini" name="username" type="text"  required>
            </div>
            <div class="divform">
                <p>Password</p>
                <input class="inputini" name="pass" type="password" required>
            </div>
            <div class="divform">
                <p>Email</p>
                <input class="inputini" name="email" type="email"  required>
            </div>
            <div class="divform">
                <p>Telefono</p>
                <input class="inputini" name="telefono" type="text">
            </div>
            <div class="divform">
                <button class="btn btn-dark" type="submit" name="submit" value="submit">Submit</button>        </div>
        </form>
    </div>
</div>

<?php
    /*Determina si una variable está definida y no es null*/
    if (isset($_POST['submit'])) {

        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $username=$_POST['username'];
        $pass=$_POST['pass'];
        //$passencript = password_hash($pass, PASSWORD_BCRYPT);
        $passencript=sha1($pass);
        $email=$_POST['email'];
        $telefono=$_POST['telefono'];


        $consulta=$conexion->prepare("SELECT * from usuario where email=?");
        $consulta->bind_Param("s", $email);
        $consulta->execute();
        $consulta->store_result();
        if ($consulta->num_rows()>0){
            $mensaje='<p>Este email ya esta registrado!</p>';
        }

        if($consulta->num_rows()==0){
            $consulta=$conexion->prepare("INSERT INTO usuario(nombre,apellido,username,pass,email,telefono) VALUES (?,?,?,?,?,?)");
            $consulta->bind_Param("sssssi", $nombre,$apellido,$username,$passencript,$email,$telefono);
            $consulta->execute();
            $consulta->store_result();
            
     
                header('location: inicio.php');
                $mensaje="<p> Registro Completado </p>";
            ?>
            <div class="alert alert-danger" role="alert">
            <?php echo $mensaje ?>
    
            </div>

        <?php } ?>
        
    <?php } ?>


<?php include("../Otros/pie.php"); ?>
