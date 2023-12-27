@extends('partials.dashboard.main')
@section('content')
<div class="card">
    <div class="card-header">
        <div class="card-title">Tambah Data Berita</div>
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <p>Penambahan Data Berita dan Informasi</p>
    </div>
    <form class="forms-sample" action="{{ url('/dashboard/berita/store') }}" method="POST">
    @csrf
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
        <div class="form-group">
            <label for="text">File Gambar</label>
            <input type="file" class="form-control" id="gambar" accept=".png, .jpg, .jpeg">
        </div>
        <div class="mt-2 mb-2 p-2">
            <a href="/berita" type="button" class="btn btn-danger">Cancel</a>
            <button type="button" class="btn btn-info">Submit</button>
        </div>
    </div>
    </form>
</div>
@endsection