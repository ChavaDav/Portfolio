
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Revolution&family=Single+Day&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ url('imgs/icono.ico') }}">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <script src="{{ url('js/pasarPagina.js') }}"></script>
    <style>
        .paginas
        {
            background-image: url("{{ url('imgs/texturalibro.jpg')  }}")
        }
       .pagina1,.pagina2
       {
        background-image: url("{{ url('imgs/texturalibro.jpg')  }}")
       }
    </style>
</head>
<body data-hosturl="<?= Session::get('hosturl')?>">
    <nav>

    </nav>
    <article>
        <div class="borde">
            <div class="paginas">
                <div class="pagina1">
                    <p id="title"><b> <?=  Session::get("titulo") ?></b></p>
                    <p><?=Session::get("contenido")?></p>
                  
                </div>
                <div class="pagina2" id="pag2">
                    <p id="final" hidden><?=  Session::get("final") ?></p>
                    <h2 id="pregunta">¿Como quieres que siga la historia?</h2>
                    <button id="botonSig" class="boton" onclick="pasarpag()">Siguiente</button>
                    <button id="dec1" class="boton" onclick="pasarpag()" hidden>Quedarse en la ciudad</button>
                    <button id="dec2" class="boton" onclick="pasarpag()" hidden>Investigar profundidades</button>
                    <button id="retorno" class="boton" onclick="pasarpag()" >Volver a empezar</button>
                </div>
            </div>
        </div>
    </article>
    <script >
        var botonsig = document.getElementById("botonSig");
        if(window.location.href == '<?= Session::get("hosturl") ?>/')
        {
            
            botonsig.addEventListener("click", () =>{
                setTimeout(() => {
               window.location.href="<?= Session::get('hosturl') ?>/cambioTitulo";  
            }, 2000);
        });

        }
        else if(window.location.href == '<?= Session::get("hosturl") ?>/cambioTitulo')
        {
            document.getElementById("botonSig").style.display="none";
            document.getElementById("dec1").style.display="block";
            document.getElementById("dec2").style.display="block";

        }
        else if(window.location.href == '<?= Session::get("hosturl") ?>/segundaparteA' || window.location.href == '<?= Session::get("hosturl") ?>/segundaparteB')
        {
            if(window.location.href == '<?= Session::get("hosturl") ?>/segundaparteA')
            {
                 botonsig.addEventListener("click", () =>{
                setTimeout(() => {
               window.location.href="<?= Session::get('hosturl') ?>/final/A";  
            }, 2000);
            });
            }else
            {
                botonsig.addEventListener("click", () =>{
                setTimeout(() => {
               window.location.href="<?= Session::get('hosturl') ?>/final/B";  
            }, 2000);
            });
            }
           
            document.getElementById("dec1").style.display="none";
            document.getElementById("dec2").style.display="none";

        }
        else if(window.location.href == '<?= Session::get("hosturl") ?>/final/A' || window.location.href == '<?= Session::get("hosturl") ?>/final/B')
        {
           
            document.getElementById("final").style.display="block";
            document.getElementById("pregunta").style.display="none";
            document.getElementById("botonSig").style.display="none";
            
            document.getElementById("dec1").style.display="none";
            document.getElementById("dec2").style.display="none";
        }
        var retorno = document.getElementById("retorno");
        var decision1 = document.getElementById("dec1");
        var decision2 = document.getElementById("dec2");
        decision1.addEventListener("click", () =>{
            setTimeout(() => {
                window.location.href="<?= Session::get('hosturl') ?>/segundaparteA";
            }, 2000);
        });
        decision2.addEventListener("click", () =>{
            setTimeout(() => {
               window.location.href="<?= Session::get('hosturl') ?>/segundaparteB";  
            }, 2000);
        });
        retorno.addEventListener("click", () =>{
                setTimeout(() => {
               window.location.href="<?= Session::get('hosturl') ?>";  
            }, 2000);
            });
    </script>
</body>
</html>