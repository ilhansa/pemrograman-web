<?php
if (isset($_POST["submit"])) {
    $targetDirectory = "documents/"; //direktori tujuan untuk menyimpan file
    $targetFile = $targetDirectory.basename($_FILES["documentToUpload"]["name"]);
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $allowedExtensions = array("txt", "pdf", "doc", "docx");
    $maxFileSize = 10 * 1024 * 1024; //10MB

    if (in_array($fileType, $allowedExtensions) && $_FILES["documentToUpload"]["size"] <= $maxFileSize) {
        if (move_uploaded_file($_FILES["documentToUpload"]["tmp_name"], $targetFile)) {
            echo "Dokumen berhasil diunggah";
        } else {
            echo "Gagal mengunggah dokumen";
        }
    } else {
        echo "Dokumen tidak valid atau terlalu besar";
    }


}
?>