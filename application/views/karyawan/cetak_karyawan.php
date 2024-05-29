<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Data Karyawan</title>
    <link href="<?= base_url() ?>assets/backend/css_laporan/karyawan.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>Report Data Karyawan</h1>
        <h3><?= date('d F Y'); ?></h3>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>No Telepon</th>
                    <th>Foto</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($karyawan as $kywn) { ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?= $kywn['nik']; ?></td>
                        <td><?= $kywn['nama']; ?></td>
                        <td><?= $kywn['jenis_kelamin']; ?></td>
                        <td><?= $kywn['alamat']; ?></td>
                        <td><?= $kywn['no_telepon']; ?></td>
                        <td><img src="<?= base_url('gambar/') . $kywn['gambar']; ?>" class="employee-img"></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <div class="signature">
            <p>HR Manager,</p>
            <br><br><br>
            <p><u>John Doe</u></p>
        </div>
    </div>

    <script>
        window.print();
    </script>
</body>

</html>