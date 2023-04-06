<?php 
class persegiPanjang {
    public $panjang, $lebar;
    public function __construct($lebar, $panjang) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function rumusKeliling() {
        // Rumus 2p + 2l
        $_p = $this->panjang * 2;
        $_l = $this->lebar * 2;
        $hasil = $_p + $_l;
        return round($hasil);
    }

    public function rumusLuas() {
        // rumus p * l
        $p = $this->panjang;
        $l = $this->lebar;
        $hasil = $p * $l;
        return round($hasil);
    }
}

// $kelpers = new persegiPanjang("8","4");
// echo $kelpers->panjang . "\n cm </br>";
// echo $kelpers->lebar . "\n cm </br>";
// echo $kelpers->rumusKeliling() . "\n cm </br>";
// echo $kelpers->rumusLuas() . "\n cm </br>";


?>