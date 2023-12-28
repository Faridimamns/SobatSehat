@extends('partials.dashboard.main')
@section('content')
<div class="card">
    <div class="card-header">
        <div class="card-title">Tambah Jadwal Konsultasi</div>
        <p>Data Jadwal konsultasi Terkini mengenai Kesehatan</p>
    
    </div>
    
    <div class="card-body">
        <div class="form-group">
            <label for="text">Lokasi Klinik</label>
            <input type="text" class="form-control" id="text" placeholder="Masukkan Judul">
        </div>
        <div class="form-group">
            <label for="text-area">Alamat Klinik</label>
            <input type="text-area" class="form-control" id="text-area" placeholder="Masukkan Informasi">
        </div>
        <div class="form-group">
            <label for="link">Link</label>
            <input type="link" class="form-control" id="link" placeholder="Masukkan Link">
        </div>
        <div class="mt-2 mb-2 p-2">
            <button type="button" class="btn btn-danger">Cancel</button>
            <button type="button" class="btn btn-info">Submit</button>
        </div>
        

        {{-- <form action="/proses-form" method="post">
            <label for="tanggal">Tanggal:</label>
            <input type="date" id="tanggal" name="tanggal" required>
    
        </form> --}}

    </div>
</div>
@endsection