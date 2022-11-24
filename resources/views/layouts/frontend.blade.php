<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wheretogo.com</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}"><img src="https://wheretogoo.s3.ap-southeast-1.amazonaws.com/Assets/Logo2.png"
                    alt="" style="max-width: 100px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('paket.index') }}">Paket</a>
                    </li>
                    @guest
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class=" btn btn-outline-primary">Register</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="btn btn-primary ms-2">Login</a>
                    </li>
                    @endguest
                    @auth
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a href="{{ route('profile.index') }}" class="dropdown-item">Profile</a>

                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    {{-- footer --}}
    <footer class="text-center text-black"
        style="text-align:center; position:relative; bottom:0; width:100%; background-color: rgba(0, 0, 0, 0.2); margin-top:50px;">

        <div class="container p-4">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">WHERETOGO.com</h5>

                    <p>
                        </br> WHERETOGO.com hadir untukmu traveller enthusiast yang ingin berpergian dengan aman dan nyaman. Nikmati perjalanan yang tidak akan kamu lupakan
                    seumur hidupmu! Kami disini membantu mu untuk mewujudkan impian dan keinginan mu! Segera pesan paket perjalanan dan nikmati perjalanan terbaikmu!
                    </p>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">

                    <iframe src="https://www.youtube.com/embed/5s8fs_j2xlY" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>

                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Grid container -->
        <div class="container p-4">
            <!-- Section: Images -->
            <section class="">
                <div class="row">
                    <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                            <img src="https://wheretogoo.s3.ap-southeast-1.amazonaws.com/Assets/Footer/6.jfif" class="w-100" />
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                            <img src="https://wheretogoo.s3.ap-southeast-1.amazonaws.com/Assets/Footer/5.jpg" class="w-100" />
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                            <img src="https://wheretogoo.s3.ap-southeast-1.amazonaws.com/Assets/Footer/4.jpg"
                                class="w-100" />
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                            <img src="https://wheretogoo.s3.ap-southeast-1.amazonaws.com/Assets/Footer/3.jpg" class="w-100" />
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                            <img src="https://wheretogoo.s3.ap-southeast-1.amazonaws.com/Assets/Footer/2.jpg" class="w-100" />
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                            <img src="https://wheretogoo.s3.ap-southeast-1.amazonaws.com/Assets/Footer/1.jpg" class="w-100" />
                            <a href="#!">

                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section: Images -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright
            <a class="text-white" href="#"><img src="https://wheretogoo.s3.ap-southeast-1.amazonaws.com/Assets/Logo2.png" alt=""
                    style="max-width: 100px;"></a>
        </div>
        <!-- Copyright -->
    </footer>


    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>