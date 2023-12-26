@extends('partials.dashboard.main')
@section('content')
<div class="card">
    <div class="card-header">
        <div class="card-title">Klinik</div>
        <p>Data Rekomendasi Klinik Sesuai Dengan Kebutuhan dan Penyakit Pasien</p>
        
    </div>
    <div class="card-body">
        <button type="button" class="btn mb-3 btn-warning">Tambah</button>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Klinik</th>
                        <th>Alamat Klinik</th>
                        <th>Jenis Penyakit</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Klinik Permata Indah</td>
                        <td>Jl. Margonda No.100</td>
                        <td>Table cell</td>
                        <td>
                            <a href="/klinik"><i class="la la-edit la-lg"></i></a>
                            <a href="/klinik"><i class="la la-trash la-lg"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Klinik Permata Indah 2</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>
                            <a href="/klinik"><i class="la la-edit la-lg"></i></a>
                            <a href="/klinik"><i class="la la-trash la-lg"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Klinik Mas Medis</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>
                            <a href="/klinik"><i class="la la-edit la-lg"></i></a>
                            <a href="/klinik"><i class="la la-trash la-lg"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Klinik Widyaguna Health</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>  
                            <a href="/klinik"><i class="la la-edit la-lg"></i></a>
                            <a href="/klinik"><i class="la la-trash la-lg"></i></a></td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Klinik Kinan</td>
                        <td>Table cell</td>
                        <td>Table cell</td>
                        <td>
                            <a href="/klinik" style="color: orange; font-size: 20px; font-weight: bold;"><i class="la la-edit la-lg"></i></a>
                            <a href="/klinik" style="color: red; font-size: 20px; font-weight: bold;"><i class="la la-trash la-lg"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection