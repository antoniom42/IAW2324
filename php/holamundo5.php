<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo de datos</title>
</head>
<body>
    <?php
        $entero = 5;
        $real = 10.8;
        $cadena = 'Real Betis';
        $logico = false;
        $vector = array(1,6,9);
        var_dump($entero);
        var_dump($real);
        var_dump($cadena);
        var_dump($logico);
        var_dump($vector);
        echo '<p>El valor 2 del array es: ' . $vector[1] . '</p>';
    ?>
</body>
</html>