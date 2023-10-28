

window.addEventListener("DOMContentLoaded", function() {
    iniciarApp();
})

function iniciarApp() {
    videosDinamicos();
    burbujas();
    circulo();
    curriculum();
}



function videosDinamicos() {
    const clip = document.querySelectorAll(".video");

    clip.forEach(e => {
        e.addEventListener("mouseenter", function() {
            e.play();
        })
        e.addEventListener("mouseout", function() {
            e.pause();
        })
    })
}

function burbujas() {
    const contenedorDiv = document.querySelector(".burbujas");

    for(let i = 0; i<30; i++) {
        const burbujas = document.createElement("SPAN")
        burbujas.setAttribute("style", "--i:" + random(3, 20))

        contenedorDiv.appendChild(burbujas);
    }
}

function random(min, max) {
    return Math.floor(Math.random() * (max - min + 1) + min);
}


//Circulo
function circulo() {
    const circles = document.querySelectorAll('.element');

    let r = 0;
    let ancho = window.innerWidth;
    
    if(ancho >= 768) {
        r = 280 // radio
    } else if(ancho >= 375) {
        r = 150
    } else {
        r = 100 // radio
    }
    const n = 7;  // numero de circulos
    
    let angulo = 0;
    let originX = circles[0].offsetLeft
    let originY = circles[0].offsetTop
    
    setInterval(() => {
        angulo += 0.01
        circles.forEach((element,i) =>{
        element.style.left = `${originX + r*Math.cos(angulo + 2*Math.PI/n*i)}px`
        element.style.top = `${originY + r*Math.sin(angulo + 2*Math.PI/n*i)}px`})
    },35)
}

function curriculum() {
    const cv = document.querySelector("#ampliar");
    const menu = document.querySelector("#menu");
    const salir = document.querySelector("#salir");
    const body = document.querySelector("body")

    salir.addEventListener("click", (e) => {
        menu.classList.add("ocultar");
        menu.classList.remove("mostrar");
        cv.classList.remove("ocultar");
        cv.classList.add("mostrar");
        body.classList.remove("fijar-body");
    })

    cv.addEventListener("click", (e) => {
        const mostrar = e.target.classList;

        if(mostrar[2] === "mostrar") {
            mostrar.add("ocultar")
            mostrar.remove("mostrar")
            menu.classList.add("mostrar");
            menu.classList.remove("ocultar");
            body.classList.add("fijar-body");
        }
        
    })

}
