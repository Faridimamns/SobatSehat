@extends('partials.dashboard.main')
@section('content')
<div class="card">
    <div class="card-header">
        <div class="card-title">Tambah Data Klinik</div>
        <p>Penambahan Data Klinik Rekomendasi</p>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label for="text">Nama Klinik</label>
            <input type="text" class="form-control" id="text" placeholder="Masukkan Nama Klinik">
        </div>
        <div class="form-group">
            <label for="text-area">Alamat Klinik</label>
            <input type="text-area" class="form-control" id="text-area" placeholder="Masukkan Alamat Klinik">
        </div>
        <div class="form-group">
            <label for="text-area">Jenis Penyakit</label>
            <input type="text-area" class="form-control" id="text-area" placeholder="Masukkan Jenis Penyakit">
        </div>
        <div class="mt-2 mb-2 p-2">
            <button type="button" class="btn btn-danger">Cancel</button>
            <button type="button" class="btn btn-info">Submit</button>
        </div>
</div>
@endsection