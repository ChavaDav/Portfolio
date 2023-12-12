<?php
session_start();

// Verificar si el formulario se ha enviado

    $servername = "localhost";
    $usuario_db = "root"; 
    $contraseña_db = ""; 
    $bd = "prueba"; 

    // Crear la conexión a la base de datos
    $conexion = new mysqli($servername, $usuario_db, $contraseña_db, $bd);

    // Verificar la conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Obtener las credenciales del formulario
    $usuario = mysqli_real_escape_string($conexion, $_GET['usuario']);
    $contraseña = mysqli_real_escape_string($conexion, $_GET['Contraseña']);

    // Consulta SQL para verificar las credenciales
    $consulta = "SELECT * FROM prueba WHERE nombre = '$usuario' AND contraseña = '$contraseña'";

    $resultado = $conexion->query($consulta);

    if ($resultado->num_rows == 1) {
        // Las credenciales son válidas
        $_SESSION['usuario'] = $usuario;
        $_SESSION['login'] = true;
        header("location: Bienvenida.php"); 
        exit();
    } else {
        // Credenciales incorrectas, redirigir a página de error
        header("location: error.php");
        exit();
    }

    // Cierra la conexión a la base de datos
    $conexion->close();

?>
