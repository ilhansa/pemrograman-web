<?php
// Membuat Token Keamanan Ajax Request (Csrf Token)

// Memulai atau melanjutkan sesi
session_start();

// Cek apakah token CSRF sudah ada di session
if (empty($_SESSION['csrf_token'])) {
    // Jika belum ada, buat token baru
    // random_bytes(32) menghasilkan 32 byte acak
    // bin2hex mengkonversi byte tersebut menjadi string heksadesimal (64 karakter)
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

?>