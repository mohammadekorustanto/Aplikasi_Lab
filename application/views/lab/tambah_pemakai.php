<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row my-3">
        <div class="col-md-6">
            <h3 class="font-weight-bold"><?= $sidebar; ?></h3>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <form action="<?= base_url('guru/tambah_pemakaian'); ?>" method="post">
                <div class="form-group">
                    <input type="text" name="hari" placeholder="Hari/Tanggal" autofocus autocomplete="off" class="form-control">
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
                    <select name="jam" id="" class="form-control">
                        <option value="">Jam Ke</option>
                        <?php foreach ($jam as $j) : ?>
                            <option value="<?= $j; ?>"><?= $j; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" name="guru_pengampuh" value="<?= $user['nama']; ?>" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" name="lab" placeholder="Lab" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" name="materi" placeholder="Materi" autocomplete="off" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?= base_url('guru/pakai'); ?>" class="btn btn-danger">Batal</a>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->