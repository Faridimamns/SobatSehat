@extends('partials.dashboard.main')
@section('content')
<div class="card">
    <div class="card-header">
        <div class="card-title">Edit Jadwal Konsultasi</div>
        <p>Data Jadwal konsultasi Terkini mengenai Kesehatan</p>
    </div>
    <form class="forms-sample" action="{{ url('/jadwal', $jadwal->id)  }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card-body">    
            <div class="form-group">
                <label for="text">Lokasi Klinik</label>
                <input type="text" class="form-control" name="lokasi" value="{{$jadwal->lokasi}}" id="lokasi" placeholder="Masukkan Lokasi">
            </div>
            <div class="form-group">
                <label for="text">Alamat Klinik</label>
                <input type="text" class="form-control" name="alamat" value="{{$jadwal->alamat}}" id="alamat" placeholder="Masukkan alamat">
            </div>
            <div class="form-group">
                <label for="text">Link Form</label>
                <input type="text" class="form-control" name="link" value="{{$jadwal->link}}" id="link" placeholder="Masukkan link">
            </div>
            <div class="form-group">
                <label for="text">Tanggal Konsultasi</label>
                <input type="date" class="form-control" name="tanggal" value="{{$jadwal->tanggal}}" id="tanggal">
            </div>
            <div class="form-group">
                <label for="text">File Gambar</label>
                <input type="file" class="form-control" id="gambar" name="gambar" value="{{$jadwal->gambar}}" accept=".png, .jpg, .jpeg">
            </div>
            <div class="mt-2 mb-2 p-2">
                <a href="/jadwal" type="button" class="btn btn-danger">Cancel</a>
                <input type="submit" class="btn btn-info" value="Submit">
            </div>
        </form>


    </div>
</div>
@endsection
