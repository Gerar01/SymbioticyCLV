<?php
require_once("../conexion/conexion.php");
$id = $_POST['id'];
$ruta = $_POST['ruta'];
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$descripcion2 = $_POST['descripcion2'];
$Lugar = $_POST['Lugar'];
$personas = $_POST['personas'];
$duracion = $_POST['duracion'];



  mysqli_query($link,"UPDATE imagen_index_slider set ruta='$ruta', titulo='$titulo', descripcion='$descripcion', descripcion2='$descripcion2', Lugar='$Lugar', personas='$personas', duracion='$duracion' where id='$id'"); 
echo "
                <script language='JavaScript'>
                alert('Datos Modificados...');
                document.location='inicio.php';
                </script>";
?>