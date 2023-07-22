<?php
require_once("../conexion/conexion.php");
$id = $_POST['id'];
$ruta = $_POST['ruta'];
$descripcion = $_POST['descripcion'];




  mysqli_query($link,"UPDATE publicidad_que_somos set ruta='$ruta', descripcion='$descripcion' where id='$id'"); 
echo "
                <script language='JavaScript'>
                alert('Datos Modificados...');
                document.location='empresa.php';
                </script>";
?>