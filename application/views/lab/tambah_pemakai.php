<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row my-3">
        <div class="col-md-4">
            <h3 class="font-weight-bold"><?= $sidebar; ?></h3>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-6">
            <form action="<?= base_url('guru/tambah_pemakai'); ?>" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="hari" autofocus placeholder="Hari" autocomplete="off">
                </div>
                <div class="form-group">
                    <select name="kelas" id="" class="form-control">
                        <option value="">Kelas</option>
                        <?php foreach ($kelas as $k) : ?>
                            <option value="<?= $k; ?>"><?= $k; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <select name="kelas" id="" class="form-control">
                        <option value="">Jam Ke</option>
                        <?php foreach ($jam as $j) : ?>
                            <option value="<?= $j; ?>"><?= $j; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="user" value="<?= $user['nama']; ?>" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="lab" placeholder="Laboratorium" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="materi" placeholder="Materi" autocomplete="off">
                </div>
                <button type="submit" class="btn btn-primary font-weight-bold">Simpan</button>
                <a href="<?= base_url('guru/pakai'); ?>" class="btn btn-danger font-weight-bold">Batal</a>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->