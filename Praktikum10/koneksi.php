<?php
/**
 * File koneksi.php
 * Menggunakan PDO untuk koneksi ke database PostgreSQL
 */

// 1. Definisikan konstanta untuk kredensial database
define('HOST', 'localhost');
define('USER', 'postgres');
define('PASS', 'ilsa'); 
define('DB1', 'prakwebdb');

// 2. Buat koneksi PDO baru
try {
    $db1 = new PDO("pgsql:host=" . HOST . ";dbname=" . DB1, USER, PASS);
    
    // 3. Atur mode error PDO agar melempar Exception
    $db1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Catatan: Variabel $db1 sekarang berisi objek koneksi yang siap digunakan
    
} catch (PDOException $e) {
    // Tangani error koneksi
    echo "Koneksi ke database gagal: " . $e->getMessage();
    die();
}
?>