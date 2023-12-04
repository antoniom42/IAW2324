<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuesta</title>
</head>
<body>
    <form action="" method="post">
        Nombre: <input type="text" name="nombre"/><br/><br/>

        Sexo: <input type="radio" name="sexo" value="mujer">
        <label for="mujer">Mujer</label>
        <input type="radio" name="sexo" value="hombre">
        <label for="hombre">Hombre</label><br><br>

        <label for="edad">¿Mayor de edad?</label>
        <input type="checkbox" name="edad" value="mayor"><br><br>

        <input type="submit" name="submit" value="Escribir"/> 
    </form>
    
    <?php
        $nombre = htmlspecialchars($_POST['nombre']);
        $sexo = htmlspecialchars($_POST['sexo']);
        $edad = htmlspecialchars($_POST['edad']);

        if(isset($_POST["submit"])) {
            if ($edad=="mayor") {
            echo "<p>Su nombre es " . $nombre . ", usted es " . $sexo . " y " . $edad . "</p>";
            } else {
                echo "<p>Su nombre es " . $nombre . ", usted es " . $sexo . " y menor</p>";
            }
        };
    ?> 
</body>
</html>