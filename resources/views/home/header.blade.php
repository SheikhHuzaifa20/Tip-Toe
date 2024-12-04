<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{ url('assets/css/butter.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/responsive.css') }}">
    <title>TIP-TOE</title>
</head>

<body>
    <!-- <div class="loaderMain">
         <img src="image/loading.gif" alt="" class="">
      </div> -->
    <div id="butter">
        <div class="My-Accout">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-4">
                        <div class="Mainitem">
                            <div class="Account-innertext">
                                <p>Free ground shipping on U.S orders of $200+</p>

                            </div>
                            {{-- <div class="account-img" data-aos="fade-left" data-aos-duration="1500">
                                <a href="#">My Account<i class="fas fa-user"></i></a>
                                <ul>
                                    @auth
                                            <li>
                                                <form id="logout-form" action="{{ route('signout') }}" method="POST"
                                                    style="display: none;">
                                                    @csrf
                                                </form>
                                                <a href="#"
                                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                                    style="color: black">Sign Out</a>
                                            </li>
                                        @else
                                            <li><a href="{{ route('signin') }}" style="color: black">Sign In</a></li>
                                            <li><a href="{{ route('signup') }}" style="color: black">Sign Up</a></li>
                                        @endauth
                                </ul>
                            </div> --}}

                            <div class="dropdown">
                                <button class="login_icon dropdown-toggle" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false" style="border: none;">
                                    <a href="#" style="color: white ;">My Account<i class="fas fa-user"></i></a>
                                </button>

                                <ul style="border-radius: 10px;" class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    @auth
                                        <li>
                                            <form id="logout-form" action="{{ route('signout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                                style="color: black">Sign Out</a>
                                        </li>
                                    @else
                                        <li><a href="{{ route('signin') }}" style="color: black">Sign In</a></li>
                                        <hr>
                                        <li><a href="{{ route('signup') }}" style="color: black">Sign Up</a></li>
                                    @endauth
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- HEADER START -->
        <header class="TopNav">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="customNavbar" data-aos="fade-right" data-aos-duration="2000">
                            <nav class="navbar navbar-expand-lg pr-0 p-0">
                                <a class="navbar-brand" href="index"><img src="{{ url('assets/image/logomain.png') }}"
                                        class="img-fluid" alt=""></a>
                                <!--<a class="nav-link boximg" href="#"><img src="image/ICON.png" class="img-fluid"></a>-->
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse " id="navbarNav">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item">
                                            <a class="nav-link" href="index">HOME</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <div class="dropdown">
                                                <a href="shop.php" class=" nav-link">SHOP</a>
                                                <div class="dropdown-content">
                                                    <a href="#">HAND BAG</a>
                                                    <a href="#">CLOTHES</a>
                                                    <a href="#">EVERYDAY LOW PRICES</a>
                                                    <a href="#">ACCESSORIES</a>
                                                    <a href="#">CANDLES</a>
                                                    <a href="#">JEWELRY</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="about">ABOUT US</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="testimonials">TESTIMONIALS</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="contact">CONTACT US</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"> <i class="far fa-heart"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#" type="button"
                                                data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                                aria-controls="offcanvasRight"><i class="far fa-shopping-bag"></i></a>
                                        </li>

                                        <li>
                                            <a class="nav-link " href="#"><i class="fas fa-search"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- HEADER END -->
