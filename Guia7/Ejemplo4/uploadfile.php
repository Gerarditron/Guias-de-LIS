<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <!-- Indicar al navegador que la pagina estara optimizada para distintos dispositivos -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <!-- Import Google Icon Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="css/fonts.css" />
    <!--Import Materialize.css -->
    <link rel="stylesheet" href="css/materialize.css" />
</head>

<body>
    <section>
        <article>
            <div class="row">
                <h1 class="tittle-form">Adjuntar un archivo de imagen</h1>
                <?php
                if (isset($_POST['send'])) {
                    //Incluir libreria de funciones
                    require_once("comprobarimagen.php");
                    //Verificar si se han enviado uno varios archivos valiendonos de una expresion regular
                    $archivos = array();
                    if (!empty($_FILES['files']['name'][0])) {
                        $list = "<ol class=\"lilst-files\" >\n";
                        foreach ($_FILES['files']['name'] as $i => $archivo) {
                            $archivos[$i] = $archivo;
                            //Invocar a la funcion que verificara mediante una expresion regular si el archivo pasado como argumento es o no es imagen
                            $list .= "<li>\n<a href=\"#\">" . $archivos[$i] . comprobarimagen($archivos[$i]) . "</a>\n\t</li>\n";
                        }
                        $list .= "</ol>\n";
                        echo $list;
                    }
                    //Obteniendo los datos del formulario
                } else {
                ?>
                    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data" class="col s12">
                        <div class="row col s12">
                            <div class="file-field input-field col s8">
                                <div class="btn">
                                    <span>Adjuntar</span>
                                    <input type="hidden" name="MAX_FILE_SIZE" value="2097152" />
                                    <input type="file" name="files[]" multiple="multiple" />
                                    <div class="file-path-wrapper">
                                        <input type="text" class="file-path validate" placeholder="Seleccione solo archivos de imagen" />
                                    </div>
                                </div>
                                <div class="row col s4">
                                    <button type="submit" class="btn waves-effect waves-light" name="send">
                                        Enviar
                                        <i class="material-icons right">send</i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                <?php
                }
                ?>
            </div>
        </article>
    </section>
</body>
<!-- Import jQuery before materialize.js -->
<script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.min.js"></script>

</html>