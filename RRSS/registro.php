<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creacion de usuario</title>
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
            padding: 7% 8% 1% 7%;
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
            font-size: 2rem;
        }
        p
        {
            font-size: 1.5rem;
            text-align: center;
        }
        #enviar
        {
            padding: 10% 30%;
            border-radius: 10px;
        }
        #back 
        {
            position: relative;
            bottom: 597px;
            right: 130px;
            border: solid;
            height: 50px;
            width: 50px;
        }
        img
        {
            height: 50px;
            width: 50px;
        }
    </style>
</head>
<body>
    <?php
    session_start();
    ?>
    <p><img src="logo.png" alt="" style="width: 400px; height: 105px"></p>
    <h2>Creacion de usuario</h2>
    <form action="back_registro.php" method="get">
        <p>
            Usuario: <input type="text" id="new_usuario" name="usuario" placeholder="ponga aquí su usuario">
        </p>
        <p>
            Contraseña: <input type="text" id="new_Contraseña" name="Contraseña" placeholder="ponga aquí su Contraseña">
        </p>
        <p>
            <input type="submit" value="Crear" id="enviar">
        </p>
    </form>
    <div id="back">
        <a href="index.php"><img src="https://static-00.iconduck.com/assets.00/return-icon-2048x1866-c8h3yn0w.png" alt=""></a>
    </div>
   
</body>
</html>