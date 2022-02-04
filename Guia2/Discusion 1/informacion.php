<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/tabla.css">
        <title>Informacion Sobre el Usuario</title>
    </head>
    <body>
    <?php
        //Declarando las variables que se mostraran en la tabla
        $name="Gerardo Jose Velasquez Cruz";
        $birth="San Salvador - El Salvador";
        $age="21 años";
        $carnet="VC190438";
        $imgSrc="img/foto1.jpg";
    ?>
        <div class="mainBox">
            <div class="mainTable">
                <table id="hor-zebra">
                    <thead>
                        <tr class="thead">
                            <th>Informacion del Usuario</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="backColor">
                            <td class='bold'>Nombre Completo:</td>
                            <td><?php echo $name; ?></td>
                        </tr>
                        <tr class="backColor">
                            <td class='bold'>Lugar de Nacimiento:</td>
                            <td><?php echo $birth; ?></td>
                        </tr>
                        <tr class="backColor">
                            <td class='bold'>Edad:</td>
                            <td><?php echo $age; ?></td>
                        </tr>
                        <tr class="backColor">
                            <td class='bold'>Carnet Universitario:</td>
                            <td><?php echo $carnet; ?></td>
                        </tr>
                    </tbody> 
                </table>
            </div>
            <div class="mainPic">
                <?php echo "<img src=\"".$imgSrc."\" class=\"picture\">" ?>
            </div>
        </div>
    </body>
</html>