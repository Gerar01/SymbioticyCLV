<!-- Funcion para mostrar TEXTO de la pagina principal-->
<?php 

function seleccionarText($html, $id) {
    include('conexion.php');
    $query="SELECT * FROM imagen_index_slider WHERE id =".$id;
    $execute= mysqli_query($conexion, $query) or die(mysqli_error($conexion));
    $cadena = "";

    while($fila=mysqli_fetch_array($execute)){
        $cadena .= str_replace("[dataDb]",  $fila['titulo'], $html);
    }
    
}
    
?>