<!DOCTYPE html>
<html lang="en">
<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- Site Metas -->
<title>Orbit media</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<!-- Site Icons -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Site CSS -->
<link rel="stylesheet" href="style.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="css/custom.css">
<script src="js/modernizr.js"></script> <!-- Modernizr -->

<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top" class="politics_version">

    <!-- LOADER -->
    <div id="preloader">
        <div id="main-ld">
            <div id="loader"></div>
        </div>
    </div><!-- end loader -->
    <!-- END LOADER -->

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: black; margin-bottom: 30px ;" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <img class="img-fluid" src="images/logo.png" alt="" />
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="services" class="section lb" style="margin: 100px;">
        <div class="banner">
            <div class="banner-content">
                <h1 style="font: 900; font-weight: bold; color: #fff;">Services</h1>

            </div>
        </div>
        <div class="container">
            <!-- <div class="section-title text-center">
                <h3>Services</h3>
                <p>Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus.</p>
            </div>end title -->

            <div class="row">
                <div class="col-md-4">
                    <div class="services-inner-box">
                        <div class="ser-icon">
                            <i class="flaticon-seo"></i>
                        </div>
                        <h2>Web Design and Development</h2>
                        <p>We don’t believe in one-size-fits-all. Our web development services are fully customized to align with your brand, goals, and target audience.</p>
                    </div>
                </div><!-- end col -->
                <div class="col-md-4">
                    <div class="services-inner-box">
                        <div class="ser-icon">
                            <i class="flaticon-development"></i>
                        </div>
                        <h2>Graphics Design</h2>
                        <p>Our team of skilled graphic designers brings creativity and innovation to every project, ensuring that your visuals are not only eye-catching but also aligned with your brand identity.</p>
                    </div>
                </div><!-- end col -->
                <div class="col-md-4">
                    <div class="services-inner-box">
                        <div class="ser-icon">
                            <i class="flaticon-process"></i>
                        </div>
                        <h2>SEO</h2>
                        <p>We don’t believe in one-size-fits-all. Our SEO services are fully customized to align with your brand, goals, and target audience.</p>
                    </div>
                </div><!-- end col -->
                <div class="col-md-4">
                    <div class="services-inner-box">
                        <div class="ser-icon">
                            <i class="flaticon-discuss-issue"></i>
                        </div>
                        <h2>Social and Digital Marketing</h2>
                        <p>We don’t believe in one-size-fits-all. Our web development services are fully customized to align with your brand, goals, and target audience.</p>
                    </div>
                </div><!-- end col -->
                <div class="col-md-4">
                    <div class="services-inner-box">
                        <div class="ser-icon">
                            <i class="flaticon-idea"></i>
                        </div>
                        <h2>Video Editing</h2>
                        <p>We don’t believe in one-size-fits-all. Our video editing services are fully customized to align with your brand, goals, and target audience.</p>
                    </div>
                </div><!-- end col -->
                <div class="col-md-4">
                    <div class="services-inner-box">
                        <div class="ser-icon">
                            <i class="flaticon-idea-1"></i>
                        </div>
                        <h2>Networking</h2>
                        <p>We don’t believe in one-size-fits-all. Our networking services are fully customized to align with your brand, goals, and target audience.</p>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
    <div id="about" class="section wb">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <div class="message-box">
                        <h2>Web Design & Development</h2>
                        <p> We build websites that adapt to various screen sizes and devices, guaranteeing a consistent and user-friendly experience for all visitors.Our commitment doesn’t end with the launch. We provide ongoing support and maintenance to ensure your website remains secure and up-to-date.</p>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
                <div class="col-md-6">
                    <div class="right-box-pro wow fadeIn">
                        <img src="uploads/about_04.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->

            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
    <div id="about" class="section wb" style="background-color: #b8e8f5;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="right-box-pro wow fadeIn">
                        <img src="uploads/about_04.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
                <div class="col-md-6">
                    <div class="message-box">
                        <h2>Graphics Design</h2>
                        <p>We build websites that adapt to various screen sizes and devices, guaranteeing a consistent and user-friendly experience for all visitors.Our commitment doesn’t end with the launch. We provide ongoing support and maintenance to ensure your website remains secure and up-to-date.</p>


                    </div><!-- end messagebox -->
                </div><!-- end col -->


            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
    <div id="about" class="section wb">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <div class="message-box">
                        <h2>SEO</h2>
                        <p>We build websites that adapt to various screen sizes and devices, guaranteeing a consistent and user-friendly experience for all visitors.Our commitment doesn’t end with the launch. We provide ongoing support and maintenance to ensure your website remains secure and up-to-date.</p>


                    </div><!-- end messagebox -->
                </div><!-- end col -->
                <div class="col-md-6">
                    <div class="right-box-pro wow fadeIn">
                        <img src="uploads/about_04.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->

            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
    <div id="about" class="section wb" style="background-color: #b8e8f5;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="right-box-pro wow fadeIn">
                        <img src="uploads/about_04.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
                <div class="col-md-6">
                    <div class="message-box">
                        <h2>Social and Digital Marketing</h2>
                        <p> We build websites that adapt to various screen sizes and devices, guaranteeing a consistent and user-friendly experience for all visitors.Our commitment doesn’t end with the launch. We provide ongoing support and maintenance to ensure your website remains secure and up-to-date.</p>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
    <div id="about" class="section wb">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <div class="message-box">
                        <h2>Video Editing</h2>
                        <p>We build websites that adapt to various screen sizes and devices, guaranteeing a consistent and user-friendly experience for all visitors.Our commitment doesn’t end with the launch. We provide ongoing support and maintenance to ensure your website remains secure and up-to-date.

                    </div><!-- end messagebox -->
                </div><!-- end col -->
                <div class="col-md-6">
                    <div class="right-box-pro wow fadeIn">
                        <img src="uploads/about_04.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->

            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
    <div id="about" class="section wb" style="background-color: #b8e8f5;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="right-box-pro wow fadeIn">
                        <img src="uploads/about_04.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
                <div class="col-md-6">
                    <div class="message-box">
                        <h2>Networking</h2>
                        <p> We build websites that adapt to various screen sizes and devices, guaranteeing a consistent and user-friendly experience for all visitors.Our commitment doesn’t end with the launch. We provide ongoing support and maintenance to ensure your website remains secure and up-to-date.</p>


                    </div><!-- end messagebox -->
                </div><!-- end col -->


            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div id="about" class="section wb">
        <div class="container">
            <div class="row">
                <div class="message-box" style="background-color:#b8e8f5 ;padding:80px;">
                    <h2>Always there at your Service​​</h2>
                    <h3>We are here to ensure best services</h3>
                    <p>At Orbit Media Solutions, we offer a comprehensive suite of services designed to propel your brand to new heights in the digital landscape. From our expert web development team crafting responsive, SEO-optimized websites to our creative graphics service that captivates your audience with stunning visuals, we’re your trusted partner in achieving online success. Our mission is to create customized solutions that align with your unique needs, focusing on data-driven decision-making, collaboration, and excellence in every aspect of our work. We don’t just deliver services; we build collaborative partnerships with our clients, providing ongoing support and innovation. Join us on a journey to make your digital dreams a reality, and let’s soar to new heights together.</p>

                </div><!-- end messagebox -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <a href="#"><img src="images/logo.png" alt="" /></a>
                <div class="footer-center">
                    <p class="footer-links">
                        <a href="#">Home</a>
                        <a href="#">Blog</a>
                        <a href="#">Pricing</a>
                        <a href="#">About</a>
                        <a href="#">Faq</a>
                        <a href="#">Contact</a>
                    </p>
                    <p class="footer-company-name">All Rights Reserved. &copy;Copyright © 2024 <a href="#">Orbit Media Solutions
                    </p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->
    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- Camera Slider -->
    <script src="js/jquery.mobile.customized.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/parallaxie.js"></script>
    <script src="js/headline.js"></script>
    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/jquery.vide.js"></script>
    <style>
        .banner {
            background-image: url('/uploads/about_us.jpg');
            /* Replace with your image path */
            background-size: cover;
            /* Cover the entire banner */
            background-position: center;
            /* Center the image */
            height: 300px;
            /* Adjust height as needed */
            display: flex;
            align-items: center;
            /* Center content vertically */
            justify-content: center;
            /* Center content horizontally */
            color: white;
            /* Text color */
            text-align: center;
            /* Center text */
            position: relative;
            /* Position relative for overlay */
        }

        .banner-content {
            background: rgba(0, 0, 0, 0.5);
            /* Semi-transparent background for better readability */
            padding: 20px;
            /* Padding around the text */
            border-radius: 10px;
            /* Optional rounded corners */
        }
    </style>
</body>

</html>