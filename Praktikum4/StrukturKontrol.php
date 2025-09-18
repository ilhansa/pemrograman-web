<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo 'Nilai huruf: D';
}

echo "<br><br>";
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}
echo "Atlet tersebut membutuhkan waktu $hari Hari untuk mencapai jarak 500km";
echo "<br><br>";

$jumlahLahan = 10;
$tanamanPerlahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 0; $i < $jumlahLahan; $i++) { 
    $jumlahBuah += ($tanamanPerlahan * $buahPerTanaman);
}
echo "Jumlah buah yang akan dipanen adalah $jumlahBuah";
echo "<br><br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;
foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian: $totalSkor";
echo "<br><br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];
foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (lulus) <br>";
}
echo "<br><br>";

$nilaiUjian = [80 , 95, 67, 72, 88, 91, 76, 84, 69, 94, 78, 85];
sort($nilaiUjian);
$jumlah = count($nilaiUjian);
$total = 0;
for ($i = 2; $i < ($jumlah - 2); $i++) { 
    $nilai = $nilaiUjian[$i];
    echo "Nilai: $nilai <br>"; 
    $total += $nilai;
} 
echo "Total nilai: $total";
echo "<br><br>";

$harga = 250000;
$diskon = 0.15; 

if ($harga > 200000) {
    $potongan = $harga * $diskon;
    $total_bayar = $harga - $potongan;
} else {
    $total_bayar = $harga;
}

echo "Harga awal: Rp " . number_format($harga, 0, ',', '.') . "<br>";
echo "Potongan: Rp " . number_format($potongan, 0, ',', '.') . "<br>";
echo "Total bayar: Rp " . number_format($total_bayar, 0, ',', '.');
echo "<br><br>";

$jarak_harian = [12, 8, 10, 15, 9, 11, 14, 13, 12, 10]; 

$total_jarak = array_sum($jarak_harian);

$bonus = ($total_jarak > 100) ? "YA" : "TIDAK";

echo "Total jarak tempuh atlet adalah: " . $total_jarak . " km<br>";
echo "Apakah atlet mendapatkan bonus latihan? " . $bonus;

?>