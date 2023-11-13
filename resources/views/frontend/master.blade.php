<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT POLLY @yield('title')</title>
    <!-- fav -->
    <link rel="shortcut icon" href="{{asset('/')}}frontend/images/fav.png" type="image/x-icon">
    <!-- fav -->
    <!-- fontawesom -->
    <script src="https://kit.fontawesome.com/2c7afc7071.js" crossorigin="anonymous"></script>
    <!-- fontawesom -->
    <!-- bs -->
    <link rel="stylesheet" href="{{asset('/')}}frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/')}}frontend/css/style.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/responsive.css">

    <!-- bs -->
</head>

<body>
{{--<div id="loader" ></div>--}}
<header>

    <nav class="navbar navbar-expand-lg ">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{asset('/')}}frontend/images/logo.png" alt="" width="15%" height="20%">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"> <i class="fa-solid fa-bars"></i></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav navigation-menu me-auto mb-2 mb-lg-0">
                    <li class="nav-item ">
                        <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{route('about')}}" role="button" data-bs-toggle="dropdown"
                           aria-expanded="false">
                            About us <span class="plus"></span>
                        </a>
                        <ul class="dropdown-menu">

                            <li><a class="dropdown-item" href="{{route('executive')}}">Executive Cuncil</a></li>
                            <li><a class="dropdown-item" href="{{route('contact')}}">contact</a></li>

                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                           aria-expanded="false">
                            Membership<span class="plus"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('member')}}">Member List</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>

                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                           aria-expanded="false">
                            Media<span class="plus"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('media')}}">PHOTO GALLERY</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>

                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                           aria-expanded="false">
                            Resource<span class="plus"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>

                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                           aria-expanded="false">
                            Our Initiatives<span class="plus"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>

                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>

{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{route('user.login')}}" role="button">--}}
{{--                           Login/Register<span class="plus"></span>--}}
{{--                        </a>--}}
{{--                    </li>--}}

                </ul>
                <div class="nav-button">
                    <a href="{{route('user.login')}}" class="btn btn-primary">Login</a>
                </div>
            </div>


        </div>
    </nav>
</header>

@yield('body')
<!-- Latest End -->
<!-- footer start -->
<section class="footer bg-light">
    <div class="container pt-5">
        <div class="row ">
            <div class="col-lg-4 col-md-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2">

                <ul>

                    <li class="text-muted"><a href="#" class="logo-footer">
                            <img src="{{asset('/')}}frontend/images/logo.png" alt="ISPAB Logo" width="25%" height="40%">
                        </a></li>
                    <li class="text-muted">
                        <p class="mt-4 text-muted "><i class="fa-solid fa-location-dot me-2"></i>11/7/G Free School St, ঢাকা 1205</p>
                    </li>
                    <li class="text-muted">
                        <p class="mt-4 text-muted">info@itpollybd.org</p>
                    </li>
                    <li class="text-muted">
                        <h3><i class="fa-solid fa-phone"></i> +88 01916569000</h3>
                        <h3><i class="fa-solid fa-phone"></i> +88 01617916193</h3>
                    </li>

                    <li>
                        <nav class=" navbar-expand">
                            <ul class="navbar-nav social-icon me-auto mb-2 mb-lg-0 mt-4">
                                <li class="nav-item list-inline-item">
                                    <a class="nav-link" href="https://www.facebook.com/itpolly?mibextid=ZbWKwL"> <i class="fa-brands fa-facebook-f"></i></a>
                                </li>
                                <li class="nav-item list-inline-item">
                                    <a class="nav-link" href="#"> <i class="fa-brands fa-instagram"></i></a>
                                </li>
                                <li class="nav-item list-inline-item"><a class="nav-link" href="#">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="nav-item list-inline-item"><a class="nav-link" href="#"> <i
                                            class="fa-brands fa-linkedin"></i></a>
                                </li>
                                <li class="nav-item list-inline-item"> <a class="nav-link" href="#"> <i
                                            class="fa-brands fa-youtube"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </li>
                </ul>

            </div>

            <div class="col-lg-3 col-md-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                <h5 class="footer-head">Usefull Links</h5>

                <ul class="list-unstyled footer-list mt-2">
                    <li class="nav-item text-muted"><a class="nav-link" href="#"><i
                                class="fa-solid fa-angle-right"></i>Executive Council</a> </li>
                    <li class="nav-item text-muted"><a class="nav-link" href="#"><i
                                class="fa-solid fa-angle-right"></i>Former
                            EC Members</a> </li>
                    <li class="nav-item text-muted"><a class="nav-link" href="#"><i
                                class="fa-solid fa-angle-right"></i>IT POLLY Member</a> </li>
                    <li class="nav-item text-muted"><a class="nav-link" href="#"><i
                                class="fa-solid fa-angle-right"></i>Board
                            sub-Commitees</a> </li>
                    <li class="nav-item text-muted"><a class="nav-link" href="#"><i
                                class="fa-solid fa-angle-right"></i>Standing Commitees</a> </li>
                    <li class="nav-item text-muted"><a class="nav-link" href="#"><i
                                class="fa-solid fa-angle-right"></i>
                            Mission</a> </li>
                    <li class="nav-item text-muted"><a class="nav-link" href="#"><i
                                class="fa-solid fa-angle-right"></i>
                            Vision</a> </li>

                </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-12 ">
                <h5 class=" footer-head">Usefull Links</h5>

                <ul class="list-unstyled footer-list mt-2">
                    <li class="nav-item  text-muted"><a class="nav-link" href="#"><i
                                class="fa-solid fa-angle-right"></i> About us</a> </li>
                    <li class="nav-item text-muted"><a class="nav-link" href="#"><i
                                class="fa-solid fa-angle-right"></i> Terms of Services</a> </li>
                    <li class="nav-item text-muted"><a class="nav-link" href="#"><i
                                class="fa-solid fa-angle-right"></i> Privacy Policy</a> </li>
                    <li class="nav-item text-muted"><a class="nav-link" href="#"><i
                                class="fa-solid fa-angle-right"></i> Refund and return</a> </li>
                    <li class="nav-item text-muted"><a class="nav-link" href="#"><i
                                class="fa-solid fa-angle-right"></i> Acceptable Use Policy</a> </li>
                    <li class="nav-item text-muted"><a class="nav-link" href="#"><i
                                class="fa-solid fa-angle-right"></i> Contact</a> </li>

                </ul>
            </div>
        </div>
    </div>
</section>
<!-- footer ENd -->
<!-- footer start -->
    <section class="py-2">
        <div class="container bg-dark">
            <div class="row">
                <div class="col-md-12">
                    <h6 class="text-center text-white"> © Copyright_IT Polly    Design & Development by UCL(Unified Core Limited)</h6>
                </div>
            </div>
        </div>
    </section>
<!-- footer End -->
<!-- js -->
<script src="{{asset('/')}}frontend/js/jquery-3.6.2.min.js"></script>
<script src="{{asset('/')}}frontend/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/')}}frontend/js/navbar.js"></script>
<script src="{{asset('/')}}frontend/js/script.js"></script>
</body>

</html>
