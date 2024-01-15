<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva</title>
</head>
<body>
    <h2>Rellena el formulario para reservar habitación</h2>
    <form action="" method="post">
        <label for="nombre">Nombre: </label> <input type="text" name="nombre"><br><br>
        <label for="apellidos">Apellidos: </label><input type="text" name="apellidos"><br><br>
        <label for="email">Email: </label><input type="text" name="email"><br><br>
        <label for="dni">DNI: </label><input type="text" name="dni"><br><br>
        <label for="fechae">Fecha entrada:</label> <input type="date" name="fechae"><br><br>
        <label for="dias">Número de días: </label> <input type="number" name="dias"><br><br>
        <label for="tipo">Tipo de habitación: </label><select name="tipo">
            <option value="simple">Simple(30€)</option>
            <option value="doble">Doble(50€)</option>
            <option value="triple">Triple(80€)</option>
            <option value="suite">Suite(100€)</option>
        </select><br><br>
        <input type="submit" name="submit">
    </form>

    <?php
        if(isset($_POST["submit"])) {       
            $nombre=htmlspecialchars($_POST['nombre']);
            $apellidos=htmlspecialchars($_POST['apellidos']);
            $email=htmlspecialchars($_POST['email']);
            $dni=htmlspecialchars($_POST['dni']);
            $fechae=htmlspecialchars($_POST['fechae']);
            $dias=htmlspecialchars($_POST['dias']);
            $tipo=htmlspecialchars($_POST['tipo']);

            switch ($tipo) {
                case "simple":
                    $seleccion="Simple";
                    break;
                case "doble":
                    $seleccion="Doble";
                    break;
                case "triple":
                    $seleccion="Triple";
                    break;
                case "suite":
                    $seleccion="Suite";
                    break;
                default:
                    echo "Opción no reconocida";
            };

                echo "Usted, " . $nombre . " " . $apellidos .", con dni " .$dni. " y correo electronico " .$email. ", ha reservado una habitacion de tipo " .$seleccion. " durante " . $dias . " días desde " . $fechae;
                echo "<img src='images/$tipo'>";
        } else{
                echo "Rellene correctamente el formulario";
        };
    ?>
</body>
</html>