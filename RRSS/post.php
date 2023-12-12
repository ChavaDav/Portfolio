<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
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
                padding: 7% 8% 3% 6%;
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
        textarea
        {
            max-width: 60vh;
            max-height: 10vh;
            min-width: 60vh;
            min-height: 10vh;
        }
        #boton
        {
            margin-top: 10px;
            font-size: 2rem;
            padding: 8vh;
            border-radius: 15px;
        }
        a
        {
            position: absolute;
        }
        #im
        {
            position: absolute;
            bottom: 300px;
            right: 55px;
            height: 50px;
            width: 50px;
            border: solid ;
        }
    </style>
</head>
<body>
<p><img src="logo.png" alt="" style="width: 400px; height: 115px"></p>
    <h2>Tu post:</h2>
    <form action="back_post.php" method="get">
    <a href="Bienvenida.php"><img id="im" src="https://static-00.iconduck.com/assets.00/return-icon-2048x1866-c8h3yn0w.png" alt="" srcset=""></a>
        <textarea name="texto" id="texto" rows="5" cols="50" maxlength="400" placeholder="Escriba aquí su post"></textarea>
        <br>
        <h2><input id="boton" type="submit" value="Subir post"></h2>
    </form>
</body>
</html>