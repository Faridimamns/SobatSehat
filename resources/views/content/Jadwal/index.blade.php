@extends('partials.dashboard.main')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-title">Jadwal Konsultasi</div>
            <p>Data Jadwal konsultasi Terkini mengenai Kesehatan</p>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <a href="{{ url('jadwal/create') }}" type="button" class="btn btn-warning">
                    <span>Tambah</span>
                    <i class="fas fa-edit"></i>
                </a>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Lokasi</th>
                            <th>Alamat</th>
                            <th>Link</th>
                            <th>Tanggal</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach ($jadwals as $jadwal)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $jadwal->lokasi }}</td>
                                <td>{{ $jadwal->alamat }}</td>
                                <td>{{ $jadwal->link }}</td>
                                <td>{{ $jadwal->tanggal }}</td>
                                <td>{{ $jadwal->gambar }}</td>

                                <td>
                                    <a href="jadwal/edit/{{ $jadwal->id }}"
                                        style="color: orange; font-size: 20px; font-weight: bold;"><i
                                            class="la la-edit la-lg"></i></a>
                                    <a href="/jadwal/delete/{{ $jadwal->id }}"
                                        style="color: red; font-size: 20px; font-weight: bold;"><i
                                            class="la la-trash la-lg"></i></a>
                                </td>
                                @php $no++; @endphp
                        @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
