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
            @foreach ($beritas as $berita)
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="single-service">
                    <img class="img-fluid" src="{{asset('storage/' . $berita->gambar) }}" style="width: 50rem; height: 15rem;">
                    <a href="#"><h4>{{ $berita->judul }}</h4></a>
                    <p>
                        {{ $berita->informasi }} 
                    </p>
                    <a href="{{ $berita->link }}" type="button" class="btn btn-info" >Selengkapnya</a>
                </div>
            </div>
            @endforeach
																	
        </div>
    </div>	
</section>
@endsection