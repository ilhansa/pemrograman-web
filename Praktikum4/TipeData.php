<?php
$a = 10;
$b = 5;
$c = $a + 5;
$d = $b + (10 * 5);
$e = $d - $c;
echo "variable a: {$a} <br>";
echo "variable b: {$b} <br>";
echo "variable c: {$c} <br>";
echo "variable d: {$d} <br>";
echo "variable e: {$e} <br>";

$nilaiMatematika = 5.1;
$nilaiIpa = 6.7;
$nilaiBahasaIndonesia = 9.3;
$rataRata = ($nilaiMatematika + $nilaiIpa + $nilaiBahasaIndonesia) / 3;

echo "Matematika: {$nilaiMatematika} <br>";
echo "Ipa: {$nilaiIpa} <br>";
echo "Bahasa Indonesia: {$nilaiBahasaIndonesia} <br>";
echo "Rata-rata: {$rataRata} <br>";
var_dump($rataRata);
echo "<br>";
$apakahSiswaLulus = true; 
$apakahSiswaSudahUjian = false;
var_dump($apakahSiswaLulus);
echo "<br>"; 
var_dump($apakahSiswaSudahUjian);

$namaDepan = "Ibnu";
$namaBelakang = "Jakaria";
$namaLengkap = "{$namaDepan} {$namaBelakang}";
$namaLengkap2 = $namaDepan . ' ' . $namaBelakang;
echo "Nama Depan: {$namaDepan} <br>";
echo "Nama Belakang: " . $namaBelakang . '<br>';
echo $namaLengkap;
echo "<br>";
$listMahasiswa = ["wahid abdullah", "elmo bachtiar", "lendis fabri"];
echo $listMahasiswa[0];
?>