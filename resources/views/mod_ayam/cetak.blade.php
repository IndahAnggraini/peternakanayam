<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Cetak</title>
    <!-- CSS styling untuk kepala dan logo -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .header {
            /* text-align: center; */
            padding: 20px;
            background-color: #f2f2f2;
            display: flex; /* Mengatur tata letak elemen secara horizontal */
            align-items: center; /* Menyamakan vertikal elemen dalam container */
        }

        .logo {
            max-width: 100px;
            max-height: 100px;
            margin-right: 20px; /* Memberikan jarak antara logo dan teks */
            float: left;
        }

        .nama-perusahaan {
            font-size: 20px; /* Atur ukuran teks sesuai kebutuhan */
            text-align: center;
        }

        .footer {
            text-align: right;
            float: right;
            /* position: absolute;
            bottom: 0; */
            width: 100%;
            padding: 10px;
            background-color: #f2f2f2;
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 5px;
            text-align: left;
        }

        .signature {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <!-- Kepala dan Logo Perusahaan -->
    <div class="header">
        <div class="logo">
            <img src="assets/img/astipel.png" alt="Logo Perusahaan" class="logo">
        </div>
        <div class="nama-perusahaan">
            <h1 style="margin: 5;">Astipel Farm</h1>
            <p style="margin: 0; font-size: 14px;">Jl. Padang Mungka, Kec. Mungka, Kab. Lima Puluh Kota, Sumatera Barat 26254</p>
        </div>
    </div>

    <!-- Data yang akan dicetak -->
    <h3>Laporan Data Ayam :</h3>

    <table>
        <thead>
            <tr>
                <td>No</td>
                <td>Nama Kandang</td>
                <td>Jumlah Ayam Hidup</td>
                <td>Jumlah Ayam Mati</td>
                <td>Total Ayam</td>
                <td>Pakan (Krg/Hari)</td>
                <td>Tanggal</td>
                <!-- Tambahkan kolom lainnya sesuai kebutuhan -->
            </tr>
        </thead>
        <tbody>
            @foreach($tampildata as $baris)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $baris->kandang->nm_kandang }}</td>
                    <td>{{ $baris->jml_hidup }}</td>
                    <td>{{ $baris->jml_mati }}</td>
                    <td>{{ $baris->total }}</td>
                    <td>{{ $baris->pakan }}</td>
                    <td>{{ $baris->tanggal }}</td>
                    <!-- Tambahkan kolom lainnya sesuai kebutuhan -->
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Footer (Tanda Tangan Owner) -->
    <div class="footer">
        <p>Padang Mungka, {{ date('Y-m-d') }}</p>
        <div class="signature">
            <p style="margin-right: 30; margin-top:0">Owner:</p>
            <p style="margin-right: 25; margin-top:40; margin-bottom:0">H. Astipel</p>
            <p style="margin-top: 0;">_______________</p>
        </div>
    </div>
</body>
</html>

