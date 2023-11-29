<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dia semana</title>
</head>
<body>
    <?php
        setlocale(LC_ALL,"es_ES");
        $dia = echo strftime("%A");


        switch ($dia) {
            case "lunes":
                echo "Lunes con L de los muertos";
                break;
            case "martes":
                echo "Martes con M de me cago en dios";
                break;
            case "miércoles":
                echo "Míercoles con M de Mi finde se acerca";
                break;
        }
    ?>
</body>
</html>