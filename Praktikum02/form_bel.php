<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta>
    <meta http-equiv="X-UA-Compatible"">
    <meta name=" viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja Online</title>


    <!-- isi data inputan -->

<body>

    <div class="container">
        <h1>Form Belanja</h1>
        <div class="row">
            <main class="col-8">
                <form method="post">
                    <div class="form-group row">
                        <label for="customer" class="col-4 col-form-label">Customer</label>
                        <div class="col-8">
                            <input id="customer" name="customer" placeholder="nama customer" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Pilih Produk</label>
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="radio_0" type="radio" class="custom-control-input" value="TV">
                                <label for="radio_0" class="custom-control-label">TV</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="radio_1" type="radio" class="custom-control-input" value="Kulkas">
                                <label for="radio_1" class="custom-control-label">Kulkas</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="radio_2" type="radio" class="custom-control-input" value="Mesin cuci">
                                <label for="radio_2" class="custom-control-label">Mesin cuci</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                        <div class="col-8">
                            <input id="jumlah" name="jumlah" placeholder="jumlah" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="proses" type="submit" class="btn btn-success">Kirim</button>
                        </div>
                </form>

            </main>
            <div class="col-4">
                <aside>
                    <table>
                        <tr>
                            <td style="background-color: aqua;">Daftar Harga</td>
                        </tr>
                        <tr>
                            <td>TV - Rp. 4.200.000</td>
                        </tr>
                        <tr>
                            <td>Kulkas - Rp. 3.500.000</td>
                        </tr>
                        <tr>
                            <td>Mesin Cuci - Rp. 3.800.000</td>
                        </tr>
                        <tr>
                            <td style="background-color: aqua;"> Harga Dapat Berubah Setiap Saat!</td>
                        </tr>
                    </table>
                </aside>
            </div>
        </div>
    </div>
</body>

</html>

<?php


// cek kondisi input
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $customer = $_POST['customer'];
    $produk = $_POST['produk'];
    $jumlah = $_POST['jumlah'];

    // harga produk
    $harga_tv = 4200000;
    $harga_kulkas = 3500000;
    $harga_mesin_cuci = 3850000;

    // hitung total harga
    switch ($produk) {
        case 'TV':
            $total_harga = $harga_tv * $jumlah;
            break;
        case 'Kulkas':
            $total_harga = $harga_kulkas * $jumlah;
            break;
        case 'Mesin cuci':
            $total_harga = $harga_mesin_cuci * $jumlah;
            break;
        default:
            $total_harga = 0;
            break;
    }
}

// tapilkan hasil inputan
?>
<div class="container">
    <!-- Tampilan Hasil -->
    <?php
    if (isset($_POST['proses'])) {
        echo "Nama Customer : $customer <br>";
        echo "Produk : $produk <br>";
        echo "Jumlah Beli : $jumlah <br>";
        echo "Total Harga : Rp. $total_harga <br>";
    } else {
        
    }
    ?>
</div>