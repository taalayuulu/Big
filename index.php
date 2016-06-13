<!DOCTYPE html>
<html>
<head>
 <?php require_once "main.php" ?>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Big KG</title>
    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
       <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="fivefive/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="five/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="five/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="five/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="five/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="five/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="five/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="five/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="five/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="five/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="five/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="five/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

    <!--for horizontal tabs -->

    <link href="css/easy-responsive-tabs.css " rel="stylesheet" ></head>
    <!--/head-->

<body id="home" class="homepage">

    <header id="header">
        <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="images/logo.png" alt="logo" class="logo"></a>
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll active">
                            <a href="#home"><?php echo $LANG['menu1'] ;?></a>
                        </li>
                        <li class="scroll">
                            <a href="#sectors"><?php echo $LANG['menu2']; ?></a>
                        </li>
                        <li class="scroll">
                            <a href="#services"><?php echo $LANG['menu3'] ;?></a>
                        </li>
                        
                        <li class="scroll">
                            <a href="#about"><?php echo $LANG['menu4']; ?></a>
                        </li>
                        <li class="scroll">
                            <a href="#meet-team"><?php echo $LANG['menu5'] ;?></a>
                        </li>
                        
                        <li class="scroll">
                            <a href="#blog"><?php echo $LANG['menu6']; ?></a>
                        </li>
                        <li class="scroll">
                            <a href="#get-in-touch"><?php echo $LANG['menu7']; ?></a>
                        </li>
                        <li class="dropdown">
                               <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                   <span><i class="fa fa-language" aria-hidden="true"></i></span>
                                   <span class="fa fa-angle-down"></span>
                               </a>
                               <ul class="dropdown-menu">
                                   <li>
                                       <a rel="alternate" href="index.php?lang=en">english</a>
                                   </li>
                                   <li>
                                       <a rel="alternate" href="index.php?lang=ru">Русский</a>
                                   </li>
                               </ul>
                           </li>
                    </ul>
                </div>
            </div>
            <!--/.container--> </nav>
        <!--/nav--> </header>
    <!--/header-->

    <section id="main-slider">
        <div class="owl-carousel">
            <div class="item" style="background-image: url(images/slider/customer.png);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2>
                                    "We think <span>beyond </span>investments"
                                    </h2>
                                    <p style="color:white
"><?php echo $LANG['slide1']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.item-->
            <div class="item" style="background-image: url(images/blog/lan.jpg);
            ">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                  <h2></h2>
                                    <p class="jazuu" style="font-weight:bold; font-size: 25px; font-style:italic;"><?php echo $LANG['slide2']; ?>
                                        <br>
                                    </p>
                                    <br>
                                    <p class="sitata"> <?php echo $LANG['avtor'];?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.item--> </div>
        <!--/.owl-carousel--> </section>
    <!--/#main-slider-->

    <section id="cta" class="wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="container">
                    <hr class="section-title text-center wow fadeInDown"></div>
                <div >
                    <h2 class="section-title text-center wow fadeInDown jazuu">
                    <?php echo $LANG['main_topic'] ?></h2>
                    <p>
                        <?php echo $LANG['main_sec']; ?>
                        <br>
                        <br></p>
                </div>

            </div>
        </div>
    </section>
    <!--/#cta-->
    <div class="container">
        <hr class="section-title text-center wow fadeInDown"></div>

    <section id="sectors">
        <div class="container">
            <div class="section-header">
                <br>
                <h2 class="section-title text-center wow fadeInDown"><?php echo $LANG['sectors_tema']; ?></h2>
            </div>
            <p class="text-center wow fadeInDown"></p>
            <div class="section-header">
                <br></div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left"> <i class="fa fa-line-chart"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading jazuu"><?php echo $LANG['sectors_tema1'] ;?></h4>
                            <p>
                                <?php echo $LANG['sectors_content1'] ?>
                            </p>
                        </div>
                    </div>
                    <br>
                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left"> <i class="fa fa-cubes"></i>
                        </div>
                        <div class="media-body">

                            <h4 class="media-heading jazuu"><?php echo $LANG['sectors_tema2'] ;?></h4>
                            <p>
                               <?php echo $LANG['sectors_content2']; ?>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-pie-chart"></i>
                        </div>
                        <div class="media-body">

                            <h4 class="media-heading jazuu"><?php echo $LANG['sectors_tema3'] ;?></h4>
                            <p>
                                <?php echo $LANG['sectors_content3'] ;?>
                            </p>

                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i class="fa fa-pie-chart"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading jazuu"><?php echo $LANG['sectors_tema4'] ;?></h4>
                            <p>
                                <?php echo $LANG['sectors_content4']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="cta2" data-wow-duration="300ms" data-wow-delay="300ms">
       
        </section>

    <section id="services" >
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown"><?php echo $LANG['services_tema']; ?></h2>
            </div>
            <!-- vertical tabs -->
            <div id="parentVerticalTab">
                <ul class="resp-tabs-list hor_1">
                    <li><?php echo $LANG['tab_menu1']; ?></li>
                    <li><?php echo $LANG['tab_menu2']; ?></li>
                    <li><?php echo $LANG['tab_menu3']; ?></li>
                    <li><?php echo $LANG['tab_menu4']; ?></li>
                    <li><?php echo $LANG['tab_menu5']; ?></li>
                    <li><?php echo $LANG['tab_menu6']; ?></li>
                    <li><?php echo $LANG['tab_menu7']; ?></li>
                </ul>
                <div class="resp-tabs-container hor_1">
                    <div>

                        <h1><?php echo $LANG['tab_menu1']; ?></h1>
                
                        <p>
                            <?php echo $LANG['services_content1']?>
                        </p>

                    </div>
                    <div>

                        <h1><?php echo $LANG['tab_menu2']; ?></h1>
                        
                        <p>
                            <?php echo $LANG['services_content2']; ?>
                            
                        </p>
                    </div>
                    <div>
                        <h1><?php echo $LANG['tab_menu3']; ?></h1>
                       
                        <p>
                           <?php echo $LANG['services_content3']; ?>
                        </p>
                    </div>
                    <div>
                        <h1><?php echo $LANG['tab_menu4']; ?></h1>
                        
                        <p>
                           <?php echo $LANG['services_content4']; ?>
                        </p>
                    </div>
                    <div>
                        <h1><?php echo $LANG['tab_menu5']; ?></h1>
                        

                        <p>
                            <?php echo $LANG['services_content5']; ?>
                        </p>
                    </div>
                    <div>
                        <h1><?php echo $LANG['tab_menu6']; ?></h1>
                        

                        <p>
                           <?php echo $LANG['services_content6']; ?>
                        </p>
                    </div>
                    <div>
                        <h1><?php echo $LANG['tab_menu7']; ?></h1>
                       
                        <p>
                             <?php echo $LANG['services_content7']; ?>
                        </p>
                    </div>
                </div>
            </div>

            <!-- end of vertical tabs --> </div>
        <!--/.container--> </section>
    <!--/#services-->

    

    <section id="about">
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">
                    <?php echo $LANG['about_tema']; ?>
                </h2>
            
            </div>

            <div class="row">
                <div class="col-sm-6 wow fadeInLeft">
                    
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">

                        <iframe  src="https://www.youtube.com/embed/YmVhGYceIMI" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen id="player"></iframe>
                    </div>
                </div>

                <div class="col-sm-6 wow fadeInRight">
                    
                    <p>
                       <?php echo $LANG['genen']; ?>
                    </p>

                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="nostyle">
                                <li>
                                    <i class="fa fa-check-square"></i>
                                    <?php echo $LANG['capital']; ?>
                                </li>
                                <li>
                                    <i class="fa fa-check-square"></i>
                                    <?php echo $LANG['valuta']; ?>
                                </li>
                            </ul>
                        </div>

                        <div class="col-sm-6">
                            <ul class="nostyle">
                                <li>
                                    <i class="fa fa-check-square"></i>
                                    <?php echo $LANG['city']; ?>
                                </li>
                                <li>
                                    <i class="fa fa-check-square"></i>
                                    <?php echo $LANG['teritorry']; ?>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <a class="btn btn-primary" href="https://en.wikipedia.org/wiki/Kyrgyzstan" target="blank">Learn More</a>

                </div>
            </div>
        </div>
    </section>
    <!--/#about-->

    <section id="work-process">
        
    </section>
    <!--/#work-process-->

    <section id="meet-team">
       <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">

                    <div id="carousel-testimonial" class="carousel slide text-center" data-ride="carousel">
                        <!-- Wrapper for slides -->
                         <h1 class="jazuu"> <?php echo $LANG['menu5']; ?></h1>
                         <br>
                        <div class="carousel-inner" role="listbox">

                            <div class="item active">
                               
                            
                                <h4><?php echo $LANG['team_name1']; ?></h4>
                                
                                <p>
                                    <?php echo $LANG['team_job1']; ?>
                                </p>
                                  <small><a href="team/kybanychbek.php" target="blank"><?php echo $LANG['team_ssilka'];?></a></small>
                            </div>
                            <div class="item">
                                 
                                <h4><?php echo $LANG['team_name2']; ?></h4>
                                
                                <p>
                                    <?php echo $LANG['team_job2']; ?>
                                </p>
                                  <small><a href="team/dongbi.php" target="blank"><?php echo $LANG['team_ssilka'];?></a></small>
                            </div>
                               <div class="item">
                                 
                                <h4><?php echo $LANG['team_name3']; ?></h4>
                                
                                <p>
                                    <?php echo $LANG['team_job3']; ?>
                                </p>
                                  <small><a href="team/maksatkobonbaev.php" target="blank"><?php echo $LANG['team_ssilka'];?></a></small>
                            </div>
                            <div class="item">
                                 
                                <h4><?php echo $LANG['team_name4']; ?></h4>
                                
                                <p>
                                    <?php echo $LANG['team_job4']; ?>
                                </p>
                                  <small><a href="team/zaynudinurkunchiev.php" target="blank"><?php echo $LANG['team_ssilka'];?></a></small>
                            </div>
                            <div class="item">
                                 
                                <h4><?php echo $LANG['team_name5']; ?></h4>
                                
                                <p>
                                    <?php echo $LANG['team_job5']; ?>
                                </p>
                                  <small><a href="team/aktilektungatarov.php" target="blank"><?php echo $LANG['team_ssilka'];?></a></small>
                            </div>
                            <div class="item">
                                 
                                <h4><?php echo $LANG['team_name6']; ?></h4>
                                
                                <p>
                                    <?php echo $LANG['team_job6']; ?>
                                </p>
                                  <small><a href="team/ivanochko.php" target="blank"><?php echo $LANG['team_ssilka'];?></a></small>
                            </div>
                            <div class="item">
                                 
                                <h4><?php echo $LANG['team_name7']; ?></h4>
                                
                                <p>
                                    <?php echo $LANG['team_job7']; ?>
                                </p>
                                  <small><a href="team/zamirbekshaykov.php" target="blank"><?php echo $LANG['team_ssilka'];?></a></small>
                            </div>

                             <div class="item">
                                 
                                <h4><?php echo $LANG['team_name8']; ?></h4>
                                
                                <p>
                                    <?php echo $LANG['team_job8']; ?>
                                </p>
                                  <small><a href="team/urmatakmatov.php" target="blank"><?php echo $LANG['team_ssilka'];?></a></small>
                            </div>
                             <div class="item">
                                 
                                <h4><?php echo $LANG['team_name9']; ?></h4>
                                
                                <p>
                                    <?php echo $LANG['team_job9']; ?>
                                </p>
                                  <small><a href="team/kudayarbeyshekov.php" target="blank"><?php echo $LANG['team_ssilka'];?></a></small>
                            </div>

                            <div class="item">
                                 
                                <h4><?php echo $LANG['team_name10']; ?></h4>
                                
                                <p>
                                    <?php echo $LANG['team_job10']; ?>
                                </p>
                                  <small><a href="team/temirbekazykulov.php" target="blank"><?php echo $LANG['team_ssilka'];?></a></small>
                            </div>
                        </div>

                        <!-- Controls -->
                        <div class="btns">
                            <a class="btn btn-primary btn-sm" href="#carousel-testimonial" role="button" data-slide="prev">
                                <span class="fa fa-angle-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="btn btn-primary btn-sm" href="#carousel-testimonial" role="button" data-slide="next">
                                <span class="fa fa-angle-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#meet-team-->

  
<section>
    <!-- for parallax scrolling --> 
     

    <!-- end of parallax scrolling -->
</section>
    

    <section id="blog">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown"><?php echo $LANG['menu6']; ?></h2>
               
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="blog-post blog-large wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="0ms">
                        <article>
                            <header class="entry-header">
                                <div class="entry-thumbnail">
                                    <img class="img-responsive img-rounded" src="images/blog/01.jpg" alt="">
                                    
                                </div>
                                
                                <h2 class="entry-title">
                                    <a href="#"><?php echo $LANG['ntema1']; ?></a>
                                </h2>
                            </header>

                            <div class="entry-content">
                            <p>
                                <?php 
                                 $value = $LANG['n1content1'];
                                  function limit($value , $kiska = 150 , $end = '...')
                                  {
                                    $kiska = $kiska - strlen($end);
                                    $valuelen = strlen($value);
                                    return $kiska < $valuelen ? substr($value, 0 ,strrpos($value,' ',$kiska-$valuelen)).$end:$value;
                                  }
                                  echo limit($value , $kiska = 350 , $end = '...');
                                ?>
                                </p>
                                <a class="btn btn-primary" href="blog/gory.php" target="blank"><?php echo $LANG['dugme']; ?></a>

                                 <footer class="entry-meta">
                                    
                                </footer>
                            </div>

                            
                        </article>
                    </div>
                </div>
                <!--/.col-sm-6-->
                <div class="col-sm-6">
                    <div class="blog-post blog-large wow fadeInRight" data-wow-duration="300ms" data-wow-delay="0ms">
                        <article>
                            <header class="entry-header">
                                <div class="entry-thumbnail">
                                    <img class="img-responsive img-rounded" src="images/blog/02.jpg" alt="">
                                    
                                </div>
                                
                                 <h2 class="entry-title">
                                    <a href="#"><?php echo $LANG['ntema2']; ?></a>
                                </h2>
                            </header>

                            <div class="entry-content">
                                <?php 

                                   $value2 = $LANG['ncontent2'] ;

                                  function limit2($value2 , $kiska = 450 , $end = '...')
                                  {
                                    $kiska = $kiska - strlen($end);
                                    $valuelen = strlen($value2);
                                    return $kiska < $valuelen ? substr($value2, 0 ,strrpos($value2,' ',$kiska-$valuelen)).$end:$value2;
                                  }
                                  echo limit2($value2 , $kiska = 450 , $end = '...');

                                 ?>
                                <a class="btn btn-primary" href="blog/energi.php" target="blank"><?php echo $LANG['dugme']; ?></a>

                                 <footer class="entry-meta">
                                    
                                </footer>
                            </div>

                            
                        </article>
                    </div>
                </div>
            </div>
             <div class="row">
                <div class="col-sm-6">
                    <div class="blog-post blog-large wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="0ms">
                        <article>
                            <header class="entry-header">
                                <div class="entry-thumbnail">
                                    <img class="img-responsive img-rounded" src="images/blog/05.jpg" alt="">
                                    
                                </div>
                                
                                <h2 class="entry-title">
                                    <a href="#"><?php echo $LANG['ntema3']; ?></a>
                                </h2>
                            </header>

                            <div class="entry-content">
                             <?php 

                                   $value3 = $LANG['ncontent3'] ;

                                  function limit3($value3 , $kiska = 450 , $end = '...')
                                  {
                                    $kiska = $kiska - strlen($end);
                                    $valuelen = strlen($value3);
                                    return $kiska < $valuelen ? substr($value3, 0 ,strrpos($value3,' ',$kiska-$valuelen)).$end:$value3;
                                  }
                                  echo limit2($value3 , $kiska = 450 , $end = '...');

                                 ?>
                                <a class="btn btn-primary" href="blog/ekonomika.php" target="blank"><?php echo $LANG['dugme']; ?></a>

                                 <footer class="entry-meta">
                                    
                                </footer>
                            </div>

                            
                        </article>
                    </div>
                </div>
                <!--/.col-sm-6-->
                <div class="col-sm-6">
                    <div class="blog-post blog-large wow fadeInRight" data-wow-duration="300ms" data-wow-delay="0ms">
                        <article>
                            <header class="entry-header">
                                <div class="entry-thumbnail">
                                    <img class="img-responsive img-rounded" src="images/blog/04.jpg" alt="">
                                    
                                </div>
                                
                                 <h2 class="entry-title">
                                    <a href="#"><?php echo $LANG['ntema4']; ?></a>
                                </h2>
                            </header>

                            <div class="entry-content">
                                <?php 

                                   $value4 = $LANG['ncontent4'] ;

                                  function limit4($value4 , $kiska = 450 , $end = '...')
                                  {
                                    $kiska = $kiska - strlen($end);
                                    $valuelen = strlen($value4);
                                    return $kiska < $valuelen ? substr($value4, 0 ,strrpos($value4,' ',$kiska-$valuelen)).$end:$value4;
                                  }
                                  echo limit4($value4 , $kiska = 450 , $end = '...');

                                 ?>
                                <a class="btn btn-primary" href="blog/kyrgyzstan.php" target="blank"><?php echo $LANG['dugme']; ?></a>

                                 <footer class="entry-meta">
                                    
                                </footer>
                            </div>

                            
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="get-in-touch">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown"><?php echo $LANG['contact_tema']; ?></h2>
                <p class="text-center wow fadeInDown">
                    If you have any question you may call  or email us . We'll response for you as soon as possible </p>
            </div>
        </div>
    </section>
    <!--/#get-in-touch-->

    <section id="contact">
        <div id="google-map" style="height:850px" data-latitude="42.879530" data-longitude="74.612629"></div>
        <div class="container-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-8">
                        <div class="contact-form">
                            <h3>Contact Info</h3>

                            <address>
                                <strong><?php echo $LANG['contact1']; ?></strong>
                                
                                 <p><?php echo $LANG['contact2']; ?>,</p>
                                
                                 <p>
                                     <?php echo $LANG['contact3']; ?>
                                 </p>
                                <br> <abbr title="Phone"><i class="fa fa-phone" aria-hidden="true"></i></abbr>
                                +996 (312) 89 19 29
                                <br>
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                office@big.kg

                            </address>

                            <form id="main-contact-form" name="contact-form" method="post" action="#">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Name" required></div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email" required></div>
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" placeholder="Subject" required></div>
                                <div class="form-group">
                                    <textarea name="message" class="form-control" rows="8" placeholder="Message" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary"><?php echo $LANG['send_button']; ?></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#bottom-->

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                &copy; <code>2016 Beyond Investment Group.</code> Designed by
                    <a target="_blank" href="https://www.facebook.com/kanat.taalayuulu">Kanat Taalai uulu</a>
                </div>
                <div class="col-sm-6">
                    <ul class="social-icons">
                        <li>
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-pinterest"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-dribbble"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-behance"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-flickr"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-youtube"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-github"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mousescroll.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/easyResponsiveTabs.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        //Horizontal Tab
        $('#parentHorizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            tabidentify: 'hor_1', // The tab groups identifier
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#nested-tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });

        // Child Tab
        $('#ChildVerticalTab_1').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true,
            tabidentify: 'ver_1', // The tab groups identifier
            activetab_bg: '#fff', // background color for active tabs in this group
            inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
            active_border_color: '#c1c1c1', // border color for active tabs heads in this group
            active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
        });

        //Vertical Tab
        $('#parentVerticalTab').easyResponsiveTabs({
            type: 'vertical', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            tabidentify: 'hor_1', // The tab groups identifier
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#nested-tabInfo2');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
    });

    // videolan classi uchun 
    

</script>
</body>
</html>