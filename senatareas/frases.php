<?php

include "./includes/conexion_bd.php";

$sql = "SELECT frase FROM frases ORDER BY RAND() LIMIT 1";
$result = $coneccion->query($sql);

if ($result->num_rows > 0) {
    // Salida de la frase
    $row = $result->fetch_assoc();
  $frase = $row['frase'];
  
}
// Cerrar conexión
$coneccion->close();
?>