<div class="container-fluid px-4">
    <h3 class="mt-4">Laporan Perangkat Berdasarkan Kondisi</h3>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="<?= base_url('admin'); ?>">Dashboard</a></li>
        <li class="breadcrumb-item active">Laporan Perangkat Berdasarkan Kondisi</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <form action="" method="get">
                <div class="form-group">
                    <div class="mb-3">
                        <label for="condition" class="form-label">Kondisi :</label>
                        <select name="condition" id="condition" class="form-control" required>
                            <option value="">-- Pilih Kondisi --</option>
                            <option value="Baik">Baik</option>
                            <option value="Rusak Ringan">Rusak Ringan</option>
                            <option value="Rusak Berat">Rusak Berat</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Cari</button>
                    <a href="<?= base_url('perangkat/print_perangkat'); ?>" class="btn btn-secondary">Reset</a>
                </div>
            </form>
        </div>
        <div class="card-body">
            <?php if (empty($perangkat)) { ?>
                <p>Data masih kosong...!</p>
            <?php } else { ?>
                <div class="table-responsive">
                    <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead class="table-primary">
                            <tr>
                                <th>No</th>
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>Jenis</th>
                                <th>Merek</th>
                                <th>Jumlah</th>
                                <th>Kondisi</th>
                                <th>Lokasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($perangkat as $pngt) { ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $pngt['kode_perangkat']; ?></td>
                                    <td><?= $pngt['nama_perangkat']; ?></td>
                                    <td><?= $pngt['jenis_perangkat']; ?></td>
                                    <td><?= $pngt['merek']; ?></td>
                                    <td><?= $pngt['jumlah']; ?></td>
                                    <td><?= $pngt['kondisi']; ?></td>
                                    <td><?= $pngt['lokasi']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>Jenis</th>
                                <th>Merek</th>
                                <th>Jumlah</th>
                                <th>Kondisi</th>
                                <th>Lokasi</th>
                            </tr>
                        </tfoot>
                    </table>
                    <!-- Print Button Section -->
                    <div class="mt-4">
                        <a href="<?= base_url('perangkat/cetak_perangkat?condition=' . $condition) ?>" class="btn btn-success" target="_blank">Print Report</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>