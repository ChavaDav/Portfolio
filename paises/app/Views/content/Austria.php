
  <title>Austria</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/197/197447.png" type="image/x-icon">
  <style>
    html,
    body {
      background-color: black;
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
        background-color: rgb(2, 2, 44);
        padding: 3%;
    }
    li:hover
    {
        background-color: blue;
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


  </style>
</head>

<body>
  <div class="d-flex">
    <header>
      <nav class="navbar navbar-expand-lg bg-body-tertiary " data-bs-theme="dark">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav flex-column" align="center">
            <li class="nav-item">
              <a class="nav-link active " aria-current="page" href="#">Austria</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url()?>/home/pagina2">España</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url()?>/home/pagina3">Alemania</a>
            </li>
            <li style="background-color: rgb(78, 78, 78); border-radius: 15px;"> 
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
      <h1 style="text-align: center;">Austria</h1>
      <div>
        <p>es uno de los veintisiete estados soberanos que forman la Unión Europea, y su capital es Viena. Tiene una
            población de 8,9 millones de habitantes.Limita con la República Checa y Alemania al norte, Eslovaquia y Hungría
            al este, Eslovenia e Italia al sur y Suiza y Liechtenstein al oeste. No tiene salida al mar, aunque está
            atravesada en una parte significativa por el río Danubio, navegable en gran parte de su recorrido. El territorio
            abarca 83 871 km² de superficie y el clima predominante es el alpino. Solo el 32% del país está por debajo de
            los 500 metros de altitud, y el punto más alto es el pico Grossglockner con 3798 m s. n. m. Si bien el alemán
            austriaco es el idioma oficial del país, muchos austriacos se comunican informalmente en una variedad de
            dialectos bávaros. </p>
          <div id="carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://fundacionio.com/wp-content/uploads/2022/02/Austria.png" class="d-block w-100"
                  alt="Austria 1">
              </div>
              <div class="carousel-item">
                <img src="https://images.hola.com/imagenes/viajes/20171128102570/seis-destino-austria-clave-invernal-navidad/0-511-634/innsbruck-navidad-invierno-t.jpg"
                  class="d-block w-100" alt="Austria 2">
              </div>
              <div class="carousel-item">
                <img src="https://a.cdn-hotels.com/gdcs/production135/d1579/cbe33240-f585-11e8-b8fa-0242ac11000d.jpg?impolicy=fcrop&w=800&h=533&q=medium"
                  class="d-block w-100" alt="Austria 3">
              </div>
            </div>
           
  