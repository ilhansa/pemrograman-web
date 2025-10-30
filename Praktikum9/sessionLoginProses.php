<?php
include "koneksi2.php"; 

$connect = $conn; 

// Gunakan huruf kecil, sesuai dengan form HTML
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT \"Username\", \"Password\" FROM \"user\" WHERE \"Username\" = ?";

try {
    $stmt = $connect->prepare($sql);
    $stmt->execute([$username]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        if (md5($password) === $row['Password']) {
            session_start();
            $_SESSION['username'] = $row['Username'];
            $_SESSION['status'] = 'login';
?>
Anda Berhasil Login, silahkan menuju <a href="homeSession.php">Halaman Home</a>
<?php
        } else {
?>
Gagal login, silahkan login lagi (Sandi Salah)
<a href="sessionLoginForm.html">Halaman Login</a>
<?php
        }
    } else {
?>
Gagal login, silahkan login lagi (Username Tidak Ditemukan)
<a href="sessionLoginForm.html">Halaman Login</a>
<?php
    }
} catch (PDOException $e) {
?>
Terjadi Error Database: <?= $e->getMessage() ?>
<a href="sessionLoginForm.html">Halaman Login</a>
<?php
}
?>
