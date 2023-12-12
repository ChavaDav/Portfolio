<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
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
            border: solid 5px;
            padding: 7% 8% 5% 7%;
            background-color: white;
            
            border-color: white;
        }
        h1
        {
            text-align: center;
            color: #42a7f5;
            position: sticky;
            text-shadow: 3px 1px 3px black;
            font-size: 4rem;
        }
        p
        {
            font-size: 1.5rem;
            text-align: center;
            color: black;
        }
        #enviar
        {
            padding: 10% 30%;
            border-radius: 10px;
        }
        img
        {
            width: 400px;
        }
        
    </style>
</head>
<body>
    <?php
    session_start();
    ?>
    <p><img src="logo.png" alt="" style="width: 400px; height: 105px"></p>
    <form action="back_inicio.php" method="get">
        <p>
            Usuario: <input type="text" id="usuario" name="usuario" placeholder="ponga aquí su usuario">
        </p>
        <p>
            Contraseña: <input type="password" id="Contraseña" name="Contraseña" placeholder="ponga aquí su Contraseña">
        </p>
        <p>
            <input type="submit" value="Enviar" id="enviar">
        </p>
        <a href="registro.php"><p>Crear usuario</p></a>
    </form>
   
</body>
</html>