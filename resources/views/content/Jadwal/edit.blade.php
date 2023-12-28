@extends('partials.dashboard.main')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-title">Edit Jadwal Konsultasi</div>
            <p>Data Jadwal konsultasi Terkini mengenai Kesehatan</p>

        </div>

        <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="text">Lokasi Klinik</label>
                    <input type="text" class="form-control" id="lokasi" placeholder="Masukkan Lokasi">
                </div>
                <div class="form-group">
                    <label for="text">Alamat Klinik</label>
                    <input type="text" class="form-control" id="alamat" placeholder="Masukkan alamat">
                </div>
                <div class="form-group">
                    <label for="text">Link Form</label>
                    <input type="text" class="form-control" id="link" placeholder="Masukkan link">
                </div>
                <div class="form-group">
                    <label for="text">Tanggal Konsultasi</label>
                    <input type="date" class="form-control" id="tanggal">
                </div>
                <div class="form-group">
                    <label for="text">File Gambar</label>
                    <input type="file" class="form-control" id="gambar" accept=".png, .jpg, .jpeg">
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
