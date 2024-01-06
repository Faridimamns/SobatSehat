@extends('partials.dashboard.main')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-title">Edit Data Berita</div>
            <p>Edit Data Berita dan Informasi</p>
        </div>
        <form class="forms-sample" action="{{ url('/berita', $berita->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label for="text">Judul</label>
                    <input type="text" class="form-control" name="judul" value="{{ $berita->judul }}" id="text"
                        placeholder="Masukkan Judul">
                </div>
                <div class="form-group">
                    <label for="text-area">Informasi</label>
                    <input type="text-area" class="form-control" name="informasi" value="{{ $berita->informasi }}"
                        id="text-area" placeholder="Masukkan Informasi">
                </div>
                <div class="form-group">
                    <label for="link">Link</label>
                    <input type="link" class="form-control" id="link" name="link" value="{{ $berita->link }}"
                        placeholder="Masukkan Link">
                </div>
                <div class="form-group">
                    <label for="text">File Gambar</label>
                    <input type="file" class="form-control" id="gambar" name="gambar" value="{{ $berita->gambar }}"
                        accept=".png, .jpg, .jpeg">
                </div>
                <div class="mt-2 mb-2 p-2">
                    <a href="/berita" type="button" class="btn btn-danger">Cancel</a>
                    <input type="submit" class="btn btn-info" value="Submit">
                </div>
            </div>
        </form>
    </div>
@endsection
