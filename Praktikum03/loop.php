<?php 
// Buat Loop for
for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
}

// Looping Pertama 
echo "<h3>Looping Pertama</h3" . "<br>";

for ($i = 2; $i <= 20; $i += 2) {
    echo $i . " - I Love PHP <br>";
}

// Looping Kedua
echo "<h3>Looping Kedua</h3" . "<br>";

for ($i = 20; $i >= 2; $i -= 2) {
    echo  $i . " - I Love PHP <br>";
}

// Buat Array loop
$buah = ["Manggal", "Apel", "Anggur"];

foreach ($buah as $b ) {
    echo $b . "<br>";
}

?>