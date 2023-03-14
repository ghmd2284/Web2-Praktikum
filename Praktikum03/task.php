<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Form Registrasi</title>
</head>

<body>
    <div class="container">
        <h1>Form Registrasi</h1><hr>
        <form method="POST" action="task.php">
            <div class="form-group row">
                <label for="nim" class="col-4 col-form-label">NIM</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-address-card-o"></i>
                            </div>
                        </div>
                        <input id="nim" name="nim" placeholder="NIM" type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-user-circle"></i>
                            </div>
                        </div>
                        <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Jenis Kelamin</label>
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="Laki-Laki">
                        <label for="jk_0" class="custom-control-label">Laki - Laki</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="Perempuan">
                        <label for="jk_1" class="custom-control-label">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="studi" class="col-4 col-form-label">Program Studi</label>
                <div class="col-8">
                    <select id="studi" name="studi" class="custom-select">
                        <option value="">Pilih Program Studi</option>
                        <option value="SI">Sistem Informasi</option>
                        <option value="TI">Teknik Informatika</option>
                        <option value="BD">Bisnis Digital</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Skill Web & Progamming</label>
                <div class="col-8">
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="skill[]_0" type="checkbox" class="custom-control-input" value="HTML">
                        <label for="skill[]_0" class="custom-control-label">HTML</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="skill[]_1" type="checkbox" class="custom-control-input" value="CSS">
                        <label for="skill[]_1" class="custom-control-label">CSS</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="skill[]_2" type="checkbox" class="custom-control-input" value="JavaScript">
                        <label for="skill[]_2" class="custom-control-label">JavaScript</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="skill[]_3" type="checkbox" class="custom-control-input" value="RWD">
                        <label for="skill[]_3" class="custom-control-label">RWD Bootsrap</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="skill[]_4" type="checkbox" class="custom-control-input" value="PHP">
                        <label for="skill[]_4" class="custom-control-label">PHP</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="skill[]_5" type="checkbox" class="custom-control-input" value="Python">
                        <label for="skill[]_5" class="custom-control-label">Python</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="skill[]_6" type="checkbox" class="custom-control-input" value="Java">
                        <label for="skill[]_6" class="custom-control-label">Java</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="domisili[]" class="col-4 col-form-label">Tempat Domisili</label>
                <div class="col-8">
                    <select id="domisili[]" name="domisili[]" class="custom-select">
                        <option value="">Pilih Domisili</option>
                        <option value="Jakarta">Jakarta</option>
                        <option value="Depok">Depok</option>
                        <option value="Bogor">Bogor</option>
                        <option value="Tanggerang">Tanggerang</option>
                        <option value="Bekasi">Bekasi</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label>
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-address-book-o"></i>
                            </div>
                        </div>
                        <input id="email" name="email" placeholder="Email" type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
        <?php
        if (isset($_POST['submit'])) {
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $jk = $_POST['jk'];
            $studi = $_POST['studi'];
            $skill = $_POST['skill'];
            $domisili = $_POST['domisili'];
            $email = $_POST['email'];

            echo '<h1>Data Registrasi</h1><hr>';

            echo "NIM :\n" . $nim . "<br>";
            echo "Nama :\n" . $nama . "<br>";
            echo "Jenis Kelamin :\n" . $jk . "<br>";
            echo "Program Studi :\n" . $studi . "<br>";
            echo "Skil Web & Progamming :\n";

            $count = count($skill);
            $i = 0;
            $skor = 0;
            foreach ($skill as $skills) {
                echo $skills;
                if (++$i !== $count) {
                    echo ",\n";
                }
                switch ($skills) {
                    case "HTML":
                        $skor += 10;
                        break;
                    case "CSS":
                        $skor += 10;
                        break;
                    case "JavaScript":
                        $skor += 20;
                        break;
                    case "RWD":
                        $skor += 20;
                        break;
                    case "PHP":
                        $skor += 30;
                        break;
                    case "Python":
                        $skor += 30;
                        break;
                    case "Java":
                        $skor += 50;
                        break;

                    default:
                        $skor += 0;
                        break;
                }
            }

            function kategoriSkill($skor)
            {
                if ($skor >= 0   && $skor <= 40) {
                    return "Kurang";
                } elseif ($skor >= 40 && $skor <= 60) {
                    return "Cukup";
                } elseif ($skor >= 60 && $skor <= 100) {
                    return "Baik";
                } elseif ($skor >= 100 && $skor <= 170) {
                    return "Sangat Baik";
                } else {
                    return "Tidak Memadai";
                }
            }

            $kat_skill = kategoriSkill($skor);

            echo "<br> Skor Skill :\n" . $skor . "<br>";
            echo "Kategori Skill :\n" . $kat_skill . "<br>";
            echo "Email :\n" . $email . "<br>";
        }
        ?>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>