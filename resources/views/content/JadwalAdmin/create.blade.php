@extends('partials.dashboard.main')
@section('content')
<div class="card">
    <div class="card-header">
        <div class="card-title">Tambah Jadwal Konsultasi</div>
        <p>Data Jadwal konsultasi Terkini mengenai Kesehatan</p>
    
    </div>
    
    <div class="card-body">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <form>
        <div class="form-group row">
            <label for="lokasi" class="col-3 col-form-label">Lokasi Klinik</label> 
            <div class="col-9">
            <input id="lokasi" name="lokasi" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-3 col-form-label">Alamat</label> 
            <div class="col-9">
            <textarea id="alamat" name="alamat" cols="40" rows="4" class="form-control"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="link" class="col-3 col-form-label">Link Form</label> 
            <div class="col-9">
            <input id="link" name="link" type="text" class="form-control">
            </div>
        </div> 
        <div class="form-group row">
            <label for="tanggal" class="col-3 col-form-label">Tanggal Konsultasi:</label>
            <div class="col-5">
            <input type="date" id="tanggal" name="tanggal" class="form-control" required>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-9">
            <button name="cancel" type="cancel" class="btn btn-danger">Cancel</button>
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
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