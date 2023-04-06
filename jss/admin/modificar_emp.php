<!DOCTYPE html>
<html lang="en">
<?php
include('../header.html');
 ?>

<div id="layoutSidenav_content">
<center><h3><b>Modificar Empresa o Servicio</b></h3></center>
<section>
      <div class="container">
        <div>
          <div class="col-md-10 col-md-offset-2">
              <div class="panel panel-primary">
                      
                      <?php
                      require_once("../conexion/conexion.php");
                      $opcion = $_GET['id'];
                      $result=mysqli_query($link,"SELECT * FROM datos WHERE id='$opcion'");
                      $consulta = mysqli_fetch_array($result)
                      ?>

                      <table width="100%">
                      <form action="modificar_empresa.php" method="post" id="frmcliente" enctype="multipart/form-data">
                        <tr class="espacio"> 
                        <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $consulta['id'];?>">
                        </tr> 

                      <tr class="espacio"> 
                      <td align="right"> <label for="Ruta">Ruta de imagen:</label></td><td><input type="text" class="form-control" name="Ruta" id="Ruta" required value="<?php echo $consulta['Ruta'];?>"></td>
                      </tr>
                      <td align="right"> <label for="Empresa">Empresa o Servicio:</label></td><td><input type="text" class="form-control" name="Empresa" id="Empresa" required value="<?php echo $consulta['Empresa'];?>"></td>
                      </tr>
                      <td align="right"> <label for="Descripcion_Emp">Descripcion:</label></td><td><input type="text" class="form-control" name="Descripcion_Emp" id="Descripcion_Emp" required value="<?php echo $consulta['Descripcion_Emp'];?>"></td>
                      </tr>
                      <td align="right"> <label for="Rol">Rol:</label></td><td><input type="text" class="form-control" name="Rol" id="Rol" required value="<?php echo $consulta['Rol'];?>"></td>
                      </tr>
                      <td align="right"> <label for="Seccion">Descripcion:</label></td><td><input type="text" class="form-control" name="Seccion" id="Seccion" required value="<?php echo $consulta['Seccion'];?>"></td>
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
