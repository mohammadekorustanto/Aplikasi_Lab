<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>print</title>
</head>

<body>
    <div class="container">
        <div class="row mt-3 text-center">
            <div class="col">
                <h1>Laporan Pemakaian Laboratorium</h1>
                <h4>SMK ASTRINDO KOTA TEGAL</h4>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Hari/Tanggal</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Jam Pelajaran</th>
                            <th scope="col">Guru Pengampuh</th>
                            <th scope="col">Laboratorium</th>
                            <th scope="col">Kondisi Awal KBM</th>
                            <th scope="col">Kondisi Saat KBM</th>
                            <th scope="col">Kondisi Akhir KBM</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $n = 1;
                        foreach ($pakai as $p) : ?>
                            <tr>
                                <th scope="row"><?= $n++; ?></th>
                                <td><?= $p['hari']; ?></td>
                                <td><?= $p['kelas']; ?></td>
                                <td><?= $p['jam']; ?></td>
                                <td><?= $p['guru_pengampuh']; ?></td>
                                <td><?= $p['lab']; ?></td>
                                <td><?= $p['kondisi_awal_pembelajaran']; ?></td>
                                <td><?= $p['kondisi_saat_pembelajaran']; ?></td>
                                <td><?= $p['kondisi_akhir_pembelajaran']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md text-left">
                <p class="font-weigt-bold">Waka Sarpras & Ketenagaan</p>
                <br>
                <br>
                <h6>Ismail S.pdi</h6>
            </div>
            <div class="col-md text-right">
                <p class="font-weigt-bold">Toolman Laboratorium</p>
                <br>
                <br>
                <h6><?= $user['nama']; ?></h6>
            </div>
        </div>
    </div>
    <!-- js print -->
    <script type="text/javascript">
        window.print();
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>