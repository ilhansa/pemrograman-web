<?php
$data = array("nama" => "ilsa", "usia" => 19);
if (isset($data["nama"])) {
    echo "Nama: ". $data["nama"];
} else {
    echo "variabel tidak ditemukan didalam array";
}
?>