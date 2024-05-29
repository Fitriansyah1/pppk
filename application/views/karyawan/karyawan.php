<!-- Begin Page Content -->
<div class="container-fluid" style="margin-top: 20px;">

    <!-- Page Heading -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Karyawan
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
                            <th>Nik</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>No Telepon</th>
                            <th>Foto</th>
                            <th style="width: 125px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($karyawan as $kywn) : ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $kywn['nik']; ?></td>
                                <td><?php echo $kywn['nama']; ?></td>
                                <td><?php echo $kywn['jenis_kelamin']; ?></td>
                                <td><?php echo $kywn['alamat']; ?></td>
                                <td><?php echo $kywn['no_telepon']; ?></td>
                                <td><img src="<?php echo base_url() . 'gambar/' . $kywn['gambar']; ?>" width="50"></td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editModal<?php echo $kywn['id_karyawan']; ?>">
                                        Edit
                                    </button>
                                    <a href="javascript:void(0);" onclick="deleteConfirmation('<?= base_url(); ?>karyawan/delete_karyawan/<?= $kywn['id_karyawan']; ?>')" class="btn btn-sm btn-danger">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Modal  -->

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
                <?php echo form_open_multipart('karyawan/proses_tambah_karyawan'); ?>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="nik" class="form-label">Nik</label>
                        <input type="text" id="nik" name="nik" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" id="nama" name="nama" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                            <option value="">-- Pilih Jenis Kelamin --</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" id="alamat" name="alamat" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="no_telepon" class="form-label">No Telepon</label>
                        <input type="text" id="no_telepon" name="no_telepon" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label>Foto</label>
                        <input type="file" name="userfile" class="form-control" size="20" required="">
                    </div>
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

<!-- Akhir Modal Tambah Data -->


<!-- Modal Untuk Edit Data -->
<?php foreach ($karyawan as $kywn) : ?>
    <div class="modal fade" id="editModal<?php echo $kywn['id_karyawan']; ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel<?php echo $kywn['id_karyawan']; ?>" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title" id="editModalLabel<?php echo $kywn['id_karyawan']; ?>">Form Edit Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="text-white">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open_multipart('karyawan/proses_edit_karyawan/' . $kywn['id_karyawan']); ?>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="nik" class="form-label">Nik</label>
                            <input type="text" id="nik" name="nik" class="form-control" value="<?php echo $kywn['nik']; ?>">
                        </div>
                        <div class="col-md-6">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" id="nama" name="nama" class="form-control" value="<?php echo $kywn['nama']; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                <option value="">-- Pilih Jenis Kelamin --</option>
                                <option value="Laki-Laki" <?php echo $kywn['jenis_kelamin'] == 'Laki-Laki' ? 'selected' : ''; ?>>Laki-Laki</option>
                                <option value="Perempuan" <?php echo $kywn['jenis_kelamin'] == 'Perempuan' ? 'selected' : ''; ?>>Perempuan</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" id="alamat" name="alamat" class="form-control" value="<?php echo $kywn['alamat']; ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="no_telepon" class="form-label">No Telepon</label>
                            <input type="text" id="no_telepon" name="no_telepon" class="form-control" value="<?php echo $kywn['no_telepon']; ?>">
                        </div>
                        <div class="col-md-6">
                            <label>Foto</label>
                            <input type="file" name="userfile" class="form-control" size="20">
                            <input type="hidden" name="old_image" value="<?php echo $kywn['gambar']; ?>">
                        </div>
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
<?php endforeach; ?>
<!-- Akhir Modal Edit Data -->