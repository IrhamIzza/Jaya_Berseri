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
                <div class="row">
                    <div class="col-md-7">
                        <p class="judul">PT JAYA BERSERI</p>
                        <p class="paragraf1">Kami membantu anda dalam menangani kelangkaan pupuk subsidi. Kami adalah
                            perusahaan pupuk pertanian dan
                            perkebunan yang turut serta membantu petani dalam mengatasi kelangkaan pupuk subsidi seiring
                            di
                            kuranginya kuota pupuk bersubsidi dari pemerintah.</p>
                    </div>
                    <div class="col-md-5 ">
                        <img class="gh1" src="../assets/img/bg.png" alt="" width="550px">
                    </div>
                </div>
            </div>
        </div>
    </header>
    @endsection

    @section('content')
    <!-- About Section-->
    <section class="page-section bg-dark text-white m-2 " id="about">
        <div class="container ">
            <div class="row py-4">
                <div class="col-lg-3 col-6 text-end">
                    <img class="rounded img-fluid" src="../assets/img/vertical.jpg" alt="" width="250">
                </div>
                <div class="col-lg-3 g-0 col-6">
                    <img class="pb-3 rounded img-fluid pe-2" src="../assets/img/hori1.jpg" alt="" width="250">
                    <img class="rounded img-fluid pe-2" src="../assets/img/hori2.jpg" alt="" width="250">
                </div>
                <div class="col-lg-6 ">
                    <h2 class="page-section-heading text-center text-uppercase text-white pt-2 judul2">Tentang Kami
                    </h2>
                    <p class="lead">Kami adalah perusahaan pupuk pertanian dalam
                        mengatasi kelangkaan pupuk subsidi dari pemerintah.
                        Kami menyediakan pupuk alternatif
                        yang berkualitas dengan harga yang terjangkau oleh
                        masyarakat petani,Karakter pupuk kami adalah mengandung unsur yang lengkap dan seimbang
                        antara
                        unsur makro dan mikro
                        sesuai dengan yang di butuhkan tanaman.
                    </p>
                    <p class="lead">
                        Produk kami sudah teruji sejak tahun 1988, Dari pengalaman kami di lapangan pupuk kami
                        bisa
                        meningkat hasil panen sekitar 20% . Tentu nya
                        dengan standar dosis kami sesuai dengan jenis tanaman. Kami berkomitmen memberikan
                        kepuasan
                        petani berupa
                        kesehatan tanaman dan peningkatan hasil panen. Kami memberikan garansi mutu yang bisa di
                        tuangkan dalam
                        perjanjian tertulis dengan petani/konsumen. Dengan catatan bukan di atas tanah yang
                        selalu
                        mengeluarkan air
                        dan tidak bisa mengering ( bahasa Jawa tanah becer).
                    </p>
                </div>
            </div>
    </section>

    <!-- Kelebihan Section-->
    <section class="container p-2" id="about">
        <div class="container ">
            <!-- About Section Heading-->
            <h2 class="text-center text-uppercase text-black ">Kelebihan</h2>
            <!-- About Section Content-->
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="assets/img/serap.PNG" alt="Gambar 1" width="100px">
                            <h3 class="pt-2">Mudah Larut</h3>
                            <p class="lead">Mudah larut sehingga mudah di serap oleh tanaman sehingga bisa maximal
                                penyerapan tanaman</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="assets/img/meningkatkan.PNG" alt="Gambar 1" width="100px">
                            <h3 class="pt-2">Meningkatkan Hasil</h3>
                            <p class="lead">Meningkatkan hasil panen karena seluruh bulir terisi penuh dan tidak ada
                                bulir yang hampa/ kosong</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card ">
                            <img src="assets/img/kandungan.png" alt="Gambar 1" width="100px">
                            <h3 class="pt-2">Kandungan Seimbang</h3>
                            <p class="lead overflow-auto">Seimbang antara unsur makro dan mikro yang mudah larut secara
                                otomatis akan membuat tanah menjadi gembur sehingga oxigen bisa leluasa masuk dan
                                pernafasan tanaman bisa maksimal</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="assets/img/perisai.jpg" alt="Gambar 1" width="100px">
                            <h3 class="pt-2">Tahan Lama</h3>
                            <p class="lead">Tanaman hortikultura semangka melon cabe dll buahnya lebih tahan lama/ tidak
                                mudah membusuk</p>
                        </div>
                    </div>
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

    <script src="swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper', {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        breakpoints: {
            376: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
        },
        autoplay: {
            delay: 5000,
        },
        });
    </script>
    @endsection
</body>

</html>