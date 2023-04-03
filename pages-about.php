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

    <title>¿Qué somos? | Corre La Voz Travel.</title>

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
        <h1>¿Qué somos?</h1>
    </div>

    <!-- BREDCRUMB -->
    <div class="breadcrumbs">
        <p id="yit-breadcrumb" itemprop="breadcrumb">
            <a class="home" href="index.php">Inicio</a> &gt;
            <a class="no-link current" href="#">¿Qué somos?</a>
        </p>
    </div>

</div>
<!-- END PAGE META -->

<!-- START PRIMARY -->
<div id="primary" class="sidebar-right">
    <div class="container group">
        <div class="row">
            <!-- START CONTENT -->
            <div id="content-page" class="span9 content group">
                <div class="page type-page status-publish hentry group">
                    <div class="accordion-container">
                        
                        <div class="accordion-wrapper row">
                            <div class="accordion-title span9">
                                <div class="plus">+</div>
                                <h4><?php empreTitu('[dataDb]', 2);?></h4>
                            </div>
                            
                            <div class="accordion-item span9">
                                <div class="row">
                                    <div class="span3">
                                        <div class="accordion-item-thumb">
                                            <?php imgEmpresa('<img src="[dataDb]">', 2); ?>
                                        </div>
                                    </div>
                                    <!-- end span3 -->
                                    
                                    <div class="span6">
                                        <div class="accordion-item-content">
                                           <?php empreDes('<p>[dataDb]</p>', 2);?>
                                            
                                            <div class="meta">
                                                <p>
                                                    <img class="icon" src="images/icons/role.png" alt="role_icon" />Rol: <?php empreRol('[dataDb]', 2);?></p>
                                                <p>
                                                    <img class="icon" src="images/icons/website.png" alt="website_icon" />
                                                    Sitio Web: <a target="_blank" href="https://www.facebook.com/CorreLaVozChiapas">Corre La Voz</a>

                                                </p>
                                                
                                                <p>
                                                <img class="icon" src="images/icons/social-meta.png" alt="social_icon" />Contactanos:
                                                <a href="https://www.facebook.com/messages/t/1498853930392008" target="_blank" class="socials-small facebook-small" title="Facebook"  >Facebook</a>
                                                <a href="https://www.instagram.com/direct/t/340282366841710300949128483515835429612" target="_blank" class="socials-small instagram-small" title="Instagram" >Instagram</a>
                                                <a href="https://api.whatsapp.com/send?phone=%2B529631574565&data=AWCrNeBN8KKaFnDBrosmqkDmL9Z_FAbuo1lt-PcRt4O7Fh-MLU6t8IpokiaVEQ9jah-aJNO5pQw6OMOkYFs2-GA1vymx-3cFCP4DljvyXd83XVdMCwj1dekSdznnOl-73cabI8JPpMLYj1pvkaY15m5cHsvwTezqw2q8BHQpTyRvw97O4KiPhOvz9VGomZEQArDfab711cgY0W8qVUEmB0zCt96_aItFcs4lu7fPTu8X5IW1zgnBZG1Ftpd_9zZ9l9XH8Ny19HvbHTSOzygKug&source=FB_Page&app=facebook&entry_point=page_cta" target="_blank" class="socials-small whatsapp-small" title="Whatsapp">Whatsapp</a>
                                                <a href="https://www.tiktok.com/@correlavozchiapas" target="_blank" class="socials-small tiktok-small" title="TikTok">Tik Tok</a>


                                            </p>

                                            </div>
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d61283.53376158659!2d-92.15769678798742!3d16.260447164605225!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x858d47bd56d28269%3A0x6c47d46464a1cf98!2sCorre%20la%20Voz%20%26%20CLV%20Travel!5e0!3m2!1ses-419!2smx!4v1678559105018!5m2!1ses-419!2smx" width="500" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-wrapper row">
                            <div class="accordion-title span9">
                                <div class="plus">+</div>
                                <h4><?php empreTitu('[dataDb]', 1);?></h4>
                            </div>
                            
                            <div class="accordion-item span9">
                                <div class="row">
                                    <div class="span3">
                                        <div class="accordion-item-thumb">
                                            <?php imgEmpresa('<img src="[dataDb]">', 1); ?>
                                        </div>
                                    </div>
                                    <!-- end span3 -->
                                    
                                    <div class="span6">
                                        <div class="accordion-item-content">
                                           <?php empreDes('<p>[dataDb]</p>', 1);?>
                                            
                                            <div class="meta">
                                                <p>
                                                    <img class="icon" src="images/icons/role.png" alt="role_icon" />Rol: <?php empreRol('[dataDb]', 1);?></p>
                                                <p>
                                                    <img class="icon" src="images/icons/website.png" alt="website_icon" />
                                                    Sitio Web: <a target="_blank" href="https://www.facebook.com/symbiotic.mx">Symbiotic</a>

                                                </p>
                                                
                                                <p>
                                                <img class="icon" src="images/icons/social-meta.png" alt="social_icon" />Contactanos:
                                                <a href="https://www.facebook.com/messages/t/1498853930392008" target="_blank" class="socials-small facebook-small" title="Facebook"  >Facebook</a>

                                                <a href="" target="_blank" class="socials-small instagram-small" title="Instagram" >Instagram</a>

                                                <a href="https://api.whatsapp.com/send?phone=%2B529635939610&data=AWC_exmqmrU1oNekaBxpjKDVFFzw5qcqJ0DdKW3gCBI1DnjWzg0s5JDPzQeu_tU4hV2L3N7tRXpPXX9eq567gagxkvCl9LnJ11BjM1WV7Q4_XaqrFIynLM8jUMskl3xKxsGzlgv30Fi9EZIbeh7IZvW86r3ltX915tVPil9szA2af38RuEElaG-I_6OtRc1DawatwPizy5M3RMeRXQaT444NmNS780ZcKCkdKFchKfTl5Wk9U0XkIjD92OyFB5j79oxHsFJMtTDYWUU0QJOOsA&source=FB_Page&app=facebook&entry_point=page_cta" target="_blank" class="socials-small whatsapp-small" title="Whatsapp">Whatsapp</a>


                                            </p>

                                            </div>
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3830.437217605123!2d-92.1337502584682!3d16.24934720484399!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x858d47562314f7a3%3A0x1f123f59a95e6838!2sSYMBIOTIC!5e0!3m2!1ses-419!2smx!4v1678583114205!5m2!1ses-419!2smx" width="500" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-wrapper row">
                            <div class="accordion-title span9">
                                <div class="plus">+</div>
                                <h4><?php empreTitu('[dataDb]', 3);?></h4>
                            </div>
                            
                            <div class="accordion-item span9">
                                <div class="row">
                                    <div class="span3">
                                        <div class="accordion-item-thumb">
                                            <?php imgEmpresa('<img src="[dataDb]">', 3); ?>
                                        </div>
                                    </div>
                                    <!-- end span3 -->
                                    
                                    <div class="span6">
                                        <div class="accordion-item-content">
                                           <?php empreDes('<p>[dataDb]</p>', 3);?>
                                            
                                            <div class="meta">
                                                <p>
                                                    <img class="icon" src="images/icons/role.png" alt="role_icon" />Rol: <?php empreRol('[dataDb]', 3);?></p>
                                                <p>
                                                    <img class="icon" src="images/icons/website.png" alt="website_icon" />
                                                    Sitio Web: <a target="_blank" href="https://www.facebook.com/CasaDelSolComitan">Hostal Casa Del Sol</a>

                                                </p>
                                                
                                                <p>
                                                <img class="icon" src="images/icons/social-meta.png" alt="social_icon" />Contactanos:
                                                <a href="https://www.facebook.com/messages/t/367551127145198" target="_blank" class="socials-small facebook-small" title="Facebook"  >Facebook</a>
                                                
                                                <a href="https://www.instagram.com/hostalcasadelsolcomitan/" target="_blank" class="socials-small instagram-small" title="Instagram" >Instagram</a>

                                                <a href="https://api.whatsapp.com/send?phone=%2B529631574565&data=AWDtUo-CkzGqMx6lkBt5Naj9n_qNFdbdQMjrah__OhG5lxjp-ljH_tVKDhB-_rky6G6PhMvSR48J8v19PTeRvCcHnwMie_ry_CIgwcOVvZgjZUMbarlag6kdS1_3tgNiscf46uih-RXCxnQLbmNI7TjTD5T0EZvkH084GTo4J-wThZNXmj2aX5AD7q-g9Rb1yd8Phhitw7Vt0JwDZlDmJTHPSBlpPpAlJB7i52ihB82Qde8nBKzWCvOI1_m2l8sM2RbX7aXEKvu9BI28IdeNGQ&source=FB_Page&app=facebook&entry_point=page_cta" target="_blank" class="socials-small whatsapp-small" title="Whatsapp">Whatsapp</a>


                                            </p>

                                            </div>
                                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3830.4437122913923!2d-92.14771518520463!3d16.24901388877005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x858d3959886fe8ad%3A0x52647540ffd06979!2sHostal%20Casa%20Del%20Sol%20Comit%C3%A1n!5e0!3m2!1ses-419!2smx!4v1678583482750!5m2!1ses-419!2smx" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script>
                        jQuery(document).ready(function($){
                            $('.accordion-title').click(function(){
                                if( !$(this).hasClass('active') ) {
                                    $('.accordion-title').removeClass('active').find(':first-child').addClass('plus').text("+").removeClass('minus');
                                    $('.accordion-item').slideUp();

                                    $(this).toggleClass('active')
                                            .find(':first-child').removeClass('plus').addClass('minus').text("-").parent().next().slideToggle();
                                }
                            }).filter(':first').click();
                        });
                    </script>

                </div>
                <!-- START COMMENTS -->
                <div id="comments"></div>
                <!-- END COMMENTS -->
            </div>
            <!-- END CONTENT -->

            <!-- START SIDEBAR -->
            <div id="sidebar-about" class="span3 sidebar group">
                <div class="widget-first widget recent-posts">
                    <h3>From the blog</h3>
                    <div class="recent-post group">
                        <div class="hentry-post group">
                            <div class="thumb-img">
                                <img width="55" height="55" src="images/slider/23-55x55.jpg" class="attachment-blog_thumb wp-post-image" alt="23" />
                            </div>
                            <div class="text">
                                <a href="blog-detail.html" title="This is the title of the first article. Enjoy it." class="title">
                                    This is the title of the first article. Enjoy it.
                                </a>
                                <p class="post-date">October 8, 2012 - 0 comments</p>
                            </div>
                        </div>
                        <div class="hentry-post group">
                            <div class="thumb-img">
                                <img width="55" height="55" src="images/blog/imgbloh-55x55.jpg" class="attachment-blog_thumb wp-post-image" alt="imgbloh" />
                            </div>
                            <div class="text">
                                <a href="#" title="Nice &amp; Clean. The best for your blog!" class="title">
                                    Nice &amp; Clean. The best for your blog!
                                </a>
                                <p class="post-date">September 12, 2012 - 0 comments</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="widget-2 widget-last widget featured-projects">
                    <h3>Featured Projects</h3>
                    <div class="featured-projects-widget flexslider">
                        <ul class="slides">
                            <li>
                                <div class="thumb-project">
                                    <a href='portfolio-slide-detail.html'>
                                        <img width="320" height="154" src="images/portfolios/001-320x154.jpg" class="attachment-featured_project_thumb" alt="001_mini" />
                                    </a>
                                </div>

                                <h4>Bob Miller</h4>
                            </li>
                            <li>
                                <div class="thumb-project">
                                    <a href='#'>
                                        <img width="320" height="154" src="images/portfolios/009_mini-320x154.jpg" class="attachment-featured_project_thumb" alt="009_mini" />
                                    </a>
                                </div>

                                <h4>Guanacos</h4>
                            </li>
                            <li>
                                <div class="thumb-project"><a href='#'>
                                    <img width="320" height="154" src="images/portfolios/007_mini-320x154.jpg" class="attachment-featured_project_thumb" alt="007_mini" />
                                </a>
                                </div>
                                <h4>Kimeda</h4>
                            </li>
                            <li>
                                <div class="thumb-project">
                                    <a href='#'>
                                        <img width="320" height="154" src="images/portfolios/001-320x154.jpg" class="attachment-featured_project_thumb" alt="004_mini" />
                                    </a>
                                </div>
                                <h4>Digitpool Medien  </h4>
                            </li>
                            <li>
                                <div class="thumb-project">
                                    <a href='#'>
                                        <img width="320" height="154" src="images/portfolios/005_mini-320x154.jpg" class="attachment-featured_project_thumb" alt="005_mini" />
                                    </a>
                                </div>
                                <h4>Colorful Oktopus</h4>
                            </li>
                        </ul>
                    </div>

                    <script type="text/javascript">
                        jQuery(document).ready(function($){
                            var animation = $.browser.msie || $.browser.opera ? 'fade' : 'slide';
                            $('.featured-projects-widget').flexslider({
                                animation: animation,
                                slideshowSpeed: 8000,
                                animationSpeed: 300,
                                selectors: 'ul > li',
                                directionNav: true,
                                slideshow: true,

                                pauseOnAction: false,
                                controlNav: false,
                                touch: true
                            });
                        });
                    </script>
                </div>
            </div>
            <!-- END SIDEBAR -->

            <!-- START EXTRA CONTENT -->
            <!-- END EXTRA CONTENT -->

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