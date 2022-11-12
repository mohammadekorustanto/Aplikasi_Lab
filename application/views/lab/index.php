<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row my-3">
        <div class="col-md-4">
            <h3 class="font-weight-bold"><?= $sidebar; ?></h3>
        </div>
    </div>
    <div class="row mx-3">
        <div class="col">
            <a href="" class="btn btn-primary my-3 font-weight-bold" data-toggle="modal" data-target="#tambahlabModal">Form Pemakaian</a>
            <a href="<?= base_url('guru/print_pakai'); ?>" class="btn btn-success my-3 font-weight-bold"><i class="fas fa-print"></i></a>
            <br>
            <?= form_error('menu', '<small class="text-danger">', '</small>'); ?>
            <?= $this->session->flashdata('pesan'); ?>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Hari Tanggal</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Jam Ke</th>
                            <th scope="col">Guru Pengampuh</th>
                            <th scope="col">Laboratorium</th>
                            <th scope="col">Kondisi Awal Pembelajaran</th>
                            <th scope="col">Kondisi Saat Pembelajaran</th>
                            <th scope="col">Kondisi Akhir Pembelajaran</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $n = 1; ?>
                        <?php foreach ($lab as $l) : ?>
                            <tr>
                                <th scope="row"><?= $n++; ?></th>
                                <td><?= $l['hari']; ?></td>
                                <td><?= $l['kelas']; ?></td>
                                <td><?= $l['jam']; ?></td>
                                <td><?= $l['guru_pengampuh']; ?></td>
                                <td><?= $l['lab']; ?></td>
                                <td><?= $l['kondisi_awal_pembelajaran']; ?></td>
                                <td><?= $l['kondisi_saat_pembelajaran']; ?></td>
                                <td><?= $l['kondisi_akhir_pembelajaran']; ?></td>
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
            <form action="<?= base_url('guru/pakai'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" name="hari" id="hari" placeholder="Hari Tanggal" class="form-control">
                    </div>
                    <div class="form-group">
                        <select name="kelas" id="kelas" class="form-control">
                            <option value="">Kelas...</option>
                            <?php foreach ($kelas as $k) : ?>
                                <option value="<?= $k; ?>"><?= $k; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="jam" id="jam" class="form-control">
                            <option value="">Jam Ke</option>
                            <?php foreach ($jam as $j) : ?>
                                <option value="<?= $j; ?>"><?= $j; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" name="guru_pengampuh" id="guru_pengampuh" placeholder="Guru Pengampuh" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="lab" id="lab" placeholder="Laboratorium" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="kondisi_awal_pembelajaran" id="kondisi_awal_pembelajaran" placeholder="Kondisi Awal Pembelajaran" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="kondisi_saat_pembelajaran" id="kondisi_saat_pembelajaran" placeholder="Kondisi Saat Pembelajaran" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="kondisi_akhir_pembelajaran" id="kondisi_akhir_pembelajaran" placeholder="Kondisi Akhir Pembelajaran" class="form-control">
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