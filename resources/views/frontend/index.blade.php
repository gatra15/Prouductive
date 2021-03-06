<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="landing page/assets/just-logo.png">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="landing page/style.css">
    <!-- javascript -->
    <script type="text/javascript" src="landing page/assets/js/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script type="text/javascript" src="landing page/assets/js/wow.min.js"></script>
    <link rel="stylesheet" type="text/css" href="landing page/assets/css/animate.min.css">
    
    <script>
        $(window).scroll(function(){
            $('nav, a').toggleClass('scrolled', $(this).scrollTop() > 50);
        });
    </script>

    <title>Prouductive</title>
</head>
<body>
    <div class="wrap-container">
        <div class="container-fluid">
            <!-- Menu -->
            <div class="row" id="menu">
                <nav class="navbar menu navbar-expand-lg navbar-light">
                    <div class="menu-wrap d-flex container-fluid justify-content-between ">
                        
                        <button class="navbar-toggler order-" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <a class="navbar-brand logo m-0 d-sm-none d-md-none d-none d-lg-block" href="#menu"><img src="landing page/assets/just-logo.png"> Prouductive</a>

                        <div class="d-flex">
                            <div class="menu-collapse collapse navbar-collapse" id="navbarSupportedContent" >
                                <ul class="navbar-nav my-2 mx-auto">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#menu">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#why">Why us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#about">About us</a>
                                    </li>
                                    @if (Route::has('login'))
                                        @auth
                                        @else
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('login') }}">Sign in</a>
                                            </li>
                                        @endif
                                    @endif
                                </ul>
                            @if (Route::has('login'))
                                @auth
                                    <a href="{{ url('/dashboard') }}">
                                        <button type="button" class="btn-nav">Dashboard</button>
                                    </a>
                                @elseif (Route::has('register'))
                                    <a href="{{ route('register') }}">
                                        <button type="button" class="btn-nav">Get Started</button>
                                    </a>
                                @endif
                            @endif
                            </div> 
                        </div>
                        
                    </div>
                  </nav>
            </div>
        </div>

        <div class="container-fluid p-0">
            <img src="landing page/assets/liquid.png" class="decor">
            <!-- <img src="landing page/assets/bunch-ball.png" width="12%" class="decor"> -->
            <!-- HERO -->
            <br>
            <br>
            <br>
            <div class="row mx-5 mb-5" id="hero">
                <div class="col-12 col-lg-6 col-md-12 col-sm-12 text-lg-start text-md-center text-sm-center text-center my-auto
                            mx-auto wow fadeInLeft">
                            <br>
                            <br>
                            <br>
                            <br>
                            <p class="slogan">Achieve your goals
                                <br>
                                Proud to be productive.
                            </p>
                            <p> We are more than just a todo list. We help you reach resolutions 
                                <br>
                                and increase productivity. Here you can organize your goals,
                                <br>
                                set your own rewards and track your progress in order to be 
                                <br>
                                productive and happy at the same time.
                            </p>
                    
                    <div class="text">
                        <a href="{{ route('register') }}">
                            <button type="button" class="btn-sign mt-3 mb-3">Get Started</button>
                        </a>
                    </div>
                </div>
                <div class=" col-5 d-md-none d-sm-none d-none d-lg-inline wow fadeInRight">
                    <img src="landing page/assets/proud 1.png" width="100%">
                </div>
            </div>

            <br>
            <br>
            <br>

            <!-- WHY US -->
            <div class="row mb-5" id="why">
                <br>
                <br>
                <br>
                <p style="font-size: 50px; font-weight: bold; color: var(--blue);" class="ms-5 mb-1 wow zoomIn">
                    Why us
                </p>
                <div class="col-12 col-lg-6 col-md-12 col-sm-12 wow fadeInLeft">
                    <img src="landing page/assets/laptop-ilus.png" width="90%">
                </div>
                <div class="col-12 col-lg-6 col-md-12 col-sm-12 my-auto wow fadeInRight">
                    <div>
                        <h3 style="color: var(--blue); font-weight: bold;">
                            A new way to manage your <span style="color: var(--yellow);">goals</span>
                        </h3>
                        <p style="color: var(--textgrey); font-weight: bold;" class="ps-4">
                            keep track with your progress <br>
                            and help remind you with your goals
                        </p>
                    </div>

                    <div>
                        <h3 style="color: var(--blue); font-weight: bold;">
                            Create a new <span style="color: var(--blue-green);">habit</span>
                        </h3>
                        <p style="color: var(--textgrey); font-weight: bold;" class="ps-4">
                            21 days habits track for achieve new habits
                        </p>
                    </div>

                    <div>
                        <h3 style="color: var(--blue); font-weight: bold;">
                            Give yourself  special <span style="color: var(--red);">gift</span>
                        </h3>
                        <p style="color: var(--textgrey); font-weight: bold;" class="ps-4">
                            a reward feauture for you after completing <br>
                            some task to bring motivation to do more
                        </p>
                    </div>

                    <div>
                        <h3 style="color: var(--blue); font-weight: bold;">
                            Customized <span style="color: var(--darkblue);">task</span>
                        </h3>
                        <p style="color: var(--textgrey); font-weight: bold;" class="ps-4">
                            Be yourself and express your style  with <br>
                            customized task
                        </p>
                    </div>


                </div>
            </div>
            
            <!-- About us -->
            <div class="row position-relative " id="about" style="padding-bottom: 100px;">
                <div class="position-relative">
                    <img src="landing page/assets/round.png" id="round-orange">
                    <p style="font-size: 50px; font-weight: bold; color: var(--blue);" class="ms-5 mb-5 wow zoomIn">
                        About us
                    </p>
                </div>
                
                <div class="col-6 text-center wow zoomIn" data-wow-delay="0.5s">
                    <p style="color: var(--red); font-weight: bold; font-size: 24px;">
                        Front<span style="color: var(--yellow);">end dev</span>
                    </p>
                </div>
                <div class="col-6 text-center wow zoomIn" data-wow-delay="0.5s">
                    <p style="color: var(--blue); font-weight: bold; font-size: 24px;">
                        Back<span style="color: var(--yellow);">end dev</span>
                    </p>
                </div>
                <div class="col-3 text-center wow fadeInUp" data-wow-delay="1s">
                    <img src="landing page/assets/dimas.png" alt="Dimas Rafi" width="60%" class="dev-ava">
                    <span style="font-weight: bold; color: var(--blue);">
                        Dimas Rafi
                    </span>
                </div>
                <div class="col-3 text-center wow fadeInUp" data-wow-delay="1.5s">
                    <img src="landing page/assets/helmy.png" alt="Helmy Zakiudin" width="60%" class="dev-ava">
                    <span style="font-weight: bold; color: var(--blue);">
                        Helmy <br>
                        Zakiudin    
                    </span>
                </div>
                <div class="col-3 text-center wow fadeInUp" data-wow-delay="2s">
                    <img src="landing page/assets/ilham.png" alt="Muhammad Ilham" width="60%" class="dev-ava">
                    <span style="font-weight: bold; color: var(--blue);">
                        Muhammad <br>
                        Ilham   
                    </span>
                </div>
                <div class="col-3 text-center wow fadeInUp" data-wow-delay="2.5s">
                    <img src="landing page/assets/gatra.png" alt="Galih Saputra" width="60%" class="dev-ava">
                    <span style="font-weight: bold; color: var(--blue);">
                        Galih <br>
                        Saputra
                    </span>
                </div>

                <img src="landing page/assets/circle.png" id="circle-blue">

            </div>

            <footer class="footer">
                <div class="text-center p-3">
                    <p style="font-size: 20px; color: white; font-weight: bold; margin-bottom: 0px;">
                        © 2020 Copyright:Get.id
                    </p>
                </div>
            </footer>


        </div>
        
    </div>

    <script>

        new WOW().init();

        $(document).ready(function() {
            $('.menu .menu-wrap .menu-collapse ul li a').click(function(e) {
                
                var targetHref = $(this).attr('href');
                
                $('html, body').animate({
                    scrollTop: $(targetHref).offset().top
                }, 50);
                
                e.preventDefault();
            });


            $('.nav-item .nav-link').click(function(event){
                $('.nav-link').removeClass('active');
                $(this).addClass('active');
            });
            



        });


    </script>
    
</body>