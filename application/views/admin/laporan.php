<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row my-3">
        <div class="col-md-4">
            <h3 class="font-weight-bold mx-4"><?= $sidebar; ?></h3>
        </div>
    </div>
    <div class="row mx-3">
        <div class="col">
            <a href="" class="btn btn-primary my-3 font-weight-bold" data-toggle="modal" data-target="#tambahlabModal">Form Input Pekerjaan</a>
            <a href="<?= base_url(''); ?>" class="btn btn-success my-3 font-weight-bold"><i class="fas fa-print"></i></a>
            <br>
            <?= form_error('menu', '<small class="text-danger">', '</small>'); ?>
            <?= $this->session->flashdata('pesan'); ?>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Hari/Tanggal</th>
                            <th scope="col">Pekerjaan</th>
                            <th scope="col" colspan="2">Ubah/Hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $n = 1;
                        foreach ($laporan as $l) : ?>
                            <tr>
                                <th scope="row"><?= $n++; ?></th>
                                <td><?= $l['hari']; ?></td>
                                <td><?= $l['pekerjaan']; ?></td>
                                <td>
                                    <a href="<?= base_url('admin/ubah_laporan/'); ?><?= $l['id']; ?>" class="badge badge-warning">
                                        <i class="fas fa-edit"> Ubah</i>
                                    </a>
                                    <a href="<?= base_url('admin/hapus_laporan/'); ?><?= $l['id']; ?>" class="badge badge-danger">
                                        <i class="fas fa-trash"> Hapus</i>
                                    </a>
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
<!-- modal -->


<!-- Modal -->
<div class="modal fade" id="tambahlabModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><b><?= $sidebar; ?></b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/laporan'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" name="hari" placeholder="Hari?tanggal" class="form-control">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="pekerjaan" id="exampleFormControlTextarea1" rows="3" placeholder="Pekerjaan"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">batal</button>
                    <button type="submit" class="btn btn-primary">Tambah Menu</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /modal -->