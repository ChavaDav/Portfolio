<?php
// Incluir la clase de conexión
include_once('funciones.php');
include_once('PC.php');

$Conxe=new Conexion();
if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    // Verificar si se han proporcionado todos los parámetros en la URL
    if (isset($_GET['marca']) && isset($_GET['modelo']) && isset($_GET['año']) && isset($_GET['cpu']) && isset($_GET['tarjeta_grafica']) && isset($_GET['placa_base'])) {
        // Recuperar los datos del formulario
        $marca = mysqli_real_escape_string($Conxe->conexion, $_GET['marca']);
        $modelo = mysqli_real_escape_string($Conxe->conexion, $_GET['modelo']);
        $año = mysqli_real_escape_string($Conxe->conexion, $_GET['año']);
        $cpu = mysqli_real_escape_string($Conxe->conexion, $_GET['cpu']);
        $tarjeta_grafica = mysqli_real_escape_string($Conxe->conexion, $_GET['tarjeta_grafica']);
        $placa_base = mysqli_real_escape_string($Conxe->conexion, $_GET['placa_base']);


        if(($marca || $modelo || $año || $cpu || $tarjeta_grafica || $placa_base )=="")
        {
            echo "<script>alert('Faltan parámetros en la URL.')</script>";
            header("Refresh:0; url=pcs.html");
        }
        else {
        $Conxe->añadirMovil($marca, $modelo, $año, $cpu, $tarjeta_grafica, $placa_base);
       
        }

        
    } 
}
?>
