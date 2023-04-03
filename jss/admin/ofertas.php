<?php 
//seguridad de sessiones paginacion
session_start();
error_reporting(0);
$varsesion= $_SESSION['usuario'];
if($varsesion== null || $varsesion=''){
    header("location:../index.html");
    die();
}

?>




<!DOCTYPE html>
<html lang="en">
<?php
include('../header.html');
 ?>
            <div id="layoutSidenav_content">
 <center><h3><b>Consulta y Modificacion de datos de ofertas</b></h3></center>
<section>
    <table  border="0" cellspacing="0" >
    <form action="#" method="post" id="frmbuscar">
     <tr class="espacio">
     <td align="right"> <label for="ruta">Buscar:</label></td><td><input type="text" class="form-control" name="ruta" id="ruta" autocomplete="off"></td>
     <td align="center" colspan="2"><input type="submit"  class="btn btn-primary" value="Consultar"  title="Consultar"></td>
     </tr>
    <?php
      
      if(isset($_POST['ruta']) ){
  
            require_once("../conexion/conexion.php");
        
      $result = mysqli_query($link, "SELECT * FROM catalogo_ofertas");
    
     
      echo "<table class='table table-striped'>";
      echo "<tr>
                                      
                  <th class='success'><center>Ruta de la imagen</center></th>
                  <th class='success'><center>Titulo de la oferta</center></th>
                  <th class='success'><center>Descripción de la oferta</center></th>
                  <th class='success'><center>Costo de la oferta</center></th>
                  <th class='success'><center>Vigencia de la oferta</center></th> 
                  <th class='success'><center>Editar</center></th>
                  <th class='success'><center>Eliminar</center></th>
                                              
                                                                                                                                              
                  
            </tr>";
            while  (($row = mysqli_fetch_array($result))!=NULL)
            {
            
            $id =  $row['id'];
            $ruta =  $row['ruta'];
            $titulo =  $row['titulo'];
            $descripcion =  $row['descripcion'];
            $costo =  $row['costo'];
            $vigencia =  $row['vigencia'];
           
            
           
                                    
            echo "<tr>
         
            <td class='active'><center>$ruta</center></td>
            <td class='active'><center>$titulo</center></td>
            <td class='active'><center>$descripcion</center></td>
            <td class='active'><center>$costo</center></td>
            <td class='active'><center>$vigencia</center></td>
            <td class='active'><center><a href='modificar_of.php?id=$id'><img  width='32px' height='32px' src='../images/editar.png'/></center></a></td>
            <td class='active'><center><a onClick='confirmar($id)'><img width='32px' height='32px' src='../images/eliminar.jpg'/></center></a></td>
    
            
            </tr>";    
            }
            echo "</table>";
            }
            ?> 
            </form>                                                                                                                             
            </table> 
    </section>

              
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
        <script language="javascript"> 
    function confirmar(id){ 
    //No utilizar el nombre del método para otra variable o funcion diferente
    var aceptar=confirm("\u00bfRealmente deseas eliminar el registro?"); 
    if (aceptar) 
    {
    document.location="eliminar_ofertas.php?opcion="+id;
    }
    else{
    
     return false;
  }

    }
    </script>
    </body>
</html>
