@extends('partials.landingPages.main')
@section('content')
<section class="banner-area relative about-banner" id="home">	
    <div class="overlay overlay-bg"></div>
    <div class="container">				
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    BERITA				
                </h1>	
                <p class="text-white link-nav"><a href="index.html">Beranda </a>  <span class="lnr lnr-arrow-right"></span>  <a href="services.html"> Berita</a></p>
            </div>	
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start service Area -->
<section class="service-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12 pb-40 header-text text-center">
                <h1 class="pb-10">Informasi Kesehatan</h1>
                <p>Informasi Kesehatan terkini dan terpercaya</p>
            </div>
        </div>							
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-service">
                    <img class="img-fluid" src="/assets/img/s1.jpg" alt="">
                    <a href="#"><h4>Makanan sehat untuk lansia</h4></a>
                    <p>
                        Panduan Mengatur Menu Makanan untuk Lansia, Lengkap dengan Porsinya. 
                    </p>
                    <button type="button" class="btn btn-info">Selengkapnya</button>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-service">
                    <img class="img-fluid" src="/assets/img/s2.jpg" alt="">
                    <a href="#"><h4>Olahraga yang cukup untuk lansia</h4></a>
                    <p>
                        Berbagai Jenis Olahraga untuk Lansia Beserta Manfaatnya. 
                    </p>
                    <button type="button" class="btn btn-info">Selengkapnya</button>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-service">
                    <img class="img-fluid" src="/assets/img/s3.jpg" alt="">
                    <a href="#"><h4>Periksa kesehatan rutin</h4></a>
                    <p>
                        Ini dia 8 Tes Kesehatan yang Rutin Dilakukan Lansia. 
                    </p>
                    <button type="button" class="btn btn-info">Selengkapnya</button>
                </div>
            </div>																		
        </div>
    </div>	
</section>
@endsection