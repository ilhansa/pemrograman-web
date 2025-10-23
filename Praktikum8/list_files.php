<?php
$upload_dir = "uploads/";

// Pastikan folder uploads ada
if (!is_dir($upload_dir)) {
    mkdir($upload_dir, 0777, true);
}

// Ambil semua file di folder
$files = array_diff(scandir($upload_dir), array('.', '..', 'metadata.json'));

if (count($files) > 0) {
    echo "<table border='1' cellpadding='6' style='margin:auto; text-align:center; border-collapse:collapse;'>";
    echo "<tr><th>Nama File</th><th>Preview / Link</th></tr>";

    foreach ($files as $nama) {
        $path = $upload_dir . $nama;
        $file_ext = strtolower(pathinfo($nama, PATHINFO_EXTENSION));

        echo "<tr>";
        echo "<td>$nama</td>";
        echo "<td>";

        // Kalau gambar tampilkan thumbnail
        if (in_array($file_ext, ['png', 'jpg', 'jpeg', 'gif'])) {
            echo "<img src='$path' width='80' style='border-radius:5px;'>";
        } 
        // Kalau bukan gambar tampilkan link
        else {
            echo "<a href='$path' target='_blank'>Lihat / Unduh</a>";
        }

        echo "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "<p style='text-align:center;'>Belum ada file yang diupload.</p>";
}
?>
