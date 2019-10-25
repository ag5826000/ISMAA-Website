<?php
    require_once ("config.php");
    $loginURL=$gClient->createAuthUrl();
    //echo $loginURL."\n";
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>ISMAA</title>

    <meta name="description" content="simple description for your site"/>
<meta name="keywords" content="keyword1, keyword2"/>
<meta name="author" content="Jobz"/>

<!-- twitter card starts from here, if you don't need remove this section -->
<meta name="twitter:card" content="summary"/>
<meta name="twitter:site" content="@yourtwitterusername"/>
<meta name="twitter:creator" content="@yourtwitterusername"/>
<meta name="twitter:url" content="http://twitter.com/"/>
<meta name="twitter:title" content="Your home page title, max 140 char"/> <!-- maximum 140 char -->
<meta name="twitter:description" content="Your site description, maximum 140 char "/> <!-- maximum 140 char -->
<meta name="twitter:image"
      content="assets/img/twittercardimg/twittercard-144-144.png"/>  <!-- when you post this page url in twitter , this image will be shown -->
<!-- twitter card ends here -->

<!-- facebook open graph starts from here, if you don't need then delete open graph related  -->
<meta property="og:title" content="Your home page title"/>
<meta property="og:url" content="http://your domain here.com"/>
<meta property="og:locale" content="en_US"/>
<meta property="og:site_name" content="Your site name here"/>
<!--meta property="fb:admins" content="" /-->  <!-- use this if you have  -->
<meta property="og:type" content="website"/> <!-- 'article' for single page  -->
<meta property="og:image"
      content="assets/img/opengraph/fbphoto-476-476.png"/> <!-- when you post this page url in facebook , this image will be shown -->
<!-- facebook open graph ends here -->

<!-- desktop bookmark -->
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="assets/img/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<!-- icons & favicons -->
<link rel="shortcut icon" type="image/x-icon"  href="assets/img/favicon/favicon.ico"/>  <!-- this icon shows in browser toolbar -->
<link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico"/> <!-- this icon shows in browser toolbar -->
<link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
<link rel="manifest" href="assets/img/favicon/manifest.json">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />
<link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />

<!-- GOOGLE FONT -->
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet" />

<!-- BOOTSTRAP CSS -->
<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="assets/vendor/navbar/bootstrap-4-navbar.css" />

<!--Animate css -->
<link rel="stylesheet" href="assets/vendor/animate/animate.css" media="all" />

<!-- FONT AWESOME CSS -->
<link rel="stylesheet" href="assets/vendor/fontawesome/css/font-awesome.min.css" />

<!--owl carousel css -->
<link rel="stylesheet" href="assets/vendor/owl-carousel/owl.carousel.css" media="all" />

<!--Magnific Popup css -->
<link rel="stylesheet" href="assets/vendor/magnific/magnific-popup.css" media="all" />

<!--Nice Select css -->
<link rel="stylesheet" href="assets/vendor/nice-select/nice-select.css" media="all" />

<!--Offcanvas css -->
<link rel="stylesheet" href="assets/vendor/js-offcanvas/css/js-offcanvas.css" media="all" />

<!-- MODERNIZER  -->
<script src="assets/vendor/modernizr/modernizr-custom.js"></script>

<!-- Main Master Style  CSS  -->
<link id="cbx-style" data-layout="1" rel="stylesheet" href="assets/css/style.css" media="all" />
<link type="text/css" media="all" href="/autoptimize_21bb737ccb542e9ee113547a0513e89b.css" rel="stylesheet" />
</head>
<body>

<!--[if lt IE 7]>
<p class="browsehappy">We are Extreamly sorry, But the browser you are using is probably from when civilization started. Which is way behind to view this site properly. Please update to a modern browser, At least a real browser. </p>
<![endif]-->

    <!--== Header Area Start ==-->
<header id="header-area">
    <div class="preheader-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-7 col-7">
                    <div class="preheader-left">
                        <a href="mailto:info@construc.com"><strong>Email:</strong> alumni@iitism.ac.in</a>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-5 col-5 text-right">
                    <div class="preheader-right">
                        <button  onclick="document.getElementById('id01').style.display = 'block';" style="border: 0px;" class="btn-auth btn-auth-rev">Become a Member</button>
                        <!--<a title="Register" class="btn-auth btn-auth" href="register.html">Signup</a>-->
                    </div>
                </div>
            </div>
        </div>
    </div>

   <div id="id01" class="modal">
        <form class="modal-content animate" action="" style="opacity: 1;">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display = 'none';" class="close" title="close modal">&times;</span>
            </div>
            <div class="container buch" style="padding: 16px;">
                <h2 style="text-align: center;">LOGIN</h2>
                <label>Username</label>
                <input type="text" name="username" placeholder="Username" required="">
                <label>Password</label>
                <input type="password" name="password" placeholder="Password" required="">
                <button type="submit">Login</button>
                <input type="checkbox" checked="checked">Remember Me
                <span class="psw"><a href="">Forgot Password</a></span>
            </div> 
                <div class="container text-center">
                            <p>Not a Member yet?
                                <a href="register.html" id="xxx">     Signup </a></p>
                                </div>
                            <div class="container buch" style="padding:16px;">
                <a href="under-maintainence.html" class="fb btn">

                    <p><i class="fa fa-facebook"></i></p>
                </a>
                <a href="under-maintainence.html" class="LinkedIn btn">
                    <p><i class="fa fa-linkedin"></i></p>
                </a>
                <a href="<?php echo ($loginURL); ?>" class="google btn"><p><i class="fa fa-google"></i></p></a>
                </div><br>
               
        </form>
    </div>

    <div class="header-bottom-area my-0" id="fixheader">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="main-menu navbar navbar-expand-lg navbar-light">
                        
                        <a class="navbar-brand logo" href="index-2.html">
                            <img src="assets/img/logo.png" alt="Logo" />
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menucontent" aria-controls="menucontent" aria-expanded="false">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                   
                    
                        <div class="collapse navbar-collapse" id="menucontent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item"><a class="nav-link logo" href="#">Home</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle logo" href="#" data-toggle="dropdown" role="button">About</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link dropdown-toggle" href="gallery.html" role="button">Gallery</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>
                                                <li class="nav-item"><a class="nav-link" href="single-album.html">Single Album</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="committee.html">Committee</a></li>
                                        <li class="nav-item"><a class="nav-link" href="directory.html">Directory</a></li>
                                        <li class="nav-item"><a class="nav-link" href="register.html">Register</a></li>
                                        <li class="nav-item"><a class="nav-link" href="career.html">Career</a></li>
                                        <li class="nav-item"><a class="nav-link" href="index-offcanvas.html">Off Canvas Menu</a></li>
                                        <li class="nav-item"><a class="nav-link" href="typography.html">Typography</a></li>
                                    </ul>
                                </li>
                               <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle logo" href="#" data-toggle="dropdown" role="button">Membership</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link dropdown-toggle" href="gallery.html" role="button">Gallery</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>
                                                <li class="nav-item"><a class="nav-link" href="single-album.html">Single Album</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="committee.html">Committee</a></li>
                                        <li class="nav-item"><a class="nav-link" href="directory.html">Directory</a></li>
                                        <li class="nav-item"><a class="nav-link" href="register.html">Register</a></li>
                                        <li class="nav-item"><a class="nav-link" href="career.html">Career</a></li>
                                        <li class="nav-item"><a class="nav-link" href="index-offcanvas.html">Off Canvas Menu</a></li>
                                        <li class="nav-item"><a class="nav-link" href="typography.html">Typography</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle logo" href="#" data-toggle="dropdown" role="button">Facilities</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link dropdown-toggle" href="gallery.html" role="button">Gallery</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>
                                                <li class="nav-item"><a class="nav-link" href="single-album.html">Single Album</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="committee.html">Committee</a></li>
                                        <li class="nav-item"><a class="nav-link" href="directory.html">Directory</a></li>
                                        <li class="nav-item"><a class="nav-link" href="register.html">Register</a></li>
                                        <li class="nav-item"><a class="nav-link" href="career.html">Career</a></li>
                                        <li class="nav-item"><a class="nav-link" href="index-offcanvas.html">Off Canvas Menu</a></li>
                                        <li class="nav-item"><a class="nav-link" href="typography.html">Typography</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle logo" href="blog.html" data-toggle="dropdown" role="button">Events</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link" href="blog.html">Blog List</a></li>
                                        <li class="nav-item"><a class="nav-link" href="single-blog.html">Single Blog Right Sidebar</a></li>
                                        <li class="nav-item"><a class="nav-link" href="single-blog-leftsidebar.html">Single Blog left Sidebar</a></li>
                                        <li class="nav-item"><a class="nav-link" href="single-blog-withoutsidebar.html">Single Blog No Sidebar</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle logo" href="#" data-toggle="dropdown" role="button">Meetings</a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a class="nav-link dropdown-toggle" href="gallery.html" role="button">Gallery</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>
                                                <li class="nav-item"><a class="nav-link" href="single-album.html">Single Album</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="committee.html">Committee</a></li>
                                        <li class="nav-item"><a class="nav-link" href="directory.html">Directory</a></li>
                                        <li class="nav-item"><a class="nav-link" href="register.html">Register</a></li>
                                        <li class="nav-item"><a class="nav-link" href="career.html">Career</a></li>
                                        <li class="nav-item"><a class="nav-link" href="index-offcanvas.html">Off Canvas Menu</a></li>
                                        <li class="nav-item"><a class="nav-link" href="typography.html">Typography</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item mr-5"><a class="nav-link logo " href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>