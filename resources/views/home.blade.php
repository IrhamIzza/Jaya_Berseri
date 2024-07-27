@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">

<head>
    @section('title','Home')
</head>

<body>

    @section('header')
    <header class="masthead">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="text-center text-white">
                        <!-- Page heading-->
                        <h1 class="mb-5">Kami membantu anda dalam menangani kelangkaan pupuk subsidi</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @endsection

    @section('content')
    <!-- About Section-->
    <section class="page-section bg-dark text-white m-2 " id="about">
        <div class="container">
            <!-- About Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-white pt-2">Tentang Kami</h2>
            <!-- About Section Content-->
            <div class="row">
                <div class="col-lg-6 ms-auto">
                    <p class="lead">Kami adalah perusahaan pupuk pertanian dan perkebunan yang turut serta membantu
                        petani dalam
                        mengatasi kelangkaan pupuk subsidi seiring di kuranginya
                        kuota pupuk bersubsidi dari pemerintah.
                        Kami menyediakan pupuk alternatif
                        yang berkualitas dengan harga yang terjangkau oleh
                        masyarakat petani,Karakter pupuk kami adalah mengandung unsur yang lengkap dan seimbang antara
                        unsur makro dan mikro
                        sesuai dengan yang di butuhkan tanaman.
                    </p>
                </div>
                <div class="col-lg-6 me-auto">
                    <p class="lead">
                        Produk kami sudah teruji sejak tahun 1988, Dari pengalaman kami di lapangan pupuk kami bisa
                        meningkat hasil panen sekitar 20% . Tentu nya
                        dengan standar dosis kami sesuai dengan jenis tanaman. Kami berkomitmen memberikan kepuasan
                        petani berupa
                        kesehatan tanaman dan peningkatan hasil panen. Kami memberikan garansi mutu yang bisa di
                        tuangkan dalam
                        perjanjian tertulis dengan petani/konsumen. Dengan catatan bukan di atas tanah yang selalu
                        mengeluarkan air
                        dan tidak bisa mengering ( bahasa Jawa tanah becer).
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Kelebihan Section-->
    <section class="page-section bg-dark text-white m-2 " id="about">
        <div class="container">
            <!-- About Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-white pt-2">Kelebihan</h2>
            <!-- About Section Content-->
            <div class="row ">
                <div class="col-lg-6 ms-auto">
                    <p class="lead">
                        Kelebihan dari pupuk kami adalah mudah larut sehingga mudah di serap oleh tanaman sehingga bisa
                        maximal penyerapan tanaman.
                        Di samping itu dengan kandungan yang seimbang antara unsur makro dan mikro yang mudah larut
                        secara otomatis akan membuat tanah menjadi gembur sehingga oxigen bisa leluasa masuk dan
                        pernafasan tanaman bisa maksimal.
                    </p>
                </div>
                <div class="col-lg-6 me-auto">
                    <p class="lead">
                        Pada akhirnya akan membuat tanaman menjadi sehat, tahan terhadap serangan hama dan hasil
                        panen akan meningkat. Kelebihan
                        dari pupuk kami untuk tanaman padi bisa meningkatkan hasil panen karena seluruh bulir terisi
                        penuh dan tidak
                        ada bulir yang hampa/ kosong. Sedangkan untuk tanaman hortikultura semangka melon cabe dll
                        buahnya lebih tahan lama/ tidak mudah membusuk
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Section-->
    <section class="portfolio" id="portfolio">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-dark">Produk Pupuk</h2>
            <!-- Portfolio Grid Items-->
            <div class="row justify-content-center">
                <!-- Portfolio Item 1-->
                <div class="container text-center p-4 bg-dark mb-2">
                    <div class="row">
                        <div class="col">
                            <a href="/produk1"><img src="../assets/img/Pupuk_NPK - Copy.jpeg" alt=""
                                    class="rounded w-100">
                            </a>
                        </div>
                        <div class="col">
                            <a href="/produk2"><img src="assets/img/Pupuk_DAP - Copy.jpeg" alt="" class="rounded w-100">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    @endsection
</body>

</html>