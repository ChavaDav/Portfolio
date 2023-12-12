<?php
// Incluir la clase de conexión
include_once('funciones.php');
include_once('movil.php');

$Conxe=new Conexion();
if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    // Verificar si se han proporcionado todos los parámetros en la URL
    if (isset($_GET['marca']) && isset($_GET['modelo']) && isset($_GET['año']) && isset($_GET['pulgadas']) && isset($_GET['tipo_pantalla']) && isset($_GET['conectividad'])) {
        // Recuperar los datos del formulario
        $marca = mysqli_real_escape_string($Conxe->conexion, $_GET['marca']);
        $modelo = mysqli_real_escape_string($Conxe->conexion, $_GET['modelo']);
        $año = mysqli_real_escape_string($Conxe->conexion, $_GET['año']);
        $pulgadas = mysqli_real_escape_string($Conxe->conexion, $_GET['pulgadas']);
        $tipo_pantalla = mysqli_real_escape_string($Conxe->conexion, $_GET['tipo_pantalla']);
        $conectividad = mysqli_real_escape_string($Conxe->conexion, $_GET['conectividad']);

        if(($marca || $modelo || $año || $pulgadas || $tipo_pantalla || $conectividad )=="")
        {
            echo "<script>alert('Faltan parámetros en la URL.')</script>";
            header("Refresh:0; url=moviles.html");
        }
        else {
        $Conxe->añadirMovil($marca, $modelo, $año, $pulgadas, $tipo_pantalla, $conectividad);
       
        }
        
    }
}
?>
