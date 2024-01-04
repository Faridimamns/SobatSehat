@extends('partials.dashboard.main')
@section('content')
<div class="card">
    <div class="card-header">
        <div class="card-title">Tambah Data Jadwal</div>
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <p>Data Jadwal konsultasi Terkini mengenai Kesehatan</p>
    </div>
    <form class="forms-sample" action="{{ url('/jadwal') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="card-body">  
        <div class="form-group">
            <label for="text">Lokasi Klinik</label>
            <input type="text" class="form-control" name="lokasi" id="text" placeholder="Masukkan Lokasi">
        </div>
        <div class="form-group">
            <label for="text-area">Alamat Klinik</label>
            <input type="text-area" class="form-control" name="alamat" id="text-area" placeholder="Masukkan alamat">
        </div>
        <div class="form-group">
            <label for="link">Link Form</label>
            <input type="link" class="form-control" name="link" id="link" placeholder="Masukkan link">
        </div>
        <div class="form-group">
            <label for="text">Tanggal Konsultasi</label>
            <input type="date" class="form-control" name="tanggal" id="tanggal">
        </div>
        <div class="form-group">
            <label for="text">File Gambar</label>
            <input type="file" class="form-control" name="gambar" id="gambar" accept=".png, .jpg, .jpeg">
        </div>
        <div class="form-group row">
            <div class="col-9">
                {{-- <a href="{{ url('/jadwal') }}" name="cancel" type="button" class="btn btn-danger">Cancel</a> --}}
                <a href="/jadwal" type="button" class="btn btn-danger">Cancel</a>
                <input type="submit" class="btn btn-info" value="Submit">
            </div>
        </div>
    </form>

            {{-- <form action="/proses-form" method="post">
            <label for="tanggal">Tanggal:</label>
            <input type="date" id="tanggal" name="tanggal" required>
    
        </form> --}}

    </div>
</div>
@endsection
