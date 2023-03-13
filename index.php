<?php
  include('figh.php');
?>
<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" class="ie"lang="en-US">
<![endif]-->
<!--[if IE 7]>
<html id="ie7"  class="ie"lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html id="ie8"  class="ie"lang="en-US">
<![endif]-->
<!--[if IE 9]>
<html id="ie9"  class="ie"lang="en-US">
<![endif]-->
<!--[if gt IE 9]>
<html class="ie"lang="en-US">
<![endif]-->
<!--[if !IE]>
<html lang="en-US">
<![endif]-->

    <!-- START HEAD -->
    <head>
        <meta charset="UTF-8" />

        <!-- this line will appear only if the website is visited with an iPad -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

        <title>Corre La Voz Travel.</title>

        <!-- RESET STYLESHEET -->
        <link rel="stylesheet" type="text/css" media="all" href="css/reset.css" />
        <!-- BOOTSTRAP STYLESHEET -->
        <link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.css" />
        <!-- MAIN THEME STYLESHEET -->
        <link rel="stylesheet" type="text/css" media="all" href="style.css" />

        <link rel='stylesheet' id='custom-css'  href='css/custom.css' type='text/css' media='all' />
        <link rel='stylesheet' id='google-fonts-css'  href='http://fonts.googleapis.com/css?family=Oswald%7CDroid+Sans%7CPlayfair+Display%7COpen+Sans+Condensed:300,400,800%3A300%7CRokkitt%7CShadows+Into+Light%7CMaven+Pro:400,700%7CAbel%7CMontez' type='text/css' media='all' />
        <link rel='stylesheet' id='responsive-css'  href='css/responsive.css' type='text/css' media='all' />
        <link rel='stylesheet' id='thickbox-css'  href='js/thickbox/thickbox.css' type='text/css' media='all' />
        <link rel='stylesheet' id='tipsy-css'  href='css/tipsy.css' type='text/css' media='all' />

        <link rel='stylesheet' id='fonts-css'  href='css/font-awesome.css' type='text/css' media='all' />
        <link rel='stylesheet' id='full-descriptor-css'  href='portfolios/full-description/css/style.css' type='text/css' media='all' />
        <link rel='stylesheet' id='slide-details-css'  href='portfolios/slide-detail/css/style.css' type='text/css' media='all' />
        <link rel='stylesheet' id='shortcode-css'  href='css/shortcodes.css' type='text/css' media='all' />

        <link rel='stylesheet' id='colorbox-css'  href='css/colorbox.css' type='text/css' media='all' />
        <link rel='stylesheet' id='custom-button-mfast-3-css'  href='css/buttons/mfast-3.css' type='text/css' media='all' />
        <link rel='stylesheet' id='flexslider-css'  href='sliders/flexslider/css/flexslider.css' type='text/css' media='all' />
        <link rel='stylesheet' id='flexslider-elegant-css'  href='sliders/flexslider-elegant/css/slider.css' type='text/css' media='all' />
        <link rel='stylesheet' id='rs-css'  href='sliders/revolution-slider/css/slider.css' type='text/css' media='all' />
        <link rel='stylesheet' id='rs-settings-css'  href='sliders/revolution-slider/rs-plugin/css/settings.css' type='text/css' media='all' />
        <link rel='stylesheet' id='rs-captions-css'  href='sliders/revolution-slider/rs-plugin/css/captions.css' type='text/css' media='all' />

        <!-- [favicon] begin -->
        <link rel="shortcut icon" type="image/x-icon" href="logb.ico" />
        <link rel="icon" type="image/x-icon" href="logb.ico" width="600" heith="600" />
        <!-- [favicon] end -->

        <!-- Touch icons more info: http://mathiasbynens.be/notes/touch-icons -->
        <!-- For iPad3 with retina display: -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x.png" />
        <!-- For first- and second-generation iPad: -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x.png" />
        <!-- For first- and second-generation iPad: -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x.png">
        <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
        <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-57x.png" />



        <script type='text/javascript' src='js/jquery/jquery.js'></script>
    </head>
    <!-- END HEAD -->

    <!-- START BODY -->
    <body class="home page no_js responsive stretched">

        <!-- START BG SHADOW -->
        <div class="bg-shadow">

            <!-- START WRAPPER -->
            <div id="wrapper" class="container group">
            <?php
            include('header.html');
            ?>

                    <!-- START SLIDER -->
                    <div id="slider-revolution-slider" class="slider slider-revolution-slider revolution-slider">
                        <div class="shadowWrapper">

                            <!-- START REVOLUTION SLIDER  -->
                            <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin:0px auto;background-color:#E9E9E9;padding:0px;margin-top:0px;margin-bottom:0px;max-height:400px;">
                                <div id="rev_slider_1_1" class="rev_slider fullwidthabanner" style="display:none;max-height:400px;height:400;">
                                    <ul>

                                        <li data-transition="random" data-slotamount="7" data-masterspeed="300" >

                                            <!-- Insercion de imagenes en Slider Principal con base de datos -->
                                            <?php
                                            require_once('conexion.php');
                                            seleccionarImgs1('<img src="[dataDb]">', 1);
                                            ?>   


                                            <li data-transition="random" data-slotamount="7" data-masterspeed="300" >
                                                <?php
                                                  seleccionarImgs1('<img src="[dataDb]">', 19);    
                                                ?>
                                            </li>


                                            <li data-transition="random" data-slotamount="7" data-masterspeed="300" >
                                                <?php
                                                  seleccionarImgs1('<img src="[dataDb]">', 20);
                                                ?>   
                                            </li>

                                            <li data-transition="random" data-slotamount="7" data-masterspeed="300" >
                                                <?php
                                                  seleccionarImgs1('<img src="[dataDb]">', 21);
                                                ?>   
                                            </li>

                                            <!-- FIN de la Insercion de imagenes en Slider Principal con base de datos -->
                                        </li>
                                    </ul>

                                </div>
                            </div>

                            <script type="text/javascript">

                                var tpj=jQuery;

                                tpj.noConflict();

                                var revapi1;

                                tpj(document).ready(function() {

                                    if (tpj.fn.cssOriginal != undefined)
                                        tpj.fn.css = tpj.fn.cssOriginal;

                                    if(tpj('#rev_slider_1_1').revolution == undefined)
                                        revslider_showDoubleJqueryError('#rev_slider_1_1');
                                    else
                                        revapi1 = tpj('#rev_slider_1_1').show().revolution(
                                        {
                                            delay:9000,
                                            startwidth:1170,
                                            startheight:400,
                                            hideThumbs:200,

                                            thumbWidth:100,
                                            thumbHeight:50,
                                            thumbAmount:3,

                                            navigationType:"none",
                                            navigationArrows:"nexttobullets",
                                            navigationStyle:"round",

                                            touchenabled:"on",
                                            onHoverStop:"off",

                                            navOffsetHorizontal:0,
                                            navOffsetVertical:20,

                                            shadow:0,
                                            fullWidth:"on",

                                            stopLoop:"off",
                                            stopAfterLoops:-1,
                                            stopAtSlide:-1,

                                            shuffle:"off",

                                            hideSliderAtLimit:0,
                                            hideCaptionAtLimit:0,
                                            hideAllCaptionAtLilmit:0					});

        });	//ready

    </script>

    <!-- END REVOLUTION SLIDER -->
</div>
</div>
<!-- END SLIDER -->

<!-- START PAGE META -->
<div id="page-meta" class="container">
 <!-- SLOGAN -->
 <div class="slogan">
    <h2>Descubre nuestros paquetes</h2><h3>más cotizados.</h3>
</div>
</div>
<!-- END PAGE META -->

<!-- START PRIMARY -->
<div id="primary" class="sidebar-no">
    <div class="container group">
        <div class="row">

           <!-- START CONTENT -->
           <div id="content-home" class="span12 content group">
            <div class="page type-page status-publish hentry group">

                <script>
                    jQuery(document).ready(function($){
                        $('.sidebar').remove();

                        if( !$('#primary').hasClass('sidebar-no') ) {
                            $('#primary').removeClass().addClass('sidebar-no');
                            $('.content').removeClass('span9').addClass('span12');
                        }

                    });
                </script>
                <!-- INICIA EL CONTENIDO DE LA PRIMERA IMAGEN -->
                <div class="row">
                    <ul id="portfolio" class="slide-detail detail thumbnails">


                        <li  class="filterable_item span3 brandidentity  logodesign  webdesign  first">

                            <div class="thumbnail">

                                <div class="picture_overlay">

                                  <!-- Aquí va la imagen 1 de la galería del index-->
                                  <?php
                                  seleccionarImgpri('<img src="[dataDb]">', 5);
                                ?>

                                <div class="ch-info-text">
                                    <!-- SE MUESTRA EL TEXTO EN LA IMAGEN AL COLOCAR EL MAUSE-->
                                <div class="ch-info-text">
                                            <center><?php seleccionarText('<p>[dataDb]</p>', 5);?> 
                                        </div>
                                        
                                    </div>
                                    <div class="overlay">
                                        <div>
                                            <p>
                                               <!-- Inicia codigo de imagen al hacer clic zoom a la imagen-->                         
                                                <?php
                                                    seleccionarImgpri('<a href="[dataDb]" rel="lightbox" class="ch-info-lightbox">', 5); ?>
                                                    <img src="images/icons/zoom.png" alt="Open Lightbox" />
                                                </a>
                                                <a href="portfolios/portfolio-detail/?cpt_item=digitpool-medien" class="open_slide">
                                                    <img src="images/icons/project.png" alt="" />
                                                </a>
                                                <!-- Finaliza codigo de imagen al hacer clic zoom a la imagen-->
                                                </a>
                                            </a>


                                        </p>

                                        <!-- Finaliza el codigo en donde va la imagen con base a la conexion anterior -->    


                                    </div>
                                </div>

                                <div class="slide_detail">
                                    <div class="container portfolio-full-description">
                                        <div class="slide_close">[x] Cerrar</div>
                                        <div class="page type-page status-publish hentry work group row">
                                            <div class="work-thumbnail span6">
                                                <div class="thumb-wrapper">

                                                    <div class="extra-images-slider">
                                                        <ul class="slides">
                                                            <li>
                                                            <!-- Aquí inicia la primera imagen del pequeño slider que se muestra al despalazar imformación -->
                                                                <?php
                                                                seleccionarImgs1('<img src="[dataDb]">', 16);
                                                                ?>

                                                            </li>
                                                            <li>
                                                                <!-- Aquí inicia la segunda imagen del pequeño slider que se muestra al despalazar imformación -->
                                                                <?php
                                                                seleccionarImgs1('<img src="[dataDb]">', 17);
                                                                ?>
                                                            </li>
                                                            <li>
                                                                <!-- Aquí inicia la tercera imagen del pequeño slider que se muestra al despalazar imformación -->
                                                                <?php
                                                                seleccionarImgs1('<img src="[dataDb]">', 18);
                                                                ?>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <script type="text/javascript">
                                                        jQuery(document).ready(function($){
                                                            $('.extra-images-slider').flexslider({
                                                                controlNav: false
                                                            });
                                                        });
                                                    </script>
                                                </div>
                                            </div>

                                            <div class="work-description span6">
                                                <!--Inicia la parte del titulo de la imagen -->
                                                <b><center><h2><?php seleccionarText('[dataDb]', 5);?></h2></center></b> 
                                                <!-- Finaliza la sección del titulo de la imagen -->

                                                <!--Inicia la parte del descripcion de la imagen -->
                                                

                                                <h5><?php seleccionarTitle('[dataDb]', 5);?></h5>

                                                
                                                <!-- Finaliza la sección del descripcion de la imagen -->
                                                <!--Inicia la parte de la segunda descripcion -->          
                                                

                                                <h5><?php seleccionarTitle2('[dataDb]', 5);?></h5>
 
                                                <!-- Finaliza la segunda descripcion de la imagen -->

                                            </p>

                                            <div class="work-skillsdate span6">
                                                <p class="categories paragraph-links">
                                                    <span class="meta-label">Lugar:</span> 
                                                    <!-- Inicia primer descripcion de la ultima parte (LUGAR) [mini] -->
                                                    <?php seleccionarLugar('[dataDb]', 5);?>
                                                </p>
                                                <p class="customer"><span class="meta-label">Personas:</span>
                                                    <!-- Inicia segunda descripcion de imagen mini -->
                                                    <?php seleccionarPerson('[dataDb]', 5);?>
                                                </p>
                                                <p class="workdate"><span class="meta-label">Duración:</span><!-- Inicia tercera descripcion de imagen mini -->
                                                <?php seleccionarTime('[dataDb]', 5);?>
                                                </p>
                                                <br>
                                            </div>
                                        </div>

                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
             <!-- Termina primera imagen del index junto a todas las consultas -->



<!-- EN ESTA SECCION IRA LA SEGUNDA IMAGEN DE LA PAGINA PRINCIPAL-->
<!-- INICIA EL APARTADO DE LA SEGUNDA IMAGEN JUNTO CON EL MINI SLIDER Y DEMÁS-->

                        <li  class="filterable_item span3 brandidentity  logodesign ">
                        <div class="thumbnail">

                                <div class="picture_overlay">

                                  <!-- Aquí va la imagen 2 de la galería del index-->
                                  <?php
                                  
                                  seleccionarImgpri('<img src="[dataDb]">', 2);
                                ?>

                                <div class="ch-info-text">
                                    <!-- SE MUESTRA EL TEXTO EN LA IMAGEN AL COLOCAR EL MAUSE-->
                                <div class="ch-info-text">
                                            <center><?php seleccionarText('<p>[dataDb]</p>', 2);?> 
                                        </div>
                                        
                                    </div>
                                    <div class="overlay">
                                        <div>
                                            <p>
                                               <!-- Inicia codigo de imagen al hacer clic zoom a la imagen-->
                                                
                                                <?php
                                                    seleccionarImgpri('<a href="[dataDb]" rel="lightbox" class="ch-info-lightbox">', 2); ?>
                                                    <img src="images/icons/zoom.png" alt="Open Lightbox" />
                                                </a>
                                                <a href="portfolios/portfolio-detail/?cpt_item=digitpool-medien" class="open_slide">
                                                    <img src="images/icons/project.png" alt="" />
                                                </a>
                                                <!-- Finaliza codigo de imagen al hacer clic zoom a la imagen-->
                                                </a>
                                            </a>


                                        </p>

                                        <!-- Finaliza el codigo en donde va la imagen con base a la conexion anterior -->    


                                    </div>
                                </div>

                                <div class="slide_detail">
                                    <div class="container portfolio-full-description">
                                        <div class="slide_close">[x] Cerrar</div>
                                        <div class="page type-page status-publish hentry work group row">
                                            <div class="work-thumbnail span6">
                                                <div class="thumb-wrapper">

                                                    <div class="extra-images-slider">
                                                        <ul class="slides">
                                                            <li>
                                                            <!-- Aquí inicia la primera imagen del pequeño slider que se muestra al despalazar imformación -->
                                                                <?php
                                                                seleccionarImgs1('<img src="[dataDb]">', 13);
                                                                ?>

                                                            </li>
                                                            <li>
                                                                <!-- Aquí inicia la segunda imagen del pequeño slider que se muestra al despalazar imformación -->
                                                                <?php
                                                                seleccionarImgs1('<img src="[dataDb]">', 14);
                                                                ?>
                                                            </li>
                                                            <li>
                                                                <!-- Aquí inicia la tercera imagen del pequeño slider que se muestra al despalazar imformación -->
                                                                <?php
                                                                seleccionarImgs1('<img src="[dataDb]">', 15);
                                                                ?>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <script type="text/javascript">
                                                        jQuery(document).ready(function($){
                                                            $('.extra-images-slider').flexslider({
                                                                controlNav: false
                                                            });
                                                        });
                                                    </script>
                                                </div>
                                            </div>

                                            <div class="work-description span6">
                                                <!--Inicia la parte del titulo de la imagen -->
                                                <b><center><h2><?php seleccionarText('[dataDb]', 2);?></h2></center></b> 
                                                <!-- Finaliza la sección del titulo de la imagen -->

                                                <!--Inicia la parte del descripcion de la imagen -->
                                                

                                                <h5><?php seleccionarTitle('[dataDb]', 2);?></h5>

                                                
                                                <!-- Finaliza la sección del descripcion de la imagen -->
                                                <!--Inicia la parte de la segunda descripcion -->          
                                                

                                                <h5><?php seleccionarTitle2('[dataDb]', 2);?></h5>
 
                                                <!-- Finaliza la segunda descripcion de la imagen -->

                                            </p>

                                            <div class="work-skillsdate span6">
                                                <p class="categories paragraph-links">
                                                    <span class="meta-label">Lugar:</span> 
                                                    <!-- Inicia primer descripcion de la ultima parte (LUGAR) [mini] -->
                                                    <?php seleccionarLugar('[dataDb]', 2);?>
                                                </p>
                                                <p class="customer"><span class="meta-label">Personas:</span>
                                                    <!-- Inicia segunda descripcion de imagen mini -->
                                                    <?php seleccionarPerson('[dataDb]', 2);?>
                                                </p>
                                                <p class="workdate"><span class="meta-label">Duración:</span><!-- Inicia tercera descripcion de imagen mini -->
                                                <?php seleccionarTime('[dataDb]', 2);?>
                                                </p>
                                                <br>
                                            </div>
                                        </div>

                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            
                        </li>






<!-- EN ESTA SECCION IRA LA TERCERA IMAGEN DE LA PAGINA PRINCIPAL-->
<!-- INICIA EL APARTADO DE LA TERCERA IMAGEN JUNTO CON EL MINI SLIDER Y DEMÁS-->

                        <li  class="filterable_item span3 brandidentity  logodesign ">
                        <div class="thumbnail">

                                <div class="picture_overlay">

                                  <!-- Aquí va la imagen 3 de la galería del index-->
                                  <?php
                                  
                                  seleccionarImgpri('<img src="[dataDb]">', 10);
                                ?>

                                <div class="ch-info-text">
                                    <!-- SE MUESTRA EL TEXTO EN LA IMAGEN AL COLOCAR EL MAUSE-->
                                <div class="ch-info-text">
                                            <center><?php seleccionarText('<p>[dataDb]</p>', 10);?> 
                                        </div>
                                        
                                    </div>
                                    <div class="overlay">
                                        <div>
                                            <p>
                                               <!-- Inicia codigo de imagen al hacer clic zoom a la imagen-->
                                                
                                                <?php
                                                    seleccionarImgpri('<a href="[dataDb]" rel="lightbox" class="ch-info-lightbox">', 10); ?>
                                                    <img src="images/icons/zoom.png" alt="Open Lightbox" />
                                                </a>
                                                <a href="portfolios/portfolio-detail/?cpt_item=digitpool-medien" class="open_slide">
                                                    <img src="images/icons/project.png" alt="" />
                                                </a>
                                                <!-- Finaliza codigo de imagen al hacer clic zoom a la imagen-->
                                                </a>
                                            </a>


                                        </p>

                                        <!-- Finaliza el codigo en donde va la imagen con base a la conexion anterior -->    


                                    </div>
                                </div>

                                <div class="slide_detail">
                                    <div class="container portfolio-full-description">
                                        <div class="slide_close">[x] Cerrar</div>
                                        <div class="page type-page status-publish hentry work group row">
                                            <div class="work-thumbnail span6">
                                                <div class="thumb-wrapper">

                                                    <div class="extra-images-slider">
                                                        <ul class="slides">
                                                            <li>
                                                            <!-- Aquí inicia la primera imagen del pequeño slider que se muestra al despalazar imformación -->
                                                                <?php
                                                                seleccionarImgs1('<img src="[dataDb]">', 22);
                                                                ?>

                                                            </li>
                                                            <li>
                                                                <!-- Aquí inicia la segunda imagen del pequeño slider que se muestra al despalazar imformación -->
                                                                <?php
                                                                seleccionarImgs1('<img src="[dataDb]">', 23);
                                                                ?>
                                                            </li>
                                                            <li>
                                                                <!-- Aquí inicia la tercera imagen del pequeño slider que se muestra al despalazar imformación -->
                                                                <?php
                                                                seleccionarImgs1('<img src="[dataDb]">', 24);
                                                                ?>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <script type="text/javascript">
                                                        jQuery(document).ready(function($){
                                                            $('.extra-images-slider').flexslider({
                                                                controlNav: false
                                                            });
                                                        });
                                                    </script>
                                                </div>
                                            </div>

                                            <div class="work-description span6">
                                                <!--Inicia la parte del titulo de la imagen -->
                                                <b><center><h2><?php seleccionarText('[dataDb]', 10);?></h2></center></b> 
                                                <!-- Finaliza la sección del titulo de la imagen -->

                                                <!--Inicia la parte del descripcion de la imagen -->
                                                

                                                <h5><?php seleccionarTitle('[dataDb]', 10);?></h5>

                                                
                                                <!-- Finaliza la sección del descripcion de la imagen -->
                                                <!--Inicia la parte de la segunda descripcion -->          
                                                

                                                <h5><?php seleccionarTitle2('[dataDb]', 10);?></h5>
 
                                                <!-- Finaliza la segunda descripcion de la imagen -->

                                            </p>

                                            <div class="work-skillsdate span6">
                                                <p class="categories paragraph-links">
                                                    <span class="meta-label">Lugar:</span> 
                                                    <!-- Inicia primer descripcion de la ultima parte (LUGAR) [mini] -->
                                                    <?php seleccionarLugar('[dataDb]', 10);?>
                                                </p>
                                                <p class="customer"><span class="meta-label">Personas:</span>
                                                    <!-- Inicia segunda descripcion de imagen mini -->
                                                    <?php seleccionarPerson('[dataDb]', 10);?>
                                                </p>
                                                <p class="workdate"><span class="meta-label">Duración:</span><!-- Inicia tercera descripcion de imagen mini -->
                                                <?php seleccionarTime('[dataDb]', 10);?>
                                                </p>
                                                <br>
                                            </div>
                                        </div>

                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            
                        </li>




<!-- EN ESTA SECCION IRA LA CUARTA IMAGEN DE LA PAGINA PRINCIPAL-->
<!-- INICIA EL APARTADO DE LA CUARTA IMAGEN JUNTO CON EL MINI SLIDER Y DEMÁS-->

                        <li  class="filterable_item span3 brandidentity  logodesign ">
                        <div class="thumbnail">

                                <div class="picture_overlay">

                                  <!-- Aquí va la imagen 3 de la galería del index-->
                                  <?php
                                  
                                  seleccionarImgpri('<img src="[dataDb]">', 11);
                                ?>

                                <div class="ch-info-text">
                                    <!-- SE MUESTRA EL TEXTO EN LA IMAGEN AL COLOCAR EL MAUSE-->
                                <div class="ch-info-text">
                                            <center><?php seleccionarText('<p>[dataDb]</p>', 11);?> 
                                        </div>
                                        
                                    </div>
                                    <div class="overlay">
                                        <div>
                                            <p>
                                               <!-- Inicia codigo de imagen al hacer clic zoom a la imagen-->
                                                
                                                <?php
                                                    seleccionarImgpri('<a href="[dataDb]" rel="lightbox" class="ch-info-lightbox">', 11); ?>
                                                    <img src="images/icons/zoom.png" alt="Open Lightbox" />
                                                </a>
                                                <a href="portfolios/portfolio-detail/?cpt_item=digitpool-medien" class="open_slide">
                                                    <img src="images/icons/project.png" alt="" />
                                                </a>
                                                <!-- Finaliza codigo de imagen al hacer clic zoom a la imagen-->
                                                </a>
                                            </a>


                                        </p>

                                        <!-- Finaliza el codigo en donde va la imagen con base a la conexion anterior -->    


                                    </div>
                                </div>

                                <div class="slide_detail">
                                    <div class="container portfolio-full-description">
                                        <div class="slide_close">[x] Cerrar</div>
                                        <div class="page type-page status-publish hentry work group row">
                                            <div class="work-thumbnail span6">
                                                <div class="thumb-wrapper">

                                                    <div class="extra-images-slider">
                                                        <ul class="slides">
                                                            <li>
                                                            <!-- Aquí inicia la primera imagen del pequeño slider que se muestra al despalazar imformación -->
                                                                <?php
                                                                seleccionarImgs1('<img src="[dataDb]">', 7);
                                                                ?>

                                                            </li>
                                                            <li>
                                                                <!-- Aquí inicia la segunda imagen del pequeño slider que se muestra al despalazar imformación -->
                                                                <?php
                                                                seleccionarImgs1('<img src="[dataDb]">', 12);
                                                                ?>
                                                            </li>
                                                            <li>
                                                                <!-- Aquí inicia la tercera imagen del pequeño slider que se muestra al despalazar imformación -->
                                                                <?php
                                                                seleccionarImgs1('<img src="[dataDb]">', 25);
                                                                ?>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <script type="text/javascript">
                                                        jQuery(document).ready(function($){
                                                            $('.extra-images-slider').flexslider({
                                                                controlNav: false
                                                            });
                                                        });
                                                    </script>
                                                </div>
                                            </div>

                                            <div class="work-description span6">
                                                <!--Inicia la parte del titulo de la imagen -->
                                                <b><center><h2><?php seleccionarText('[dataDb]', 11);?></h2></center></b> 
                                                <!-- Finaliza la sección del titulo de la imagen -->

                                                <!--Inicia la parte del descripcion de la imagen -->
                                                

                                                <h5><?php seleccionarTitle('[dataDb]', 11);?></h5>

                                                
                                                <!-- Finaliza la sección del descripcion de la imagen -->
                                                <!--Inicia la parte de la segunda descripcion -->          
                                                

                                                <h5><?php seleccionarTitle2('[dataDb]', 11);?></h5>
 
                                                <!-- Finaliza la segunda descripcion de la imagen -->

                                            </p>

                                            <div class="work-skillsdate span6">
                                                <p class="categories paragraph-links">
                                                    <span class="meta-label">Lugar:</span> 
                                                    <!-- Inicia primer descripcion de la ultima parte (LUGAR) [mini] -->
                                                    <?php seleccionarLugar('[dataDb]', 11);?>
                                                </p>
                                                <p class="customer"><span class="meta-label">Personas:</span>
                                                    <!-- Inicia segunda descripcion de imagen mini -->
                                                    <?php seleccionarPerson('[dataDb]', 11);?>
                                                </p>
                                                <p class="workdate"><span class="meta-label">Duración:</span><!-- Inicia tercera descripcion de imagen mini -->
                                                <?php seleccionarTime('[dataDb]', 11);?>
                                                </p>
                                                <br>
                                            </div>
                                        </div>

                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            
                        </li>





 <!-- EN ESTA SECCION IRA LA QUINTA IMAGEN DE LA PAGINA PRINCIPAL-->
<!-- INICIA EL APARTADO DE LA QUINTA IMAGEN JUNTO CON EL MINI SLIDER Y DEMÁS-->

                         <li  class="filterable_item span3 brandidentity  webdesign  first">
                        <div class="thumbnail">

                                <div class="picture_overlay">

                                  <!-- Aquí va la imagen 3 de la galería del index-->
                                  <?php
                                  
                                  seleccionarImgpri('<img src="[dataDb]">', 12);
                                ?>

                                <div class="ch-info-text">
                                    <!-- SE MUESTRA EL TEXTO EN LA IMAGEN AL COLOCAR EL MAUSE-->
                                <div class="ch-info-text">
                                            <center><?php seleccionarText('<p>[dataDb]</p>', 12);?> 
                                        </div>
                                        
                                    </div>
                                    <div class="overlay">
                                        <div>
                                            <p>
                                               <!-- Inicia codigo de imagen al hacer clic zoom a la imagen-->
                                                
                                                <?php
                                                    seleccionarImgpri('<a href="[dataDb]" rel="lightbox" class="ch-info-lightbox">', 12); ?>
                                                    <img src="images/icons/zoom.png" alt="Open Lightbox" />
                                                </a>
                                                <a href="portfolios/portfolio-detail/?cpt_item=digitpool-medien" class="open_slide">
                                                    <img src="images/icons/project.png" alt="" />
                                                </a>
                                                <!-- Finaliza codigo de imagen al hacer clic zoom a la imagen-->
                                                </a>
                                            </a>


                                        </p>

                                        <!-- Finaliza el codigo en donde va la imagen con base a la conexion anterior -->    


                                    </div>
                                </div>

                                <div class="slide_detail">
                                    <div class="container portfolio-full-description">
                                        <div class="slide_close">[x] Cerrar</div>
                                        <div class="page type-page status-publish hentry work group row">
                                            <div class="work-thumbnail span6">
                                                <div class="thumb-wrapper">

                                                    <div class="extra-images-slider">
                                                        <ul class="slides">
                                                            <li>
                                                            <!-- Aquí inicia la primera imagen del pequeño slider que se muestra al despalazar imformación -->
                                                                <?php
                                                                seleccionarImgs1('<img src="[dataDb]">', 26);
                                                                ?>

                                                            </li>
                                                            <li>
                                                                <!-- Aquí inicia la segunda imagen del pequeño slider que se muestra al despalazar imformación -->
                                                                <?php
                                                                seleccionarImgs1('<img src="[dataDb]">', 27);
                                                                ?>
                                                            </li>
                                                            <li>
                                                                <!-- Aquí inicia la tercera imagen del pequeño slider que se muestra al despalazar imformación -->
                                                                <?php
                                                                seleccionarImgs1('<img src="[dataDb]">', 28);
                                                                ?>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <script type="text/javascript">
                                                        jQuery(document).ready(function($){
                                                            $('.extra-images-slider').flexslider({
                                                                controlNav: false
                                                            });
                                                        });
                                                    </script>
                                                </div>
                                            </div>

                                            <div class="work-description span6">
                                                <!--Inicia la parte del titulo de la imagen -->
                                                <b><center><h2><?php seleccionarText('[dataDb]', 12);?></h2></center></b> 
                                                <!-- Finaliza la sección del titulo de la imagen -->

                                                <!--Inicia la parte del descripcion de la imagen -->
                                                

                                                <h5><?php seleccionarTitle('[dataDb]', 12);?></h5>

                                                
                                                <!-- Finaliza la sección del descripcion de la imagen -->
                                                <!--Inicia la parte de la segunda descripcion -->          
                                                

                                                <h5><?php seleccionarTitle2('[dataDb]', 12);?></h5>
 
                                                <!-- Finaliza la segunda descripcion de la imagen -->

                                            </p>

                                            <div class="work-skillsdate span6">
                                                <p class="categories paragraph-links">
                                                    <span class="meta-label">Lugar:</span> 
                                                    <!-- Inicia primer descripcion de la ultima parte (LUGAR) [mini] -->
                                                    <?php seleccionarLugar('[dataDb]', 12);?>
                                                </p>
                                                <p class="customer"><span class="meta-label">Personas:</span>
                                                    <!-- Inicia segunda descripcion de imagen mini -->
                                                    <?php seleccionarPerson('[dataDb]', 12);?>
                                                </p>
                                                <p class="workdate"><span class="meta-label">Duración:</span><!-- Inicia tercera descripcion de imagen mini -->
                                                <?php seleccionarTime('[dataDb]', 12);?>
                                                </p>
                                                <br>
                                            </div>
                                        </div>

                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            
                        </li>










<!-- EN ESTA SECCION IRA LA SEXTA IMAGEN DE LA PAGINA PRINCIPAL-->
<!-- INICIA EL APARTADO DE LA SEXTA IMAGEN JUNTO CON EL MINI SLIDER Y DEMÁS-->

                        <li  class="filterable_item span3 brandidentity  logodesign ">
                        <div class="thumbnail">

                                <div class="picture_overlay">

                                  <!-- Aquí va la imagen 3 de la galería del index-->
                                  <?php
                                  
                                  seleccionarImgpri('<img src="[dataDb]">', 13);
                                ?>

                                <div class="ch-info-text">
                                    <!-- SE MUESTRA EL TEXTO EN LA IMAGEN AL COLOCAR EL MAUSE-->
                                <div class="ch-info-text">
                                            <center><?php seleccionarText('<p>[dataDb]</p>', 13);?> 
                                        </div>
                                        
                                    </div>
                                    <div class="overlay">
                                        <div>
                                            <p>
                                               <!-- Inicia codigo de imagen al hacer clic zoom a la imagen-->
                                                
                                                <?php
                                                    seleccionarImgpri('<a href="[dataDb]" rel="lightbox" class="ch-info-lightbox">', 13); ?>
                                                    <img src="images/icons/zoom.png" alt="Open Lightbox" />
                                                </a>
                                                <a href="portfolios/portfolio-detail/?cpt_item=digitpool-medien" class="open_slide">
                                                    <img src="images/icons/project.png" alt="" />
                                                </a>
                                                <!-- Finaliza codigo de imagen al hacer clic zoom a la imagen-->
                                                </a>
                                            </a>


                                        </p>

                                        <!-- Finaliza el codigo en donde va la imagen con base a la conexion anterior -->    


                                    </div>
                                </div>

                                <div class="slide_detail">
                                    <div class="container portfolio-full-description">
                                        <div class="slide_close">[x] Cerrar</div>
                                        <div class="page type-page status-publish hentry work group row">
                                            <div class="work-thumbnail span6">
                                                <div class="thumb-wrapper">

                                                    <div class="extra-images-slider">
                                                        <ul class="slides">
                                                            <li>
                                                            <!-- Aquí inicia la primera imagen del pequeño slider que se muestra al despalazar imformación -->
                                                                <?php
                                                                seleccionarImgs1('<img src="[dataDb]">', 29);
                                                                ?>

                                                            </li>
                                                            <li>
                                                                <!-- Aquí inicia la segunda imagen del pequeño slider que se muestra al despalazar imformación -->
                                                                <?php
                                                                seleccionarImgs1('<img src="[dataDb]">', 30);
                                                                ?>
                                                            </li>
                                                            <li>
                                                                <!-- Aquí inicia la tercera imagen del pequeño slider que se muestra al despalazar imformación -->
                                                                <?php
                                                                seleccionarImgs1('<img src="[dataDb]">', 31);
                                                                ?>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <script type="text/javascript">
                                                        jQuery(document).ready(function($){
                                                            $('.extra-images-slider').flexslider({
                                                                controlNav: false
                                                            });
                                                        });
                                                    </script>
                                                </div>
                                            </div>

                                            <div class="work-description span6">
                                                <!--Inicia la parte del titulo de la imagen -->
                                                <b><center><h2><?php seleccionarText('[dataDb]', 13);?></h2></center></b> 
                                                <!-- Finaliza la sección del titulo de la imagen -->

                                                <!--Inicia la parte del descripcion de la imagen -->
                                                

                                                <h5><?php seleccionarTitle('[dataDb]', 13);?></h5>

                                                
                                                <!-- Finaliza la sección del descripcion de la imagen -->
                                                <!--Inicia la parte de la segunda descripcion -->          
                                                

                                                <h5><?php seleccionarTitle2('[dataDb]', 13);?></h5>
 
                                                <!-- Finaliza la segunda descripcion de la imagen -->

                                            </p>

                                            <div class="work-skillsdate span6">
                                                <p class="categories paragraph-links">
                                                    <span class="meta-label">Lugar:</span> 
                                                    <!-- Inicia primer descripcion de la ultima parte (LUGAR) [mini] -->
                                                    <?php seleccionarLugar('[dataDb]', 13);?>
                                                </p>
                                                <p class="customer"><span class="meta-label">Personas:</span>
                                                    <!-- Inicia segunda descripcion de imagen mini -->
                                                    <?php seleccionarPerson('[dataDb]', 13);?>
                                                </p>
                                                <p class="workdate"><span class="meta-label">Duración:</span><!-- Inicia tercera descripcion de imagen mini -->
                                                <?php seleccionarTime('[dataDb]', 13);?>
                                                </p>
                                                <br>
                                            </div>
                                        </div>

                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            
                        </li>


<!-- EN ESTA SECCION IRA LA SEPTIMA IMAGEN DE LA PAGINA PRINCIPAL-->
<!-- INICIA EL APARTADO DE LA SEPTIMA IMAGEN JUNTO CON EL MINI SLIDER Y DEMÁS-->

                        <li  class="filterable_item span3 brandidentity  logodesign ">
                        <div class="thumbnail">

                                <div class="picture_overlay">

                                  <!-- Aquí va la imagen 3 de la galería del index-->
                                  <?php
                                  
                                  seleccionarImgpri('<img src="[dataDb]">', 14);
                                ?>

                                <div class="ch-info-text">
                                    <!-- SE MUESTRA EL TEXTO EN LA IMAGEN AL COLOCAR EL MAUSE-->
                                <div class="ch-info-text">
                                            <center><?php seleccionarText('<p>[dataDb]</p>', 14);?> 
                                        </div>
                                        
                                    </div>
                                    <div class="overlay">
                                        <div>
                                            <p>
                                               <!-- Inicia codigo de imagen al hacer clic zoom a la imagen-->
                                                
                                                <?php
                                                    seleccionarImgpri('<a href="[dataDb]" rel="lightbox" class="ch-info-lightbox">', 14); ?>
                                                    <img src="images/icons/zoom.png" alt="Open Lightbox" />
                                                </a>
                                                <a href="portfolios/portfolio-detail/?cpt_item=digitpool-medien" class="open_slide">
                                                    <img src="images/icons/project.png" alt="" />
                                                </a>
                                                <!-- Finaliza codigo de imagen al hacer clic zoom a la imagen-->
                                                </a>
                                            </a>


                                        </p>

                                        <!-- Finaliza el codigo en donde va la imagen con base a la conexion anterior -->    


                                    </div>
                                </div>

                                <div class="slide_detail">
                                    <div class="container portfolio-full-description">
                                        <div class="slide_close">[x] Cerrar</div>
                                        <div class="page type-page status-publish hentry work group row">
                                            <div class="work-thumbnail span6">
                                                <div class="thumb-wrapper">

                                                    <div class="extra-images-slider">
                                                        <ul class="slides">
                                                            <li>
                                                            <!-- Aquí inicia la primera imagen del pequeño slider que se muestra al despalazar imformación -->
                                                                <?php
                                                                seleccionarImgs1('<img src="[dataDb]">', 32);
                                                                ?>

                                                            </li>
                                                            <li>
                                                                <!-- Aquí inicia la segunda imagen del pequeño slider que se muestra al despalazar imformación -->
                                                                <?php
                                                                seleccionarImgs1('<img src="[dataDb]">', 33);
                                                                ?>
                                                            </li>
                                                            <li>
                                                                <!-- Aquí inicia la tercera imagen del pequeño slider que se muestra al despalazar imformación -->
                                                                <?php
                                                                seleccionarImgs1('<img src="[dataDb]">', 34);
                                                                ?>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <script type="text/javascript">
                                                        jQuery(document).ready(function($){
                                                            $('.extra-images-slider').flexslider({
                                                                controlNav: false
                                                            });
                                                        });
                                                    </script>
                                                </div>
                                            </div>

                                            <div class="work-description span6">
                                                <!--Inicia la parte del titulo de la imagen -->
                                                <b><center><h2><?php seleccionarText('[dataDb]', 14);?></h2></center></b> 
                                                <!-- Finaliza la sección del titulo de la imagen -->

                                                <!--Inicia la parte del descripcion de la imagen -->
                                                

                                                <h5><?php seleccionarTitle('[dataDb]', 14);?></h5>

                                                
                                                <!-- Finaliza la sección del descripcion de la imagen -->
                                                <!--Inicia la parte de la segunda descripcion -->          
                                                

                                                <h5><?php seleccionarTitle2('[dataDb]', 14);?></h5>
 
                                                <!-- Finaliza la segunda descripcion de la imagen -->

                                            </p>

                                            <div class="work-skillsdate span6">
                                                <p class="categories paragraph-links">
                                                    <span class="meta-label">Lugar:</span> 
                                                    <!-- Inicia primer descripcion de la ultima parte (LUGAR) [mini] -->
                                                    <?php seleccionarLugar('[dataDb]', 14);?>
                                                </p>
                                                <p class="customer"><span class="meta-label">Personas:</span>
                                                    <!-- Inicia segunda descripcion de imagen mini -->
                                                    <?php seleccionarPerson('[dataDb]', 14);?>
                                                </p>
                                                <p class="workdate"><span class="meta-label">Duración:</span><!-- Inicia tercera descripcion de imagen mini -->
                                                <?php seleccionarTime('[dataDb]', 14);?>
                                                </p>
                                                <br>
                                            </div>
                                        </div>

                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            
                        </li>









<!-- EN ESTA SECCION IRA LA OCTAVA IMAGEN DE LA PAGINA PRINCIPAL-->
<!-- INICIA EL APARTADO DE LA OCTAVA IMAGEN JUNTO CON EL MINI SLIDER Y DEMÁS-->

                        <li  class="filterable_item span3 brandidentity  logodesign ">
                        <div class="thumbnail">

                                <div class="picture_overlay">

                                  <!-- Aquí va la imagen 3 de la galería del index-->
                                  <?php
                                  
                                  seleccionarImgpri('<img src="[dataDb]">', 15);
                                ?>

                                <div class="ch-info-text">
                                    <!-- SE MUESTRA EL TEXTO EN LA IMAGEN AL COLOCAR EL MAUSE-->
                                <div class="ch-info-text">
                                            <center><?php seleccionarText('<p>[dataDb]</p>', 15);?> 
                                        </div>
                                        
                                    </div>
                                    <div class="overlay">
                                        <div>
                                            <p>
                                               <!-- Inicia codigo de imagen al hacer clic zoom a la imagen-->
                                                
                                                <?php
                                                    seleccionarImgpri('<a href="[dataDb]" rel="lightbox" class="ch-info-lightbox">', 15); ?>
                                                    <img src="images/icons/zoom.png" alt="Open Lightbox" />
                                                </a>
                                                <a href="portfolios/portfolio-detail/?cpt_item=digitpool-medien" class="open_slide">
                                                    <img src="images/icons/project.png" alt="" />
                                                </a>
                                                <!-- Finaliza codigo de imagen al hacer clic zoom a la imagen-->
                                                </a>
                                            </a>


                                        </p>

                                        <!-- Finaliza el codigo en donde va la imagen con base a la conexion anterior -->    


                                    </div>
                                </div>

                                <div class="slide_detail">
                                    <div class="container portfolio-full-description">
                                        <div class="slide_close">[x] Cerrar</div>
                                        <div class="page type-page status-publish hentry work group row">
                                            <div class="work-thumbnail span6">
                                                <div class="thumb-wrapper">

                                                    <div class="extra-images-slider">
                                                        <ul class="slides">
                                                            <li>
                                                            <!-- Aquí inicia la primera imagen del pequeño slider que se muestra al despalazar imformación -->
                                                                <?php
                                                                seleccionarImgs1('<img src="[dataDb]">', 35);
                                                                ?>

                                                            </li>
                                                            <li>
                                                                <!-- Aquí inicia la segunda imagen del pequeño slider que se muestra al despalazar imformación -->
                                                                <?php
                                                                seleccionarImgs1('<img src="[dataDb]">', 36);
                                                                ?>
                                                            </li>
                                                            <li>
                                                                <!-- Aquí inicia la tercera imagen del pequeño slider que se muestra al despalazar imformación -->
                                                                <?php
                                                                seleccionarImgs1('<img src="[dataDb]">', 37);
                                                                ?>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <script type="text/javascript">
                                                        jQuery(document).ready(function($){
                                                            $('.extra-images-slider').flexslider({
                                                                controlNav: false
                                                            });
                                                        });
                                                    </script>
                                                </div>
                                            </div>

                                            <div class="work-description span6">
                                                <!--Inicia la parte del titulo de la imagen -->
                                                <b><center><h2><?php seleccionarText('[dataDb]', 15);?></h2></center></b> 
                                                <!-- Finaliza la sección del titulo de la imagen -->

                                                <!--Inicia la parte del descripcion de la imagen -->
                                                

                                                <h5><?php seleccionarTitle('[dataDb]', 15);?></h5>

                                                
                                                <!-- Finaliza la sección del descripcion de la imagen -->
                                                <!--Inicia la parte de la segunda descripcion -->          
                                                

                                                <h5><?php seleccionarTitle2('[dataDb]', 15);?></h5>
 
                                                <!-- Finaliza la segunda descripcion de la imagen -->

                                            </p>

                                            <div class="work-skillsdate span6">
                                                <p class="categories paragraph-links">
                                                    <span class="meta-label">Lugar:</span> 
                                                    <!-- Inicia primer descripcion de la ultima parte (LUGAR) [mini] -->
                                                    <?php seleccionarLugar('[dataDb]', 15);?>
                                                </p>
                                                <p class="customer"><span class="meta-label">Personas:</span>
                                                    <!-- Inicia segunda descripcion de imagen mini -->
                                                    <?php seleccionarPerson('[dataDb]', 15);?>
                                                </p>
                                                <p class="workdate"><span class="meta-label">Duración:</span><!-- Inicia tercera descripcion de imagen mini -->
                                                <?php seleccionarTime('[dataDb]', 15);?>
                                                </p>
                                                <br>
                                            </div>
                                        </div>

                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            
                        </li>

                                <hr />
                                <hr />
                                <br><center>
                                    <li  class="first slide-1 work span4 first">

                                        <!-- RED SOCIAL FACEBOOK -->
                                        <div class="">
                                            <!--RED SOCIAL FACEBOOK INCRUSTRADA-->
                                            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FCorreLaVozChiapas%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="360" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>


                                        </div>

                                    </li>


                                    <li  class="slide-2 work span4">

                                        <div class="">

                                           <!--RED SOCIAL INSTAGRAM INSCRUSTADA -->
                                           <script src="https://apps.elfsight.com/p/platform.js" defer></script>
                                           <div class="elfsight-app-96dfd325-934d-4050-aee5-59b7d0f8ae07"></div>

                                       </li>


                                       <li  class="slide-3 work span4">

                                        <div class="Tiktok">

                                            <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@correlavozchiapas" data-unique-id="correlavozchiapas" data-embed-type="creator" style="max-width: 780px; min-width: 288px;" > <section> <a target="_blank" href="https://www.tiktok.com/@correlavozchiapas?refer=creator_embed">@correlavozchiapas</a> </section> </blockquote> <script async src="https://www.tiktok.com/embed.js"></script>
                                            <div class="">

                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </center>

                        <script type="text/javascript" charset="utf-8">
                            jQuery(document).ready(function($){

                                function isMobile() {
                                    return navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPod/i) || ( navigator.userAgent.match(/Android/i) && navigator.userAgent.match(/Mobile/i) );
                                }


                                if( !isMobile() ) {

                                    $('.open_slide').live('click', function(e){
                                        e.preventDefault();

                                        var li_parent = $(this).parents('li');
                                        var div = li_parent.find('.slide_detail');
                                        if(!div.is(':visible')) {
                                            $('.ch-item').removeClass('ch-item-opened');
                                            li_parent.find('.ch-item').addClass('ch-item-opened');

                                            var slide_opened = $('.slide_detail:visible').length;
                                            var same_row     = slide_opened && parseInt( $('.slide_detail:visible').parents('li').index() / 5 ) == parseInt( $(this).parents('li').index() / 5 );
                                            var description_height = div.find('.work-description').height(); console.log(div.find('.work-description'));

                                            var animation = function(div, li_parent, same_row) {
                                                $.Deferred(function(def) {
                                                    def.pipe(function(){
                                                        return $('ul#portfolio hr, .slide_detail').slideUp(500);
                                                    }).pipe(function(){
                                                        var offset_y = li_parent.data('isotope-item-position') ?
                                                        li_parent.data('isotope-item-position').y + li_parent.offset().top :
                                                        li_parent.offset().top;

                                                        return $.scrollTo(offset_y - 40, same_row ? 1 : 500, {'axis':'y'} );
                                                    }).pipe(function(){
                                                        return setTimeout(function() {
                                                            var offset_x = li_parent.data('isotope-item-position') ?
                                                            li_parent.data('isotope-item-position').x + li_parent.offset().left :
                                                            li_parent.offset().left;

                                                            div.css({
                                                                left: -offset_x + $('#wrapper').offset().left,
                                                                width: $('#wrapper').width()
                                                            }).slideDown(500);
                                                            $( li_parent ).nextAll('hr:first').slideDown(500,function(){
                                                    //recalculate left offset once the slide is opened
                                                                var offset_x = li_parent.data('isotope-item-position') ?
                                                                li_parent.data('isotope-item-position').x + li_parent.offset().left :
                                                                li_parent.offset().left;
                                                                div.css({
                                                                    left: -offset_x + $('#wrapper').offset().left,
                                                                    width: $('#wrapper').width(),
                                                                    height: div.outerHeight()
                                                                });

                                                                $(this).css({
                                                                    height: div.outerHeight()
                                                                });

                                                                div.find('.container').css({
                                                                    height: div.outerHeight() - 35
                                                                });
                                                            });
                                                        }, same_row ? 500 : 1000);
                                                    });
                                                }).resolve();
                                            };
                                            animation( div, li_parent, same_row );
                                        } else {
                                            div.find('.slide_close').click();
                                        }
                                    });

$('.slide_close').click(function(){
    $('.ch-item').removeClass('ch-item-opened');
    $(this).parents('.slide_detail').slideUp('slow');
    $('ul#portfolio hr').slideUp('slow');
});

$(window).resize(function(){
    if( !isIE8() ) {
        $('.ch-item').removeClass('ch-item-opened');
        $('.slide_detail').slideUp('slow');
        $('ul#portfolio hr').slideUp('slow');
    }
});


}
});
</script>

<p>&nbsp;</p>
<p>

    <div class="row box-title">
        <div class="span5">
            <div class="border-line"></div>
        </div>

        <h3 class="span2">Random numbers</h3>

        <div class="span5">
            <div class="border-line"></div>
        </div>
    </div>


    <div class="one-fourth ">
        <div class="random-numbers">
            <img src="images/110.jpg" alt="" width="52" height="52" />
            <p>satisfied customers</p>
            <span class="number">1590</span>
        </div>
    </div>

    <div class="one-fourth ">
        <div class="random-numbers">
            <img src="images/25.jpg" alt="" width="52" height="52" />
            <p>Freelance projects</p>
            <span class="number">65</span>
        </div>
    </div>

    <div class="one-fourth ">
        <div class="random-numbers">
            <img src="images/31.jpg" alt="" width="52" height="52" />
            <p>sales on themeforest</p>
            <span class="number">12.845</span>
        </div>
    </div>

    <div class="one-fourth last">
        <div class="random-numbers">
            <img src="images/41.jpg" alt="" width="52" height="52" />
            <p>...Weekly Coffee!</p>
            <span class="number">36</span>
        </div>
    </div>
</div>





<!-- START COMMENTS -->
<div id="comments"></div>
<!-- END COMMENTS -->
</div>
<!-- END CONTENT -->

<!-- START EXTRA CONTENT -->
<!-- END EXTRA CONTENT -->

</div>
</div>
</div>
<!-- END PRIMARY -->


<!-- START FOOTER -->
<div id="footer">
    <div class="container">
        <div class="row">
            <div>
                <div class="widget-first widget span3 recent-posts">
                    <h3>From my blog</h3>
                    <div class="recent-post">
                        <div class="post type-post status-publish format-gallery hentry category-web-design group">

                            <div class="date">
                                <span class="month">Oct</span>
                                <span class="day">8</span>
                            </div>

                            <div class="text">
                                <h3>
                                    <a href="blog-detail.html" title="This is the title of the first article. Enjoy it.">
                                        This is the title of the first article. Enjoy it.
                                    </a>
                                </h3>
                                <p>by
                                    <a href="author-celestino.html" title="Posts by celestino" rel="author">
                                        celestino
                                    </a> -

                                    <a href="blog-detail.html#respond" title="Comment on This is the title of the first article. Enjoy it.">
                                        0 comments
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="post type-post status-publish format-standard hentry category-elegant-vintage group">

                            <div class="date">
                                <span class="month">Sep</span>
                                <span class="day">12</span>
                            </div>

                            <div class="text">
                                <h3>
                                    <a href="#" title="Nice &amp; Clean. The best for your blog!">
                                        Nice &amp; Clean. The best for your blog!
                                    </a>
                                </h3>

                                <p>by
                                    <a href="#" title="Posts by celestino" rel="author">
                                        celestino
                                    </a> -
                                    <a href="#" title="Comment on Nice &amp; Clean. The best for your blog!">
                                        0 comments
                                    </a>
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="widget span3 widget_flickrRSS">
                    <h3>My Flickr</h3>

                    <a title="1P4B6832" href="http://www.flickr.com/photos/gordonkw41/8756237357/"><img alt="1P4B6832" src="http://farm9.staticflickr.com/8553/8756237357_32d559d451_s.jpg"></a>
                    <a title="DSC03253" href="http://www.flickr.com/photos/dovz/8756237387/"><img alt="DSC03253" src="http://farm8.staticflickr.com/7422/8756237387_1c3013358d_s.jpg"></a>
                    <a title="Tappas in Hondarribia" href="http://www.flickr.com/photos/francolupo/8756237389/"><img alt="Tappas in Hondarribia" src="http://farm3.staticflickr.com/2867/8756237389_faae5159f8_s.jpg"></a>
                    <a title="P1000624" href="http://www.flickr.com/photos/24690780@N02/8756237421/"><img alt="P1000624" src="http://farm9.staticflickr.com/8393/8756237421_43de542797_s.jpg"></a>
                    <a title="" href="http://www.flickr.com/photos/chioushibo/8756237483/"><img alt="" src="http://farm6.staticflickr.com/5454/8756237483_9a8805a3d4_s.jpg"></a>
                    <a title="P1010059" href="http://www.flickr.com/photos/uzagaku/8756237507/"><img alt="P1010059" src="http://farm4.staticflickr.com/3777/8756237507_e6e45db22a_s.jpg"></a>
                    <a title="Berlijn 2013" href="http://www.flickr.com/photos/carlawiddershoven/8756237559/"><img alt="Berlijn 2013" src="http://farm3.staticflickr.com/2809/8756237559_16964e44ea_s.jpg"></a>
                    <a title="20130518-_DSC9574" href="http://www.flickr.com/photos/fomalhaut/8757363666/"><img alt="20130518-_DSC9574" src="http://farm3.staticflickr.com/2857/8757363666_cce1ef7ea5_s.jpg"></a>
                    <a title="20130519_144623.jpg" href="http://www.flickr.com/photos/lewisdgriffin/8757363718/"><img alt="20130519_144623.jpg" src="http://farm4.staticflickr.com/3817/8757363718_64d870995a_s.jpg"></a>
                    <a title="baden-württenmberg und bayern 2013 1 284" href="http://www.flickr.com/photos/russianchild007/8757363726/"><img alt="baden-württenmberg und bayern 2013 1 284" src="http://farm4.staticflickr.com/3773/8757363726_e7c9ed61a7_s.jpg"></a>
                </div>
                <div  class="widget span3 contact-info">
                    <h3>Get in touch</h3>
                    <div class="sidebar-nav">
                        <ul>
                            <li>
                                <i class="icon-map-marker" style="color:#000;font-size:12px;width:12px;height:12px"></i>
                                <span>Address:</span> Celestino, 115 Avenue - Italy
                            </li>
                            <li>
                                <i class="icon-phone" style="color:#000;font-size:12px;width:12px;height:12px"></i>
                                <span>Mobile:</span> +39 3471717174
                            </li>
                            <li>
                                <i class="icon-print" style="color:#000;font-size:12px;width:12px;height:12px"></i>
                                <span>Fax:</span> +39 0035 356 765
                            </li>
                            <li>
                                <i class="icon-envelope" style="color:#000;font-size:12px;width:12px;height:12px"></i>
                                <span>Email:</span> celestino@yit.com
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="last-tweets-2" class=" widget span3 last-tweets">
                    <h3>Last Tweets</h3>
                    <div class="list-tweets-2">

                    </div>

                    <script type="text/javascript">
                        jQuery(function($){
                            $('#last-tweets-2 .list-tweets-2').tweetable({
                                listClass: 'tweets-widget-2',
                                username: 'envato',
                                time: true,
                                limit: 2,
                                replies: true
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END FOOTER -->

<!-- START COPYRIGHT -->
<div id="copyright">
    <div class="container">
        <div class="row">
            <div class="left span6">
                <a href="http://yithemes.com/?ddownload=60426&amp;ap_id=celestino-html"><strong>Download the free version for Wordpress</strong></a>
            </div>
            <div class="right span6">
                <p>Powered by
                    <a href="http://yithemes.com/" title="free themes wordpress">
                        <strong>Your Inspiration Themes</strong>
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>
<!-- END COPYRIGHT -->

</div>
<!-- END WRAPPER -->

</div>
<!-- END BG SHADOW -->



<!-- START CUSTOM SCRIPT -->

<!-- END CUSTOM SCRIPT -->

<script type='text/javascript' src='js/jquery.colorbox-min.js'></script>
<script type='text/javascript' src='js/jquery.flexslider-min.js'></script>
<script type='text/javascript' src='js/jquery.tweetable.js'></script>
<script type='text/javascript' src='js/jquery.superfish.js'></script>
<script type='text/javascript' src='js/jquery.themepunch.plugins.min.js'></script>
<script type='text/javascript' src='js/jquery.themepunch.revolution.js'></script>
<script type='text/javascript' src='portfolios/filterable/js/jquery.filterable.js'></script>
<script type='text/javascript' src='js/jquery.tipsy.js'></script>
<script type='text/javascript' src='js/responsive.js'></script>
<script type='text/javascript' src='js/jquery.mobilemenu.js'></script>
<script type='text/javascript' src='js/shortcodes.js'></script>
<script type='text/javascript' src='js/jquery/jquery.masonry.min.js'></script>
<script type='text/javascript' src='js/jquery.custom.js'></script>

</body>
<!-- END BODY -->
</html>