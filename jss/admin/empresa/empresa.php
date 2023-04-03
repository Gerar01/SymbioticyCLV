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

 <center><h3><b>Consulta y Modificación de datos de empresa</b></h3></center>
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
        
      $result = mysqli_query($link, "SELECT * FROM datos");
    
     
      echo "<table class='table table-striped'>";
      echo "<tr>
                                      
                  <th class='success'><center>Ruta de la imagen</center></th>
                  <th class='success'><center>Nombre de la empresa</center></th>
                  <th class='success'><center>Descripción de la empresa</center></th>
                  <th class='success'><center>Rol de la empresa</center></th>
                  <th class='success'><center>Editar</center></th>
                  <th class='success'><center>Eliminar</center></th>
                                              
                                                                                                                                              
                  
            </tr>";
            while  (($row = mysqli_fetch_array($result))!=NULL)
            {
            
            $id =  $row['id'];
            $Ruta =  $row['Ruta'];
            $Empresa =  $row['Empresa'];
            $Descripcion_Emp =  $row['Descripcion_Emp'];
            $Rol =  $row['Rol'];
          
           
            
           
                                    
            echo "<tr>
         
            <td class='active'><center>$Ruta</center></td>
            <td class='active'><center>$Empresa</center></td>
            <td class='active'><center>$Descripcion_Emp</center></td>
            <td class='active'><center>$Rol</center></td>
            <td class='active'><center><a href='modificar.php?id=$id'><img  width='32px' height='32px' src='../images/editar.png'/></center></a></td>
            <td class='active'><center><a onClick='confirmar($id)'><img width='32px' height='32px' src='../images/eliminar.jpg'/></center></a></td>
    
            
            </tr>";    
            }
            echo "</table>";
            }
            ?> 
            </form>                                                                                                                             
            </table> 
    </section>

<BR><BR>
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
  
  <script language="javascript"> 
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

</body>

</html>
