<?php
$host = "localhost";
$port = "5432";
$dbname = "prakwebdb"; // nama database kamu
$user = "postgres";
$password = "ilsa"; // isi sesuai di pgAdmin

try {
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
    // echo "Koneksi sukses!";
} catch (PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
}
?>