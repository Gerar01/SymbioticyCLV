<!DOCTYPE html>
<html lang="en">
         <!-- [favicon] begin -->
        <link rel="shortcut icon" type="image/x-icon" href="../logb.ico" />
        <link rel="icon" type="image/x-icon" href="../logb.ico" width="600" heith="600" />
        <!-- [favicon] end -->
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Corre La Voz AD</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/modern-business.css" rel="stylesheet">

</head>

<body>

<?php include('../header.html');?> 

 <center><h3><b>Registro de datos de la empresa</b></h3></center>
<section>
    	<div class="container">
    		<div>
    			<div class="col-md-10 col-md-offset-2">
    					<div class="panel panel-primary">
                      
                      <table width="100%">
                      <form action="alta_inicio.php" method="post" id="frmcliente" enctype="multipart/form-data">
                      <tr class="espacio"> 
                      <td align="right"> <label for="Ruta">Ruta Imagen:</label></td><td><input type="text" class="form-control" name="Ruta" id="Ruta" onkeyup="setCustomValidity('')"placeholder="Ingresa una ruta" autofocus required></td>
                      </tr>  
                      <tr class="espacio"> 
                      <td align="right"> <label for="Empresa">Nombre de la Empresa:</label></td><td><input type="text" class="form-control" name="Empresa" id="Empresa" onkeyup="setCustomValidity('')"placeholder="Ingresa el nombre de la empresa" autofocus required></td>
                      </tr>
                      <tr class="espacio"> 
                      <td align="right"> <label for="Descripcion_Emp">Descripcion de la Empresa:</label></td><td><input type="text" class="form-control" name="Descripcion_Emp" id="Descripcion_Emp" onkeyup="setCustomValidity('')"placeholder="Ingresa una descricion de la empresa" autofocus required></td>
                      </tr>
                      <tr class="espacio"> 
                      <td align="right"> <label for="Rol">Rol de la empresa:</label></td><td><input type="text" class="form-control" name="Rol" id="Rol" onkeyup="setCustomValidity('')"placeholder="Ingresa un rol de la empresa" autofocus required></td>
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


  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">&copy; REAL MUSIC</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
