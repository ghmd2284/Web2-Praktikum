<!DOCTYPE html>
<html>
<head>
    <title>Belanja Online</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Belanja Online</h2>
        <form method="POST" action="form_bel.php">
            <div class="form-group">
                <label for="customer">Customer:</label>
                <input type="text" class="form-control" id="customer" name="customer">
            </div>
            <div class="form-group">
                <label>Pilih Produk:</label>
                <div class="radio">
                    <label><input type="radio" name="produk" value="TV">TV: 4.200.000</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="produk" value="Kulkas">Kulkas: 3.100.000</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="produk" value="Mesin Cuci">Mesin Cuci: 3.800.000</label>
                </div>
            </div>
            <div class="form-group">
                <label for="jumlah">Jumlah Beli:</label>
                <input type="text" class="form-control" id="jumlah" name="jumlah">
            </div>
            <button type="submit" class="btn btn-default" name="proses">Simpan</button>
        </form>

        <?php
            $customer = $_POST['customer'];
            $produk = $_POST['produk'];
            $jumlah = $_POST['jumlah'];
            $total_harga = 0;

            if($produk == 'TV'){
                $total_harga = 4200000 * $jumlah;
            } elseif($produk == 'Kulkas'){
                $total_harga = 3100000 * $jumlah;
            } elseif($produk == 'Mesin Cuci'){
                $total_harga = 3800000 * $jumlah;
            }

            echo '<br><h4>Hasil:</h4>';
            echo '<p>Nama Customer: '.$customer.'</p>';
            echo '<p>Produk Pilihan: '.$produk.'</p>';
            echo '<p>Jumlah Beli: '.$jumlah.'</p>';
            echo '<p>Total Belanja: Rp. '.$total_harga.',-</p>';
        ?>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
