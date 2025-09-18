<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "hasil tambah: {$hasilTambah} <br>";
echo "hasil kurang: {$hasilKurang} <br>";
echo "hasil kali: {$hasilKali} <br>";
echo "hasil bagi: {$hasilBagi} <br>";
echo "sisa bagi: {$sisaBagi} <br>";
echo "pangkat: {$pangkat} <br><br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "hasil sama: {$hasilSama} <br>";
echo "hasil tidak sama: {$hasilTidakSama} <br>";
echo "hasil lebih kecil: {$hasilLebihKecil} <br>";
echo "hasil lebih besar: {$hasilLebihBesar} <br>";
echo "hasil lebih kecil sama: {$hasilLebihKecilSama} <br>";
echo "hasil lebih besar sama: {$hasilLebihBesarSama} <br>";
echo "pangkat: {$pangkat} <br><br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

var_dump($hasilAnd);
echo "<br>";
var_dump($hasilOr);
echo "<br>";
var_dump($hasilNotA);
echo "<br>";
var_dump($hasilNotB);
echo "<br>";
var_dump($a += $b);
echo "<br>";
var_dump($a -= $b);
echo "<br>";
var_dump($a *= $b);
echo "<br>";
var_dump($a /= $b);
echo "<br>";
var_dump($a %= $b);
echo "<br><br>";

$hasilIdentik = $a == $b;
$hasilTidakIdentik = $a !== $b;
var_dump($hasilIdentik);
echo "<br>";
var_dump($hasilTidakIdentik);
echo "<br><br>";

$rakBuku = 120;
$terisi = 85;
$persen = (($rakBuku - $terisi) / $rakBuku) * 100;
echo $persen . "%";
?>