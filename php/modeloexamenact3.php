<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ME Act 3</title>
</head>
<body>
    <h2>Introduce lo que te pide para enviar un correo</h2>
    <form action="" method="get">
        <input type="text" name="asunto" placeholder="Asunto"><br><br>
        <input type="text" name="destinatario" placeholder="Destinatario"><br><br>
        <textarea name="mensaje" id="" cols="30" rows="10" placeholder="Mensaje"></textarea><br><br>
        <button type="submit">Enviar</button>
    </form>
    <?php
        $asunto = htmlspecialchars($_GET['asunto']);
        $para = htmlspecialchars($_GET['destinatario']);
        $mensaje = htmlspecialchars($_GET['mensaje']);
        
        if ($para = "[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,5}" && isset($_GET["submit"]) ) {
            mail($para,$asunto,$mensaje);   
        } else {
            echo "No se han rellenado todos los campos";
        };
    ?> 
</body>
</html>