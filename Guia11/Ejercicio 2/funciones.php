<?php
function generarCarrito()
{
    //Se utiliza una matriz para manejar el carrito
    $carrito = array();

    //Los articulos y sus cantidades se enviaran con el metodo GET, ya sea en la cadena de consulta o a traves de campos ocultos de formulario
    foreach ($_GET as $ref => $unidades) {
        if (preg_match("/^ref/", $ref)) { //Expresion regular
            $carrito[$ref] = $unidades;
        }
        return $carrito;
    }
}

function mostrarCarrito($carrito)
{
    //Generacion de la cabecera de la tabla
    echo "<table class='table' border=\"1\" align=\"center\">\n";
    echo "<tr class='bg-info'>\n<th>\nReferencia</th>\n";
    echo "<th>\nUnidades</th>\n</tr>\n";

    //Mostramos el carrito
    $totalUnidades = 0;
    if (empty($carrito)) {
        echo "<tr>\n<td align=\"center\" colspan=\"2\">\n";
        echo "El carrito esta vacio\n</td>\n</tr>\n";
    } else {
        foreach ($carrito as $ref => $unidades) {
            echo "<tr>\n<td>\n$ref</td>\n";
            echo "<td align=\"center\">$unidades</td>\n</tr>\n";
            $totalUnidades += $unidades;
        }
    }

    //Cerrar la tabla
    echo "<tr class='bg-light'><td align=\"center\" colspan=\"2\">\n";
    echo "Numero de Unidades: ";
    echo $totalUnidades . "</td>\n</tr>\n";
    echo "</table>\n";
    return true;
}

//Metodo que muestra los articulos disponiblers en la tienda
function estantes($carrito)
{
    //Generacion del query string que contiene las referencias de los productos y las cantidaes a llevar de cada uno
    $querystring = "";
    foreach ($carrito as $ref => $unidades) {
        $querystring .= "$ref=$unidades&";
    }
    echo "
        <div class='row'>
            <div class='col'>
                <div class='card'>
                    <div class='card-header bg-info'>ref1</div>
                    <div class='card-body'>Descripcion: Articulo 1 <br>Precio: 5 &euro;</div>
                    <div class='card-footer'><a href='./compra.php?{$querystring}articulo=ref1' title='Añadir al carrito'>Comprar</a></div>
                </div>
            </div>
            <div class='col'>
                <div class='card'>
                    <div class='card-header bg-info'>ref2</div>
                    <div class='card-body'>Descripcion: Articulo 2 <br>Precio: 3 &euro;</div>
                    <div class='card-footer'><a href='./compra.php?{$querystring}articulo=ref2' title='Añadir al carrito'>Comprar</a></div>
                </div>
            </div>
            <div class='col'>
                <div class='card'>
                <div class='card-header bg-info'>ref3</div>
                <div class='card-body'>Descripcion: Articulo 3 <br>Precio: 2 &euro;</div>
                <div class='card-footer'><a href='./compra.php?{$querystring}articulo=ref3' title='Añadir al carrito'>Comprar</a></div>
                </div>
            </div>
        </div>";
    return true;
}
