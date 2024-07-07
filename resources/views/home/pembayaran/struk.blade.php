<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Struk Pembayaran</title>
</head>

<body onload="window.print()">
    <table width="400px">
        <tr align="center">
            <td colspan="3"><b>STMIK Mardira Indonesia</b></td>
        </tr>
        <tr align="center">
            <td colspan="3"><b>Struk Pembayaran SPP</b></td>
        </tr>
        <tr>
            <td colspan="3">
                <hr>
            </td>
        </tr>
        <tr>
            <td colspan="2">Petugas : {{ Auth()->User()->name }}</td>
            <td align="right">Tanggal : <?php echo date('Y/m/d'); ?></td>
        </tr>
        <tr>
            <td colspan="3">
                <hr>
            </td>
        </tr>
        <tr>
            <td> <b>NIM</b> </td>
            <td align="right">:</td>
            <td>{{ $pembayaran->nis }}</td>
        </tr>
        <tr>
            <td> <b>Nama</b> </td>
            <td align="right">:</td>
            <td>{{ $pembayaran->Siswa->nama }}</td>
        </tr>
        <tr>
            <td> <b>SPP</b> </td>
            <td align="right">:</td>
            <td>{{ $pembayaran->Spp->keterangan }}</td>
        </tr>
        <tr>
            <td> <b>Jumlah Bayar</b> </td>
            <td align="right">:</td>
            <td>Rp. {{ number_format($pembayaran->jumlah_bayar, 2, ',', ',') }}</td>
        </tr>
        <tr>
            <td colspan="3">
                <hr>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                Note:
                <br>
                <b>- Struk ini sebagai bukti pembayaran</b>
                <br>
                <b>- Harap simpan dengan baik</b>
            </td>
        </tr>
    </table>
</body>

</html>
