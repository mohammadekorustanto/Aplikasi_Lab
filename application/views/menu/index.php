<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row my-3">
        <div class="col-md-4">
            <h3 class="font-weight-bold"><?= $sidebar; ?></h3>
        </div>
    </div>
    <div class="row mx-3">
        <div class="col-md-6">
            <a href="" class="btn btn-primary my-3 font-weight-bold" data-toggle="modal" data-target="#tambahModal">Tambah menu baru</a>
            <br>
            <?= form_error('menu', '<small class="text-danger">', '</small>'); ?>
            <?= $this->session->flashdata('pesan'); ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Menu</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $n = 1; ?>
                    <?php foreach ($menu as $m) : ?>
                        <tr>
                            <th scope="row"><?= $n++; ?></th>
                            <td class="font-weight-bold"><?= $m['menu']; ?></td>
                            <td>
                                <a href="<?= base_url('menu/ubah/'); ?><?= $m['id']; ?>" class="btn btn-warning font-weight-bold">Ubah</a>
                                <a href="<?= base_url('menu/hapus/'); ?><?= $m['id']; ?>" class="btn btn-danger font-weight-bold">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<!-- modal -->


<!-- Modal -->
<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?= $sidebar; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('menu'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="menu" placeholder="Menu" name="menu" autocomplete="off">
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