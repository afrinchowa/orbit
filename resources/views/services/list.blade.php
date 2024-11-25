<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <title>Orbit Media</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="bg-dark py-3">
        <h3 class="text-white text-center">Orbit Media</h3>
    </div>
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



    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-10 d-flex justify-content-end">
                @auth
                @if(auth()->user()->role == 'admin') <!-- Check if user is admin -->
                <a href="{{ route('services.create') }}" class="btn btn-dark">Create</a>
                @endif
                @endauth
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            @if(Session::has('success'))
            <div class="col-md-10 mt-4">
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            </div>
            @endif

            <div class="col-md-10">
                <div class="row">
                    @if($services->isNotEmpty())
                    @foreach($services as $service)
                    <div class="col-md-12 mb-4">
                         <!-- Make the entire card clickable -->
    <a href="{{ $service->sku }}" target="_blank" class="text-decoration-none" style="color: inherit;">

                        <div class="card shadow-lg d-flex flex-row">
                            <!-- Image on the left side -->
                            <div class="col-md-6 p-0">
                                <img class="card-img-left w-100 h-100" src="{{ asset('upload-img/services/'.$service->image) }}" alt="{{ $service->name }}" style="object-fit: cover;">
                            </div>

                            <!-- Content on the right side -->
                            <div class="col-md-6 p-3">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">{{ $service->name }}</h5>
                                    <!-- <p class="card-text">Website URL: {{ $service->sku }}</p> -->
                                    <p class="card-text">Description: {{ $service->description }}</p>
                                    <p class="card-text"><small class="text-muted">Created on {{ \Carbon\Carbon::parse($service->created_at)->format('d M, Y') }}</small></p>
                                    <div class="mt-auto d-flex justify-content-between">
                                        @auth
                                        @if(auth()->user()->role == 'admin') <!-- Show buttons only to admin -->
                                        <a href="{{ route('services.edit', $service->id) }}" class="btn btn-dark">Edit</a>
                                        <a href="#" onclick="deleteService({{ $service->id }})" class="btn btn-danger">Delete</a>
                                        <form id="delete-service-from-{{ $service->id }}" action="{{ route('services.destroy', $service->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                        </form>
                                        @endif
                                        @endauth
                                    </div>
                                </div>
                            </div>
                        </div>
</a>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>



    <div class="container">
        @auth
        @if(auth()->user()->role == 'admin') <!-- Check if the user is an admin -->
        <div class="row justify-content-center mt-4">
            <div class="col-md-10 d-flex justify-content-end">
                <a href="{{ route('services.create') }}" class="btn btn-dark">Create</a>
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            @if(Session::has('success'))
            <div class="col-md-10 mt-4">
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            </div>
            @endif

            <div class="col-md-10">
                <div class="card border-0 shadow-lg my-4">
                    <div class="card-header bg-dark">
                        <h3 class="text-white">Service</h3>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Name</th>
                                <!-- <th>URL</th> -->
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                            @if($services->isNotEmpty())
                            @foreach($services as $service)
                            <tr>
                                <td>{{ $service->id }}</td>
                                <td>
                                    @if($service->image != "")
                                    <img width="50" src="{{ asset('upload-img/services/'.$service->image) }}" alt="">
                                    @endif
                                </td>
                                <td>{{ $service->name }}</td>
                                <!-- <td>{{ $service->sku }}</td> -->
                                <td>{{$service->description}}</td>
                                <td>{{ \Carbon\Carbon::parse($service->created_at)->format('d M,Y') }}</td>
                                <td>
                                    <a href="{{ route('services.edit', $service->id) }}" class="btn btn-dark">Edit</a>
                                    <a href="#" onclick="deleteService({{ $service->id }})" class="btn btn-danger">Delete</a>
                                    <form id="delete-service-from-{{ $service->id }}" action="{{ route('services.destroy', $service->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endauth
    </div>





    <div class="container">
        <div class="row  justify-content-center mt-4">
            <div class="col-md-10 d-flex justify-content-end">
                <a href="{{route('services.create')}}" class="btn btn-dark">Create</a>
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            @if(Session::has('success'))
            <div class="col-md-10 mt-4">
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>


            </div>
            @endif

            <div class="col-md-10">
                <div class="card border-0 shadow-lg my-4">
                    <div class="card-header bg-dark">
                        <h3 class="text-white"> Service</h3>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Name</th>
                                <!-- <th>URL</th> -->
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                            @if($services->isNotEmpty())
                            @foreach($services as $service)
                            <tr>

                                <td>{{$service->id}}</td>
                                <td>
                                    @if($service->image != "")
                                    <img width="50" src="{{asset('upload-img/services/'.$service->image)}}" alt="">
                                    @endif
                                </td>
                                <td>{{$service->name}}</td>
                                <!-- <td>{{$service->sku}}</td> -->
                             
                                <td>{{\Carbon\Carbon::parse($service->created_at)->format('d M,Y')}}</td>
                                <td>
                                    <a href="{{route('services.edit',$service->id)}}" class="btn btn-dark">Edit</a>
                                    <a href="#" onclick="deleteService({{$service->id}})" class="btn btn-danger">Delete</a>
                                    <form id="delete-service-from-{{$service->id}}" action="{{route('services.destroy',$service->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
</body>

</html>
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
<script>
    function deleteService(id) {
        if (confirm("Are you sure you want to delete Service?")) {
            document.getElementById("delete-service-from-" + id).submit();
        }
    }
</script>