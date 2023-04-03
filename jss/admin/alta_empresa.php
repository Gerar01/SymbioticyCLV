<?php
require_once ("../conexion/conexion.php");
$Ruta = $_POST['Ruta'];
$Empresa = $_POST['Empresa'];
$Descripcion_Emp = $_POST['Descripcion_Emp'];
$Rol = $_POST['Rol'];


$sql = "INSERT INTO datos(Ruta,Empresa,Descripcion_Emp,Rol) values('$Ruta','$Empresa','$Descripcion_Emp','$Rol')";


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