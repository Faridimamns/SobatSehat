@extends('partials.dashboard.main')
@section('content')
<div class="card">
    <div class="card-header">
        <div class="card-title">Jadwal Konsultasi</div>
        <p>Data Jadwal konsultasi Terkini mengenai Kesehatan</p>
    </div>
    
    <div class="card-body">

        <div class="mb-3">
            <a href="#" style="
            display: inline-block;
            padding: 10px;
            background-color: #FFD371;
            color: black;
            text-decoration: none;
            border-radius: 5px;">
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
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Klinik Permata Indah Permai</td>
                        <td style="width: 300px;">Komplek Perumahan Taman Permata Indah 2 Blok E No.8, Pejagalan, Kec. Penjaringan, Jkt Utara, 14450</td>
                        <td>Link Form</td>
                        <td>18-12-2023</td>
                        <td style="width: 135px;">
                        <div>

                                <a href="/" style="color: orange; font-size: 20px; font-weight: bold;"><i class="la la-edit la-lg"></i></a>
                                <a href="/" style="color: red; font-size: 20px; font-weight: bold;"><i class="la la-trash la-lg"></i></a>
                            
                        </div>
                        </td>
                        
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>UPTD Puskesmas Depok Jaya</td>
                        <td style="width: 300px;">Jl. Melati Raya No.1 Kel, Depok Jaya, Kec. Pancoran Mas, Kota Depok, Jawa Barat 16432</td>
                        <td>Link Form</td>
                        <td>20-11-2023</td>
                        <td style="width: 135px;">
                            <div>
                                <a href="/" style="color: orange; font-size: 20px; font-weight: bold;"><i class="la la-edit la-lg"></i></a>
                                <a href="/" style="color: red; font-size: 20px; font-weight: bold;"><i class="la la-trash la-lg"></i></a>
                            </div>
                        </td>
                        
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>UPTD Puskesmas Beji</td>
                        <td style="width: 300px;">Jl. Bambon Raya No.7B, RT.1/RW.1, Beji Tim., Kecamatan Beji, Kota Depok, Jawa Barat 16422</td>
                        <td>Link Form</td>
                        <td>16-2-2024</td>
                        <td style="width: 135px;">
                            <div>
                                <a href="/" style="color: orange; font-size: 20px; font-weight: bold;"><i class="la la-edit la-lg"></i></a>
                                <a href="/" style="color: red; font-size: 20px; font-weight: bold;"><i class="la la-trash la-lg"></i></a>
                            </div>
                        </td>
                        
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection