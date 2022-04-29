<?php
session_start();
if (!isset($_SESSION['user']) || !isset($_SESSION['pass'])) {
    header("Location: autenticacionbasica.php");
} else {
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Descarga de Materiales de la materia LIS</title>
    </head>

    <body class="container">
        <header>
            <div class="row">
                <div class="col-9">
                    <h1>Lenguajes Interpretados en el Servidor</h1>
                </div>
                <div class="col-3 float-right">
                    <a href="logout.php" class="btn btn-primary btn-lg" role="button" aria-disabled="true">Cerrar Sesion</a>
                </div>
            </div>
        </header>
        <section>
            <article>
                <ul class="list-group">
                    <li class="list-group-item active">Classes</li>
                    <li class="list-group-item">
                        <a href="http://www.mediafire.com/download/ccyra1rm614t05a/Clase+01+-+Programaci%C3%B3n+web+del+lado+del+servidor+-+2014.pdf" target="_blank">
                            Clase 01: Programacion Web del lado del Servidor.
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="http://www.mediafire.com/download/4le9g50t1d3wng1/Clase+02+-+Introducci%C3%B3n+a+la+programaci%C3%B3n+y+sintaxis+de+PHP+-+2014.pdf" target="_blank">
                            Clase 02: Introduccion a la programacion y sintaxis de PHP.
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="http://www.mediafire.com/download/9zg2du274b6d3fu/Clase+03+-+Estructuras+de+control+sentencias+condicionales+y+repetitivas+-+2014.pdf" target="_blank">
                            Clase 03: Estructuras de control - Sentencias condicionales y repetitivas.
                        </a>
                    </li>
                </ul>
                <ul class="list-group">
                    <li class="list-group-item active">Guias de Practica</li>
                    <li class="list-group-item">
                        <a href="http://www.udb.edu.sv/udb/archivo/guia/informatica-tecnologico/lenguajes-interpretados-en-el-servidor/2014/i/guia-1.pdf" target="_blank">
                            Guía 01: Introducción a la Progamación web con PHP
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="http://www.udb.edu.sv/udb/archivo/guia/informatica-tecnologico/lenguajes-interpretados-en-el-servidor/2014/i/guia-2.pdf" target="_blank">
                            Guía 02: Estructuras de Control - Sentencias condicionales y repetitivas
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="http://www.udb.edu.sv/udb/archivo/guia/informatica-tecnologico/lenguajes-interpretados-en-el-servidor/2014/i/guia-3.pdf" target="_blank">
                            Guía 03: Matrices y Funciones en PHP
                        </a>
                    </li>
                </ul>
                <ul class="list-group">
                    <li class="list-group-item active">Sitios Web</li>
                    <li class="list-group-item">
                        <a href="http://www.php.net/manual/es" target="_blank">
                            Sitio Web oficial de PHP
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="http://www.manualdephp.com/section/manual-de-php/" target="_blank">
                            Manual de PHP
                        </a>
                    </li>
                </ul>
            </article>
        </section>
    </body>

    </html>
<?php
}
?>