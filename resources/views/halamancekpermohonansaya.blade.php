@extends("navbar.main")
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="if-edge">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <title>cekpermohonan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.5.0/css/select.bootstrap5.min.css">
    <link rel="stylesheet" href="./css/button.css">
    <link rel="stylesheet" href="./css/permohonansaya.css">
<style type="text/css">
	.gradient1 {
	  background-image: linear-gradient(90deg, #82F1D2, #D0FBF4, #DFF8FB);
	}
</style>
    
</head>
@section('container')
<section>
    <div class="col">
        <div class="card gradient1">
            <div class="card-header">
                <h1 class="h3"><strong>Permohonan Saya</strong></h1>
            </div>   
        </div>           
    </div>
    <div class="row mt-5">
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pendaftar</th>
                <th>ID Konsultasi</th>
                <th>Tanggal Daftar</th>
                <th>Jenis Layanan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Iin Mardiyana</td>
                <td>PJK001</td>
                <td>12-01-2023 13:50</td>
                <td>Pelayanan Surat Pernyataan Belum Memiliki Rumah</td>
                <td><div class="align:justify">
                    <a href="/detail"><button class="button button2"><strong>Detail</strong></button></a>
                </div></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Iin Mardiyana</td>
                <td>PJK002</td>
                <td>12-02-2023 11:50</td>
                <td>Pelayanan Surat Pernyataan Penghasilan untuk Non Formal</td>
                <td><div class="align:justify">
                    <button class="button button2"><strong>Detail</strong></button>
                </div></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Iin Mardiyana</td>
                <td>PJK003</td>
                <td>23-03-2023 10:50</td>
                <td>Pelayanan Surat Pernyataan, Surat Pernyataan Belum Pernah Menikah, Surat Persetujuan
                    Orang Tua/ Wali, Daftar Riwayat Hidup untuk pendaftaran sebagai TNI</td>
                <td><div class="align:justify">
                    <button class="button button2"><strong>Detail</strong></button>
                </div></td>
            </tr>
            <tr>
                <td>4</td>
                <td>Iin Mardiyana</td>
                <td>PJK004</td>
                <td>05-05-2023 12:50</td>
                <td>Pelayanan Surat Kuasa Khusus untuk Pembayaran Pensiun</td>
                <td><div class="align:justify">
                    <button class="button button2"><strong>Detail</strong></button>
                </div></td>
            </tr>
            <tr>
                <td>5</td>
                <td>Iin Mardiyana</td>
                <td>PJK005</td>
                <td>19-07-2023 09:50</td>
                <td>Pelayanan Surat Keterangan Domisili (Lembaga Berbadan Hukum, Lembaga Berbadan Usaha, Lembaga Non Berbadan Hukum dan Lembaga Non Berbadan Usaha)</td>
                <td><div class="align:justify">
                    <button class="button button2"><strong>Detail</strong></button>
                </div></td>
            </tr>
        </tbody>
    </table>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src= "https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
<script src= "https://cdn.datatables.net/select/1.5.0/js/dataTables.select.min.js"></script>
<script src="./js/coba.js"></script>
</section>
@endsection
