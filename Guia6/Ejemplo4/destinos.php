<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Ciudades de Destino</title>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Bitter" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fields.css" />
</head>

<body>
    <header>
        <nav class="navbar navbar-light bg-warning">
            <span class="navbar-text mx-auto">
                <h1>Ciudades de Destinos</h1>
            </span>
        </nav>
    </header>
    <section>
        <div class="container">
            <?php
            //La funcion espera una matriz con una lista ($lista) ya sea de paises o ciudades y un parametro opcional con el tipo de lista que tendra un valor por defecto "ul"
            function createList($lista, $tipo = "ul")
            {
                //Inicializando variables para ambos tipos de listas HTML
                $ullist = "";
                $ollist = "";
                switch ($tipo) {
                    case "ul":
                        $ullist .= "<article id=\"countries\">\n";
                        $ullist .= "\t<h1>\n";
                        $ullist .= "\t\tPaises y Ciudades \n";
                        $ullist .= "\t\t<span>seleccionadas</span>\n";
                        $ullist .= "\t</h1>\n";
                        $ullist .= "\t<ul class=\"imglist\">\n";
                        foreach ($lista as $key => $value) {
                            $ullist .= "\t\t<li><a href=\"javascript:void(0)\">$key => $value</a></li>\n";
                        }
                        $ullist .= "\t</ult>\n";
                        $ullist .= "</article>\n";
                        print $ullist;
                        break;
                    case "ol":
                        $ollist .= "<article id=\"cities\">\n";
                        $ollist .= "\t<h1><span>Ciudades</span></h1>\n";
                        $ollist .= "\t<div class=\"numberlist\">\n";
                        $ollist .= "\t\t<ol>\n";
                        foreach ($lista as $key => $value) {
                            $ollist .= "\t\t\t<li><a href=\"javascript:void(0)\">$key => $value</a></li>\n";
                        }
                        $ollist .= "\t\t</ol>\n";
                        $ollist .= "\t</div>\n";
                        $ollist .= "</article>";
                        print $ollist;
                    default:
                        print "<p>No esta definido este tipo de lista</p>";
                        break;
                }
            }

            //Iniica el procesamiento del formulario
            if (isset($_POST['submit'])) {
                //Analisis de los elementos de campo select
                if (is_array($_POST['location'])) {
                    //Si se tiene una matriz invocar a la funcion createList para crear la lista UL
                    createList($_POST['location']);
                } else {
                    echo "Se esperaba una lista, no un valor escalar";
                    exit(0);
                }

                //Analisis de los elementos checkbox
                extract($_POST);
                if (is_array($place)) {
                    createList($place, "ol");
                }
            } else {
                print "<p>El procesamiento del formulario requiere que se haya presionado el boton Enviar.</p>";
                print "<a href=\"selectfields.html\">Regresar/a>";
                exit(0);
            }
            ?>
        </div>
    </section>
</body>

</html>