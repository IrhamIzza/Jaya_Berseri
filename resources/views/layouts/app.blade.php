<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title')</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet"
        type="text/css" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold mx-5" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto fs-5 fw-bold">
                    <li class="nav-item mx-5">
                        <a class="nav-link active" aria-current="page" href="/home">Home</a>
                    </li>
                    <li class="nav-item dropdown mx-5">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Produk
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="/produk1">Pupuk NPK</a></li>
                          <li><a class="dropdown-item" href="/produk2">Pupuk DAP</a></li>
                        </ul>
                    <li class="nav-item mx-5">
                        <a class="nav-link" aria-disabled="true"></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    @yield('header')
    @yield('content')
    
    <!-- Footer -->
    <div class="my-5">
        <footer class="text-center text-lg-start text-white bg-dark">
            <!-- Grid container -->
            <div class="container p-4 pb-0">
                <!-- Section: Links -->
                <section class="">
                    <!--Grid row-->
                    <div class="row">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">
                                PT JAYA BERSERI
                            </h6>
                            <p>
                                Kami adalah perusahaan pupuk pertanian dan perkebunan yang turut serta membantu
                                petani dalam
                                mengatasi kelangkaan pupuk subsidi seiring di kuranginya
                                kuota pupuk bersubsidi dari pemerintah.
                            </p>
                        </div>
                        <!-- Grid column -->
                        <hr class="w-100 clearfix d-md-none" />
                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
                            <p>
                                <a class="text-white">Pupuk DAP</a>
                            </p>
                            <p>
                                <a class="text-white">Pupuk NPK</a>
                            </p>
                        </div>
                        <!-- Grid column -->
                        <hr class="w-100 clearfix d-md-none" />
                        <!-- Grid column -->
                        <hr class="w-100 clearfix d-md-none" />
                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                            <p><i class="fas fa-home mr-3"></i> Jl. raya bangsal no 107 Mojokerto</p>
                            <p><i class="fas fa-envelope mr-3"></i> saifultalun40@gmail.com</p>
                            <p><i class="fas fa-phone mr-3"></i> 081334067463</p>
                        </div>
                        <!-- Grid column -->
                        {{-- <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                            <h6 class="text-uppercase mb-4 font-weight-bold">Follow us</h6>

                            <!-- Facebook -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998" href="#!"
                                role="button"><i class="fab fa-facebook-f"></i></a>

                            <!-- Twitter -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee" href="#!"
                                role="button"><i class="fab fa-twitter"></i></a>

                            <!-- Google -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39" href="#!"
                                role="button"><i class="fab fa-google"></i></a>

                            <!-- Instagram -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac" href="#!"
                                role="button"><i class="fab fa-instagram"></i></a>

                            <!-- Linkedin -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca" href="#!"
                                role="button"><i class="fab fa-linkedin-in"></i></a>
                            <!-- Github -->
                            <a class="btn btn-primary btn-floating m-1" style="background-color: #333333" href="#!"
                                role="button"><i class="fab fa-github"></i></a>
                        </div> --}}
                    </div>
                </section>
                <!-- Section: Links -->
            </div>
            <!-- Grid container -->

        </footer>
        <!-- Footer -->
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>