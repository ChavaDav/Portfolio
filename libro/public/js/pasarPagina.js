function pasarpag( ) {
    document.getElementById("pag2").style.animation = "pasarPagina 2s";
    document.getElementById("pag2").style.backgroundColor = "white";

    let hijos = document.getElementById("pag2").querySelectorAll("*");
    for(let i = 0; i < hijos.length; i++)
    {
        hijos[i].style.display = "none";
    }
    setTimeout(() => {
        document.getElementById("pag2").style.animation = "none";
    document.getElementById("pag2").style.backgroundColor = "none";

    let hijos = document.getElementById("pag2").querySelectorAll("*");
    for(let i = 0; i < hijos.length; i++)
    {
        hijos[i].style.display = "block";
    }
    }, 2000);
    console.log("entro");
    
   
}

