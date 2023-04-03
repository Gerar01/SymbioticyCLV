<!DOCTYPE html>
<html lang="en">
<?php
include('../header.html');
 ?>
            <div id="layoutSidenav_content">
<center><h3><b>Consulta y Modificación de datos para los usuarios registrados </b></h3></center>
<section>
    <table  border="0" cellspacing="0" >
    <form action="#" method="post" id="frmbuscar">
     <tr class="espacio">
     <td align="right"> <label for="email">Buscar:</label></td><td><input type="text" class="form-control" name="email" id="email" autocomplete="off"></td>
     <td align="center" colspan="2"><input type="submit"  class="btn btn-primary" value="Consultar"  title="Consultar"></td>
     </tr>
    <?php
      
      if(isset($_POST['email']) ){
  
            require_once("../conexion/conexion.php");
        
      $result = mysqli_query($link, "SELECT * FROM login");
    
     
      echo "<table class='table table-striped'>";
      echo "<tr>
                                      
                  <th class='success'><center>Email</center></th>
                  <th class='success'><center>Contraseña</center></th>
                  <th class='success'><center>Editar</center></th>
                  <th class='success'><center>Eliminar</center></th>
                                              
                                                                                                                                              
                  
            </tr>";
            while  (($row = mysqli_fetch_array($result))!=NULL)
            {
            
            $id =  $row['id'];
            $usuario =  $row['usuario'];
            $contraseña =  $row['contraseña'];
           
            
           
                                    
            echo "<tr>
         
            <td class='active'><center>$usuario</center></td>
            <td class='active'><center>$contraseña</center></td>
            <td class='active'><center><a href='modificar_us.php?id=$id'><img  width='32px' height='32px' src='../images/editar.png'/></center></a></td>
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
    document.location="eliminar_user.php?opcion="+id;
    }
    else{
    
     return false;
  }

    }
    </script>
    
    </body>
</html>
