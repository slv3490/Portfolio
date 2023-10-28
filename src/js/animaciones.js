if(window.innerWidth > 768) {
    gsap.set(".animado", {
        y: -400
    });
} else {
    gsap.set(".animado", {
        opacity: 0
    });
};

gsap.set(".texto-header, .imagen-header, .texto-tecnologia-animado, #circle, .curriculum h2, .boton-animado", {
    opacity: 0,
    scale: 0
});
gsap.set(".contenedor-formulario h2, .input-group, form .boton", {
    opacity: 0,
    y: -20
});

//Animacion del header
const tl1 = gsap.timeline()
.to(".animado", {
    y: 0,
    opacity: 1,
    duration: 1,
    stagger: .2
}).to(".texto-header", {
    opacity: 1,
    scale: 1,
    duration: .8
}).to(".imagen-header", {
    rotate: 360,
    opacity: 1,
    scale: 1,
    duration: 1
});

//Animacion de las tecnologias
gsap.to(".texto-tecnologia-animado, #circle", {
    scrollTrigger: {
        trigger: ".texto-tecnologia-animado",
        start: "-100px center",
        end: "-100px center"
    },
    opacity: 1,
    stagger: .2,
    scale: 1,
    duration: 1
});

//Animacion del CV
gsap.to(".curriculum h2, .boton-animado", {
    scrollTrigger: {
        trigger: ".curriculum",
        start: "top 750px",
    },
    opacity: 1,
    scale: 1,
    duration: 1
});
gsap.to(".contenedor-formulario h2, .input-group, form .boton", {
    scrollTrigger: {
        trigger: ".contenedor-formulario",
        start: "top center",
        end: "top center"
    },
    stagger: .2,
    opacity: 1,
    y: 0,
})
const inputs = document.querySelectorAll(".input");
const label = document.querySelectorAll(".user-label");

for(let i = 0; i < inputs.length; i++) {
    inputs[i].addEventListener("keyup", function() {
        if(this.value.length >= 1) {
            this.nextElementSibling.classList.add("fijar");
        } else {
            this.nextElementSibling.classList.remove("fijar");
        }
    })
}

//Desaparecer Alertas Exito

gsap.to(".alerta.exito", {
    delay: 4,
    duration: .4,
    scale: 0,
    opacity: 0
});
