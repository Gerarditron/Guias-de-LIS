<!DOCTYPE html>
<html lang="es">

<head>
    <title>Ejercicio de Expresiones Regulares</title>
    <link rel="stylesheet" href="css/styles.css" />
</head>

<body>
    <div id="bodywrap">
        <section id="pagetop"></section>
        <header id="pageheader">
            <h1>Uso de <span>Expreiones Regulares</span></h1>
        </header>
        <div id="contents">
            <section id="main">
                <div id="leftcontainer">
                    <h2>Buscador de Palabras</h2>
                    <section id="sidebar">
                        <?php
                        if (isset($_POST['Enviar'])) {
                            $text = isset($_POST['comment']) ? trim($_POST['comment']) : null;
                            $palabra = isset($_POST['palabra']) ? trim('palabra') : null;
                            $text = preg_replace("/\b(" . $palabra . ")\b/i", '<span style="background:#5fc9f6">\1</span>', $text);
                        }
                        ?>
                        <div id="sidebarwrap">
                            <h2>Resultado</h2>
                            <article class="post">
                                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" class="form">
                                    <p class="textfield">
                                        <label for="palabra">
                                            <small>Palabra a Buscar</small>
                                        </label>
                                    </p>
                                    <p>
                                        <small>Ingrese el texto de prueba para procesarlo con las <strong>expresiones regulares</strong></small>
                                    </p>
                                    <p class="text-area">
                                        <textarea name="comment" id="comment" cols="50" rows="10" tabindex="4">
                                            A 39 anios luz de la tierra se encuentra la estrella Trappist-1, conocida en la NASA por el nombre de catalogo 2MASS
                                            J23062928-0502285. Es decir, un astro completamente irrelevante hasta hace un muy poco. El pasado mayo, el equipo liderado por
                                            Michael Gillon (Universidad de Lieja, Belgica) ya anuncio que habia descubierto dos planetas (quizas tres) orbitandola. Con
                                            un 9% de la masa del Sol, Trappist-1 es una enana roja fria. Si fuera un poco mas pequenia, ya no seria una estrella sino una 
                                            enana marron, que son astros frios que no pueden fusionar hidrogeno como nuestro sol. Ahora la NASA ha anunciado que Trappist-1 
                                            no tiene tres, sino siete exoplanetas, todos ellos de tamanio similar al de la Tierra, tres o cuatro de los cuales estan en orbitas
                                            templadas donde no hace ni demasiado frio ni demasiado calor para permitir la existencia de agua liquida en su superficio y, por lo
                                            tanto, vida tal como la conocemos. Al ser unba estrella pequenia y mucho mas debil que nuestro sol, los exoplanetas estan en orbitas 
                                            necesariamente muy compactas. Es mas, si pusieramos los planetas en torno a nuestro sol, todos cabrian comodamente dentro de la 
                                            orbita de Mercurio
                                        </textarea>
                                    </p>
                                    <p>
                                        <input name="Enviar" id="Enviar" value="1" type="hidden" />
                                        <input name="submit" id="submit" tabindex="5" type="image" src="images/submit.png" />
                                    </p>
                                    <div class="clear"></div>
                                </form>
                                <div class="clear"></div>
                            </article>
                        </div>
                    </section>
                    <div class="clear"></div>
                </div>
                <footer id="pagefooter">
                    <div id="footerwrap"></div>
                </footer>
            </section>
        </div>
    </div>

</body>

</html>