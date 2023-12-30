@extends('partials.dashboard.main')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-title">Berita Dan Informasi</div>
            <p>Data Berita dan Informasi Terkini mengenai Kesehatan</p>
        </div>
        <div class="card-body">
            <a href="{{ url('berita/create') }}" type="button" class="btn btn-warning mb-3">Tambah</a>
            {{-- <a href="{{ url('berita.create')}}" type="button">asldknalsdn</a> --}}

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Judul</th>
                            <th>Informasi</th>
                            <th>Link</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($beritas as $b)
                            <tr>
                                <th scope="row"></th>
                                <td>{{$b->id}}</td>
                                <td>{{$b->judul}}</td>
                                <td>{{$b->informasi}}</td> 
                                <td>{{$b->link}}</td>
                                <td>{{$b->gambar}}</td>
                                <td>
                                    <a href="/berita" style="color: orange; font-size: 20px; font-weight: bold;"><i
                                            class="la la-edit la-lg"></i></a>
                                    <a href="/berita" style="color: red; font-size: 20px; font-weight: bold;"><i
                                            class="la la-trash la-lg"></i></a>


                                </td>
                        @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
