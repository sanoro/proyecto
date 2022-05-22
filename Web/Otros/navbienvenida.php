
<nav class="menu">
              <a class='btn btn-primary ' href="../Pagina/index.php">Inicio</a>
              <a class='btn btn-primary' href="../Pagina/musica.php">Música</a>
              <a class='btn btn-primary' href="../Pagina/juegos.php">Juegos</a>
              <a class='btn btn-primary' href="../Pagina/peliculas.php">Películas</a>
              <a class='btn btn-primary' href="../Pagina/listarcarrito.php"><i class="fa-solid fa-cart-shopping"></i>(<?php 
                include("../BaseDatos/bbdd.php");
                $consulta = mysqli_query($conexion,'SELECT * from media_pedido where id_usuario='.$_SESSION['id']);
                $row_cnt = mysqli_num_rows($consulta);

              
                  echo $row_cnt;
 

                
                ?>)</a>
  
              <?php echo '<a class="btn btn-primary "  href="../Pagina/usuario.php">'.$_SESSION['username'].'</a>' ?> 

              <a class='btn btn-primary ' href="../Pagina/exit.php">Exit</a>
              
              
            
</nav>