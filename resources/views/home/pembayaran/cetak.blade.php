<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Pembayaran</title>
</head>
<body onload="window.print()">
    <center>
        <h2>Laporan Transaksi Pembayaran</h2>
        <table border="1" style="font-weight: bold;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NIM</th>
                    <th>Tanggal Bayar</th>
                    <th>Nominal</th>
                    <th>Jumlah Bayar</th>
                    <th>Keterangan</th>
                    <th>Nama Petugas</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pembayaran as $p )
                <tr style="text-align: center;">
                    <td>{{ $loop-> index+1 }}</td>
                    <td>{{ $p->siswa->nis }}</td>
                    <td>{{ $p-> tgl_bayar }}</td>
                    <td>{{ $p->spp->nominal }}</td>
                    <td>{{ $p-> jumlah_bayar }}</td>
                    <td>{{ $p->spp->keterangan }}</td>
                    <td>{{ $p->user->name }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </center>

    <div class="kotak" style="margin-left: 800px;">
        <p>Bandung, ............</p>
        <br>
        <br>
        <p>Administrasi Kampus</p>
    </div>
</body>
</html>