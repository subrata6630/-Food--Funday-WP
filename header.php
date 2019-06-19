<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

    <!-- Site Metas -->
    <title>Food Funday Restaurant - One page HTML Responsive</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png">

   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
 
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">

    <!-- Carousel -->
    <link  rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css" />

    <!-- Carousel theme -->
    <link  rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.css" />

    <!-- Slick -->
    <link  rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick.css" />

    <!-- Animate -->
    <link  rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css" />

    <!-- bootstrap-select -->
    <link  rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-select.min.css" />

    <!-- bootstrap-datetimepicker -->
    <link  rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-datetimepicker.css" />

    <!-- flaticon -->
    <link  rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/flaticon.css" />

    <!-- font-awesome -->
    <link  rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" />

    <!-- normalize -->
    <link  rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css" />

    <!-- Color CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/colors/orange.css">

    <!-- Site CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">


    <!-- Modernizer -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/modernizer.js"></script>



    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


    <?php wp_head();?>

</head>

<body >
    <div id="loader">
        <div id="status"></div>
    </div>
    <div id="site-header">
        <header id="header" class="header-block-top">
            <div class="container">
                <div class="row">
                    <div class="main-menu">
                        <!-- navbar -->
                        <nav class="navbar navbar-default" id="mainNav">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div class="logo">
                                    <a class="navbar-brand js-scroll-trigger logo-header" href="#">
                                        <?php 
                                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                                            $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                                        ?>
                                    <img src="<?php echo $image[0]; ?>" alt="">
                                    </a>

   
                                </div>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                               
                                    <!--<li class="active">//<?php wp_nav_menu($args); ?></li>-->
                                    <li class="active"><a href="#banner">Home</a></li>
                                    <li><a href="#about">About us</a></li>
                                    <li><a href="#menu">Menu</a></li>
                                    <li><a href="#our_team">Team</a></li>
                                    <li><a href="#gallery">Gallery</a></li>
                                    <li><a href="#blog">Blog</a></li>
                                    <li><a href="#pricing">pricing</a></li>
                                    <li><a href="#reservation">Reservaion</a></li>
                                    <li><a href="#footer">Contact us</a></li>
                                </ul>
                            </div>
                            <!-- end nav-collapse -->
                        </nav>
                        <!-- end navbar -->
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </header>
        <!-- end header -->
    </div>
	<!-- end site-header -->