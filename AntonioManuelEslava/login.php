<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Logueate en mi Web</h2>
    <form action="" method="post">
        <label for="usuario">Introduce tu usuario:</label> <input type="text" name="usuario"><br><br>
        <label for="contrasena">Introduce tu contraseña:</label> <input type="text" name="contrasena"><br><br>
        <input type="submit" name="submit">
    </form>

    <?php

    include 'config.php';

        $usuarioi = htmlspecialchars($_POST['usuario']);
        $contrasenai = htmlspecialchars($_POST['contrasena']);

        if(isset($_POST["submit"])) {
            if ($usuarioi==constant('usuario') && $contrasenai==constant('contrasena')) {
                echo "<script>alert('Acceso concecido');</script>";
            }
            else {
                echo "<script>alert('Acceso Denegado');</script>";
            }
        }
    ?>
</body>
</html>