<div class="container-fluid px-4">
    <h3 class="mt-4">Laporan Data Karyawan</h3>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="<?= base_url('admin'); ?>">Dashboard</a></li>
        <li class="breadcrumb-item active">Laporan Data Karyawan</li>
    </ol>
    <div class="card mb-4">
        <div class="card-body">
            <?php if (empty($karyawan)) : ?>
                <p>Data masih kosong...!</p>
            <?php else : ?>
                <div class="table-responsive">
                    <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead class="table-primary">
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
                            <?php foreach ($karyawan as $index => $kywn) : ?>
                                <tr>
                                    <td><?= $index + 1; ?></td>
                                    <td><?= $kywn['nik']; ?></td>
                                    <td><?= $kywn['nama']; ?></td>
                                    <td><?= $kywn['jenis_kelamin']; ?></td>
                                    <td><?= $kywn['alamat']; ?></td>
                                    <td><?= $kywn['no_telepon']; ?></td>
                                    <td><img src="<?= base_url('gambar/') . $kywn['gambar']; ?>" width="50"></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>No Telepon</th>
                                <th>Foto</th>
                            </tr>
                        </tfoot>
                    </table>
                    <!-- Print Button Section -->
                    <div class="mt-4">
                        <a href="<?= base_url('karyawan/cetak_karyawan') ?>" class="btn btn-success" target="_blank">Print Report</a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>