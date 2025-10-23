<?php

if (isset($_FILES['files']) && !empty($_FILES['files']['name'][0])) {

    $errors_all = array();
    $success_count = 0;
    $extensions = array("pdf", "png", "jpg", "jpeg", "gif");
    $success_files = array();
    $max_size = 5 * 1024 * 1024; 
    $upload_dir = "uploads/";

    $file_keys = array_keys($_FILES['files']['name']);
    
    foreach ($file_keys as $key) {
        
        $file_name = $_FILES['files']['name'][$key];
        $file_size = $_FILES['files']['size'][$key];
        $file_tmp  = $_FILES['files']['tmp_name'][$key];
        
        if ($file_name == '') continue;

        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        $errors = array();

        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "Ekstensi tidak valid: {$file_name}";
        }
        
        if ($file_size > $max_size) {
            $errors[] = "Ukuran {$file_name} melebihi 2 MB";
        }

        if (empty($errors)) {
            if (move_uploaded_file($file_tmp, $upload_dir . $file_name)) {
                $success_count++;
                $success_files[] = ['nama' => $file_name];
            } else {
                $errors_all[] = "Gagal memindahkan {$file_name}. (Cek izin folder '{$upload_dir}')";
            }
        } else {
            $errors_all = array_merge($errors_all, $errors);
        }
    }

    // Simpan metadata
    if (!empty($success_files)) {
        $meta_file = $upload_dir . "metadata.json";
        $existing_meta = [];

        if (file_exists($meta_file)) {
            $existing_meta = json_decode(file_get_contents($meta_file), true);
        }

        $existing_meta = array_merge($existing_meta, $success_files);
        file_put_contents($meta_file, json_encode($existing_meta, JSON_PRETTY_PRINT));
    }

    //Output Hasil ke AJAX
    $output = "";
    if ($success_count > 0) {
        $nama_file_berhasil = array_column($success_files, 'nama');
        $daftar_nama = implode(', ', $nama_file_berhasil);
        $output .= "Berhasil mengunggah: {$daftar_nama}<br>";

    }
    if (!empty($errors_all)) {
        $output .= "Gagal mengunggah file:<br>";
        $output .= implode("<br>- ", $errors_all);
    }
    
    echo $output;

} else {
    echo "Tidak ada file yang dipilih atau terjadi kesalahan pada input.";
}
?>