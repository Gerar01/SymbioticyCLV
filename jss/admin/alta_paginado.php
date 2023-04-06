<?php
require_once ("../conexion/conexion.php");
$ruta = $_POST['ruta'];
$Sub_imagen = $_POST['Sub_imagen'];
$Titulo = $_POST['Titulo'];
$Descripcion = $_POST['Descripcion'];

$sql = "INSERT INTO galeria(ruta,Sub_imagen,Titulo,Descripcion) values('$ruta','$Sub_imagen','$Titulo','$Descripcion')";


$consulta=mysqli_query($link,$sql );

  echo "
 
<script>
    if(confirm(\"\u00bfDesea realizar un nuevo registro?\")){
                window.location.href='registrar_paginado.php';
                }else{
                window.location.href='paginado.php';
                }
 </script>";
?>