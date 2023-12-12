<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listado</title>
    <style>
         html
        {
            animation: miAnimacion infinite 5s;
            
            }
            @keyframes miAnimacion {
                0%
                {
                    background-color:#6d83f2;
                }
                50%
                {
                    background-color:#42a7f5;
                }
                100%
                {
                    background-color:#6d83f2;
                }
        }
        body
        {
            margin: 10% 30%;
            border: solid;
            padding: 7% 8% 5% 7%;
            background-color: white;
        }
        h1
        {
            text-align: center;
            color: #42a7f5;
            position: sticky;
            text-shadow: 3px 1px 3px black;
            font-size: 4rem;
        }
        h2
        {
            text-align: center;
            font-size: 1.8rem;
        }
        h3
        {
            text-align: center;
            font-size: 2.5rem;
        }
        #im
        {
            position: absolute;
            bottom: 72.5vh;
            right: 137.5vh;
            height: 50px;
            width: 50px;
            border: solid ;
        }
    </style>
</head>
<body>
<p><img src="logo.png" alt="" style="width: 400px; height: 105px"></p>
    <h3>Tus últimos 7 post:</h3>
    <a href="Bienvenida.php"><img id="im" src="https://static-00.iconduck.com/assets.00/return-icon-2048x1866-c8h3yn0w.png" alt="" srcset=""></a>
    <?php
    session_start();
$servername = "localhost";
$username = "root";
$contraseña = "";
$dbname = "prueba";

// Create connection
$conn = new mysqli($servername, $username, $contraseña, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Error en la conexión: " . $conn->connect_error);
} 

$sql = "SELECT usuarios, texto FROM textos WHERE usuarios='". $_SESSION['usuario']."'";
$result = $conn->query($sql);
$i=1;
if ($result->num_rows > 0) {
  // Iteramos sobre los registros obtenidos

    while($row = $result->fetch_assoc()) {
        if($i==8)
            return ;
        echo "<h2>". $i .". " . $row["texto"].'</h2><br>';
        $i++;
    }
} else {
    echo "<h2>Aun no se han realizado publicaciones</h2>";
}
$conn->close();
?>
</body>
</html>