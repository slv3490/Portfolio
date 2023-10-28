<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <!-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;700;900&display=swap" rel="stylesheet">  -->
    <link rel="stylesheet" href="/build/css/app.css">
</head>
<body>  
        
    <header class="header">
        <div class="bg-nav">
            <div class="contenedor navegacion">
                <a href="#">
                    <img class="animado" src="../build/img/logopruieba.png" alt="">
                </a>
                <nav>
                    <a class="enlace1 animado" href="#proyectos" style="--clr:#7ca22c" data-text="Proyectos">Proyectos</a>
                    <a class="enlace2 animado" href="#curriculum" style="--clr:#DCDCAA" data-text="Currículum">Currículum</a>
                    <a class="enlace3 animado" href="#contacto" style="--clr:#CE9178" data-text="Contacto">Contacto</a>
                </nav>
            </div>
        </div>

    </header>

    <?php echo $contenido; ?>

    <footer>
        <div class="contenedor-footer">
            <div class="datos-footer">
                <p>leonelsilvera9@gmail.com</p>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2196F3" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                <path d="M3 7l9 6l9 -6" />
                </svg>
            </div>

            <a href="https://www.linkedin.com/in/leonel-silvera-5a9a75286">
                <div class="datos-footer">
                    <p>Linkedin</p>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-linkedin" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2196F3" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                    <path d="M8 11l0 5" />
                    <path d="M8 8l0 .01" />
                    <path d="M12 16l0 -5" />
                    <path d="M16 16v-3a2 2 0 0 0 -4 0" />
                    </svg>
                </div>
            </a>

            <a href="https://github.com/slv3490">
                <div class="datos-footer">
                    <p>GitHub</p>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-github" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2196F3" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" />
                    </svg>
                </div>
            </a>
            
        </div>
    </footer>
    
    <?php echo $script ?? ""; ?>
</body>
</html>