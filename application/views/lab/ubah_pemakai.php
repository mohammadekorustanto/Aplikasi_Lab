<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row my-3">
        <div class="col-md-6">
            <h3 class="font-weight-bold"><?= $sidebar; ?></h3>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $pemakai['id']; ?>">
                <div class="form-group">
                    <select class="form-control" name="hari" autofocus>
                        <option value="">Hari</option>
                        <?php foreach ($hari as $h) : ?>
                            <?php if ($h == $pemakai['hari']) : ?>
                                <option value="<?= $h; ?>" selected><?= $h; ?></option>
                            <?php else : ?>
                                <option value="<?= $h; ?>"><?= $h; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <input type="date" name="tanggal" class="form-control" value="<?= $pemakai['tanggal']; ?>">
                </div>
                <div class="form-group">
                    <select name="kelas" id="" class="form-control">
                        <option value="">Kelas</option>
                        <?php foreach ($kelas as $k) : ?>
                            <?php if ($k == $pemakai['kelas']) : ?>
                                <option value="<?= $k; ?>" selected><?= $k; ?></option>
                            <?php else : ?>
                                <option value="<?= $k; ?>"><?= $k; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <select name="jam" id="" class="form-control">
                        <option value="">Jam Ke</option>
                        <?php foreach ($jam as $j) : ?>
                            <?php if ($j == $pemakai['jam']) : ?>
                                <option value="<?= $j; ?>" selected><?= $j; ?></option>
                            <?php else : ?>
                                <option value="<?= $j; ?>"><?= $j; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" name="guru_pengampuh" value="<?= $user['nama']; ?>" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" name="lab" placeholder="Lab" autocomplete="off" class="form-control" value="<?= $pemakai['lab']; ?>">
                </div>
                <div class="form-group">
                    <!-- <input type="text" name="materi" placeholder="Materi" autocomplete="off" class="form-control"> -->
                    <textarea name="materi" id="" cols="45" rows="3"><?= $pemakai['materi']; ?></textarea>
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