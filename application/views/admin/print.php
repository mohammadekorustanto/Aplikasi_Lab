<!-- Begin Page Content -->
<div class="container">

    <div class="row my-3">
        <div class="col-md-8">
            <h1>Laporan Perkerjaan Toolman</h1>
        </div>
    </div>
    <div class="row my-3 mx-auto">
        <div class="col-md">
            <div class="table">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Hari</th>
                            <th scope="col">Perkerjaan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($laporan as $l) : ?>
                            <tr>
                                <td><?= $l['hari']; ?></td>
                                <td><?= $l['pekerjaan']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <script type="text/javascript">
                    window.print();
                </script>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->