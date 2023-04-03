<?php
require_once("../conexion/conexion.php");
$id = $_POST['id'];
$ruta = $_POST['ruta'];
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$costo = $_POST['costo'];
$vigencia = $_POST['vigencia'];



  mysqli_query($link,"UPDATE catalogo_ofertas set ruta='$ruta', titulo='$titulo', descripcion='$descripcion', costo='$costo', vigencia='$vigencia' where id='$id'"); 
echo "
                <script language='JavaScript'>
                alert('Datos Modificados...');
                document.location='ofertas.php';
                </script>";
?>