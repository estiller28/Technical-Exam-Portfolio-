<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Portfolio Website</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="{{ asset('/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/assets/css/figure.css') }}">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Scripts -->
    @vite(['resources/js/app.js'])

    @livewireStyles
</head>
<body>
<header id="header">
    <div class="d-flex flex-column">
        <div class="profile">
            <img src="assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle ">

            <h1 class="text-light"><a href="#">Daniel N. Estiller</a></h1>
            <div class="social-links mt-3 text-center">
                <a target="_blank" href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a target="_blank" href="https://github.com/estiller28" class="twitter"><i class='bx bxl-github'></i></a>
                <a target="_blank" href="https://join.skype.com/invite/yYJRUR517VmK" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a target="_blank" href="https://www.linkedin.com/in/daniel-estiller-477394233/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>

        <nav id="navbar" class="nav-menu navbar mb-5">
            <ul>
                <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
                <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
                <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
                <li><a href="#career" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Career Objectives</span></a></li>
                <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
            </ul>
            <div class="mt-5">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <span class="text-light text-left">
                        <a href="#" onclick="event.preventDefault();
                                                this.closest('form').submit();"><i class='text-white bx bx-arrow-from-left'></i>Sign Out</a></span>
                </form>
            </div>
        </nav>

    </div>

</header>


<div id="main">
{{ $slot }}
</div>


<footer id="footer">
    <div class="container">
        <div class="copyright">
            &copy; <span><strong>Daniel Estiller</strong> 2023 All rights reserved.</span>
        </div>
    </div>
</footer>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="{{ asset('/assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('/assets/vendor/typed.js/typed.min.js') }}"></script>
<script src="{{ asset('/assets/js/main.js') }}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@livewireScripts
</body>
</html>
