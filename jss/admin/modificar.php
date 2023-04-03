<!DOCTYPE html>
<html lang="en">
<?php
include('../header.html');
 ?>
            <div id="layoutSidenav_content">
              <center><h3><b>Consulta y Modificación de datos para la tabla de galería</b></h3></center>
<section>
    <?php
                      require_once("../conexion/conexion.php");
                      $opcion = $_GET['id'];
                      $result=mysqli_query($link,"SELECT * FROM imagen_index WHERE id='$opcion'");
                      $consulta = mysqli_fetch_array($result)
                      ?>

                      <table width="100%">
                      <form action="modificar_galeria.php" method="post" id="frmcliente" enctype="multipart/form-data">
                        <tr class="espacio"> 
                        <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $consulta['id'];?>">
                        </tr> 


                      <tr class="espacio"> 
                      <td align="right"> <label for="ruta">Ruta Imagen:</label></td><td><input type="text" class="form-control" name="ruta" id="ruta" required value="<?php echo $consulta['ruta'];?>"></td>
                      </tr>
                      <tr class="espacio"> 
                      <td align="right"> <label for="Sub_imagen">Subtitulo de la Imagen:</label></td><td><input type="text" class="form-control" name="Sub_imagen" id="Sub_imagen" required value="<?php echo $consulta['Sub_imagen'];?>"></td>
                      </tr>
                      <tr class="espacio"> 
                      <td align="right"> <label for="Titulo">Titulo de la Imagen:</label></td><td><input type="text" class="form-control" name="Titulo" id="Titulo" required value="<?php echo $consulta['Titulo'];?>"></td>
                      </tr>
                      <td align="right"> <label for="Descripcion">Descripción de la Imagen:</label></td><td><input type="text" class="form-control" name="Descripcion" id="Descripcion" required value="<?php echo $consulta['Descripcion'];?>"></td>
                      </tr>
                      
                <td align="center" colspan="2"><input type="submit"  name="registrar" class="btn btn-primary" value="Registrar"  title="Registrar"></td>
                      </tr>
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
    </body>
</html>
