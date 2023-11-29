<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feria</title>
</head>
<body>
    <?php
        $dias = dias_restantes('2024/04/23');

        echo "Días restantes que quedan: " .$dias;

        function dias_restantes($fecha_final) {  
        $fecha_actual = date("Y/m/d");  
        $s = strtotime($fecha_final)-strtotime($fecha_actual);  
        $diferencia = intval($s/86400);
        return $diferencia;  
    }
    ?>
</body>
</html>