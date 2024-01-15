<?php
    $servername = "sql307.thsite.top";
    $username = "thsi_35748574";
    $password = "W43GpsmZ";
    
    try {
      $conn = new PDO("mysql:host=$servername;dbname=thsi_35748574_bdantonio", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "Connected successfully";
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
?>