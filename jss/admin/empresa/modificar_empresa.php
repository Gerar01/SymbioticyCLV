<?php
require_once("../conexion/conexion.php");
$id = $_POST['id'];
$Ruta = $_POST['Ruta'];
$Empresa = $_POST['Empresa'];
$Descripcion_Emp = $_POST['Descripcion_Emp'];
$Rol = $_POST['Rol'];



  mysqli_query($link,"UPDATE datos set Ruta='$Ruta', Empresa='$Empresa', Descripcion_Emp='$Descripcion_Emp', Rol='$Rol'where id='$id'"); 
echo "
                <script language='JavaScript'>
                alert('Datos Modificados...');
                document.location='empresa.php';
                </script>";
?>