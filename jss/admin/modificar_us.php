<!DOCTYPE html>
<html lang="en">
<?php
include('../header.html');
 ?>

<div id="layoutSidenav_content">
<center><h3><b>Modificar Galería</b></h3></center>
<section>
      <div class="container">
        <div>
          <div class="col-md-10 col-md-offset-2">
              <div class="panel panel-primary">
                      
                      <?php
                      require_once("../conexion/conexion.php");
                      $opcion = $_GET['id'];
                      $result=mysqli_query($link,"SELECT * FROM login WHERE id='$opcion'");
                      $consulta = mysqli_fetch_array($result)
                      ?>

                      <table width="100%">
                      <form action="modificar_user.php" method="post" id="frmcliente" enctype="multipart/form-data">
                        <tr class="espacio"> 
                        <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $consulta['id'];?>">
                        </tr> 

                      <tr class="espacio"> 
                      <td align="right"> <label for="usuario">Correo Electronico:</label></td><td><input type="text" class="form-control" name="usuario" id="usuario" required value="<?php echo $consulta['usuario'];?>"></td>
                      </tr>
                      <td align="right"> <label for="contraseña">Contraseña:</label></td><td><input type="password" class="form-control" name="contraseña" id="contraseña" required value="<?php echo $consulta['contraseña'];?>"></td>
                      </tr>
                      
                <td align="center" colspan="2"><input type="submit"  name="registrar" class="btn btn-primary" value="Registrar"  title="Registrar"></td>
                      </tr>
                      </form>
                      </table>
                      <!-- termina la tabla -->
                      </div>
                      </div>
          </div>
        </div>
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
    </body>
</html>
