<?php 
// Buat Fungsi 
function hitungUmur($thn_lahir) {
    $thn_sekarang = 2023;
    // Hitung Umur
    $umur = $thn_sekarang - $thn_lahir;
    // Tampilan
    return $umur;
}
// Panggil Fungsi
echo "Umur saya tahun 2023 adalah\n" . hitungUmur(2004) . "\nTahun";

?>