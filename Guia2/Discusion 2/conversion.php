<!DOCTYPE html>
<html>
    <head>
        <title>Conversion a Euros</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale-1.0" />
        <link rel="stylesheet" href="css/tablaConversion.css"/>
    </head>
    <body>
        <?php
            if(isset($_POST['submit']) && $_POST['submit'] == "Enviar"):
                extract($_POST);
                $dolares = !empty($dolar) ? $dolar :0;

            else:
                echo "<table>\n<tr>No se ha recibido ningun dato del formulario.</tr>\n</table>";
            endif
        ?>    
    <table>
            <thead>
                <tr>
                    <th>Valor en Dolares</th>
                    <th>Valor en Euros</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                        if(isset($dolares) && $dolares != 0):
                            echo "<td>".$dolares."</td>";
                            $euros = $dolares*0.87;
                            $euros = number_format((float)$euros, 2, '.', '');
                            echo "<td>".$euros."</td>";
                            
                        else:
                            echo "\n<td>No hay Varo</td>\n<td>No hay Conversion</td>";
                        endif
                    ?>    
                </tr>
            </tbody>
        </table>
    </body>
</html>