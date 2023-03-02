<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Form Belanja</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1>Belanja Online</h1>
                <form method="post" action="form_belanja.php">
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
    <?php
    if(isset($_POST['proses'])){
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
    
        echo '<div class="container">' ;
        echo '<h1>Invoices</h1>' ;
        echo '<br>' ;
        echo '<p>Nama Customer: ' . $customer . '</p>' ;
        echo '<p>Produk Pilihan: ' . $produk . '</p>' ;
        echo '<p>Jumlah Beli: ' . $jumlah . '</p>' ;
        echo '<p>Total Belanja: Rp. ' . $total . ',-</p>' ;
        echo '</div>';
    } else {
    }


    ?>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>