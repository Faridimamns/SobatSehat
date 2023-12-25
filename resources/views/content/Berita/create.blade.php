@extends('partials.dashboard.main')
@section('content')
<div class="card">
    <div class="card-header">
        <div class="card-title">Tambah Data Berita</div>
        <p>Penambahan Data Berita dan Informasi</p>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label for="text">Judul</label>
            <input type="text" class="form-control" id="text" placeholder="Masukkan Judul">
        </div>
        <div class="form-group">
            <label for="text-area">Informasi</label>
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
</div>
@endsection