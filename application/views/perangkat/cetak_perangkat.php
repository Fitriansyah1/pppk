<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Perangkat Berdasarkan Kondisi</title>
    <link href="<?= base_url() ?>assets/backend/css_laporan/cetak.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>Report Perangkat Berdasarkan Kondisi</h1>
        <h2>Fakultas Teknologi Informasi</h2>
        <h3>Kondisi: <?php echo $condition; ?></h3>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Jenis</th>
                    <th>Merek</th>
                    <th>Jumlah</th>
                    <th>Lokasi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($perangkat as $pngt) { ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $pngt['kode_perangkat']; ?></td>
                        <td><?php echo $pngt['nama_perangkat']; ?></td>
                        <td><?php echo $pngt['jenis_perangkat']; ?></td>
                        <td><?php echo $pngt['merek']; ?></td>
                        <td><?php echo $pngt['jumlah']; ?></td>
                        <td><?php echo $pngt['lokasi']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <div class="signature">
            <p>Ketua KPU FTI,</p>
            <br><br><br>
            <p><u>Zainuddin MZ</u></p>
        </div>
    </div>

    <script>
        window.print();
    </script>
</body>

</html>