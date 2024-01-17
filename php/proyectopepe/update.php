<!-- Footer -->
<?php include "header.php"?>

<?php
   if(isset($_GET['incidencias_id']))
    {
      $incidenciaid = htmlspecialchars($_GET['incidencias_id']); 
    }
      
      $query="SELECT * FROM incidencias WHERE id = $incidenciaid ";
      $vista_incidencias= $conn->query($query);

      while($row = $vista_incidencias->fetch())
        {
          $id = $conn -> real_escape_string($row['id']);                
          $planta = $conn -> real_escape_string($row['planta']);        
          $aula = $conn -> real_escape_string($row['aula']);         
          $descripcion = $conn -> real_escape_string($row['descripcion']);        
          $alta = $conn -> real_escape_string($row['alta']);        
          $revision = $conn -> real_escape_string($row['revision']);        
          $resolucion = $conn -> real_escape_string($row['resolucion']);        
          $comentario = $conn -> real_escape_string($row['comentario']);
        }
 
    if(isset($_POST['editar'])) 
    {
      $planta = $conn -> real_escape_string(htmlspecialchars($_POST['planta']));
      $aula = $conn -> real_escape_string(htmlspecialchars($_POST['aula']));
      $descripcion = $conn -> real_escape_string(htmlspecialchars($_POST['descripcion']));
      $alta = $conn -> real_escape_string(htmlspecialchars($_POST['alta']));
      $revision = $conn -> real_escape_string(htmlspecialchars($_POST['revision']));
      $resolucion = $conn -> real_escape_string(htmlspecialchars($_POST['resolucion']));
      $comentario = $conn -> real_escape_string(htmlspecialchars($_POST['comentario']));
      $query = "UPDATE incidencias SET planta = '{$planta}' , aula = '{$aula}' , descripcion = '{$descripcion}', Alta = '{$alta}', Revision = '{$revision}', Resolucion = '{$resolucion}', Comentario = '{$comentario}' WHERE id = {$id}";
      $incidencia_actualizada = $conn->query($query);
      if (!$incidencia_actualizada)
        echo "Se ha producido un error al actualizar la incidencia.";
      else
        echo "<script type='text/javascript'>alert('¡Datos de la incidencia actualizados!')</script>";
    }             
?>

<h1 class="text-center">Actualizar incidencia</h1>
  <div class="container ">
    <form action="" method="post">
      <div class="form-group">
        <label for="planta" >Planta</label>
        <input type="text" name="planta" class="form-control" value="<?php echo $planta  ?>">
      </div>
      <div class="form-group">
        <label for="aula" >Aula</label>
        <input type="text" name="aula" class="form-control" value="<?php echo $aula  ?>">
      </div>
      <div class="form-group">
        <label for="descripcion" >Descripción</label>
        <input type="text" name="descripcion" class="form-control" value="<?php echo $descripcion  ?>">
      </div>
      <div class="form-group">
        <label for="fecha_alta" >Fecha alta</label>
        <input type="date" name="alta" class="form-control" value="<?php echo $alta  ?>">
      </div>
      <div class="form-group">
        <label for="fecha_rev" >Fecha revisión</label>
        <input type="date" name="revision" class="form-control" value="<?php echo $revision  ?>">
      </div>
      <div class="form-group">
        <label for="fecha_sol" >Fecha solución</label>
        <input type="date" name="resolucion" class="form-control" value="<?php echo $resolucion ?>">
      </div>
      <div class="form-group">
        <label for="comentario" >Comentario</label>
        <input type="text" name="comentario" class="form-control" value="<?php echo $comentario  ?>">
      </div>
      <div class="form-group">
         <input type="submit"  name="editar" class="btn btn-primary mt-2" value=" Editar ">
      </div>
    </form>    
  </div>

    <div id='volver' class="container text-center mt-5">
      <a href="incidencias.php" class="btn btn-warning mt-5"> Volver </a>
    <div>

<?php include "footer.php" ?>