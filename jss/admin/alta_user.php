<?php
require_once ("../conexion/conexion.php");
$usuario = $_POST['usuario'];
$contraseña = sha1($_POST['contraseña']);

$sql = "INSERT INTO login(usuario,contraseña) values('$usuario','$contraseña')";


$consulta=mysqli_query($link,$sql );

  echo "
 
<script>
    if(confirm(\"\u00bfDesea realizar un nuevo registro?\")){
                window.location.href='registrar_user.php';
                }else{
                window.location.href='user.php';
                }
 </script>";
?>