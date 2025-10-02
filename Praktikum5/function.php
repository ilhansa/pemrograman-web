<?php
    function perkenalan($nama, $salam = "assalamualaikum") {
        echo $salam. ", ";
        echo "perkenalakan, nama saya " . $nama . " <br>";
        echo "senang bertemu dengan kalian <br>";
    }

    $saya = "Salih";
    $ucapanSalam = "Selamat pagi";
    perkenalan($saya);
?>
