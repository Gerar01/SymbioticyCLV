<?php
require_once("../conexion/conexion.php");
$id = $_POST['id'];
$imagen = $_POST['imagen'];
$descripcion = $_POST['descripcion'];



  mysqli_query($link,"UPDATE publicidad_blog set imagen='$imagen', descripcion='$descripcion' where id='$id'"); 
echo "
                <script language='JavaScript'>
                alert('Datos Modificados...');
                document.location='consultar_blog.php';
                </script>";
?>