<?php
    function hitungUmur($thn_lahir, $thn_sekarang) {
        $umur = $thn_sekarang - $thn_lahir;
        return $umur;
    }

    function perkenalan($nama, $salam = "Halo") {
        echo $salam. ", ";
        echo "perkenalakan, nama saya " . $nama . " <br>";
        echo "saya berusia " . hitungUmur(2006, 2025) . "tahun ";
        echo "senang bertemu dengan kalian";
    }

    perkenalan("ilsa");
?>