<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row my-3">
        <div class="col-md-4">
            <h3 class="font-weight-bold"><?= $sidebar; ?></h3>
        </div>
    </div>
    <div class="row mx-3">
        <div class="col">
            <a href="<?= base_url('guru/tambah_pemakaian'); ?>" class="btn btn-primary font-weight-bold"><i class="fas fa-plus"> Form Tambah</i></a>
            <a href="<?= base_url('guru/print_pakai'); ?>" class="btn btn-success my-3 font-weight-bold"><i class="fas fa-print"></i></a>
            <br>
            <?= $this->session->flashdata('pesan'); ?>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Hari</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Jam Ke</th>
                            <th scope="col">Guru Pengampuh</th>
                            <th scope="col">Laboratorium</th>
                            <th scope="col">Materi</th>
                            <th scope="col" colspan="2" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $n = 1; ?>
                        <?php foreach ($lab as $l) : ?>
                            <tr>
                                <th scope="row"><?= $n++; ?></th>
                                <td><?= $l['hari']; ?></td>
                                <td><?= $l['tanggal']; ?></td>
                                <td><?= $l['kelas']; ?></td>
                                <td><?= $l['jam']; ?></td>
                                <td><?= $l['guru_pengampuh']; ?></td>
                                <td><?= $l['lab']; ?></td>
                                <td><?= $l['materi']; ?></td>
                                <td>
                                    <a href="<?= base_url('guru/ubah_pemakaian/'); ?><?= $l['id']; ?>" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                </td>
                                <td>
                                    <a href="<?= base_url('guru/hapus_pemakaian/'); ?><?= $l['id']; ?>" class="btn btn-danger" onclick="return confirm('anda yakin')"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->