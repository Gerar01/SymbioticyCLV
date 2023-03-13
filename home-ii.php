<?php  
    include('figh.php')
?>

<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" class="ie" lang="en-US">
<![endif]-->
<!--[if IE 7]>
<html id="ie7" class="ie" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" class="ie" lang="en-US">
<![endif]-->
<!--[if IE 9]>
<html id="ie9" class="ie" lang="en-US">
<![endif]-->
<!--[if gt IE 9]>
<html class="ie" lang="en-US">
<![endif]-->
<!--[if !IE]>
<html lang="en-US">
<![endif]-->

<!-- START HEAD -->
<head>
    <meta charset="UTF-8"/>

    <!-- this line will appear only if the website is visited with an iPad -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes"/>

    <title>Galería | Corre La Voz.</title>

    <!-- RESET STYLESHEET -->
    <link rel="stylesheet" type="text/css" media="all" href="css/reset.css"/>
    <!-- BOOTSTRAP STYLESHEET -->
    <link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.css"/>
    <!-- MAIN THEME STYLESHEET -->
    <link rel="stylesheet" type="text/css" media="all" href="style.css"/>

    <link rel='stylesheet' id='custom-css' href='css/custom.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='google-fonts-css'  href='http://fonts.googleapis.com/css?family=Oswald%7CDroid+Sans%7CPlayfair+Display%7COpen+Sans+Condensed:300,400,800%3A300%7CRokkitt%7CShadows+Into+Light%7CMaven+Pro:400,700%7CAbel%7CMontez' type='text/css' media='all' />
    <link rel='stylesheet' id='responsive-css' href='css/responsive.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='tipsy-css' href='css/tipsy.css' type='text/css' media='all'/>

    <link rel='stylesheet' id='fonts-css' href='css/font-awesome.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='slide-details-css' href='portfolios/pinterest/css/style.css' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='shortcode-css' href='css/shortcodes.css' type='text/css' media='all'/>

    <link rel='stylesheet' id='colorbox-css' href='css/colorbox.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='custom-button-mfast-3-css' href='css/buttons/mfast-3.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='flexslider-css' href='sliders/flexslider-elegant/css/slider.css' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='rs-css' href='sliders/revolution-slider/css/slider.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='rs-settings-css' href='sliders/revolution-slider/rs-plugin/css/settings.css'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='rs-captions-css' href='sliders/revolution-slider/rs-plugin/css/captions.css'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='cycle-slider-css' href='sliders/cycle/css/cycle.css' type='text/css' media='all'/>


    <!-- [favicon] begin -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
    <link rel="icon" type="image/x-icon" href="favicon.ico"/>
    <!-- [favicon] end -->

    <!-- Touch icons more info: http://mathiasbynens.be/notes/touch-icons -->
    <!-- For iPad3 with retina display: -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x.png"/>
    <!-- For first- and second-generation iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x.png"/>
    <!-- For first- and second-generation iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x.png">
    <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-57x.png"/>

    <link rel='stylesheet' id='thickbox-css' href='js/thickbox/thickbox.css' type='text/css' media='all'/>

    <script type='text/javascript' src='js/jquery/jquery.js'></script>
</head>
<!-- END HEAD -->

<!-- START BODY -->
<body class="home page no_js responsive stretched">

<!-- START BG SHADOW -->
<div class="bg-shadow">

<!-- START WRAPPER -->
<div id="wrapper" class="container group">
<!-- START TOP BAR -->

<?php
include('header.html'); 
?> 
<!-- START SLIDER -->
<div id="slider-cycle" class="slider slider-cycle cycle no-responsive slider_cycle group" style="height:560px;">
    <ul class="slider">
        <li>
            <?php
                include('conexion.php');
                seleccionarImggal('<img width="1600" height="50" src="[dataDb]">', 9);
            ?>

                <li>
             <?php
                include('conexion.php');
                seleccionarImggal('<img width="1600" height="50" src="[dataDb]">', 10);
            ?>
            </div>
        </li>
            </div>

        </li>

    </ul>
</div>

<script type="text/javascript">
    jQuery(document).ready(function ($) {

        var yit_slider_cycle_fx = 'easing',
                yit_slider_cycle_speed = 600,
                yit_slider_cycle_timeout = 4000,
                yit_slider_cycle_directionNav = true,
                yit_slider_cycle_directionNavHide = true,
                yit_slider_cycle_autoplay = true;


        if ($.browser.msie && parseInt($.browser.version.substr(0, 1), 10) <= '8') {
            $('#slider-cycle ul.slider').anythingSlider({
                expand: true,
                startStopped: false,
                buildArrows: yit_slider_cycle_directionNav,
                buildNavigation: false,
                buildStartStop: false,
                delay: yit_slider_cycle_timeout,
                animationTime: yit_slider_cycle_speed,
                easing: yit_slider_cycle_fx,
                autoPlay: yit_slider_cycle_autoplay ? true : false,
                pauseOnHover: true,
                toggleArrows: false,
                resizeContents: true
            });
        } else {
            $('#slider-cycle ul.slider').anythingSlider({
                expand: true,
                startStopped: false,
                buildArrows: yit_slider_cycle_directionNav,
                buildNavigation: false,
                buildStartStop: false,
                delay: yit_slider_cycle_timeout,
                animationTime: yit_slider_cycle_speed,
                easing: yit_slider_cycle_fx,
                autoPlay: yit_slider_cycle_autoplay ? true : false,
                pauseOnHover: true,
                toggleArrows: yit_slider_cycle_directionNavHide ? true : false,
                onSlideComplete: function (slider) {
                },
                resizeContents: true,
                onSlideBegin: function (slider) {

                },
                onSlideComplete: function (slider) {

                }
            });

        }
    });
</script>
<div class="mobile-slider cycle">
    <div class="slider fixed-image container">
        <img src="images/fixed.jpeg" alt=""/>
    </div>
</div>

<!-- START PAGE META -->
<div id="page-meta" class="container">

    <!-- SLOGAN -->
    <div class="slogan">
        <h2>Cautivate con las tomas unicas</h2>

        <h3>Que te ofrece Corre La Voz Travel</h3>
    </div>

</div>
<!-- END PAGE META -->

<!-- START PRIMARY -->
<div id="primary" class="sidebar-no">
<div class="container group">
<div class="row">

<!-- START CONTENT -->
<div class="span12 content group">

<div class="page type-page status-publish hentry group">

<script>
    jQuery(document).ready(function ($) {
        $('.sidebar').remove();

        if (!$('#primary').hasClass('sidebar-no')) {
            $('#primary').removeClass().addClass('sidebar-no');
            $('.content').removeClass('span9').addClass('span12');
        }

    });
</script>

<div class="row">
<ul id="portfolio" class="pinterest pinterest thumbnails">
<li class="first work span3">
    <div class="thumbnail">
        <div class="picture_overlay">

           <!-- Aquí va la imagen del principal-->
           <!-- cambiar id -->
            <?php
                require_once('conexion.php');
                seleccionarImggal('<img src="[dataDb]">', 1);
            ?>

            <div class="overlay">
                <div>
                    <p>
                         <!-- Inicia codigo de imagen al hacer clic zoom a la imagen-->

                        <?php
                    seleccionarImggal('<a href="[dataDb]" rel="lightbox" class="ch-info-lightbox">', 1);?>
                    <img src="images/icons/zoom.png" alt="Open Lightbox" />
                                                
                        </a>

                        
                    </p>
                        
        <!-- Finaliza el codigo en donde va la imagen con base a la conexion anterior -->        
                         
        <!--Inicia la parte del subtitulo de la imagen -->
         <?php galSub('<p class="subtitle" >[dataDb]</p>', 1);?> 
        <!-- Finaliza la sección del subtitulo de la imagen -->
                </div>
            </div>
        </div>

        <!--Esta seccion es para modificar la informacion del titulo 1-->

        <center><h4>
        <?php galTit('[dataDb]', 1);?>
        </h4></center>

        <!--Esta seccion es para modificar la informacion del subtitulo 1-->
        
        <center><h5>
        <?php galDes('[dataDb]', 1);?>
        </h5></center>


    </div>
</li>

<li class="work span3">
    <div class="thumbnail">
        <div class="picture_overlay">

           <!-- Aquí va la imagen del principal-->
           <!-- cambiar id -->
            <?php
                seleccionarImggal('<img src="[dataDb]">', 2);
            ?>

            <div class="overlay">
                <div>
                    <p>
                         <!-- Inicia codigo de imagen al hacer clic zoom a la imagen-->

                        <?php
                    seleccionarImggal('<a href="[dataDb]" rel="lightbox" class="ch-info-lightbox">', 2);?>
                    <img src="images/icons/zoom.png" alt="Open Lightbox" />
                                                
                        </a>

                        
                    </p>
                        
        <!-- Finaliza el codigo en donde va la imagen con base a la conexion anterior -->        
                         
        <!--Inicia la parte del subtitulo de la imagen -->
         <?php galSub('<p class="subtitle" >[dataDb]</p>', 2);?> 
        <!-- Finaliza la sección del subtitulo de la imagen -->
                </div>
            </div>
        </div>

        <!--Esta seccion es para modificar la informacion del titulo 1-->

        <center><h4>
        <?php galTit('[dataDb]', 2);?>
        </h4></center>

        <!--Esta seccion es para modificar la informacion del subtitulo 1-->
        
        <center><h5>
        <?php galDes('[dataDb]', 2);?>
        </h5></center>


    </div>
</li>



<li class="work span3">
    <div class="thumbnail">
        <div class="picture_overlay">

           <!-- Aquí va la tercera imagen del principal-->
            <?php
                seleccionarImggal('<img src="[dataDb]">', 3);
            ?>

            <div class="overlay">
                <div>
                    <p>
                         <!-- Inicia codigo de imagen al hacer clic zoom a la imagen-->

                        <?php
                    seleccionarImggal('<a href="[dataDb]" rel="lightbox" class="ch-info-lightbox">', 3);?>
                    <img src="images/icons/zoom.png" alt="Open Lightbox" />
                                                
                        </a>

                        
                    </p>
                        
        <!-- Finaliza el codigo en donde va la imagen con base a la conexion anterior -->        
                         
        <!--Inicia la parte del subtitulo de la imagen -->
         <?php galSub('<p class="subtitle" >[dataDb]</p>', 3);?> 
        <!-- Finaliza la sección del subtitulo de la imagen -->
                </div>
            </div>
        </div>

        <!--Esta seccion es para modificar la informacion del titulo 1-->

        <center><h4>
        <?php galTit('[dataDb]', 3);?>
        </h4></center>

        <!--Esta seccion es para modificar la informacion del subtitulo 1-->
        
        <center><h5>
        <?php galDes('[dataDb]', 3);?>
        </h5></center>


    </div>
</li>



<li class="work span3">
    <div class="thumbnail">
        <div class="picture_overlay">

           <!-- Aquí va la tercera imagen del principal-->
            <?php
                seleccionarImggal('<img src="[dataDb]">', 4);
            ?>

            <div class="overlay">
                <div>
                    <p>
                         <!-- Inicia codigo de imagen al hacer clic zoom a la imagen-->

                        <?php
                    seleccionarImggal('<a href="[dataDb]" rel="lightbox" class="ch-info-lightbox">', 4);?>
                    <img src="images/icons/zoom.png" alt="Open Lightbox" />
                                                
                        </a>

                        
                    </p>
                        
        <!-- Finaliza el codigo en donde va la imagen con base a la conexion anterior -->        
                         
        <!--Inicia la parte del subtitulo de la imagen -->
         <?php galSub('<p class="subtitle" >[dataDb]</p>', 4);?> 
        <!-- Finaliza la sección del subtitulo de la imagen -->
                </div>
            </div>
        </div>

        <!--Esta seccion es para modificar la informacion del titulo 1-->

        <center><h4>
        <?php galTit('[dataDb]', 4);?>
        </h4></center>

        <!--Esta seccion es para modificar la informacion del subtitulo 1-->
        
        <center><h5>
        <?php galDes('[dataDb]', 4);?>
        </h5></center>


    </div>
</li>

<li class="work span3">
    <div class="thumbnail">
        <div class="picture_overlay">

           <!-- Aquí va la tercera imagen del principal-->
            <?php
                seleccionarImggal('<img src="[dataDb]">', 5);
            ?>

            <div class="overlay">
                <div>
                    <p>
                         <!-- Inicia codigo de imagen al hacer clic zoom a la imagen-->

                        <?php
                    seleccionarImggal('<a href="[dataDb]" rel="lightbox" class="ch-info-lightbox">', 5);?>
                    <img src="images/icons/zoom.png" alt="Open Lightbox" />
                                                
                        </a>

                        
                    </p>
                        
        <!-- Finaliza el codigo en donde va la imagen con base a la conexion anterior -->        
                         
        <!--Inicia la parte del subtitulo de la imagen -->
         <?php galSub('<p class="subtitle" >[dataDb]</p>', 5);?> 
        <!-- Finaliza la sección del subtitulo de la imagen -->
                </div>
            </div>
        </div>

        <!--Esta seccion es para modificar la informacion del titulo 1-->

        <center><h4>
        <?php galTit('[dataDb]', 5);?>
        </h4></center>

        <!--Esta seccion es para modificar la informacion del subtitulo 1-->
        
        <center><h5>
        <?php galDes('[dataDb]', 5);?>
        </h5></center>


    </div>
</li>

<li class="work span3">
    <div class="thumbnail">
        <div class="picture_overlay">

           <!-- Aquí va la tercera imagen del principal-->
            <?php
                seleccionarImggal('<img src="[dataDb]">', 6);
            ?>

            <div class="overlay">
                <div>
                    <p>
                         <!-- Inicia codigo de imagen al hacer clic zoom a la imagen-->

                        <?php
                    seleccionarImggal('<a href="[dataDb]" rel="lightbox" class="ch-info-lightbox">', 6);?>
                    <img src="images/icons/zoom.png" alt="Open Lightbox" />
                                                
                        </a>

                        
                    </p>
                        
        <!-- Finaliza el codigo en donde va la imagen con base a la conexion anterior -->        
                         
        <!--Inicia la parte del subtitulo de la imagen -->
         <?php galSub('<p class="subtitle" >[dataDb]</p>', 6);?> 
        <!-- Finaliza la sección del subtitulo de la imagen -->
                </div>
            </div>
        </div>

        <!--Esta seccion es para modificar la informacion del titulo 1-->

        <center><h4>
        <?php galTit('[dataDb]', 6);?>
        </h4></center>

        <!--Esta seccion es para modificar la informacion del subtitulo 1-->
        
        <center><h5>
        <?php galDes('[dataDb]', 6);?>
        </h5></center>


    </div>
</li>

<li class="work span3">
    <div class="thumbnail">
        <div class="picture_overlay">

           <!-- Aquí va la tercera imagen del principal-->
            <?php
                seleccionarImggal('<img src="[dataDb]">', 7);
            ?>

            <div class="overlay">
                <div>
                    <p>
                         <!-- Inicia codigo de imagen al hacer clic zoom a la imagen-->

                        <?php
                    seleccionarImggal('<a href="[dataDb]" rel="lightbox" class="ch-info-lightbox">', 7);?>
                    <img src="images/icons/zoom.png" alt="Open Lightbox" />
                                                
                        </a>

                        
                    </p>
                        
        <!-- Finaliza el codigo en donde va la imagen con base a la conexion anterior -->        
                         
        <!--Inicia la parte del subtitulo de la imagen -->
         <?php galSub('<p class="subtitle" >[dataDb]</p>', 7);?> 
        <!-- Finaliza la sección del subtitulo de la imagen -->
                </div>
            </div>
        </div>

        <!--Esta seccion es para modificar la informacion del titulo 1-->

        <center><h4>
        <?php galTit('[dataDb]', 7);?>
        </h4></center>

        <!--Esta seccion es para modificar la informacion del subtitulo 1-->
        
        <center><h5>
        <?php galDes('[dataDb]', 7);?>
        </h5></center>


    </div>
</li>


<li class="work span3">
    <div class="thumbnail">
        <div class="picture_overlay">

           <!-- Aquí va la tercera imagen del principal-->
            <?php
                seleccionarImggal('<img src="[dataDb]">', 8);
            ?>

            <div class="overlay">
                <div>
                    <p>
                         <!-- Inicia codigo de imagen al hacer clic zoom a la imagen-->

                        <?php
                    seleccionarImggal('<a href="[dataDb]" rel="lightbox" class="ch-info-lightbox">', 8);?>
                    <img src="images/icons/zoom.png" alt="Open Lightbox" />
                                                
                        </a>

                        
                    </p>
                        
        <!-- Finaliza el codigo en donde va la imagen con base a la conexion anterior -->        
                         
        <!--Inicia la parte del subtitulo de la imagen -->
         <?php galSub('<p class="subtitle" >[dataDb]</p>', 8);?> 
        <!-- Finaliza la sección del subtitulo de la imagen -->
                </div>
            </div>
        </div>

        <!--Esta seccion es para modificar la informacion del titulo 1-->

        <center><h4>
        <?php galTit('[dataDb]', 8);?>
        </h4></center>

        <!--Esta seccion es para modificar la informacion del subtitulo 1-->
        
        <center><h5>
        <?php galDes('[dataDb]', 8);?>
        </h5></center>


    </div>
</li>


<li class="work span3">
    <div class="thumbnail">
        <div class="picture_overlay">

           <!-- Aquí va la tercera imagen del principal-->
            <?php
                seleccionarImggal('<img src="[dataDb]">', 12);
            ?>

            <div class="overlay">
                <div>
                    <p>
                         <!-- Inicia codigo de imagen al hacer clic zoom a la imagen-->

                        <?php
                    seleccionarImggal('<a href="[dataDb]" rel="lightbox" class="ch-info-lightbox">', 12);?>
                    <img src="images/icons/zoom.png" alt="Open Lightbox" />
                                                
                        </a>

                        
                    </p>
                        
        <!-- Finaliza el codigo en donde va la imagen con base a la conexion anterior -->        
                         
        <!--Inicia la parte del subtitulo de la imagen -->
         <?php galSub('<p class="subtitle" >[dataDb]</p>', 12);?> 
        <!-- Finaliza la sección del subtitulo de la imagen -->
                </div>
            </div>
        </div>

        <!--Esta seccion es para modificar la informacion del titulo 1-->

        <center><h4>
        <?php galTit('[dataDb]', 12);?>
        </h4></center>

        <!--Esta seccion es para modificar la informacion del subtitulo 1-->
        
        <center><h5>
        <?php galDes('[dataDb]', 12);?>
        </h5></center>


    </div>
</li>

<li class="work span3">
    <div class="thumbnail">
        <div class="picture_overlay">

           <!-- Aquí va la tercera imagen del principal-->
            <?php
                seleccionarImggal('<img src="[dataDb]">', 13);
            ?>

            <div class="overlay">
                <div>
                    <p>
                         <!-- Inicia codigo de imagen al hacer clic zoom a la imagen-->

                        <?php
                    seleccionarImggal('<a href="[dataDb]" rel="lightbox" class="ch-info-lightbox">', 13);?>
                    <img src="images/icons/zoom.png" alt="Open Lightbox" />
                                                
                        </a>

                        
                    </p>
                        
        <!-- Finaliza el codigo en donde va la imagen con base a la conexion anterior -->        
                         
        <!--Inicia la parte del subtitulo de la imagen -->
         <?php galSub('<p class="subtitle" >[dataDb]</p>', 13);?> 
        <!-- Finaliza la sección del subtitulo de la imagen -->
                </div>
            </div>
        </div>

        <!--Esta seccion es para modificar la informacion del titulo 1-->

        <center><h4>
        <?php galTit('[dataDb]', 13);?>
        </h4></center>

        <!--Esta seccion es para modificar la informacion del subtitulo 1-->
        
        <center><h5>
        <?php galDes('[dataDb]', 13);?>
        </h5></center>


    </div>
</li>

<li class="work span3">
    <div class="thumbnail">
        <div class="picture_overlay">

           <!-- Aquí va la tercera imagen del principal-->
            <?php
                seleccionarImggal('<img src="[dataDb]">', 14);
            ?>

            <div class="overlay">
                <div>
                    <p>
                         <!-- Inicia codigo de imagen al hacer clic zoom a la imagen-->

                        <?php
                    seleccionarImggal('<a href="[dataDb]" rel="lightbox" class="ch-info-lightbox">', 14);?>
                    <img src="images/icons/zoom.png" alt="Open Lightbox" />
                                                
                        </a>

                        
                    </p>
                        
        <!-- Finaliza el codigo en donde va la imagen con base a la conexion anterior -->        
                         
        <!--Inicia la parte del subtitulo de la imagen -->
         <?php galSub('<p class="subtitle" >[dataDb]</p>', 14);?> 
        <!-- Finaliza la sección del subtitulo de la imagen -->
                </div>
            </div>
        </div>

        <!--Esta seccion es para modificar la informacion del titulo 1-->

        <center><h4>
        <?php galTit('[dataDb]', 14);?>
        </h4></center>

        <!--Esta seccion es para modificar la informacion del subtitulo 1-->
        
        <center><h5>
        <?php galDes('[dataDb]', 14);?>
        </h5></center>


    </div>
</li>


<li class="work span3">
    <div class="thumbnail">


          <!-- Aquí va la imagen 11 de la galería-->
        <?php
                seleccionarImggal('<video width="250" height="250" src="[dataDb]" autoplay muted controls></video>', 11);
                
            ?>


            <div class="overlay">
                <div>
                    <p>
                         <!-- Inicia codigo de imagen al hacer clic zoom a la imagen-->

                       
                        <!--Esta seccion es para modificar la informacion del titulo 1-->

        <center><h4>
        <?php galTit('[dataDb]', 11);?>
        </h4></center>


        <!--Esta seccion es para modificar la informacion del subtitulo 1-->
        <center><h5>
        <?php galDes('[dataDb]', 11);?>
        </h5></center>

                        
                    </p>
                        
        <!-- Finaliza el codigo en donde va la imagen con base a la conexion anterior -->        
                         
                </div>
            </div>
        </div>

    </div>

</li>



</li>


</ul>



</div>

<script type="text/javascript">
    jQuery(document).ready(function ($) {
        var container = $('#portfolio');
        container.imagesLoaded(function () {
            container.masonry({
                itemSelector: '.span3'
            });
        });

        $(window).resize(function () {
            $('#portfolio').masonry({
                itemSelector: '.span3'
            });
        })
    });
</script>
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
<script type="text/javascript" src="js/jquery.cycle.min.js"></script>
<script type="text/javascript" src="sliders/cycle/js/jquery.anythingslider.js"></script>
<script type='text/javascript' src='js/jquery.custom.js'></script>

</body>
<!-- END BODY -->
</html>