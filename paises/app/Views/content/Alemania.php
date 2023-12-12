
  <title>Alemania</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <link rel="shortcut icon" href="https://w7.pngwing.com/pngs/798/23/png-transparent-flag-of-germany-weimar-republic-of-the-german-flag-flag-text-sphere-thumbnail.png" type="image/x-icon">
  <style>
    html,
    body {
      background-color: rgb(0, 0, 0);
      color: white;
      height: 100%;
      margin: 0;
    }

    main {
      padding: 10px 10vh 0 10vh;
      
    }
    main div
    {
        animation: entrada 4s linear;
    }
    main h1
    {
        animation: entrada1 2s;
    }

    nav {
      height: 95vh;
      width: 25vh;
      animation: entrada2 3s;
    }
    ul
    {
        animation-delay: 5s;    
      animation: entrada 5s;
      
    }
    li {
      margin:10px;
      padding: 20px;
      text-align: center;
      transition: font-size 3s;
    }

    #carousel {
      width: 60%;
      margin: auto; 
      display: flex;
      justify-content: center;
      align-items: center;
    }
    img {
      height: 350px;
      max-width: 100%;
    }
    footer 
    {
        background-color: rgb(255, 4, 0);
        padding: 3%;
    }
    li:hover
    {
        background-color: rgb(255, 0, 0);
        border-radius: 15px;
        animation: cambioLetra 3s;
        font-size: 20px;
    }
    li:not(:hover) {
    animation: cambioLetraBack 1s backwards;
}
    @keyframes cambioLetra {
        from{font-size: 16px;}
        to{font-size: 20px;}
    }
    @keyframes entrada {
        from{
            opacity: 0;
        }
        to
        {
            opacity: 1;
        }
    }
    @keyframes entrada1 {
    0% {
        position: relative;
        top: 50%;
    }
    100% {
        position: relative;
        top: 0;
    }
}
    @keyframes entrada2 {
        from{
            width: 0;
        }
        to
        {
            width: 25vh;
        }
}
@media screen and (min-height:900px) {
    img {
      height: 500px;
      width: 3000px;
    }
}

  </style>
</head>

<body>
  <div class="d-flex">
    <header>
      <nav class="navbar navbar-expand-lg  bg-warning" >
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav flex-column" align="center">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="<?php echo base_url()?>">Austria</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url()?>/home/pagina2">España</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Alemania</a>
            </li>
            <li style="background-color: rgb(216, 13, 13); border-radius: 15px;"> 
                <a href="#" style="width: 100px; height: 100px;" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="" style="width: 50px; height: 50px;" class="rounded-circle me-2">
                    <strong>Profile</strong>
                    <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2" data-popper-placement="top-start" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(0px, -34px, 0px); ">
                        <li><a class="dropdown-item"  href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                      </ul>
                  </a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <main data-bs-theme>
      <h1 style="text-align: center;">Alemania</h1>
      <div>
        <p>Alemania (en alemán: Deutschland, pronunciado /ˈdɔʏtʃlant/ ( escuchar)), oficialmente República Federal de Alemania , es uno de los veintisiete Estados soberanos que forman la Unión Europea. Constituido en Estado social y democrático de derecho, su forma de gobierno es la república parlamentaria y federal. Su capital es Berlín. Está formado por dieciséis estados federados (Bundesländer) y limita al norte con el mar del Norte, Dinamarca, 
            Suecia (frontera marítima) y el mar Báltico; al este con Polonia y la República Checa; al sur con Austria y Suiza; y al oeste con Francia, Luxemburgo, Bélgica y los Países Bajos. El municipio Büsingen am Hochrhein, enclavado en Suiza, también forma parte de Alemania. El territorio de Alemania abarca 357 376 km² de extensión y posee un clima templado. Con más de 84 millones de habitantes,
             es el país más poblado entre los Estados de la Unión Europea, y es el hogar del tercer mayor grupo de emigrantes internacionales. En 2014 Alemania fue el segundo destino de las migraciones más popular del mundo, después de Estados Unidos.</p>
          <div id="carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://www.taranna.com/docs/viajes-a-alemania.jpg" class="d-block w-100"
                  alt="Austria 1">
              </div>
              <div class="carousel-item">
                <img src="https://www.civitatis.com/blog/wp-content/uploads/2020/12/castillo-neuschwanstein-baviera.jpg"
                  class="d-block w-100" alt="Austria 2">
              </div>
              <div class="carousel-item">
                <img src="https://fotografias.larazon.es/clipping/cmsimages02/2022/08/01/EEBE5C24-7B4A-4033-AD32-F8FB52397C14/98.jpg?crop=6114,3440,x918,y0&width=1900&height=1069&optimize=low&format=webply"
                  class="d-block w-100" alt="Austria 3">
              </div>
            </div>

