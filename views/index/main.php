<main class="main">

    <?php if($alerta) { ?>
        <p class="alerta exito"><?php echo $alerta["exito"][0] ?></p>
    <?php }; ?>

    <div class="contenedor contenido">
        <div class="texto-header">
            <p class="texto-principal"><span id="echo">echo</span> <span id="bienvenido">"Bienvenido"</span>;</p>
            <p class="texto-secundario">Me gusta estudíar y adquirir nuevos conocimientos. Soy un desarrollador full stack y utilizo las tecnologías <span>Html, Css, Javascript, Fetch, Php, POO - MVC y MySQL - SQL</span> </p>
        </div>
        <img class="imagen-header" src="../build/img/imagenheader.png" alt="">
    </div>

    <div class="tecnologias">
        <div class="contenedor-tecnologias">
            <h2 class="texto-tecnologia-animado">Tecnologías</h2>
            <p class="texto-centrado texto-tecnologia-animado">Todos los lenguajes y tecnologías que he aprendido a usar.</p>
            <div id="circle">
                <img class="redondo" src="build/img/imagencomputacion.png" alt="Imagen escritorio">
                <img class="element" src="build/img/html5.svg" alt="Icono Html5">
                <img class="element" src="build/img/css.svg" alt="Icono Css3">
                <img class="element javascript" src="build/img/javascript.png" alt="Icono Javascript">
                <img class="element" src="build/img/gulp.svg" alt="Icono Gulpfile">
                <img class="element" src="build/img/sass.svg" alt="Icono Sass">
                <img class="element sql" src="build/img/sql.png" alt="Icono MySQL">
                <img class="element" src="build/img/php.svg" alt="Icono Php">
            </div>
        </div>
    </div> <!-- Tecnologias -->

    <div id="proyectos">

    </div>

    <?php
        include_once __DIR__ . "/proyectos.php";
    ?>

    <div id="curriculum" class="hidden">

    </div>
    
    <?php
        include_once __DIR__ . "/cv.php";
    ?>

    <div class="curriculum">
        <h2>Curriculum Vitae</h2>
        <div class="botones contenedor">
            <a download="Curriculum Vitae" href="/cv.pdf" class="boton boton-animado">Descargar Currículum</a>
            <button id="ampliar" class="boton-animado boton mostrar">Ampliar Currículum</button>
        </div>
    </div>

    <div id="contacto">

    </div>

    <div class="contacto">
        <div class="contenedor-formulario">

            <h2>Contáctame</h2>

            <form class="formulario" method="POST">

                <fieldset>
                    <div class="input-group">
                        <input id="nombre" name="nombre" class="input" required="" />
                        <label for="nombre" class="user-label">Nombre Completo</label>
                    </div>

                    <div class="input-group">
                        <input id="email" name="email" class="input" required=""/>
                        <label for="email" class="user-label">E-Mail</label>
                    </div>

                    <div class="input-group">
                        <input id="asunto" name="asunto" class="input" required=""/>
                        <label for="asunto" class="user-label">Asunto</label>
                    </div>

                    <div class="input-group">
                        <textarea id="mensaje" name="mensaje" class="input" required=""></textarea>
                        <label for="mensaje" class="user-label">Mensaje</label>
                    </div>

                </fieldset>

                <input type="submit" class="boton">

            </form>

        </div>
    </div>
    
</main>

<?php
    $script = "
        <script src='build/js/app.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js'></script>
        <script src='build/js/animaciones.js'></script>
        
    "
?>