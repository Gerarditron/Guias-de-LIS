<!DOCTYPE html>
<html lang="es">

<head>
    <title>Convertidor de monedas</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/monedas.css" />
</head>

<body>
    <header>
        <h2>Tabla de conversion de Colones a Dolares</h2>
        <hr />
    </header>
    <section>
        <article>
            <?php
            define("EQUIV", "8.75");
            $colones = 1.00;
            $tabla = "<table>\n<thead>\n";
            $tabla .= "<th>Colones</th>";
            $tabla .= "<th>Dolares</th>";
            $tabla .= "</thead>\n<tbody>\n";
            while ($colones <= 10) {
                $tabla .= "<tr>\n<td>&cent; ";
                $tabla .= number_format($colones, 2, '.', ',') . "</td><td>\$ ";
                $tabla .= number_format($colones / EQUIV, 2, '.', ',');
                $colones += 0.25;
                $tabla .= "</td>\n</tr>\n";
            } //Fin del While
            $tabla .= "</tbody>\n</tabla>\n";
            echo $tabla;
            ?>
        </article>
    </section>
    <script src="js/modernizr.custom.lis.js"></script>
</body>

</html>