<?php
// PROGRAMA PARA CREAR USUARIOS

$servername = "localhost";
$usuario = "root";
$contraseña = "";
$bd = "prueba";

// Creamos la conexión
$conexion = new mysqli($servername, $usuario, $contraseña, $bd);

// Comprobamos la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
} 

// Obtén los valores del formulario y aplícales la función mysqli_real_escape_string para evitar SQL injection.
$nombreUsuario = mysqli_real_escape_string($conexion, $_GET['usuario']);
$contrasena = mysqli_real_escape_string($conexion, $_GET['Contraseña']);

// Consulta SQL para verificar las credenciales
$consulta = "SELECT * FROM prueba WHERE nombre = '$nombreUsuario'";

$resultado = $conexion->query($consulta);

if ($resultado->num_rows > 0) {
    echo "<script>window.alert('El usuario ya esta creado');</script>";
    header("Refresh:0; url=registro.php");
   
} else {
    

    // Realizamos la consulta para insertar el nuevo usuario
    $consulta = "INSERT INTO prueba (nombre, contraseña) VALUES ('$nombreUsuario', '$contrasena')";
    if ($conexion->query($consulta) === TRUE) {
        echo "<script>window.alert('Registro creado correctamente');</script>";
    header("Refresh:0; url=index.php");
    } else {
        echo "Error de SQL: " . $consulta . "<br>" . $conexion->error;
    }
}

$conexion->close();
?>