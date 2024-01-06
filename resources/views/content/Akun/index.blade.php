@extends('partials.dashboard.main')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-title">Akun</div>
            <p>Data Akun & Validasi Akun Kontributor</p>
        </div>
        <div class="card-body">
            {{-- <a href="{{ url('akun/create') }}" type="button" class="btn mb-3 btn-warning">Tambah</a> --}}
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach ($akuns as $akun)
                            <tr>
                                <th scope="row">{{ $no }}</th>
                                <td>{{ $akun->name }}</td>
                                <td>{{ $akun->email }}</td>
                                <td>{{ $akun->role }}</td>
                                <td>
                                    <a href="akun/edit/{{ $akun->id }}"
                                        style="color: orange; font-size: 20px; font-weight: bold;"><i
                                            class="la la-edit la-lg"></i></a>
                                    <a href="akun/delete/{{ $akun->id }}"
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
