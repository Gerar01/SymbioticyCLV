<?php
require_once ("../conexion/conexion.php");
$ruta = $_POST['ruta'];
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$descripcion2 = $_POST['descripcion2'];
$Lugar = $_POST['Lugar'];
$personas = $_POST['personas'];
$duracion = $_POST['duracion'];

$sql = "INSERT INTO imagen_index_slider(ruta,titulo,descripcion,descripcion2,Lugar,personas,duracion) values('$ruta','$titulo','$descripcion','$descripcion2','$Lugar','$personas','$duracion')";


$consulta=mysqli_query($link,$sql );

  echo "
 
<script>
    if(confirm(\"\u00bfDesea realizar un nuevo registro?\")){
                window.location.href='registrar_inicio.php';
                }else{
                window.location.href='inicio.php';
                }
 </script>";
?>