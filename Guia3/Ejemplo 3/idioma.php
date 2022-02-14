<!DOCTYPE html>
<html lang="es">

<head>
    <title>Detector de Lenguaje de Navegador</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="Content-Script-Type" content="text/javascript" />
    <link rel="stylesheet" href="css/idioma.css" />
</head>

<body>
    <div id="wrapper">
        <header>
            <h1 class="emboss">Idioma del Navegador</h1>
        </header>
        <section>
            <?php
            //Antes de nada introducimos mensajes en forma de variables
            $espanol = "Hola";
            $ingles = "Hello";
            $aleman = "Hallo";
            $frances = "Bonjour";
            $italiano = "Ciao";
            $portugues = "Ola";
            //Ahora leemos del navegador cual es su lengua oficial
            $completo = $_SERVER["HTTP_ACCEPT_LANGUAGE"];
            $idioma = substr($_SERVER["HTTP_ACCEPT _LANGUAGE"], 0, 2);
            //Formulamos las posibilidades que se pueden dar
            echo "<p>" . $completo . "<br>";
            echo $idioma . "</p>\n";
            if ($idioma == "es") {
                echo '<p class="msgOff">';
                printf("El lenguaje que se esta utilizando en el navegador es Espaniol: %s </p>\n", $espanol);
            } elseif ($idioma == "fr") {
                echo '<p class="msgOff">';
                printf("El lenguaje que se esta utilizando en el navegador es Frances: %s </p>\n", $frances);
            } elseif ($idioma == "en") {
                echo '<p class="msgOff">';
                printf("El lenguaje que se esta utilizando en el navegador es Ingles: %s </p>\n", $ingles);
            } elseif ($idioma == "de") {
                echo '<p class="msgOff">';
                printf("El lenguaje que se esta utilizando en el navegador es Aleman: %s </p>\n", $aleman);
            } elseif ($idioma == "it") {
                echo '<p class="msgOff">';
                printf("El lenguaje que se esta utilizando en el navegador es Italiano: %s </p>\n", $italiano);
            } elseif ($idioma == "pt") {
                echo '<p class="msgOff">';
                printf("El lenguaje que se esta utilizando en el navegador es Portugues: %s </p>\n", $portugues);
            } else {
                echo '<p class="msgOff">';
                echo "El idioma del navegador es desconocido. </p>";
            }
            ?>
        </section>
    </div>
</body>
<script src="js/modernizr.custom.lis.js"></script>
<script src="js/switchclass.js"></script>

</html>