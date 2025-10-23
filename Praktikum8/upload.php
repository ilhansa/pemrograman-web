<?php
if (isset($_POST["submit"])) {
    $targetDirectory = "uploads/"; //direktori tujuan untuk menyimpan file
    $targetFile = $targetDirectory.basename($_FILES["fileToUpload"]["name"]);
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $allowedExtensions = array("jpg", "jpeg", "png", "gif");
    $maxFileSize = 5 * 1024 * 1024; //5MB

    if (in_array($fileType, $allowedExtensions) && $_FILES["fileToUpload"]["size"] <= $maxFileSize) {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            echo "File berhasil diunggah";
             // Membuat thumbnail 
            $thumbnailDir = "uploads/thumbnails/";
            if (!is_dir($thumbnailDir)) {
                mkdir($thumbnailDir, 0777, true);
            }

            $thumbnailWidth = 200;
            list($width, $height) = getimagesize($targetFile);
            $ratio = $height / $width;
            $thumbnailHeight = (int) round($thumbnailWidth * $ratio);

            $thumbnailPath = $thumbnailDir . "thumb_" . basename($targetFile);

            // Buat gambar sesuai jenis file
            switch ($fileType) {
                case "jpg":
                case "jpeg":
                    $srcImage = imagecreatefromjpeg($targetFile);
                    break;
                case "png":
                    $srcImage = imagecreatefrompng($targetFile);
                    break;
                case "gif":
                    $srcImage = imagecreatefromgif($targetFile);
                    break;
                default:
                    $srcImage = null;
            }

            if ($srcImage) {
            $thumbnailHeight = (int) round($thumbnailWidth * $ratio);

            $thumb = imagecreatetruecolor((int)$thumbnailWidth, (int)$thumbnailHeight);
            imagecopyresampled(
                $thumb, $srcImage,
                0, 0, 0, 0,
                (int)$thumbnailWidth, (int)$thumbnailHeight,
                (int)$width, (int)$height
            );

                // Simpan thumbnail sesuai tipe
                switch ($fileType) {
                    case "jpg":
                    case "jpeg":
                        imagejpeg($thumb, $thumbnailPath);
                        break;
                    case "png":
                        imagepng($thumb, $thumbnailPath);
                        break;
                    case "gif":
                        imagegif($thumb, $thumbnailPath);
                        break;
                }

                imagedestroy($srcImage);
                imagedestroy($thumb);

                echo "<br> Thumbnail berhasil dibuat: <br>";
                echo "<img src='$thumbnailPath' alt='Thumbnail'><br>";
            }
        } else {
            echo "Gagal mengunggah file";
        }
    } else {
        echo "File tidak valid atau terlalu besar";
    }
}
?>