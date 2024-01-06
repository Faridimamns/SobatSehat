@extends('partials.dashboard.main')
@section('content')
<div class="card">
    <div class="card-header">
        <div class="card-title">Edit Data Klinik</div>
        <p>Edit Data Klinik Rekomendasi</p>
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
        <div class="form-group">
            <label for="text">File Gambar</label>
            <input type="file" class="form-control" id="gambar" accept=".png, .jpg, .jpeg">
        </div>
        <div class="mt-2 mb-2 p-2">
            <a href="{{ url('klinik/') }}" name="cancel" type="button" class="btn btn-danger">Cancel</a>
            <a href="{{ url('klinik/') }}"><button name="submit" type="submit" class="btn btn-primary">Submit</button></a>
        </div>
</div>
@endsection