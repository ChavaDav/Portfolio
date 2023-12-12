
  <title>España</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <link rel="shortcut icon" href="https://st3.depositphotos.com/1588812/18634/v/450/depositphotos_186349950-stock-illustration-spain-flag-vector-illustration.jpg" type="image/x-icon">
  <style>
    html,
    body {
      background-color: rgb(207, 42, 42);
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
        background-color: rgb(44, 41, 2);
        padding: 3%;
    }
    li:hover
    {
        background-color: rgb(253, 16, 16);
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
              <a class="nav-link active" href="#">España</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url()?>home/pagina3">Alemania</a>
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
      <h1 style="text-align: center;">España</h1>
      <div>
        <p>España, también denominado Reino de España,nota es un país soberano transcontinental, constituido en Estado social y democrático de derecho y cuya forma de gobierno es la monarquía parlamentaria. Es uno de los veintisiete Estados soberanos que forman la Unión Europea. Su territorio, con capital en Madrid,está organizado en diecisiete comunidades autónomas, formadas a su vez por cincuenta provincias, y dos ciudades autónomas.
            España se sitúa principalmente en el suroeste de Europa, si bien también tiene presencia en el norte de África. En Europa, ocupa la mayor parte de la península ibérica, conocida como España peninsular, y las islas Baleares (en el mar Mediterráneo). En África se hallan las ciudades de Ceuta y Melilla, las islas Canarias (en el océano Atlántico) y varias posesiones mediterráneas denominadas «plazas de soberanía». El municipio de Llivia, en los Pirineos, constituye un exclave rodeado totalmente por territorio francés. Completa el conjunto de territorios una serie de islas e islotes frente a las propias costas peninsulares. Tiene una extensión de 505 370 km2,
            por lo que es el cuarto país más extenso del continente,nota y con una altitud media de 650 m sobre el nivel del mar, uno de los países más montañosos de Europa. Su población casi llega a los 48 millones y medio de habitantes, aunque la densidad de población es reducida si se compara con el contexto europeo.Concretamente, la población durante el tercer trimestre de 2023 llegó hasta los 48 446 594.
            El territorio peninsular comparte fronteras terrestres con Francia y con Andorra al norte, con Portugal al oeste y con Gibraltar al sur. En sus territorios africanos, comparte fronteras terrestres y marítimas con Marruecos. Comparte con Francia la soberanía sobre la isla de los Faisanes en la desembocadura del río Bidasoa y cinco facerías pirenaicas.</p>
          <div id="carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://www.mequieroir.com/wp-content/uploads/2020/09/spain.jpg" class="d-block w-100"
                  alt="Austria 1">
              </div>
              <div class="carousel-item">
                <img src="https://images.hive.blog/p/3W72119s5BjVtYhc8EyUCS1n2TpsbpKuDhBkZTQTi2NsGVP3cuDYfbsXixEKSxJPDw2s269ozzDq2VJiVH4Jv5RUfcwaC7QQEGeJczdU6hNcjmt37L4Tne?format=match&mode=fit"
                  class="d-block w-100" alt="Austria 2">
              </div>
              <div class="carousel-item">
                <img src="https://images.squarespace-cdn.com/content/v1/5a86b05bcf81e0af04936cc7/1614842171798-3AOKAXV69AFIKD6W5CGR/que-ver-en-espana.jpg"
                  class="d-block w-100" alt="Austria 3">
              </div>
            </div>
            