<?php
include 'koneksi.php';

// 1. Ambil aksi dari GET
$aksi = $_GET['aksi'];

// 2. Ambil data dari POST
$nama = $_POST['nama'] ?? '';
$jenis_kelamin = $_POST['jenis_kelamin'] ?? '';
$alamat = $_POST['alamat'] ?? '';
$no_telp = $_POST['no_telp'] ?? '';

// --- PROSES TAMBAH DATA ---
if ($aksi == 'tambah') {

    $query = "INSERT INTO anggota (nama, jenis_kelamin, alamat, no_telp)
              VALUES ('$nama', '$jenis_kelamin', '$alamat', '$no_telp')";

    if (pg_query($koneksi, $query)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Gagal menambahkan data: " . pg_last_error($koneksi);
    }

}
// --- PROSES UBAH DATA ---
elseif ($aksi == 'ubah') {

    $id = $_POST['id'] ?? '';

    $query = "UPDATE anggota SET 
                nama = '$nama',
                jenis_kelamin = '$jenis_kelamin',
                alamat = '$alamat',
                no_telp = '$no_telp'
              WHERE id = '$id'";

    if (pg_query($koneksi, $query)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Gagal mengubah data: " . pg_last_error($koneksi);
    }

}
// --- PROSES HAPUS DATA ---
elseif ($aksi == 'hapus') {
    
    // 1. Ambil ID dari GET
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        
        // 2. Query DELETE data anggota berdasarkan ID
        $query = "DELETE FROM anggota WHERE id = '$id'";
        
        // 3. Eksekusi query
        if (pg_query($koneksi, $query)) {
            // Jika berhasil, redirect ke halaman utama (index.php)
            header("Location: index.php");
            exit();
        } else {
            // Jika gagal, tampilkan pesan error
            echo "Gagal menghapus data: " . pg_last_error($koneksi);
        }
    } else {
        // Jika ID tidak ada di URL
        echo "ID tidak valid.";
    }
}

// 3. Tutup koneksi database
pg_close($koneksi);
?>
