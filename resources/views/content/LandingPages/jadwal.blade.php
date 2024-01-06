@extends('partials.landingPages.main')
@section('content')
<section class="banner-area relative about-banner" id="home">	
    <div class="overlay overlay-bg"></div>
    <div class="container">				
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    JADWAL				
                </h1>	
                <p class="text-white link-nav"><a href="index.html">Beranda </a>  <span class="lnr lnr-arrow-right"></span>  <a href="services.html"> Jadwal</a></p>
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
                <h1 class="pb-10">Jadwal Konsultasi</h1>
                <p>Informasi Lokasi dan Jadwal Konsultasi </p>
            </div>
        </div>							
        <div class="row">
            @foreach ($jadwals as $jadwal)
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="single-service">
                    <img class="img-fluid" src="{{asset('storage/' . $jadwal->gambar) }}" style="width: 50rem; height: 15rem;">
                    <a href="#"><h4>{{ $jadwal->lokasi }}</h4></a>
                    <p>
                        {{ $jadwal->alamat }} 
                    </p>
                    <div class="mt-2" style="display: flex; justify-content: start; align-items: center">
                        <a type="button" href="{{ $jadwal->link }}" class="btn btn-danger mr-2">DAFTAR</a>
                        <i class="fa fa-calendar fa-2x mr-2" aria-hidden="true"></i>
                        <span
                            style="color: black; font-weight: bold">{{ \Carbon\Carbon::parse($jadwal->tanggal)->format('d F Y') }}</span>
                    </div>
                </div>
            </div>
            @endforeach
																	
        </div>
    </div>	
</section>
@endsection


