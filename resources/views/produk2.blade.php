@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">

<head>
    @section('title','Pupuk DAP')
</head>
<body>
    @section('content')
    <!-- About Section-->
    <section class="page-section bg-dark text-white m-2 " id="about">
        <div class="container">
            <!-- About Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-white pt-2 fs-1">Pupuk DAP</h2>
            <div class="row text-center">
                <div class="col-12 col-lg-6">
                    <a href=""><img src="assets/img/Pupuk_DAP - Copy.jpeg" alt="" class="rounded w-100 my-1" height="500px">
                    </a>
                </div>
                <div class="col-12 col-lg-6">
                    <a href=""><img src="assets/img/DAP.jpeg" alt="" class="rounded w-100 my-1" height="500px">
                    </a>
                </div>
                
            </div>

            <!-- About Section Content-->
            <div class="row text-justify">
                <div class="col ms-auto">
                    <p class="lead">
                        Pupuk adalah salah satu sumber nutrient yang dibutuhkan tanaman, dan Indonesia merupakan negara agraris yang mempunyai lahan pertanian yang 
                        cukup luas. Namun hingga saat ini produsen pupuk di Indonesia masih kurang, sehingga Indonesia masih mengimpor 
                        beberapa jenis pupuk dari luar. Untuk itu perlu didirikan industri pupuk di Indonesia agar dapat membantu memenuhi 
                        kebutuhan pupuk setiap daerah di Indonesia khususnya Kalimantan. Salah satu jenis pupuk yang umum digunakan adalah
                         diamonium fosfat atau pupuk DAP. Pupuk DAP adalah  pupuk majemuk buatan dengan mengandung dua unsur hara Nitrogen
                         (N) dan Fosfor (P2O5) dengan rumus kimia (NH4)2HPO4..
                    </p>
                </div>
            </div>
        </div>
    </section>
    @endsection
</body>

</html>