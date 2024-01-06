@extends('partials.dashboard.main')
@section('content')
<div class="card">
    <div class="card-header">
        <div class="card-title">Tambah Data Akun</div>
        @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>    
                @endforeach
            </ul>
        </div>
        @endif
        <p>Penambahan Data Akun Rekomendasi</p>
    </div>
    <div class="card-body">
        <form class="forms-sample" action="{{ url('/akun') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="text">Nama</label>
                <input type="text" class="form-control" name="nama" id="text" placeholder="Masukkan Nama Klinik">
            </div>
            <div class="form-group">
                <label for="text-area">Email</label>
                <input type="text-area" class="form-control" name="alamat" id="text-area" placeholder="Masukkan Alamat Klinik">
            </div>
            <div class="form-group">
                <label for="text-area">Role</label>
                <input type="text-area" class="form-control" name="penyakit" id="text-area" placeholder="Masukkan Jenis Penyakit">
            </div>

            <div class="mt-2 mb-2 p-2">
                <a href="{{ url('akun/') }}" name="cancel" type="button" class="btn btn-danger">Cancel</a>
                {{-- <button name="submit" type="submit" class="btn btn-info">Submit</button> --}}
                <input type="submit" class="btn btn-info" value="Submit">
            </div>
        </form>
    </div>
</div>
@endsection