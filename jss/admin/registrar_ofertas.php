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
 <center><h3><b>Registro de datos para las ofertas</b></h3></center>
<section>
      <div class="container">
            <div>
                  <div class="col-md-10 col-md-offset-2">
                              <div class="panel panel-primary">
                      
                      <table width="100%">
                      <form action="alta_ofertas.php" method="post" id="frmcliente" enctype="multipart/form-data">
                      <tr class="espacio"> 
                      <td align="right"> <label for="ruta">Ruta Imagen:</label></td><td><input type="text" class="form-control" name="ruta" id="ruta" onkeyup="setCustomValidity('')"placeholder="Ingresa una ruta" autofocus required></td>
                      </tr>  
                      <tr class="espacio"> 
                      <td align="right"> <label for="titulo">Titulo de la Oferta:</label></td><td><input type="text" class="form-control" name="titulo" id="titulo" onkeyup="setCustomValidity('')"placeholder="Ingresa un titulo de la oferta" autofocus required></td>
                      </tr>
                      <tr class="espacio"> 
                      <td align="right"> <label for="descripcion">Descripcion de la Oferta:</label></td><td><input type="text" class="form-control" name="descripcion" id="descripcion" onkeyup="setCustomValidity('')"placeholder="Ingresa una descricion de la oferta" autofocus required></td>
                      </tr>
                      <tr class="espacio"> 
                      <td align="right"> <label for="costo">Costo de la Oferta:</label></td><td><input type="text" class="form-control" name="costo" id="costo" onkeyup="setCustomValidity('')"placeholder="Ingresa un costo de la oferta" autofocus required></td>
                      </tr>
                      <tr class="espacio"> 
                      <td align="right"> <label for="vigencia">Vigencia:</label></td><td><input type="text" class="form-control" name="vigencia" id="vigencia" onkeyup="setCustomValidity('')"placeholder="Ingresa una vigencia de la oferta" autofocus required></td>
                      </tr>
                      <tr>
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
