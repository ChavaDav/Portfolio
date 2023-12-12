<?php
include_once('funciones.php'); // Asegúrate de que las clases necesarias se incluyan desde 'funciones.php'
include_once('movil.php');     // Asegúrate de que las clases necesarias se incluyan desde 'movil.php'

$Conxe = new Conexion();  // Crea una instancia de la clase Conexion
$Conxe->listarMovil();    // Llama al método listarMovil() de la instancia
echo "<script>alert('El archivo Movil.txt ha sido creado')</script>";
header("Refresh:0; url=index.html");
?>
