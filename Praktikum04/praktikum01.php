<?php

require_once 'header.php';
require_once 'sidebar.php';

$nilai1 = ["id" => 1, "nim" => "01101", "uts" => 80, "uas" => 90, "tugas" => 100];
$nilai2 = ["id" => 2, "nim" => "01101", "uts" => 70, "uas" => 86, "tugas" => 79];
$nilai3 = ["id" => 3, "nim" => "01101", "uts" => 87, "uas" => 89, "tugas" => 98];
$nilai4 = ["id" => 4, "nim" => "01101", "uts" => 90, "uas" => 90, "tugas" => 93];

$kumpulan_nilai = [$nilai1, $nilai2, $nilai3, $nilai4];
?>

<!-- <head>
    <title>Nilai Mahasiswa</title>
</head> -->


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Daftar Nilai Mahasiswa</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">


            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nim</th>
                        <th scope="col">UTS</th>
                        <th scope="col">UAS</th>
                        <th scope="col">Tugas</th>
                        <th scope="col">Nilai Akhir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($kumpulan_nilai as $nilai) : ?>
                        <tr>
                            <?php $nilai_akhir = ($nilai["uts"] + $nilai["uas"] + $nilai["tugas"]) / 3; ?>
                            <td><?= $nilai["id"]; ?></td>
                            <td><?= $nilai["nim"]; ?></td>
                            <td><?= $nilai["uts"]; ?></td>
                            <td><?= $nilai["uas"]; ?></td>
                            <td><?= $nilai["tugas"]; ?></td>
                            <td><?= number_format($nilai_akhir, 2, ",", "."); ?></td>
                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>
            </table>
        </div>
    </section>
<!-- /.content -->
</div>
<?php

require_once 'footer.php';

?>

</html>