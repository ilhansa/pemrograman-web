<?php
include "koneksi2.php"; // file koneksi PDO ke PostgreSQL

$username = $_POST['username'];
$password = md5($_POST['password']); // hash password agar sama dengan di database

try {
    // pakai tanda kutip ganda karena kolommu pakai huruf besar
    $sql = 'SELECT * FROM "user" WHERE "Username" = :username AND "Password" = :password';
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        ':username' => $username,
        ':password' => $password
    ]);

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        if ($row['level'] == '1') {
            echo "Anda berhasil login sebagai Admin. Silakan menuju ";
            echo '<a href="homeAdmin.html">Halaman HOME</a>';
        } elseif ($row['level'] == '2') {
            echo "Anda berhasil login sebagai Guest. Silakan menuju ";
            echo '<a href="homeGuest.html">Halaman HOME</a>';
        } else {
            echo "Level pengguna tidak dikenal.";
        }
    } else {
        echo "Login gagal. Silakan ";
        echo '<a href="loginForm.html">Login kembali</a>';
    }
} catch (PDOException $e) {
    echo "Terjadi kesalahan: " . $e->getMessage();
}
?>
