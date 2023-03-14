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

    <title>Celestino | only for creative minds.</title>

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
    <link rel='stylesheet' id='filterable-elegant-css'  href='portfolios/filterable/css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='tipsy-css'  href='css/tipsy.css' type='text/css' media='all' />

    <link rel='stylesheet' id='fonts-css'  href='css/font-awesome.css' type='text/css' media='all' />
    <link rel='stylesheet' id='full-descriptor-css'  href='portfolios/full-description/css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='slide-details-css'  href='css/portfolios-columns-style.css' type='text/css' media='all' />
    <link rel='stylesheet' id='shortcode-css'  href='css/shortcodes.css' type='text/css' media='all' />

    <link rel='stylesheet' id='colorbox-css'  href='css/colorbox.css' type='text/css' media='all' />
    <link rel='stylesheet' id='custom-button-mfast-3-css'  href='css/buttons/mfast-3.css' type='text/css' media='all' />
    <link rel='stylesheet' id='flexslider-css'  href='sliders/flexslider/css/flexslider.css' type='text/css' media='all' />

    <link rel='stylesheet' id='rs-css'  href='sliders/revolution-slider/css/slider.css' type='text/css' media='all' />
    <link rel='stylesheet' id='rs-settings-css'  href='sliders/revolution-slider/rs-plugin/css/settings.css' type='text/css' media='all' />
    <link rel='stylesheet' id='rs-captions-css'  href='sliders/revolution-slider/rs-plugin/css/captions.css' type='text/css' media='all' />

    <!-- [favicon] begin -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
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
<!-- START TOP BAR -->

<!-- START TOP BAR -->
<!-- END HEADER -->
<?php
include('header.html');
?>
<!-- START PAGE META -->

<!-- END PAGE META -->

<!-- START PRIMARY -->
<div id="primary" class="sidebar-no">
    <div class="container group">
        <div class="row">
            <!-- START CONTENT -->
            <div id="content-page" class="span12 content group">
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
                    
                    <div class="row">
                        <ul id="portfolio" class="columns columns thumbnails">


                            <li  class="first slide-1 work span4 first">

                                <div class="picture_overlay">
                                    <?php
                                    
                                  seleccionarImgofert('<img src="[dataDb]">', 1);
                                ?>
                                    <div class="overlay">
                                        <div>
                                            <p>
                                            <!-- Inicia codigo de imagen al hacer clic zoom a la imagen oferta-->
                                                
                                                <?php
                                                    seleccionarImgofert('<a href="[dataDb]" rel="lightbox" class="ch-info-lightbox">', 1); ?>
                                                    <img src="images/icons/zoom.png" alt="Open Lightbox" />
                                                </a>
                                                
                                                <!-- Finaliza codigo de imagen al hacer clic zoom a la imagen-->
                                                </a>
                                            </a>


                                        </p>

                                        <!-- Finaliza el codigo en donde va la imagen con base a la conexion anterior -->    


                                    </div>
                                </div>
                                </div>
                                <center>
                                <h4><b><?php seleccionarTitlofert('[dataDb]', 1);?></h4></b>
                                </center>
                                <p><?php seleccionarDesofert('[dataDb]', 1);?></p>

                                <p>Costo: <?php seleccionarCosofert('[dataDb]', 1);?></p>

                                <p>Vigencia: <?php seleccionarVigofert('[dataDb]', 1);?></p>
                                
                            </li>


                            <li  class="slide-2 work span4">

                                <div class="picture_overlay">
                                    <?php
                                    
                                  seleccionarImgofert('<img src="[dataDb]">', 2);
                                ?>
                                    <div class="overlay">
                                        <div>
                                            <p>
                                            <!-- Inicia codigo de imagen al hacer clic zoom a la imagen magen 2 (Lagos Colon) -->
                                                
                                                <?php
                                                    seleccionarImgofert('<a href="[dataDb]" rel="lightbox" class="ch-info-lightbox">', 2); ?>
                                                    <img src="images/icons/zoom.png" alt="Open Lightbox" />
                                                </a>
                                                
                                                <!-- Finaliza codigo de imagen al hacer clic zoom a la imagen 2 (Lagos Colon) -->
                                                </a>
                                            </a>


                                        </p>

                                        <!-- Finaliza el codigo en donde va la imagen con base a la conexion anterior -->    


                                    </div>
                                </div>
                                </div>
                                <center>
                                <h4> <b><?php seleccionarTitlofert('[dataDb]', 2);?></h4></b>
                                </center>
                                <p><?php seleccionarDesofert('[dataDb]', 2);?></p>
                                
                                <p>Costo: <?php seleccionarCosofert('[dataDb]', 2);?></p>

                                <p>Vigencia: <?php seleccionarVigofert('[dataDb]', 2);?></p>
                            </li>


                            <li  class="slide-3 work span4">

                               <div class="picture_overlay">
                                    <?php
                                    
                                  seleccionarImgofert('<img src="[dataDb]">', 3);
                                ?>
                                    <div class="overlay">
                                        <div>
                                            <p>
                                            <!-- Inicia codigo de imagen al hacer clic zoom a la imagen 3 (Lagos de Montebello) -->
                                                
                                                <?php
                                                    seleccionarImgofert('<a href="[dataDb]" rel="lightbox" class="ch-info-lightbox">', 3); ?>
                                                    <img src="images/icons/zoom.png" alt="Open Lightbox" />
                                                </a>
                                                
                                                <!-- Finaliza codigo de imagen al hacer clic zoom a la imagen 3 (Lagos de Montebello)-->
                                                </a>
                                            </a>


                                        </p>

                                        <!-- Finaliza el codigo en donde va la imagen con base a la conexion anterior -->    


                                    </div>
                                </div>
                                </div>
                                <center>
                                <h4><b><?php seleccionarTitlofert('[dataDb]', 3);?></h4></b>
                                </center>
                                <p><?php seleccionarDesofert('[dataDb]', 3);?></p>

                                <p>Costo: <?php seleccionarCosofert('[dataDb]', 3);?></p>
                                
                                <p>Vigencia: <?php seleccionarVigofert('[dataDb]', 3);?></p>
                            </li>


                            <li  class="slide-4 work span4 first">

                                <div class="picture_overlay">
                                    <?php
                                    
                                  seleccionarImgofert('<img src="[dataDb]">', 4);
                                ?>
                                    <div class="overlay">
                                        <div>
                                            <p>
                                            <!-- Inicia codigo de imagen al hacer clic zoom a la imagen imagen 4 (palenque)-->
                                                
                                                <?php
                                                    seleccionarImgofert('<a href="[dataDb]" rel="lightbox" class="ch-info-lightbox">', 4); ?>
                                                    <img src="images/icons/zoom.png" alt="Open Lightbox" />
                                                </a>
                                                
                                                <!-- Finaliza codigo de imagen al hacer clic zoom a la imagen 4 (palenque)-->
                                                </a>
                                            </a>


                                        </p>

                                        <!-- Finaliza el codigo en donde va la imagen con base a la conexion anterior -->    


                                    </div>
                                </div>
                                </div>
                                <center>
                                <h4><b> <?php seleccionarTitlofert('[dataDb]', 4);?></h4></b>
                                </center>
                                <p><?php seleccionarDesofert('[dataDb]', 4);?></p>
                                
                                <p>Costo: <?php seleccionarCosofert('[dataDb]', 4);?></p>

                                <p>Vigencia: <?php seleccionarVigofert('[dataDb]', 4);?></p>
                            </li>


                            <li  class="slide-5 work span4">

                                <div class="picture_overlay">
                                    <?php
                                    
                                  seleccionarImgofert('<img src="[dataDb]">', 5);
                                ?>
                                    <div class="overlay">
                                        <div>
                                            <p>
                                            <!-- Inicia codigo de imagen al hacer clic zoom a la imagen 5(Yaxchilan) -->
                                                
                                                <?php
                                                    seleccionarImgofert('<a href="[dataDb]" rel="lightbox" class="ch-info-lightbox">',5); ?>
                                                    <img src="images/icons/zoom.png" alt="Open Lightbox" />
                                                </a>
                                                
                                                <!-- Finaliza codigo de imagen al hacer clic zoom a la imagen imagen 5(Yaxchilan)-->
                                                </a>
                                            </a>


                                        </p>

                                        <!-- Finaliza el codigo en donde va la imagen ofertas con base a la conexion anterior -->    


                                    </div>
                                </div>
                                </div>
                                <center>
                                <h4><b><?php seleccionarTitlofert('[dataDb]', 5);?></h4></b>
                                </center>
                                <p><?php seleccionarDesofert('[dataDb]', 5);?></p>
                                
                                <p>Costo: <?php seleccionarCosofert('[dataDb]', 5);?></p>

                                <p>Vigencia: <?php seleccionarVigofert('[dataDb]', 5);?></p>
                            </li>


                            <li  class="last slide-6 work span4">
                                <div class="picture_overlay">
                                    <?php
                                    
                                  seleccionarImgofert('<img src="[dataDb]">', 6);
                                ?>
                                    <div class="overlay">
                                        <div>
                                            <p>
                                            <!-- Inicia codigo de imagen al hacer clic zoom a la imagen 6(Uninajab)-->
                                                
                                                <?php
                                                    seleccionarImgofert('<a href="[dataDb]" rel="lightbox" class="ch-info-lightbox">', 6); ?>
                                                    <img src="images/icons/zoom.png" alt="Open Lightbox" />
                                                </a>
                                                
                                                <!-- Finaliza codigo de imagen al hacer clic zoom a la imagen imagen 6(Uninajab)-->
                                                </a>
                                            </a>


                                        </p>

                                        <!-- Finaliza el codigo en donde va la imagen ofertas con base a la conexion anterior -->    


                                    </div>
                                </div>
                                </div>
                                <center> 
                                <h4><b><?php seleccionarTitlofert('[dataDb]', 6);?></h4></b>
                                </center>
                                <p><?php seleccionarDesofert('[dataDb]', 6);?></p>
                                
                                <p>Costo: <?php seleccionarCosofert('[dataDb]', 6);?></p>
                                
                                <p>Vigencia: <?php seleccionarVigofert('[dataDb]', 6);?></p>
                            </li>

                        </ul>
                        <div class='general-pagination group'>
                            <a href='#' class='selected' >1</a>
                            <a href='#' >2</a>
                            <a href='#'>&rsaquo;</a>
                        </div>
                    </div>

                </div>
                <!-- START COMMENTS -->
                <div id="comments">
                </div>
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