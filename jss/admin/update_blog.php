<?php
require_once("../conexion/conexion.php");
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$fecha_hora = $_POST['fecha_hora'];
$imagen = $_POST['imagen'];



  mysqli_query($link,"UPDATE blog set nombre='$nombre', titulo='$titulo', descripcion='$descripcion', fecha_hora='$fecha_hora', imagen='$imagen' where id='$id'"); 
echo "
                <script language='JavaScript'>
                alert('Datos Modificados...');
                document.location='consultar_blog.php';
                </script>";
?>