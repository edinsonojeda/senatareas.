<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>senatareas</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body >
<header>
    <div class="navbar">
 
    <img class="logo" src="/img/logo-del-sena.png" alt="">
    
        <div class="titulo">
        <a href="/index.php">
        <h1 >
            SenaTareas
        </h1>
        </a>
        </div>
        <div class="enlaces">
      <?php
     
      if (isset($_SESSION["login"])&& $_SESSION["login"] == true) {
        
        echo '<a href="/funciones/cerrar_cesion.php"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="35" height="35" stroke-width="2"> <path d="M13 12v.01"></path> <path d="M3 21h18"></path> <path d="M5 21v-16a2 2 0 0 1 2 -2h7.5m2.5 10.5v7.5"></path> <path d="M14 7h7m-3 -3l3 3l-3 3"></path> </svg> </a>';
      } else {
        echo '<a href="/login.php"> Iniciar Sesion</a>';
        echo '<a href="/funciones/insertar_registro.php">Crear cuenta</a>';
      }
      ?>
        </div>
    
    </div>
</header>
