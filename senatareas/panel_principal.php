<?php
session_start();
include './includes/header.php';

?>
<p>Bienvenido <?php echo $_SESSION['rol']. '  '. $_SESSION['nombre']; ?></p>

<?php

echo $_SESSION['rol'];


if ($_SESSION['rol'] == 'instructor') {
    require __DIR__ . '/includes/panel_instructor.php';
} else {
    require __DIR__ . '/includes/consultar_aprendiz.php';
}
?>