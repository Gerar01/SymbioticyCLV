<?php
require_once ("../conexion/conexion.php");
$Ruta = $_POST['Ruta'];
$Empresa = $_POST['Empresa'];
$Descripcion_Emp = $_POST['Descripcion_Emp'];
$Rol = $_POST['Rol'];
$Seccion = $_POST['Seccion'];

$sql = "INSERT INTO datos(Ruta,Empresa,Descripcion_Emp,Rol,Seccion) values('$Ruta','$Empresa','$Descripcion_Emp','$Rol','$Seccion')";


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
