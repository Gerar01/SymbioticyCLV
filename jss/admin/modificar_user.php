<?php
require_once("../conexion/conexion.php");
$id = $_POST['id'];
$usuario = $_POST['usuario'];
$contraseña = sha1($_POST['contraseña']);




  mysqli_query($link,"UPDATE login set usuario='$usuario', contraseña='$contraseña' where id='$id'"); 
echo "
                <script language='JavaScript'>
                alert('Datos Modificados...');
                document.location='user.php';
                </script>";
?>