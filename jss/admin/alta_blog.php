<?php
require_once ("../conexion/conexion.php");
$nombre = $_POST['nombre'];
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$fecha_hora = $_POST['fecha_hora'];
$imagen = $_POST['imagen'];


$sql = "INSERT INTO blog(nombre,titulo,descripcion,fecha_hora,imagen) values('$nombre','$titulo','$descripcion','$fecha_hora','$imagen')";


$consulta=mysqli_query($link,$sql );

  echo "
 
<script>
    if(confirm(\"\u00bfDesea realizar un nuevo registro?\")){
                window.location.href='registrar_blog.php';
                }else{
                window.location.href='consultar_blog.php';
                }
 </script>";
?>