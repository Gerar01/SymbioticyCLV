<?php
require_once ("../conexion/conexion.php");
$imagen = $_POST['imagen'];
$descripcion = $_POST['descripcion'];



$sql = "INSERT INTO publicidad_blog(imagen,descripcion) values('$imagen','$descripcion')";


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