<?php

require_once 'header.php';
require_once 'sidebar.php';

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Belanja Online</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-8">
                    <form method="post" action="praktikum02.php">
                        <div class="form-group row">
                            <label for="customer" class="col-4 col-form-label">Customer</label>
                            <div class="col-8">
                                <input id="customer" name="customer" placeholder="Name Customer" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-4">Pilih Produk</label>
                            <div class="col-8">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="prodak" id="prodak_0" type="radio" class="custom-control-input" value="TV">
                                    <label for="prodak_0" class="custom-control-label">TV</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="prodak" id="prodak_1" type="radio" class="custom-control-input" value="Kulkas">
                                    <label for="prodak_1" class="custom-control-label">Kulkas</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input name="prodak" id="prodak_2" type="radio" class="custom-control-input" value="Mesin Cuci">
                                    <label for="prodak_2" class="custom-control-label">Mesin Cuci</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                            <div class="col-8">
                                <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-4 col-8">
                                <button name="proses" type="submit" class="btn btn-info">Kirim</button>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="col-4">
                    <table class="table table">
                        <thead class="bg-primary">
                            <tr>
                                <th scope="col">Daftar Harga</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">TV RP. 4.200.000</th>
                            </tr>
                            <tr>
                                <th scope="row">Kulkas RP. 3.100.000</th>
                            </tr>

                            <tr>
                                <th scope="row">Mesin Cuci RP. 3.800.000</th>
                            </tr>

                        </tbody>
                        <tfoot class="bg-primary">
                            <tr>
                                <th scope="col">Harga Dapat Berubah Setiap saat</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <?php
    if (isset($_POST['proses'])) {
        $customer = $_POST['customer'];
        $produk = $_POST['prodak'];
        $jumlah = $_POST['jumlah'];
        $total;

        if ($produk == "TV") {
            $total = 4200000 * $jumlah;
        } elseif ($produk == "Kulkas") {
            $total = 3100000 * $jumlah;
        } elseif ($produk == "Mesin Cuci") {
            $total = 3800000 * $jumlah;
        }
        echo '<section class="content-header">';
        echo '<div class="container-fluid">';
        echo '<div class="row mb-2">';
        echo '<div class="col-sm-6">';
        echo '<h1>Invoices</h1>';
        echo '</div>';
        echo '</div>';
        echo '<br>';
        echo '<p>Nama Customer: ' . $customer . '</p>';
        echo '<p>Produk Pilihan: ' . $produk . '</p>';
        echo '<p>Jumlah Beli: ' . $jumlah . '</p>';
        echo '<p>Total Belanja: Rp. ' . $total . ',-</p>';
        echo '</div>';
        echo '</section>';
    } else {
    }


    ?>
    <!-- /.content -->
</div>


<?php

require_once 'footer.php';

?>

</html>