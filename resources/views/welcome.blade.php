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
            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
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

    <section class="page-section mt-5" id="">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Home</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Portfolio Grid Items-->
            <div class="row justify-content-center jobs">
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="card  mb-3" data-aos="flip-right">
                        <div class="card-header bg-header">
                            <h3>Database</h3>
                        </div>
                        <div class="card-body">
                            <p class="titles">Links To The Database Of All Previous Job Listing </p>
                            <button class="btn btn-md" id="ViewButton" type="submit">View</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="card  mb-3" data-aos="fade-up" data-aos-duration="1000">
                        <div class="card-header bg-header">
                            <h3>Job Listing</h3>
                        </div>
                        <div class="card-body">
                            <p class="titles">Show Active Job Listing. Also Provides Employers A portal To Sign Up And List Jobs</p>

                            @if (auth()->check())
                            <a href="{{ route('user.jobs') }}">
                                <button class="btn btn-md" id="ViewButton" type="submit">View</button>
                            </a>
                            @else
                            <a href="{{ route('login') }}">
                                <button class="btn btn-md" id="ViewButton" type="submit">View</button>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="card  mb-3" data-aos="flip-left">
                        <div class="card-header bg-header">
                            <h3>New And Updates</h3>
                        </div>
                        <div class="card-body">
                            <p class="titles">Blog Styles Posts. Mostly For SEO Purposes</p>
                            <a href="{{ route('blogs') }}" class="btn btn-md" id="ViewButton" type="submit">View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="page-section mt-3" id="">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Jobs</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <center>
                <h1>1000+</h1>
            </center>
        </div>
    </section>

    <!-- Portfolio Section-->
    <section class="page-section portfolio" id="portfolio">
        <div class="container">
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
            <center> <a href="{{ route('blogs') }}" class="text-center text-black fs-3 mt-5" style="text-decoration: none;">More Blogs>></a></center>
        </div>
    </section>


    <!-- About Section-->
    <section class="page-section text-white mb-0" style="background-color: #0072b1" id="about">
        <div class="container">
            <!-- About Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- About Section Content-->
            <div class="row">
                <div class="col-lg-4 ms-auto">
                    <p class="lead">Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional SASS stylesheets for easy customization.</p>
                </div>
                <div class="col-lg-4 me-auto">
                    <p class="lead">You can create your own custom avatar for the masthead, change the icon in the dividers, and add your email address to the contact form to make it fully functional!</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Contact Section-->
    <section class="page-section" id="contact">
        <div class="container">
            <!-- Contact Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Contact Section Form-->
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7">
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                            <label for="name">Full name</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                            <label for="email">Email address</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                            <label for="phone">Phone number</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                        </div>
                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                            <label for="message">Message</label>
                            <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                        </div>
                        <!-- Submit success message-->
                        <!---->
                        <!-- This is what your users will see when the form-->
                        <!-- has successfully submitted-->
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Form submission successful!</div>
                                To activate this form, sign up at
                                <br />
                                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                            </div>
                        </div>
                        <!-- Submit error message-->
                        <!---->
                        <!-- This is what your users will see when there is-->
                        <!-- an error submitting the form-->
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">Error sending message!</div>
                        </div>
                        <!-- Submit Button-->
                        <button class="btn btn-lg disabled" id="submitButton" type="submit">Send</button>
                    </form>
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
