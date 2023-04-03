<?php
require_once ("../conexion/conexion.php");
$ruta = $_POST['ruta'];
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$costo = $_POST['costo'];
$vigencia = $_POST['costo'];

$sql = "INSERT INTO catalago_ofertas(ruta,titulo,descripcion,costo,vigencia) values('$ruta','$titulo','$descripcion','$costo','$vigencia')";


$consulta=mysqli_query($link,$sql );

  echo "
 
<script>
    if(confirm(\"\u00bfDesea realizar un nuevo registro?\")){
                window.location.href='registrar_ofertas.php';
                }else{
                window.location.href='ofertas.php';
                }
 </script>";
?>