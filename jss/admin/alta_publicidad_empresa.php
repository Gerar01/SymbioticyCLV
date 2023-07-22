<?php
require_once ("../conexion/conexion.php");
$ruta = $_POST['ruta'];
$descripcion = $_POST['descripcion'];

$sql = "INSERT INTO publicidad_que_somos(ruta,descripcion) values('$ruta','$descripcion')";


$consulta=mysqli_query($link,$sql );

  echo "
 
<script>
    if(confirm(\"\u00bfDesea realizar un nuevo registro?\")){
                window.location.href='registrar_empresa.php';
                }else{
                window.location.href='empresa.php';
                }
 </script>";
?>
