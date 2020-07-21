<!DOCTYPE html>
<html lang="en">

<head>
    <title>Jobpply | Part of Infinity Solutions</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="/">Jobpply</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="/candidates" class="nav-link">Canditates</a></li>
                    <li class="nav-item"><a href="/blog" class="nav-link">Blog</a></li>
                    <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
                    <li class="nav-item cta cta-colored mr-md-1"><a data-toggle="modal" data-target="#wantajob"
                            class="nav-link">Want a Job</a>
                    </li>
                    <li class="nav-item cta"><a href="/employers" class="nav-link">Post a Job</a></li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- Modal wantajob --}}
    <!-- Modal -->
    <div class="modal fade" id="wantajob" tabindex="-1" role="dialog" aria-labelledby="wantajob" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="wantajob">Login Candidate</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Find vacancies that match your interests and salary. Very easy and fast. We will not upload
                        anything without your permission, and also always secure your data so that your privacy is
                        maintained.
                    </p>
                    <form id="loginform" action="/candidates/login" method="POST">
                        @csrf
                        <input type="email" name="email" id="email" placeholder="Email" class="form-control mb-2"
                            required>
                        <input type="password" name="password" placeholder="Password" id="password"
                            class="form-control mb-2" required>
                        <button form="loginform" type="submit" class="btn btn-primary btn-block">Login</button>
                    </form>
                    <hr>
                    <div class="text-center">
                        <p class="blackparagraph">New Candidate? <a href="" data-dismiss="modal" data-toggle="modal"
                                data-target="#signupcandidate">Sign up here now!</a></p>
                    </div>
                    <div class="text-center">
                        <p>By connecting to Jobpply, I have read and agree to Jobpply.com's Terms of Use and Privacy
                            Policy.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End modal --}}

    {{-- Modal Signn up --}}
    <div class="modal fade" id="signupcandidate" tabindex="-1" role="dialog" aria-labelledby="signupcandidate"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signupcandidate">Signup your account here.</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="registeruser" action="/register-new-user" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="col">
                                <input type="text" name="namadepan" id="namadepan" placeholder="First Name"
                                    class="form-control mb-2" required>
                            </div>
                            <div class="col">
                                <input type="text" name="namabelakang" id="namabelakang" placeholder="Last Name"
                                    class="form-control mb-2" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <input type="email" name="email" placeholder="Email" id="email"
                                    class="form-control mb-2" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <input type="password" name="password" placeholder="Password" id="password"
                                    class="form-control mb-2" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck" name="checkpromotions"
                                    required>
                                <label class="form-check-label" for="gridCheck">
                                    Receive our promotions and subscritions!
                                </label>
                            </div>
                        </div>
                        <button form="registeruser" type="submit" class="btn btn-primary btn-block">Register your
                            account</button>
                    </form>
                    <hr>
                    <div class="text-center">
                        <p class="blackparagraph">Already have an account? <a href="" data-dismiss="modal"
                                data-toggle="modal" data-target="#wantajob">Signin here.</a></p>
                    </div>
                    <div class="text-center">
                        <p>By registering, I have read and agree to Jobpply.com's Terms of Use and Privacy Policy.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End modal --}}
    {{-- CONTENT HERE --}}
    @yield('content')

    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">About</h2>
                        <p>The main company that was founded in 2019, we try to continue to innovate in the field of
                            technology. About the human resources in the world of technology will always be in demand in
                            all circles of the future. And we are here to always provide resources that are suitable for
                            your business needs.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Employers</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">How it works</a></li>
                            <li><a href="#" class="py-2 d-block">Register </a></li>
                            <li><a href="#" class="py-2 d-block">Post a Job</a></li>
                            <li><a href="#" class="py-2 d-block">Advance Skill Search</a></li>
                            <li><a href="#" class="py-2 d-block">Recruiting Service</a></li>
                            <li><a href="#" class="py-2 d-block">Blog</a></li>
                            <li><a href="#" class="py-2 d-block">Faq</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Workers</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">How it works</a></li>
                            <li><a href="#" class="py-2 d-block">Register</a></li>
                            <li><a href="#" class="py-2 d-block">Post Your Skills</a></li>
                            <li><a href="#" class="py-2 d-block">Job Search</a></li>
                            <li><a href="#" class="py-2 d-block">Emploer Search</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">84/45 Blok B, Komplek
                                        MMTC, Medan, Indonesia</span></li>
                                <li><a href="tel:06180032999"><span class="icon icon-phone"></span><span
                                            class="text">+62 61 80032999
                                            (ext. 103)</span></a></li>
                                <li><a href="mailto:info@infinitysolutions.co.id"><span
                                            class="icon icon-envelope"></span><span
                                            class="text">info@infinitysolutions.co.id</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>

                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());

                        </script> All rights reserved | Made with <i class="icon-heart text-danger"
                            aria-hidden="true"></i> by and part of <a href="https://infinitysolutions.co.id"
                            target="_blank">Infinity Solutions</a>

                    </p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" /></svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
