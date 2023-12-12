<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario incorrecto</title>
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
            font-size: 2rem;
        }
        p
        {
            font-size: 1.5rem;
            text-align: center;
        }
        #vuelta
        {
            padding: 10% 30%;
            border-radius: 10px;
            font-size: 1.2rem;
            
        }
        h3
        {
            text-align: center;
        }
    </style>
</head>
<body>
<p><img src="logo.png" alt="" style="width: 400px; height: 105px"></p>
    <h2>Error, su usuario o contraseña son incorrectos</h2>
    <h3><a href="index.php"><input type="button" id="vuelta" value="Volver a la pagina de inicio"></a></h3>
</body>
</html>