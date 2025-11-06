<?php
session_start();
include 'koneksi.php';
include 'csrf.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];

// Jika ID kosong → tambah data baru
if (empty($id)) {
    $query = "INSERT INTO anggota (nama, jenis_kelamin, alamat, no_telp)
              VALUES (:nama, :jenis_kelamin, :alamat, :no_telp)";
} else {
    // Jika ada ID → update data
    $query = "UPDATE anggota SET 
                nama = :nama,
                jenis_kelamin = :jenis_kelamin,
                alamat = :alamat,
                no_telp = :no_telp
              WHERE id = :id";
}

$sql = $db1->prepare($query);
$sql->bindParam(':nama', $nama, PDO::PARAM_STR);
$sql->bindParam(':jenis_kelamin', $jenis_kelamin, PDO::PARAM_STR);
$sql->bindParam(':alamat', $alamat, PDO::PARAM_STR);
$sql->bindParam(':no_telp', $no_telp, PDO::PARAM_STR);
if (!empty($id)) {
    $sql->bindParam(':id', $id, PDO::PARAM_INT);
}

$sql->execute();

echo json_encode(["status" => "success"]);
$db1 = null;
?>
