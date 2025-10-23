<?php
$upload_dir = "uploads/";
$files = glob($upload_dir . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);

if (!empty($files)) {
    foreach ($files as $file) {
        $filename = basename($file);
        echo "<img src='{$upload_dir}{$filename}' alt='{$filename}' style='width:150px; margin:5px; border:1px solid #ccc; border-radius:8px;'>";
    }
} else {
    echo "Belum ada gambar yang diunggah.";
}
?>
