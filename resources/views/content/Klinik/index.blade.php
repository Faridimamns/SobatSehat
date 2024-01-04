@extends('partials.dashboard.main')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-title">Klinik</div>
            <p>Data Rekomendasi Klinik Sesuai Dengan Kebutuhan dan Penyakit Pasien</p>
        </div>
        <div class="card-body">
            <a href="{{ url('klinik/create') }}" type="button" class="btn mb-3 btn-warning">Tambah</a>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Klinik</th>
                            <th>Alamat Klinik</th>
                            <th>Jenis Penyakit</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach ($kliniks as $klinik)
                            <tr>
                                <th scope="row">{{ $no }}</th>
                                <td>{{ $klinik->nama }}</td>
                                <td>{{ $klinik->alamat }}</td>
                                <td>{{ $klinik->penyakit }}</td>
                                <td>{{ $klinik->gambar }}</td>
                                <td>
                                    <a href="klinik/edit/{{ $klinik->id }}"
                                        style="color: orange; font-size: 20px; font-weight: bold;"><i
                                            class="la la-edit la-lg"></i></a>
                                    <a href="klinik/delete/{{ $klinik->id }}"
                                        style="color: red; font-size: 20px; font-weight: bold;"><i
                                            class="la la-trash la-lg"></i></a>
                                </td>
                            </tr>
                            @php $no++; @endphp
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
