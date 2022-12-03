@extends ('layouts.main')
@section('menuHome','active')
@section('container')
   <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">POLITEKNIK NEGERI PADANG</h5>
                                <h1 class="display-3 text-white animated slideInDown">SPADA</h1>
                                <p class="fs-5 text-white mb-4 pb-2">SISTEM  PEMBELAJARAN DARING</p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">JURUSAN TEKNOLOGI INFORMASI</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-width: : 500px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/about.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Capai Suksesmu</h6>
                    <h1 class="mb-4">Selamat Datang di eLEARNING</h1>
                    
                    <p class="mb-4">Tak peduli seberapa lambat kamu pergi, asal kamu tidak berhenti.</p>
                    <p class="mb-4">Makin aku banyak membaca, makin aku banyak berpikir; makin aku banyak belajar, makin aku sadar bahwa aku tak mengetahui apapun.</p>
                    
                    <h2 class="mb-4">Sukses Bersama</h2>
                    <h2 class="mb-4">Politeknik Negeri Padang</h2>
                    
                </div>
            </div>
        </div>
    </div>
    @endsection