<?php session_start() ?>
<!doctype html>
<html lang="en">
    <head>
    <link rel="icon" type="image/png" href="icono.png" >

    <title>Tienda Multimedia</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../CSS/Styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       
    </head>

    <body>

    <?php
        if(isset($_SESSION['login'])){
            include("../Otros/navBienvenida.php");       

        }else{
            include("../Otros/nav.php");
        }                       
    ?>