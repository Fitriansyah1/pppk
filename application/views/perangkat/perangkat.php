<!-- Begin Page Content -->
<div class="container-fluid" style="margin-top: 20px;">

    <!-- Page Heading -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Perangkat
                <!-- Button Modal -->
                <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
                    Tambah Data
                </button>
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Jenis</th>
                            <th>Merek</th>
                            <th>Jumlah</th>
                            <th>Kondisi</th>
                            <th>Lokasi</th>
                            <th style="width: 125px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($perangkat as $pngt) : ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $pngt['kode_perangkat']; ?></td>
                                <td><?php echo $pngt['nama_perangkat']; ?></td>
                                <td><?php echo $pngt['jenis_perangkat']; ?></td>
                                <td><?php echo $pngt['merek']; ?></td>
                                <td><?php echo $pngt['jumlah']; ?></td>
                                <td><?php echo $pngt['kondisi']; ?></td>
                                <td><?php echo $pngt['lokasi']; ?></td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editModal<?php echo $pngt['id_perangkat']; ?>">
                                        Edit
                                    </button>
                                    <a href="javascript:void(0);" onclick="deleteConfirmation('<?php echo base_url(); ?>perangkat/delete_perangkat/<?php echo $pngt['id_perangkat']; ?>')" class="btn btn-sm btn-danger">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal Untuk Tambah Data -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('perangkat/proses_tambah_perangkat'); ?>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="kode_perangkat" class="form-label">Kode Perangkat</label>
                        <input type="text" id="kode_perangkat" name="kode_perangkat" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="nama_perangkat" class="form-label">Nama Perangkat</label>
                        <input type="text" id="nama_perangkat" name="nama_perangkat" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="jenis_perangkat" class="form-label">Jenis Perangkat</label>
                        <input type="text" id="jenis_perangkat" name="jenis_perangkat" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="merek" class="form-label">Merek</label>
                        <input type="text" id="merek" name="merek" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="jumlah" class="form-label">Jumlah</label>
                        <input type="number" id="jumlah" name="jumlah" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="kondisi" class="form-label">Kondisi</label>
                        <input type="text" id="kondisi" name="kondisi" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="lokasi" class="form-label">Lokasi</label>
                        <input type="text" id="lokasi" name="lokasi" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Untuk Edit Data -->
<?php foreach ($perangkat as $pngt) : ?>
    <div class="modal fade" id="editModal<?php echo $pngt['id_perangkat']; ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel<?php echo $pngt['id_perangkat']; ?>" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title" id="editModalLabel<?php echo $pngt['id_perangkat']; ?>">Form Edit Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="text-white">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open_multipart('perangkat/proses_edit_perangkat/' . $pngt['id_perangkat']); ?>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="kode_perangkat" class="form-label">Kode Perangkat</label>
                            <input type="text" id="kode_perangkat" name="kode_perangkat" class="form-control" value="<?php echo $pngt['kode_perangkat']; ?>">
                        </div>
                        <div class="col-md-6">
                            <label for="nama_perangkat" class="form-label">Nama Perangkat</label>
                            <input type="text" id="nama_perangkat" name="nama_perangkat" class="form-control" value="<?php echo $pngt['nama_perangkat']; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="jenis_perangkat" class="form-label">Jenis Perangkat</label>
                            <input type="text" id="jenis_perangkat" name="jenis_perangkat" class="form-control" value="<?php echo $pngt['jenis_perangkat']; ?>">
                        </div>
                        <div class="col-md-6">
                            <label for="merek" class="form-label">Merek</label>
                            <input type="text" id="merek" name="merek" class="form-control" value="<?php echo $pngt['merek']; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="jumlah" class="form-label">Jumlah</label>
                            <input type="number" id="jumlah" name="jumlah" class="form-control" value="<?php echo $pngt['jumlah']; ?>">
                        </div>
                        <div class="col-md-6">
                            <label for="kondisi" class="form-label">Kondisi</label>
                            <input type="text" id="kondisi" name="kondisi" class="form-control" value="<?php echo $pngt['kondisi']; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="lokasi" class="form-label">Lokasi</label>
                            <input type="text" id="lokasi" name="lokasi" class="form-control" value="<?php echo $pngt['lokasi']; ?>">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <?php echo form_close() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- Akhir Modal Edit Data -->