<?php
require_once("../conexion/conexion.php");
$id = $_POST['id'];
$ruta = $_POST['ruta'];
$Sub_imagen = $_POST['Sub_imagen'];
$Titulo = $_POST['Titulo'];
$Descripcion = $_POST['Descripcion'];



  mysqli_query($link,"UPDATE imagen_index set ruta='$ruta', Sub_imagen='$Sub_imagen', Titulo='$Titulo', Descripcion='$Descripcion' where id='$id'"); 
echo "
                <script language='JavaScript'>
                alert('Datos Modificados...');
                document.location='galeria.php';
                </script>";
?>