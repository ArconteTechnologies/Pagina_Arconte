<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  
<html> 
	<!--<![endif]-->
    <head>
    <meta charset="utf-8">
        <title>CONTÁCTANOS</title>
        <meta name="author" content="ARCONTETECHNOLOGIES.COM">
        <link rel="shortcut icon" href="img/ico/arconte.ico">
        <?php include_once("php/header/header.php"); ?>
    </head>
    <body class="boxed page">
        <div class="page-mask">
            <div class="page-loader">
                <div class="spinner"></div>
                Cargando...
            </div>
        </div>
        <div class="wrap">
            <!-- Header -->
            <header id="header">
                <!-- Header Top Bar -->
                <?php include_once("php/header/header_top_bar.php"); ?>
                <!-- /Header Top Bar -->
                <!-- Main Header -->
                <div class="main-header">
                    <div class="container">
                        <!-- TopNav -->
                        <div class="topnav navbar-header">
                            <a class="navbar-toggle down-button" data-toggle="collapse" data-target=".slidedown">
                            <i class="fa fa-angle-down icon-current"></i>
                            </a> 
                        </div>
                        <!-- /TopNav-->
                        <!-- Logo -->
                        <div class="logo pull-left">
                            <h1>
                                <?php include_once("php/header/logo.php"); ?>
                            </h1>
                        </div>
                        <!-- /Logo -->
                        <!-- Mobile Menu -->
                        <div class="mobile navbar-header">
                            <a class="navbar-toggle" data-toggle="collapse" href=".navbar-collapse">
                            <i class="fa fa-bars fa-2x"></i>
                            </a> 
                        </div>
                        <!-- /Mobile Menu -->
                        <!-- Menu Start -->
                        <nav class="collapse navbar-collapse menu">
                            <ul class="nav navbar-nav sf-menu">
                                <li>
                                    <a href="index.php">
                                    INICIO
                                    <span class="sf-sub-indicator">
                                    </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="sf-with-ul">
                                    SOLUCIONES
                                    <span class="sf-sub-indicator">
                                    <i class="fa fa-angle-down "></i>
                                    </span>
                                    </a>
                                    <ul>
                                        <li><a href="artificial_intelligence.php" class="sf-with-ul">Inteligencia Artificial</a></li>
                                        <li><a href="internet_of_things.php" class="sf-with-ul">Internet De Las Cosas</a></li>
                                        <li><a href="digital_design.php" class="sf-with-ul">Digital Design</a></li>
                                        <li><a href="web development.php" class="sf-with-ul">Desarrollo Web</a></li>
                                        <li><a href="mobile_development.php" class="sf-with-ul">Desarrollo Móvil</a></li>
                                        <li><a href="software_consulting.php" class="sf-with-ul">Consultoría De Software</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="gallery.php" class="sf-with-ul">
                                    GALERÍA 
                                    <span class="sf-sub-indicator">
                                    </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="sf-with-ul">
                                    ARCONTE
                                    <span class="sf-sub-indicator">
                                    <i class="fa fa-angle-down "></i>
                                    </span>
                                    </a>
                                    <ul>
                                        <li><a href="about_us.php" class="sf-with-ul">Acerca</a></li>
                                        <li><a href="history.php" class="sf-with-ul">Historia</a></li>
                                        <li><a href="presence.php" class="sf-with-ul">Presencia</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a id="current" href="contact.php">
                                    CONTÁCTENOS
                                    <span class="sf-sub-indicator">
                                    </span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <!-- /Menu --> 
                    </div>
                </div>
                <!-- /Main Header -->
            </header>
            <!-- /Header --> 
            <!-- Main Section -->
            <section id="main">
                <div class="breadcrumb-wrapper">
                    <div class="pattern-overlay">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                                    <h2 class="title">Contáctenos</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Main Content -->
                <div class="content margin-top60 margin-bottom60">
                    <div class="container">
                        <div class="row">
                            <!-- Contact Form -->
                            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12" id="contact-form">
                                <h2>Arconte Technologies esta para servirle.</h2>
                                <p>
                                No dude en contactarnos ya sea por alguna de nuestras redes sociales, medio telefónico, correo electrónico o por este medio de mensajería, respondemos de inmediato y siempre tenemos una solución a su problema.
                                </p>
                                <form method="post" action="php/send_mail.php">
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <input class="form-control" id="name" name="name" type="text" placeholder="Nombre Completo" value="" required>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <input class="form-control" type="email" id="email" name="email" placeholder="Correo Electrónico" value="" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <input class="form-control" id="telephone" name="telephone" type="number"  placeholder="Teléfono de Contácto" value="" required>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <input class="form-control" id="subject" name="subject" type="text"  placeholder="Tema" value="" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <textarea class="form-control" id="text" name="text" rows="3" cols="40" placeholder="Mensaje" required></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"></div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                                <label class="form-check-label" for="exampleCheck1">He leído y acepto la <a href="privacy_policies.php" target="_blank">política de privacidad.</a></label>
                                                <button class="btn btn-color submit pull-right" type="submit">Enviar Mensaje</button>
                                            </div>
                                            
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                            <!-- /Contact Form -->
                            <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
                                <div class="address widget">
                                    <h3 class="title">Contácto</h3>
                                    <ul class="contact-us">
                                        <li>
                                            <i class="fa fa-map-marker"></i>
                                            <p>
                                                <strong class="contact-pad">Dirección:</strong> Santiago de Querétaro, Qro.<br>San Miguel de Allende, Gto.<br>San Juan del Rio, Qro.<br>
                                            </p>
                                        </li>
                                        <li>
                                            <i class="fa fa-phone"></i>
                                            <p>
                                                <strong>Teléfono:</strong> +52 1 (415) 126 6863
                                            </p>
                                        </li>
                                        <li>
                                            <i class="fab fa-whatsapp-square"></i>
                                            <p>
                                                <strong>WhatsApp:</strong> +52 1 (442) 302 3347
                                            </p>
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope"></i>
                                            <p>
                                                <strong>Correo:</strong><a href="mailto:info@arcontetechnologies.com">info@arcontetechnologies.com</a>
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="contact-info widget">
                                    <h3 class="title">Horarios de atención </h3>
                                    <ul class="business-hour">
                                        <li><i class="fa fa-clock-o"> </i>Lunes - Viernes 7am a 11pm </li>
                                        <li><i class="fa fa-clock-o"> </i>Sabado - 11am a 11pm</li>
                                        <li><i class="fa fa-times-circle-o"> </i>Domingo - Cerrado</li>
                                    </ul>
                                </div>
                                <div class="follow widget">
                                    <h3 class="title">Redes Sociales</h3>
                                    <div class="member-social dark">
                                        <a class="facebook" href="https://www.facebook.com/arcontetechnologies/" target="_blank"><i class="fab fa-facebook"></i></a>
                                        <a class="twitter" href="https://twitter.com/ArconteT" target="_blank"><i class="fab fa-twitter"></i></a>
                                        <a class="facebook" href="https://www.instagram.com/arcontetechnologies/" target="_blank"><i class="fab fa-instagram"></i></a>
                                        <a class="linkedin" href="https://www.linkedin.com/in/arconte-technologies-23bb04171/" target="_blank"><i class="fab fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Star -->
                        <div class="star">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="star-divider">
                                        <div class="star-divider-icon">
                                            <i class=" fa fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Star --> 
                        <!-- Google Map -->                                 
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h2>Localización </h2>
                                <div id="maps" class="google-maps">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14940.124700118233!2d-100.38665987537843!3d20.586784446127485!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2smx!4v1538630461431" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <!-- /Google Map --> 
                    </div>
                </div>
                <!-- /Main Content -->
            </section>
            <!-- /Main Section -->
            <!-- Footer Start -->
            <?php include_once("php/footer/footer.php"); ?>
            <!-- Scroll To Top --> 
            <a href="#" class="scrollup"><i class="fa fa-angle-up"></i></a>
        </div>
        <!-- The Scripts -->    
        <script src="js/jquery.knob.js"></script>
        <!--script src="http://maps.google.com/maps/api/js?sensor=false"></script-->

        <script src="js/switcher.js"></script>
        <?php include_once("php/footer/footer_scripts.php"); ?>
    </body>
</html>

