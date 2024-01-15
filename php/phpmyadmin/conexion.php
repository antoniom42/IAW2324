<?php
$servername = "sql302.thsite.top";
$username = "thsi_35750964";
$password = "dTykF!lB";

try {
  $conn = new PDO("mysql:host=$servername;dbname=thsi_35750964_bdpruebas", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
<<<<<<< HEAD
  echo "Conectado correctamente";
} catch(PDOException $e) {
  echo "Conexion fallida: " . $e->getMessage();
=======
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
>>>>>>> acabde95bcf6a4f31a66b1d00b31a917a57a608a
}
?>