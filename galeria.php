<!DOCTYPE html>
      <html lang="en">

      <head>
        <?php
        include('header.html'); 
        ?>
        
        <title>Pagination</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />

        <link rel="stylesheet" href="./public/css/style2.css" />
        <link rel="stylesheet" href="./public/css/icomoon.css" />


       <header>
          <div class="container">
            
          </div>
      </header>

      </body>

<?php

require './php2/conexion2.php';

$ruta = Conexion::ruta();


        $ruta1 = null;

        if (isset($_GET['ruta'])) {

          $ruta1 = $_GET['ruta'];

        }

        echo $ruta1;


        $table = 'galeria';
        $mode = 'DESC';

        if ($ruta1 != null) {

          $init = ($ruta1 - 1) * 8;
          $max = 8;

        } else {

          $ruta1 = 1;
          $init = 6;
          $max = 8;

        }


        echo '<section class="portfolio">
          <div class="container">
            <div class="row2">';

              $statement = Conexion::conectar()->prepare("SELECT * FROM $table ORDER BY id $mode LIMIT $init, $max");
              $statement->execute();

              $galeria = $statement->fetchAll();

              if (is_array($galeria) || is_object($galeria)) {

                for ($i = 0; $i < count($galeria); $i ++) {

                  echo '<div class="col">
                          <div class="container-portfolio">
                            <a href=""><img width="250" heith="250" src="./public/img/imgp/'.$galeria[$i]['ruta'].'" alt=""></a>
                            <h2><small><a href="">'.$galeria[$i]['Titulo'].'</a></small></h2>
                            <h2><small><a href="">'.$galeria[$i]['Descripcion'].'</a></small></h2>
                           </div>
                        </div>';

                }

              } else {

                echo '<p>Aun no hay proyectos</p>';

              }

              echo '

            </div>
          </div>
        </section>';

        if (is_array($galeria) || is_object($galeria)) {

          echo '<section class="pagination">
            <center>
              <ul>';

                $statement1 = Conexion::conectar()->prepare("SELECT * FROM $table");
                $statement1->execute();

                $cantPortfolio = $statement1->fetchAll();

                $pages = ceil(count($cantPortfolio) / 8);

                if ($ruta1 == 1) echo '<li><a class="no-link" href="'.$ruta.'?ruta='.($ruta1 - 1).'"><img class="icon" src="images/icons/prev_button.png" /></a></li>';

                else echo ' ';
                

                for ($i = 1; $i <= $pages; $i ++) {

                  if ($ruta1 == $i) echo '<li><a class="active" href="'.$ruta.'?ruta='.$i.'">'.$i.'</a></li>';

                  else echo '<li><a href="'.$ruta.'?ruta='.$i.'">'.$i.'</a></li>';

                }

                if ($ruta1 == $pages)echo '<li><a class="no-link" href="'.$ruta.'?ruta='.($ruta1 + 1).'"><img class="icon" src="images/icons/next_button.png" /></a></li>';

                else echo '';
                



              echo '</ul>
            </center>
          </section>';

        }


        echo '<script src="./public/js/script.js"></script>

        <footer>
        <div id="footer">
    <div class="container">
        <div class="row">
            <div>

                <div class="widget span3 widget_flickrRSS">
                    <h3>Menu</h3>

                            <li><a href="#">Servicios</a></li><br>
                            <li><a href="portfolio-3-columns.php">Paquetes y ofertas</a></li><br>
                            <li><a href="home-ii.php">Galería</a></li><br>
                            <li><a href="pages-about.php">¿Qué somos?</a></li><br>
                            <li><a href="#">Blog</a></li>

                </div>
            
                <div  class="widget span3 contact-info">
                    <h3>Visitanos</h3>
                    <div class="sidebar-nav">
                        <ul>
                            <li>
                                <i class="icon-map-marker" style="color:#000;font-size:12px;width:12px;height:12px"></i>
                                <span>Dirección:</span> Calle Segunda Norte Poniente Numero 120, Calendaria
                            </li>
                            <li>
                                <i class="icon-phone" style="color:#000;font-size:12px;width:12px;height:12px"></i>
                                <span>Teléfono:</span> 9631574565
                            </li>
                            <li>
                                <i class="icon-envelope" style="color:#000;font-size:12px;width:12px;height:12px"></i>
                                <span>Correo:</span> correlavoz@gmail.com
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="last-tweets-2" class=" widget span3 last-tweets">
                    <center> <h3>Redes Sociales</h3>
                   

                                                <a href="https://www.facebook.com/messages/t/1498853930392008" target="_blank" class="socials facebook" title="Facebook"  >Facebook</a>
                                                <a href="https://www.instagram.com/direct/t/340282366841710300949128483515835429612" target="_blank" class="socials instagram" title="Instagram" >Instagram</a>
                                                <a href="https://api.whatsapp.com/send?phone=%2B529631574565&data=AWCrNeBN8KKaFnDBrosmqkDmL9Z_FAbuo1lt-PcRt4O7Fh-MLU6t8IpokiaVEQ9jah-aJNO5pQw6OMOkYFs2-GA1vymx-3cFCP4DljvyXd83XVdMCwj1dekSdznnOl-73cabI8JPpMLYj1pvkaY15m5cHsvwTezqw2q8BHQpTyRvw97O4KiPhOvz9VGomZEQArDfab711cgY0W8qVUEmB0zCt96_aItFcs4lu7fPTu8X5IW1zgnBZG1Ftpd_9zZ9l9XH8Ny19HvbHTSOzygKug&source=FB_Page&app=facebook&entry_point=page_cta" target="_blank" class="socials whatsapp" title="Whatsapp">Whatsapp</a>
                                                <a href="https://www.tiktok.com/@correlavozchiapas" target="_blank" class="socials tiktok" title="Tik Tok">Tik Tok</a>
                 </center>   

                </div>
                <div class="widget span3 widget_flickrRSS">
                    <h3>Equipo de trabajo</h3>

                            <li><a>Lic. Oscar López Orozco</a></li><br>
                            <li><a>Ing. Jesús Antonio Olguín García</a></li><br>
                            <li><a>Ing. Daniel Adair Tapia Muñoa</a></li><br>
                            

                </div>
            
            </div>
        </div>
    </div>
</div>
<!-- END FOOTER -->

        </footer>

      </html>'
      ;
      