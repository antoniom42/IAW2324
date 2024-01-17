<?php  include 'header.php'?>

<h1 class="text-center">Detalles de incidencia</h1>
  <div class="container">
    <table class="table table-striped table-bordered table-hover">
      <thead class="table-dark">
        <tr>
              <th scope="col">ID</th>
              <th  scope="col">Planta</th>
              <th  scope="col">Aula</th>
              <th  scope="col">Descripción</th>
              <th  scope="col">Fecha alta</th>
              <th  scope="col">Fecha revisión</th>
              <th  scope="col">Fecha solución</th>
              <th  scope="col">Comentario</th>
        </tr>  
      </thead>
        <tbody>
          <tr>
               
            <?php
              if (isset($_GET['incidencias_id'])) {
                  $incidenciaid = htmlspecialchars($_GET['incidencias_id']); 
                  $query="SELECT * FROM incidencias WHERE id = $incidenciaid LIMIT 1";  
                  $vista_incidencias= $conn->query($query);            

                  while($row = $vista_incidencias->fetch())
                  {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['planta'] . "</td>";
                        echo "<td>" . $row['aula'] . "</td>";
                        echo "<td>" . $row['descripcion'] . "</td>";
                        echo "<td>" . $row['alta'] . "</td>";
                        echo "<td>" . $row['revision'] . "</td>";
                        echo "<td>" . $row['resolucion'] . "</td>";
                        echo "<td>" . $row['comentario'] . "</td>";
                        echo " </tr> ";
                  }
                }
            ?>
          </tr>  
        </tbody>
    </table>
  </div>

  <div class="container text-center mt-5">
    <a href="incidencias.php" class="btn btn-warning mt-5"> Volver </a>
  <div>

<?php include "footer.php" ?>