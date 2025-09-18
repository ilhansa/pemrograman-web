<?php
// $nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];
// $nilaiLulus = [];
// foreach ($nilaiSiswa as $nilai) {
//     if ($nilai > 70) {
//         $nilaiLulus[] = $nilai;
//     }
// }
// echo "Daftar nilai lulus : " . implode(", ", $nilaiLulus);
// echo "<br><br>";

// $daftarKaryawan = [
//     ['Alice', 7],
//     ['Bob', 3],
//     ['Charlie', 9],
//     ['David', 5],
//     ['Eva', 6]
// ];

// $karyawanPengalamanLimaTahun = [];

// foreach ($daftarKaryawan as $karyawan) {
//     if ($karyawan[1] > 5) {
//         $karyawanPengalamanLimaTahun[] = $karyawan[0];  
//     }
// }
// echo "Daftar karyawan dengan pengalaman lebih dari 5 tahun: ". implode( ", ", $karyawanPengalamanLimaTahun);
// echo "<BR><BR>";

// $daftarNilai = [
//     'Matematika' => [
//         ['Alice', 85],
//         ['Bob', 92],
//         ['Charlie', 78]
//     ],

//     'Fisika' => [
//         ['Alice', 90],
//         ['Bob', 88],
//         ['Charlie', 75]
//     ],

//     'Kimia' => [
//         ['Alice', 92],
//         ['Bob', 80],
//         ['Charlie', 85]
//     ]
// ];


// $mataKuliah = 'Fisika';
// echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah <br>";

// foreach ($daftarNilai[$mataKuliah] as $nilai) {
//     echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
// }
// echo "<BR><BR>";


$siswa = [
    ["Andi", 75],
    ["Budi", 88],
    ["Citra", 95],
    ["Dinda", 70],
    ["Farhan", 82]
];

$total = 0;
foreach ($siswa as $data) {
    $total += $data[1];
}

$rata2 = $total / count($siswa);

echo "Rata-rata nilai kelas: " . $rata2 . "<br><br>";

echo "Siswa dengan nilai di atas rata-rata:<br>";
foreach ($siswa as $data) {
    if ($data[1] > $rata2) {
        echo $data[0] . ": " . $data[1] . "<br>";
    }
}

?>