<!-- Begin Page Content -->
<div class="container">

    <div class="row my-3">
        <div class="col-md-8">
            <h1>Daftar Guru Dan Toolman TKJ</h1>
        </div>
    </div>
    <div class="row my-3 mx-auto">
        <div class="col-md">
            <div class="table">
                <table class="table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">mapel/sebagai</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $n = 1;
                        foreach ($alluser as $au) : ?>
                            <tr>
                                <th scope="row"><?= $n++; ?></th>
                                <td><?= $au['nama']; ?></td>
                                <td><?= $au['mapel']; ?></td>
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