<?php
include './includes/header.php';
?>

<div class="senaimg">
        <img src="" alt="">
    

<div class="login">
    
    <div class="iniciar">
        <form action="" method="post">
            <fieldset class="session">
                <legend>Iniciar session</legend>
                <label for="usu" >Usuario</label>
                <input type="text" placeholder="Example@correo.com" id="usu" required name="email">
                <label for="pass">Contraseña</label>
                <input type="password" name="password" id="pass" placeholder="valide su usuario" required>
                <button type="submit">Iniciar seccion</button>
            </fieldset>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $correo = $_POST['email'];
        $password = $_POST['password'];
        session_start();
        try {
            require './includes/conexion_bd.php';
            $sql = "SELECT email, contra, rol FROM usuarios WHERE email='$correo'";
    $consulta = mysqli_query($coneccion, $sql);
    $resul = mysqli_fetch_assoc($consulta);
    if ($_POST['password'] == $resul['contra']) {
        $_SESSION['nombre'] = $resul['nombre'];
        $_SESSION['rol'] = $resul['rol'];
        $_SESSION['login']= true;
        header('location: panel_principal.php');

    } else {
        echo ('usuario y/o contraseña no son correctos');
    }

   } catch (\Throwable $th){
    echo ($th);
   }
}


include './includes/footer.php';
?>