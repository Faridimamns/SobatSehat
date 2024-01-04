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
                <h1 class="pb-10">JADWAL KONSULTASI</h1>
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
                    <div style="display: flex; justify-content: start; align-items: center">
                        <a type="button" href="{{ $jadwal->link }}" class="btn btn-danger mr-2">DAFTAR</a>
                        <i class="fa fa-calendar fa-2x mr-2" aria-hidden="true"></i>
                        <span style="color: black; font-weight: bold" >{{ \Carbon\Carbon::parse($jadwal->tanggal)->format('d F Y') }}</span> 
                    </div>
                </div>
                @endforeach
            </div>
            {{-- <div class="col-lg-4 col-md-6">
                <div class="single-service">
                    <img class="img-fluid" src="/assets/img/s2.jpg" alt="">
                    <a href="#"><h4>UPTD PUSKESMAS DEPOK JAYA</h4></a>
                    <p>
                        Jl. Melati Raya No.1 Kel, Depok Jaya, Kec. Pancoran Mas, Kota Depok, Jawa Barat 16432 
                    </p>
                    <div style="display: flex; justify-content: start; align-items: center">
                        <button type="button" class="btn btn-danger mr-2">DAFTAR</button>
                        <i class="fa fa-calendar fa-2x mr-2" aria-hidden="true"></i>
                        <span style="color: black; font-weight: bold" >20-11-2023</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-service">
                    <img class="img-fluid" src="/assets/img/s3.jpg" alt="">
                    <a href="#"><h4>UPTD PUSKESMAS BEJI</h4></a>
                    <p>
                        Jl. Bambon Raya No.7B, RT.1/RW.1, Beji Tim., Kecamatan Beji, Kota Depok, Jawa Barat 16422 
                    </p>
                    <div style="display: flex; justify-content: start; align-items: center">
                        <button type="button" class="btn btn-danger mr-2">DAFTAR</button>
                        <i class="fa fa-calendar fa-2x mr-2" aria-hidden="true"></i>
                        <span style="color: black; font-weight: bold" >16-02-2024</span>
                    </div>
                </div>
            </div>																		 --}}
        </div>
    </div>	
</section>
@endsection