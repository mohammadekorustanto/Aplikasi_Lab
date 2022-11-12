<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row my-3">
        <div class="col-md-4">
            <h3 class="font-weight-bold mx-4"><?= $sidebar; ?></h3>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <input type="hidden" name="id">
                <div class="form-group">
                    <input type="text" class="form-control" name="hari" value="<?= $edit['hari']; ?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="pekerjaan" value="<?= $edit['pekerjaan']; ?>">
                </div>
                <button class="btn btn-primary" type="submit">Simpan</button>
                <a href="<?= base_url('admin/laporan'); ?>" class="btn btn-danger">Batal</a>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->