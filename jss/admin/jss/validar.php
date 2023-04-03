<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

  $conexion = new mysqli("localhost","root","","prueba");

$consulta="SELECT*FROM login where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:admin/jss/galeria/registrar_galeria.php");

}else{
    ?>
    <?php
    include("index.html");
    ?>
    <h1 class="bad">USUARIO Y/O CONTRASEÑA INCORRECTA</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
