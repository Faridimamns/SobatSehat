@extends('partials.dashboard.main')
@section('content')
<div class="card">
    <div class="card-header">
        <div class="card-title">Berita Dan Informasi</div>
        <p>Data Berita dan Informasi Terkini mengenai Kesehatan</p>
    </div>
    <div class="card-body">
        <button type="button" class="btn btn-warning mb-3">Tambah</button>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Judul</th>
                        <th>Informasi</th>
                        <th>Link</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="/berita" style="color: orange; font-size: 20px; font-weight: bold;"><i class="la la-edit la-lg"></i></a>
                            <a href="/berita" style="color: red; font-size: 20px; font-weight: bold;"><i class="la la-trash la-lg"></i></a>
                            

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection