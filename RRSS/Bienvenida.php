<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
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
        a
        {
            font-size: 1.5rem;
            display: inline;
            padding-right: 10px;
            text-align: center;

        }
        p{
            text-align: center;
        }
        #boton
        {
            font-size: 1.5rem;
            padding: 6vh;
            border-radius: 15px;
        }
        #botones
        {
            display: flex;
        }
    </style>
</head>
<body>
    <?php
    echo "<h1>Bienvenido/a ". $_SESSION['usuario'] ."!!!</h1>"
    ?>
    <p><a href="index.php">Cerrar sesion</a></p>
    <div id="botones">
        <a href="post.php"><input type="button" id="boton" value="Crear post"></a>
        <a href="listado.php"><input type="button" id="boton" value="Mis post"></a>
    </div>
</body>
</html>