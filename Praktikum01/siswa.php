<?php
$nilai1 = ["id" => 1, "nim" => "01101", "uts" => 80, "uas" => 90, "tugas" => 100];
$nilai2 = ["id" => 2, "nim" => "01101", "uts" => 70, "uas" => 86, "tugas" => 79];
$nilai3 = ["id" => 3, "nim" => "01101", "uts" => 87, "uas" => 89, "tugas" => 98];
$nilai4 = ["id" => 4, "nim" => "01101", "uts" => 90, "uas" => 90, "tugas" => 93];

$kumpulan_nilai = [$nilai1, $nilai2, $nilai3, $nilai4];
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Daftar Nilai Mahasiswa</h1>
    </div>

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
                    <?php $nilai_akhir = ($nilai["uts"] + $nilai["uas"] + $nilai["tugas"]) / 3 ; ?>
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

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>