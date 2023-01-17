@extends("navbar.main")
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="if-edge">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <title>detailpermohonan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.5.0/css/select.bootstrap5.min.css">
</head>
@section('container')
<section>
    <div class="container">
        <div class="row mt-3 mb-3">
            <h2 class="ml-0">Data Pendaftar</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <td>ID Konsultasi/Tanggal Daftar</td>
                    <td>PJK001/10-01-2023</td>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td>12345678</td>
                </tr>
                <tr>
                    <td>Nama Pendaftar</td>
                    <td>Arum Tiyas Handayani</td>
                </tr>
                <tr>
                    <td>Jenis Layanan</td>
                    <td>Pelayanan Surat Pernyataan Belum Memiliki Rumah</td>
                </tr>
            </table>
        </div>
        <div class="row mt-5 mb-3 ">
            <h2 class="ml-0">Riwayat Perjalanan Pendaftaran</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="bg-secondary" style="text-align: center;">
                    <tr>
                        <th><font color="white">No</font></th>
                        <th><font color="white">Tanggal</font></th>
                        <th><font color="white">Deskripsi Proses</font></th>
                        <th><font color="white">Keterangan</font></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>21-01-2023 13:50</td>
                        <td>Pendaftaran berhasil. Menunggu proses verifikasi oleh petugas kelurahan.</td>
                        <td>--</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>21-01-2023 14:50</td>
                        <td>Verifikasi berhasil dilakukan. Pendaftar dapat melihat jadwal dan petugas kunjungan.</td>
                        <td>Petugas Kunjungan :
                            <ol tyoe="1">
                                <li>Ima Tri Indari</li>
                                <li>Iin Mardiyana</li>
                                <li>--</li>
                            </ol>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>25-01-2023 11:00</td>
                        <td>Konsultasi berhasil dilaksanakan.</td>
                        <td>--</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</section>
@endsection
