@extends('partials.dashboard.main')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-title">Edit Data Akun</div>
            <p>Edit Data Akun</p>
        </div>
        <form class="forms-sample" action="{{ url('/akun', $akun->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="card-body">
                <div class="form-group">
                    <label for="text">Nama</label>
                    <input type="text" class="form-control" name="name" value="{{ $akun->name}}" id="text" placeholder="">
                </div>
                <div class="form-group">
                    <label for="text-area">Email</label>
                    <input type="text-area" class="form-control" name="email" value="{{ $akun->email}}" id="text-area" placeholder="">
                </div>
                <div class="form-group">
                    <label for="text-area">Role</label>
                    <input type="text-area" class="form-control" name="role" value="{{ $akun->role}}"  id="text-area" placeholder="">
                </div>
                {{-- <div class="form-group">
                    <label for="text">File Gambar</label>
                    <input type="file" class="form-control" name="gambar" value="{{ $klinik->gambar}}" id="gambar" accept=".png, .jpg, .jpeg">
                </div> --}}
                <div class="mt-2 mb-2 p-2">
                    <a href="{{ url('akun/') }}" name="cancel" type="button" class="btn btn-danger">Cancel</a>
                    <input type="submit" class="btn btn-primary" value="Submit">
                </div>
            </div>
        </form>
    @endsection
