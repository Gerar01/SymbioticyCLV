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

    <title>Blog | Corre La Voz Travel.</title>

    <!-- RESET STYLESHEET -->
    <link rel="stylesheet" type="text/css" media="all" href="css/reset.css" />
    <!-- BOOTSTRAP STYLESHEET -->
    <link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.css" />
    <!-- MAIN THEME STYLESHEET -->
    <link rel="stylesheet" type="text/css" media="all" href="style.css" />

    <link rel='stylesheet' id='custom-css'  href='css/custom.css' type='text/css' media='all' />
    <link rel='stylesheet' id='google-fonts-css'  href='http://fonts.googleapis.com/css?family=Oswald%7CDroid+Sans%7CPlayfair+Display%7COpen+Sans+Condensed:300,400,800%3A300%7CRokkitt%7CShadows+Into+Light%7CMaven+Pro:400,700%7CAbel%7CMontez' type='text/css' media='all' />
    <link rel='stylesheet' id='responsive-css'  href='css/responsive.css' type='text/css' media='all' />
    <link rel='stylesheet' id='tipsy-css'  href='css/tipsy.css' type='text/css' media='all' />

    <link rel='stylesheet' id='fonts-css'  href='css/font-awesome.css' type='text/css' media='all' />
    <link rel='stylesheet' id='shortcode-css'  href='css/shortcodes.css' type='text/css' media='all' />

    <link rel='stylesheet' id='colorbox-css'  href='css/colorbox.css' type='text/css' media='all' />
    <link rel='stylesheet' id='custom-button-mfast-3-css'  href='css/buttons/mfast-3.css' type='text/css' media='all' />
    <link rel='stylesheet' id='flexi-slider-css'  href='sliders/flexslider/css/slider.css' type='text/css' media='all' />


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

    <link rel='stylesheet' id='thickbox-css'  href='js/thickbox/thickbox.css' type='text/css' media='all' />

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

<script>
    jQuery(function($){
        var twitterSlider = function(){
            $('#topbar .last-tweets ul').addClass('slides');
            $('#topbar .last-tweets').flexslider({
                animation: "fade",
                slideshowSpeed: 5 * 1000,
                animationDuration: 700,
                directionNav: false,
                controlNav: false,
                keyboardNav: false
            });
        };
        $('#topbar .last-tweets > div').bind('tweetable_loaded', function(){
            twitterSlider();
        });
    });
</script>

<!-- END TOP BAR -->

           
                    <!-- START LOGO -->
                    <?php
                    include('header.html'); 
                    ?>
                       
<!-- END HEADER -->

<!-- START PAGE META -->
<div id="page-meta" class="container">

    <!-- TITLE -->
    <div class="title">
        <h1>Blog</h1>
    </div>

    <!-- BREDCRUMB -->
    <div class="breadcrumbs">
        <p id="yit-breadcrumb" itemprop="breadcrumb">
            <a class="home" href="index.php">Inicio</a> &gt;
            <a class="no-link current" href="#">Blog</a>
        </p>
    </div>

</div>
<!-- END PAGE META -->

<!-- START PRIMARY -->
<div id="primary" class="sidebar-right">
    <div class="container group">
        <div class="container">
            <div class="row">
                <div class="" style="margin-left:100px; display: flex">
                    <div class="col-md-6">
                        <?php
                            require_once('conexion.php');
                            $query = "SELECT * FROM blog";
                            $respuesta = $conexion->query($query);
                            while($fila = $respuesta->fetch_assoc()){
                        ?>
                            <div class="card mb-3" style="max-width: 540px; margin-bottom:10px">
                                <div class="row" style="display:flex">
                                    <div class="span4">
                                        <img style="min-height: 180px; max-height: 180px; min-width: 250px; border-radius: 20px" src="images_blog/<?php echo $fila['imagen'] ?>" alt="Imagen">
                                    </div>
                                    <div class="span8">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo $fila['nombre'] ?></h5>
                                            <h6 class="card-title"><?php echo $fila['titulo'] ?></h6>
                                            <p class="card-text"><?php echo $fila['descripcion'] ?></p>
                                            <p class="card-text"><small class="text-muted"><?php echo $fila['fecha_hora'] ?></small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                            }
                        ?>
                    </div>
                    <div class="col-md-6">
                            <!-- AQUI VA LA PUBLICIDAD -->
                            <?php
                            require_once('conexion.php');
                            $query = "SELECT * FROM publicidad_blog";
                            $respuesta = $conexion->query($query);
                            while($fila = $respuesta->fetch_assoc()){
                        ?>

                            <div class="card mb-3" style="max-width: 540px; margin-bottom:10px">
                                <div class="row" style="display:flex">
                                    <div class="span4">
                                        <img style="min-height: 180px; max-height: 180px; min-width: 250px; border-radius: 20px" src="blog_publicidad/<?php echo $fila['imagen'] ?>" alt="Imagen">
                                    </div>
                                    <div class="span8">
                                        <div class="card-body">
                                           
                                            <h4><?php echo $fila['descripcion'] ?></h4>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END PRIMARY -->

<?php include('footer.html');?>


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