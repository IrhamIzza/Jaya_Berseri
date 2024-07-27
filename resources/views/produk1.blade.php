@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">

<head>
    @section('title','Pupuk NPK')
</head>

<body>
    @section('content')
    <!-- About Section-->
    <section class="page-section bg-dark text-white m-2 " id="about">
        <div class="container">
            <!-- About Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-white pt-2 fs-1">Pupuk NPK</h2>
            <div class="row text-center">
                <div class="col-12 col-lg-6">
                    <a href=""><img src="assets/img/Pupuk_NPK - Copy.jpeg" alt="" class="rounded w-100 my-1" height="500px">
                    </a>
                </div>
                <div class="col-12 col-lg-6">
                    <a href=""><img src="assets/img/NPK.jpeg" alt="" class="rounded w-100 my-1" height="500px">
                    </a>
                </div>
            </div>
            <!-- About Section Content-->
            <div class="row text-justify">
                <div class="col ms-auto">
                    <p class="lead">
                        Pupuk NPK adalah adalah pupuk majemuk yang mengandung tiga unsur sekaligus. Unsur ini merupakan gabungan dari pupuk tunggal, yaitu N (Nitrogen), P (Phospat), dan, K (Kalium). Gabungan dari ketiga unsur inilah yang membuat pupuk ini disebut NPK.
                        Selain ketiga unsur hara makro, pupuk NPK juga mengandung 2 unsur hara mikro. 
                        Unsur-unsur yang terdapat dalam pupuk NPK dapat membantu pertumbuhan vegetatif, pertumbuhan akar, dan pembungaan. Pupuk NPK menjadi pupuk favorit dari para petani. Pupuk NPK yang ada di pasaran, sudah dibuat sesuai dengan kadar dan kombinasi yang beraneka ragam.
                    </p>
                </div>
            </div>
        </div>
    </section>
    @endsection
</body>

</html>