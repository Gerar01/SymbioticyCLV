
<?php
// Primera funcion recibe el html que se desea imprimir y el id del elemento a buscar en el select
// Retorna una cadena con los datos encontrados en base de datos ejemplo <img src="/route/img/slider1"><img src="/route/img/slider2"><img src="/route/img/slider3">
function seleccionarImgs1($html, $id) {
    include('conexion.php');
    $query="SELECT * FROM imagen_index WHERE id =".$id;
    $execute= mysqli_query($conexion, $query) or die(mysqli_error($conexion));
    $cadena = "";

    while($fila=mysqli_fetch_array($execute)){
        $cadena .= str_replace("[dataDb]", substr($fila['ruta'],36), $html);
    }
    echo $cadena;
}


?>

<!-- Funcion para mostrar la imagen de la pagina principal-->
<?php 

function seleccionarImgpri($html, $id) {
    include('conexion.php');
    $query="SELECT * FROM imagen_index_slider WHERE id =".$id;
    $execute= mysqli_query($conexion, $query) or die(mysqli_error($conexion));
    $cadena = "";

    while($fila=mysqli_fetch_array($execute)){
        $cadena .= str_replace("[dataDb]", substr($fila['ruta'],36), $html);
    }
    echo $cadena;
}
    
?>

<!-- Funcion para mostrar TEXTO de la pagina principal-->
<?php 

function seleccionarText($html, $id) {
    include('conexion.php');
    $query="SELECT * FROM imagen_index_slider WHERE id =".$id;
    $execute= mysqli_query($conexion, $query) or die(mysqli_error($conexion));
    $cadena = "";

    while($fila=mysqli_fetch_array($execute)){
        $cadena .= str_replace("[dataDb]", $fila['titulo'], $html);
    }
    echo $cadena;
}
    
?>

<!-- Funcion para mostrar TEXTO (TITULO) de la imagen del slider [DESCRIPCION]-->
<?php 

function seleccionarTitle($html, $id) {
    include('conexion.php');
    $query="SELECT * FROM imagen_index_slider WHERE id =".$id;
    $execute= mysqli_query($conexion, $query) or die(mysqli_error($conexion));
    $cadena = "";

    while($fila=mysqli_fetch_array($execute)){
        $cadena .= str_replace("[dataDb]", $fila['descripcion'], $html);
    }
    echo $cadena;
}
    
?>

<!-- Funcion para mostrar TEXTO de la imagen del slider [DESCRIPCION 2]-->
<?php 

function seleccionarTitle2($html, $id) {
    include('conexion.php');
    $query="SELECT * FROM imagen_index_slider WHERE id =".$id;
    $execute= mysqli_query($conexion, $query) or die(mysqli_error($conexion));
    $cadena = "";

    while($fila=mysqli_fetch_array($execute)){
        $cadena .= str_replace("[dataDb]", $fila['descripcion2'], $html);
    }
    echo $cadena;
}
    
?>

<!-- Funcion para mostrar TEXTO de la imagen del slider [LUGAR]-->
<?php 

function seleccionarLugar($html, $id) {
    include('conexion.php');
    $query="SELECT * FROM imagen_index_slider WHERE id =".$id;
    $execute= mysqli_query($conexion, $query) or die(mysqli_error($conexion));
    $cadena = "";

    while($fila=mysqli_fetch_array($execute)){
        $cadena .= str_replace("[dataDb]", $fila['Lugar'], $html);
    }
    echo $cadena;
}
    
?>

<!-- Funcion para mostrar TEXTO de la imagen del slider [PERSONAS]-->
<?php 

function seleccionarPerson($html, $id) {
    include('conexion.php');
    $query="SELECT * FROM imagen_index_slider WHERE id =".$id;
    $execute= mysqli_query($conexion, $query) or die(mysqli_error($conexion));
    $cadena = "";

    while($fila=mysqli_fetch_array($execute)){
        $cadena .= str_replace("[dataDb]", $fila['personas'], $html);
    }
    echo $cadena;
}
    
?>

<!-- Funcion para mostrar TEXTO de la imagen del slider [Duración]-->
<?php 

function seleccionarTime($html, $id) {
    include('conexion.php');
    $query="SELECT * FROM imagen_index_slider WHERE id =".$id;
    $execute= mysqli_query($conexion, $query) or die(mysqli_error($conexion));
    $cadena = "";

    while($fila=mysqli_fetch_array($execute)){
        $cadena .= str_replace("[dataDb]", $fila['duracion'], $html);
    }
    echo $cadena;
}
    
?>
<!-- secccion de las varibles para mostrar texto e imagen en la galería -->
<!-- Funcion para mostrar imagen de la galería-->
<?php 

function seleccionarImggal($html, $id) {
    include('conexion.php');
    $query="SELECT * FROM imagen_index WHERE id =".$id;
    $execute= mysqli_query($conexion, $query) or die(mysqli_error($conexion));
    $cadena = "";

    while($fila=mysqli_fetch_array($execute)){
        $cadena .= str_replace("[dataDb]", substr($fila['ruta'],36), $html);
    }
    echo $cadena;
}
    
?>

<!-- Funcion para mostrar TEXTO al momento de poner arriba el mause de la IMAGEN [Sub_Imagen]-->
<?php 

function galSub($html, $id) {
    include('conexion.php');
    $query="SELECT * FROM imagen_index WHERE id =".$id;
    $execute= mysqli_query($conexion, $query) or die(mysqli_error($conexion));
    $cadena = "";

    while($fila=mysqli_fetch_array($execute)){
        $cadena .= str_replace("[dataDb]", $fila['Sub_imagen'], $html);
    }
    echo $cadena;
}
    
?>

<!-- Funcion para mostrar TEXTO debajo de la imagen [Titulo]-->
<?php 

function galTit($html, $id) {
    include('conexion.php');
    $query="SELECT * FROM imagen_index WHERE id =".$id;
    $execute= mysqli_query($conexion, $query) or die(mysqli_error($conexion));
    $cadena = "";

    while($fila=mysqli_fetch_array($execute)){
        $cadena .= str_replace("[dataDb]", $fila['Titulo'], $html);
    }
    echo $cadena;
}
    
?>

<!-- Funcion para mostrar TEXTO debajo de la imagen [Descripcion]-->
<?php 

function galDes($html, $id) {
    include('conexion.php');
    $query="SELECT * FROM imagen_index WHERE id =".$id;
    $execute= mysqli_query($conexion, $query) or die(mysqli_error($conexion));
    $cadena = "";

    while($fila=mysqli_fetch_array($execute)){
        $cadena .= str_replace("[dataDb]", $fila['Descripcion'], $html);
    }
    echo $cadena;
}
    
?>


<!-- SECCIÓN DE LA PAGINA QUE SOMOS -->
<!-- Funcion para mostrar la imagen de la pagina principal-->
<?php 

function imgEmpresa($html, $id) {
    include('conexion.php');
    $query="SELECT * FROM datos WHERE id =".$id;
    $execute= mysqli_query($conexion, $query) or die(mysqli_error($conexion));
    $cadena = "";

    while($fila=mysqli_fetch_array($execute)){
        $cadena .= str_replace("[dataDb]", substr($fila['Ruta'],36), $html);
    }
    echo $cadena;
}
    
?>    
<!-- Funcion para mostrar el nombre de la empresa [EMPRESA]-->
<?php 

function empreTitu($html, $id) {
    include('conexion.php');
    $query="SELECT * FROM datos WHERE id =".$id;
    $execute= mysqli_query($conexion, $query) or die(mysqli_error($conexion));
    $cadena = "";

    while($fila=mysqli_fetch_array($execute)){
        $cadena .= str_replace("[dataDb]", $fila['Empresa'], $html);
    }
    echo $cadena;
}
    
?>
<!-- Funcion para mostrar la descripcion de la empresa [DESCRIPCION_EMP]-->
<?php 

function empreDes($html, $id) {
    include('conexion.php');
    $query="SELECT * FROM datos WHERE id =".$id;
    $execute= mysqli_query($conexion, $query) or die(mysqli_error($conexion));
    $cadena = "";

    while($fila=mysqli_fetch_array($execute)){
        $cadena .= str_replace("[dataDb]", $fila['Descripcion_Emp'], $html);
    }
    echo $cadena;
}
    
?>
<!-- Funcion para mostrar el rol de la empresa [ROL]-->
<?php 

function empreRol($html, $id) {
    include('conexion.php');
    $query="SELECT * FROM datos WHERE id =".$id;
    $execute= mysqli_query($conexion, $query) or die(mysqli_error($conexion));
    $cadena = "";

    while($fila=mysqli_fetch_array($execute)){
        $cadena .= str_replace("[dataDb]", $fila['Rol'], $html);
    }
    echo $cadena;
}
    
?>




<?php
// Segunda funcion recibe el html que se desea imprimir y el query completo del select en lugar de solo el id
// Retorna una cadena con los datos encontrados en base de datos ejemplo <img src="/route/img/slider1"><img src="/route/img/slider2"><img src="/route/img/slider3">
function seleccionarImgs2($html, $query) {
    include('conexion.php');
    $query = $query;
    $execute= mysqli_query($conexion, $query) or die(mysqli_error($conexion));
    $cadena = "";

    while($fila=mysqli_fetch_array($execute)){
        $cadena .= str_replace("[dataDb]", substr($fila['ruta'],36), $html);
    }
    echo $cadena;
}


?>