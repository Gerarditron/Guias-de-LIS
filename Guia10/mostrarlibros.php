<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Libros de la Base de Datos</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="js/modernizr.custom.lis.js"></script>
</head>
<header>
    <nav class="navbar navbar-dark bg-primary">
        <span class="nabar-text">
            <h1>Libros disponibles</h1>
        </span>
    </nav>
</header>

<body class="container">
    <?php
    //Creando una nueva instancia del objeto de conexion a la basa de datos
    @$db = new mysqli('localhost', 'root', '', 'libros');
    //@$db = mysqli_connect('localhost','lisfet','tecnologico','libros');
    if (mysqli_connect_errno()) {
        $msgerror = "Error: No se puede conectar a la base de datos. ";
        $msgerror .= "Contacte con soporte para resolver el problema. ";
        echo $msgerror;
        exit(0);
    }

    //Establecer el conjunto de caracteres a utf8
    $db->set_charset("utf8");

    //Si se ha llamado esta pagina desde el formulario para modificar libros ejecutar primero la actualizacion del registro
    if (isset($_POST['guardar'])) {
        //Creando variables locales con los datos enviados desde el formulario de modificacion
        $isbnx = isset($_GET['id']) ? trim($_GET['id']) : "";
        $isbn = isset($_POST['isbn']) ? trim($_POST['isbn']) : "";
        $autor = isset($_POST['autor']) ? trim($_POST['autor']) : "";
        $itulo = isset($_POST['titulo']) ? trim($_POST['titulo']) : "";
        $precio = isset($_POST['precio']) ? trim($_POST['precio']) : "";

        //Verificando que se hayan ingresado los datos en todos los controles del formulario
        if (empty($isbn) || empty($autor) || empty($titulo) || empty($precio)) {
            $msg = "Existen comapos en el formulario sin llenar.";
            $msg .= "Regrese al formulario y llene todos los campos. <br>\n";
            $msg .= "[<a href=\"modificar.php?id=" . $isbnx . "\">Volver</a>]\n";
            echo $msg;
            exit(0);
        }
        if (!get_magic_quotes_gpc()) {
            $isbnx = addslashes($isbnx);
            $isbn = addslashes($isbn);
            $autor = addslashes($autor);
            $titulo = addslashes($titulo);
            $precio = doubleval($precio);
        }

        //Creando la consulta de actualizacion con los datos enviados del formulario de modificacion de libros
        $consulta = "UPDATE libros SET isbn='" . $isbn . "', autor='" . $autor;
        $consulta .= "', titulo='" . $titulo . "', precio='" . $precio . "' WHERE isbn='" . $isbnx . "'";

        //Ejecutando la consulta de la actualizacion
        $resultc = $db->query($consulta);

        //Obteniendo el numero de registros actualizados
        $num_results = $db->affected_rows;
        echo "<div class=\"query\">\n\t<p>";
        echo "\t\t" . $num_results . " fila(s) actualizada(s) \n";
        echo "\t</p>\n</div>\n";
        $_GET['opc'] = "modificar";
    }

    if (isset($_GET['del']) && $_GET['del'] == "s") {
        $consulta = "DELETE FROM libros WHERE isbn '" . $_GET['id'] . "'<br>";
    }

    //Haicendo una consulta de todos los libros presentes en la tabal libros
    $consulta = "SELECT * FROM libros ORDER BY autor";

    //Ejecutando la consulta a traves del objeto $db
    $resultc = $db->query($consulta);

    //Obteniendo el numero de registros devueltos
    $num_results = $resultc->num_rows;
    echo "<table class='table'>
    <colgroup>
    <col class=\"isbn\">
    </colgroup>
    <colgroup>
    <col class=\"info\">
    <col class=\"info\">
    </colgroup>
    <colgroup>
    <col class=\"price\">
    </colgroup>
    <colgroup>
    <col class=\"action\">
    </colgroup>
    <thead>
    <tr id=\"theader\">
    <th>ISBN</th>
    <th>AUTOR</th>
    <th>TITULO</th>
    <th>PRECIO</th>
    <th>ACCION</th>
    </tr>
    </thead>
    <tbody>";
    while ($row = $resultc->fetch_assoc()) {
        echo "<tr class=\"normal\" onmouseover=\"this.className='selected'\" onmouseout=\"this.className='normal'\"";
        echo "<td scope='col'>";
        echo "" . $row['isbn'] . "";
        echo "</td><td scope='col'>";
        echo "" . stripslashes($row['autor']) . "";
        echo "</td><td scope='col'>\n</td>";
        echo "" . stripslashes($row['titulo']) . "";
        echo "</td><td scope='col'>$";
        echo "" . $row['precio'];
        echo "</td><td scope='col'>";
        echo "[<a href=\"" . $_GET['opc'] . ".php?id=" . $row['isbn'] . "\">";
        echo "" . $_GET['opc'] . "";
        echo "</a>]";
        echo "</td></tr>";
    }
    echo "</tbody>";
    echo "<tfoot>";
    echo "<tr id\"tfooter\">";
    echo "<th colspan=\"5\">";

    //Mostrando el numero total de registros de la tabla libros
    echo "Numero de registros: " . $num_results . "";
    echo "</th>";
    echo "</tr>";
    echo "</tfoot>";
    echo "</table>";
    ?>
    <hr class="d-lg-none divider">
    <a href="menuopciones.html" class="d-block h3 font-weight-normal">Regresar<br>
        <small class="d-block text-muted text-small">Menu</small>
    </a>
</body>

</html>