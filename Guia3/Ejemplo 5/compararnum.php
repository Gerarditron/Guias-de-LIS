<!DOCTYPE html>
<html>

<head>
    <title>Contador de Palabras</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Muli" />
    <link rel="stylesheet" href="css/font.css" />
    <link rel="stylesheet" href="css/formstyle.css" />
</head>

<body>
    <header>
        <h1>
            Resultados de la comparacion de <?php echo $num1 = isset($_POST['numero1']) ? $_POST['numero1'] : 0;  ?>,
            <?php echo $num2 = isset($_POST['numero2']) ? $_POST['numero2'] : 0  ?> y
            <?php echo $num3 = isset($_POST['numero3']) ? $_POST['numero3'] : 0; ?>
        </h1>
    </header>
    <section>
        <article>
            <p class="msg">
                <?php
                $elmayor = ($num1 > $num2) ? $num1 : $num2;
                $elmayor = ($elmayor > $num3) ? $elmayor : $num3;
                printf("El numero mayor es: %d", $elmayor);
                ?>
            </p>
        </article>
    </section>
</body>

</html>