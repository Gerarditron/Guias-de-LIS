<?php
session_start();
unset($_SESSION['user']);
unset($_SESSION['passs']);
$_SESSION = array();
session_destroy();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Fin de la sesion</title>
</head>

<body>
    <header>
        <h1>Has salido del sistema</h1>
    </header>
    <section>
        <article>
            <p>
                Para reingresr haz clic en <a href="autenticacionbasica.php">este enlace</a>.
            </p>
        </article>
    </section>
</body>

</html>