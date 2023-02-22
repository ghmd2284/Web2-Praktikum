<?php 
// Buat Array
$animals = ["Burung", "Kucing","Nyamuk", "Singa"];
echo $animals[1] . "<br>";

echo $animals[3] . "<br>";

foreach ($animals as $animal) {
    echo $animal . "<br>";
}

// Buat Array Associative
$mahasiswa = ["Nama"=>"Ghomidi", "Jurusan"=>"TI", "Semester"=>6];
echo $mahasiswa["Jurusan"] . "<br>";

//Nampilin Semua Data
foreach ($mahasiswa as $key=>$value) {
    echo "Key = " . $key . " Value = " . $value . "<br>";
}

// Buat Array Multi-dimensional
$dosen = [
    ["Pak Rojul", "Web"],
    ["Pak Reza", "DDP"],
    ["Pak Lukman", "OS"]
];
echo $dosen[0][0];

?>