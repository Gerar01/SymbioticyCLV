include("conexion.php"); 
<!-- LLAMADA DE LA IMAGEN DEL INDEX RECUADRO -->
<?php
  
     while($row_imagen_index = mysqli_fetch_array($result))
     {
    $id = $row_imagen_index['Id'];

    $ruta = $row_imagen_index['Ruta'];

    $Titulo = $row_products['Titulo'];

    $descripcion = $row_imagen_index['Descripcion'];
    
    $descripcion2 = $row_imagen_index['Descripcion2'];
    
    $personas = $row_imagen_index['Personas'];

    $duracion = $row_imagen_index['Duracion'];
    
     
?>