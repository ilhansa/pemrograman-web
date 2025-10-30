<?php
include "koneksi2.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

try {
    // karena kolom di database huruf besar, gunakan tanda kutip ganda "
    $sql = 'SELECT * FROM "user" WHERE "Username" = :username AND "Password" = :password';
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        ':username' => $username,
        ':password' => $password
    ]);

    if ($stmt->rowCount() > 0) {
        echo "Anda berhasil login, silakan menuju ";
        echo '<a href="homeAdmin.html">Halaman Home</a>';
    } else {
        echo "Login gagal. Silakan ";
        echo '<a href="loginForm.html">Login kembali</a>';
    }
} catch (PDOException $e) {
    echo "Terjadi kesalahan: " . $e->getMessage();
}
?>
