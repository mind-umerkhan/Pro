<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>New Website</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('user/assets/favicon.ico') }}" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Khula:wght@300&display=swap" rel="stylesheet">
    <link href="{{ asset('user/css/styles.css') }}" rel="stylesheet" />
</head>
<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg text-uppercase fixed-top" style="background-color: #0072b1" id="">
        <div class="container">
            <a class="navbar-brand text-white" href="#page-top">New Website</a>
            <button class="fas fa-bars navbar-toggler bg-white" style="color:#0072b1; " type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                {{-- Menu --}}
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li>
                        <a href="{{ route('welcome') }}" class="ml-4 nav-link py-3 px-0 px-lg-3 text-white rounded">Home</a>
                    </li>
                    @auth
                    @if(auth()->user()->role_id == 1)
                    <a href="{{ route('dashboard.admin') }}" class="nav-link py-3 px-0 px-lg-3 text-white rounded">Dashboard</a>
                    <a href="#" class="nav-link py-3 px-0 px-lg-3 text-white rounded">{{ auth()->user()->name }}</a>
                    @elseif(auth()->user()->role_id == 2)
                    <a href="{{ route('dashboard.admin') }}" class="nav-link py-3 px-0 px-lg-3 text-white rounded">Dashboard</a>
                    <a href="#" class="nav-link py-3 px-0 px-lg-3 text-white rounded">{{ auth()->user()->name }}</a>
                    @else
                    <a href="#" class="nav-link py-3 px-0 px-lg-3 text-white rounded">{{ auth()->user()->name }}</a>
                    @endif
                    @else
                    <a href="{{ route('login') }}" class="nav-link py-3 px-0 px-lg-3 text-white rounded">Log in</a>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 nav-link py-3 px-0 px-lg-3 text-white rounded">Register</a>
                    @endif
                    @endauth
                    @auth()
                    <li>
                        <a href="{{ route('logout1') }}" class="ml-4 nav-link py-3 px-0 px-lg-3 text-white rounded">Logout</a>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- Portfolio Section-->
    <section class="page-section portfolio mt-5" id="portfolio">
        <div class="container mt-5">
            <!-- Portfolio Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Blogs</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <div class="row blogs">
                <div class="col-lg-4">
                    {{-- <div class="card"> --}}
                    <img src="{{ asset('dist/img/photo4.jpg') }}" class="img-fluid" alt="">
                    {{-- </div> --}}
                </div>

                <div class="col-lg-8 mt-5">
                    <p class="mt-2">25 JANUARY 2018</p>
                    <h6>You How All This Mistaken Idea Of Denouncing Pleasure And Praising Pain Was Born.</h6>
                    <p>Posted By : Admin Admin</p>
                    <span>
                        Consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.
                    </span>
                </div>
            </div>
            <div class="row mt-5 blogs" data-aos="fade-up" data-aos-anchor-placement="center-center">
                <div class="col-lg-4">
                    {{-- <div class="card"> --}}
                    <img src="{{ asset('dist/img/photo2.png') }}" class="img-fluid" alt="">
                    {{-- </div> --}}
                </div>

                <div class="col-lg-8 mt-5">
                    <p class="mt-2">25 JANUARY 2018</p>
                    <h6>You How All This Mistaken Idea Of Denouncing Pleasure And Praising Pain Was Born.</h6>
                    <p>Posted By : Admin Admin</p>
                    <span>
                        Consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.
                    </span>
                </div>
            </div>
            <div class="row mt-5 blogs" data-aos="fade-up" data-aos-anchor-placement="center-center">
                <div class="col-lg-4">
                    {{-- <div class="card"> --}}
                    <img src="{{ asset('dist/img/photo3.jpg') }}" class="img-fluid" alt="">
                    {{-- </div> --}}
                </div>

                <div class="col-lg-8 mt-5">
                    <p class="mt-2">25 JANUARY 2018</p>
                    <h6>You How All This Mistaken Idea Of Denouncing Pleasure And Praising Pain Was Born.</h6>
                    <p>Posted By : Admin Admin</p>
                    <span>
                        Consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.
                    </span>
                </div>
            </div>
            <div class="row blogs mt-5" data-aos="fade-up" data-aos-anchor-placement="center-center">
                <div class="col-lg-4">
                    {{-- <div class="card"> --}}
                    <img src="{{ asset('dist/img/photo4.jpg') }}" class="img-fluid" alt="">
                    {{-- </div> --}}
                </div>

                <div class="col-lg-8 mt-5">
                    <p class="mt-2">25 JANUARY 2018</p>
                    <h6>You How All This Mistaken Idea Of Denouncing Pleasure And Praising Pain Was Born.</h6>
                    <p>Posted By : Admin Admin</p>
                    <span>
                        Consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.
                    </span>
                </div>
            </div>
            <div class="row mt-5 blogs" data-aos="fade-up" data-aos-anchor-placement="center-center">
                <div class="col-lg-4">
                    {{-- <div class="card"> --}}
                    <img src="{{ asset('dist/img/photo2.png') }}" class="img-fluid" alt="">
                    {{-- </div> --}}
                </div>

                <div class="col-lg-8 mt-5">
                    <p class="mt-2">25 JANUARY 2018</p>
                    <h6>You How All This Mistaken Idea Of Denouncing Pleasure And Praising Pain Was Born.</h6>
                    <p>Posted By : Admin Admin</p>
                    <span>
                        Consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.
                    </span>
                </div>
            </div>
            <div class="row mt-5 blogs" data-aos="fade-up" data-aos-anchor-placement="center-center">
                <div class="col-lg-4">
                    {{-- <div class="card"> --}}
                    <img src="{{ asset('dist/img/photo3.jpg') }}" class="img-fluid" alt="">
                    {{-- </div> --}}
                </div>

                <div class="col-lg-8 mt-5">
                    <p class="mt-2">25 JANUARY 2018</p>
                    <h6>You How All This Mistaken Idea Of Denouncing Pleasure And Praising Pain Was Born.</h6>
                    <p>Posted By : Admin Admin</p>
                    <span>
                        Consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.
                    </span>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer-->
    <footer class="footer text-center" style="background-color: #0072b1">
        <div class="container">
            <div class="row">
                <!-- Footer Location-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Location</h4>
                    <p class="lead mb-0">
                        2215 John Daniel Drive
                        <br />
                        Clark, MO 65243
                    </p>
                </div>
                <!-- Footer Social Icons-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Around the Web</h4>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                </div>
                <!-- Footer About Text-->
                <div class="col-lg-4">
                    <h4 class="text-uppercase mb-4">About Freelancer</h4>
                    <p class="lead mb-0">
                        Freelance is a free to use, MIT licensed Bootstrap theme created by
                        <a href="#">New Website</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script>
        AOS.init({
            duration: 1200
        , })

    </script>
</body>
</html>
