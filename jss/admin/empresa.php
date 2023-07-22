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
 <center><h3><b>Consulta y Modificación de datos servicios o empresa</b></h3></center>
<section>
      <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Ruta</th>
                    <th>Empresa</th>
                    <th>Descripcíon</th>
                    <th>Rol</th>
                    <th>Seccion</th>
                    <th colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
            <tbody>
                <?php 
                require_once('../../conexion.php');
                    $sql = "SELECT * FROM datos";
                    $result = $conexion->query($sql);
                    
                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                    
                ?>
                    <tr>
                        <td><?php echo $row['Ruta']; ?></td>
                        <td><?php echo $row['Empresa']; ?></td>
                        <td><?php echo $row['Descripcion_Emp']; ?></td>
                        <td><?php echo $row['Rol']; ?></td>
                        <td><?php echo $row['Seccion']; ?></td>
                        <td>
                            <center><a href="modificar_emp.php?id=<?php echo $row['id']; ?>"><img width="32px" height="32px" src="../images/editar.png"></a><center>
                        </td>
                        <td>
                            <center><a onclick="confirmar(<?php echo $row['id']; ?>)"><img width="32px" height="32px" src="../images/eliminar.jpg"></a></center>
                        </td>
                    </tr>
                <?php 
                    }
                    } else {
                    echo "No hay resultados";
                    }
                ?>
            </tbody>
            </tbody>
        </table>
      </div>



    </section>
     <center><h1><b>PUBLICIDAD de que somos</b></h1></center>
<section>
      <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Ruta</th>
                    <th>Descripcíon</th>
                    <th colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
            <tbody>
                <?php 
                require_once('../../conexion.php');
                    $sql = "SELECT * FROM publicidad_que_somos";
                    $result = $conexion->query($sql);
                    
                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                    
                ?>
                    <tr>
                        <td><?php echo $row['ruta']; ?></td>
                        <td><?php echo $row['descripcion']; ?></td>
                        <td>
                            <center><a href="modificar_publicidad_emp.php?id=<?php echo $row['id']; ?>"><img width="32px" height="32px" src="../images/editar.png"></a><center>
                        </td>
                        <td>
                            <center><a onclick="confirmar2(<?php echo $row['id']; ?>)"><img width="32px" height="32px" src="../images/eliminar.jpg"></a></center>
                        </td>
                    </tr>
                <?php 
                    }
                    } else {
                    echo "No hay resultados";
                    }
                ?>
            </tbody>
            </tbody>
        </table>
      </div>
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
        <script>
            function confirmar(id){ 
    //No utilizar el nombre del método para otra variable o funcion diferente
    var aceptar=confirm("\u00bfRealmente deseas eliminar el registro?"); 
    if (aceptar) 
    {
    document.location="eliminar_empresa.php?opcion="+id;
    }
    else{
    
     return false;
  }

    }
        </script>

        <script>
            function confirmar2(id){ 
    //No utilizar el nombre del método para otra variable o funcion diferente
    var aceptar=confirm("\u00bfRealmente deseas eliminar el registro?"); 
    if (aceptar) 
    {
    document.location="eliminar_publicidad_empresa.php?opcion="+id;
    }
    else{
    
     return false;
  }

    }
        </script>
    </body>
</html>
