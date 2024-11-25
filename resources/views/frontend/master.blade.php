=<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Site Metas -->
<title>Orbit Media</title>
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
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
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
        <li class="nav-item">
            <a class="nav-link {{ Request::routeIs('contact') ? 'active' : '' }}" href="{{ route('account.login') }}">Login</a>
        </li>
    </ul>
</div>

    </div>
</nav>


    <section id="home" class="main-banner parallaxie" style="background: url('uploads/banner-01.jpg')">
        <div class="heading">
            <h1>Orbit Media Solutions</h1>
            <h3 class="cd-headline clip is-full-width">
                <span>At Orbit Media Solutions, </span>
                <span class="cd-words-wrapper">
                    <b class="is-visible">we’re your trusted partner</b>
                    <b>navigating the digital landscape</b>
                    <b>team of experts</b>
                    <b>crafting innovative strategies</b>
                </span>
                <div class="btn-ber">
                    <a class="get_btn hvr-bounce-to-top" href="#">Join</a>
                    <a class="learn_btn hvr-bounce-to-top" href="{{ route('about') }}">Learn More</a>
                </div>
            </h3>
        </div>
    </section>

    <div id="about" class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">
                        <h2>Welcome to Orbit</h2>
                        <p> At Orbit Media Solutions, we’re your trusted partner in navigating the ever-changing digital landscape. Our seasoned team of experts orbits your brand, crafting innovative strategies and delivering tailored solutions to propel your online presence to new heights. Whether it’s web design, SEO, content marketing, or social media management, we’re here to fuel your digital journey with stellar results. Join us as we embark on a mission to maximize your online potential and help your business reach the stars.</p>

                        <a href="{{ route('contact') }}" class="sim-btn hvr-bounce-to-top"><span>Contact Us</span></a>
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
    @include('frontend.whychooseus')
    @include('frontend.whyorbit')
    @include('frontend.services')
    @include('frontend.recentproject')
    </div>


    @include('frontend.speciality')
    @include('frontend.team')
    @include('frontend.upcommingEvents')
    @include('frontend.exclusive')

    @include('frontend.contact')
  



    @yield('footer')

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
    .navbar-nav .nav-link.active {
    color: #007bff; /* Highlight color for active link */
    font-weight: bold;
    transition: color 0.3s ease-in-out;
}

</style>
</body>

</html>