<?php 
// Buat class BMI Pasien
class bmiPasien {
    // Tulis Property dan Varieabel
    public $nama, $berat, $tinggi, $umur, $jk;
    // Bikin Construc
    public function __construct($nama, $berat, $tinggi, $umur, $jk) {
        // Akses Property
        $this->nama = $nama;
        $this->berat = $berat;
        $this->tinggi = $tinggi;
        $this->umur = $umur;
        $this->jk = $jk;
    }

    // Bikin Method Hasil BMI
    public function hasilBMI() {
        $tinggi_m = $this->tinggi / 100;
        // Rumus BMI
        $bmi = $this->berat / ($tinggi_m*$tinggi_m);
        return round($bmi);
    }

    // Bikin Method Status
    public function statusBMI() {
        // Simpan Data BMI
        $bmi = $this->hasilBMI();
        // Cek data
        if ($bmi < 18.5) {
            return "Kekurangan Berat Badan";
        } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
            return "Normal (ideal)";
        } elseif ($bmi >= 25 && $bmi <= 29.9) {
            return "Kelebihan Berat Badan";
        } else {
            return "Kegemukan (Obesitas)";
        }
        
    }
}

// // Buat Objek
// $pasien = new bmiPasien("Ghomidi", "75", "170","19", "L");
// // Tampilan
// echo $pasien->nama . "</br>";
// echo $pasien->berat ."</br>";
// echo $pasien->hasilBMI() . "</br>";
// echo $pasien->statusBMI() . "</br>";

// // Bat Objek Untuk Test
// $pasien = new bmiPasien();
// // Ngisi Nama
// $pasien->nama = "Ghomidi Lawe";
// echo $pasien->nama;




?>