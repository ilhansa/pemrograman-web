<?php
    $menu = [
        [
            "nama" => "Beranda"
        ],
        [
            "nama" => "Berita",
            "submenu" => [
                [
                    "nama" => "Wisata",
                    "submenu" => [
                        [
                            "nama" => "Pantai"
                        ],
                        [
                            "nama" => "Gunung"
                        ]
                    ]
                ],
                [
                    "nama" => "Kuliner"
                ],
                [
                    "nama" => "Hiburan"
                ]
            ]
        ],
        [
            "nama" => "tentang"
        ],
        [
            "nama" => "Kontak"
        ]
    ];

    function tampilkanMenuBertingkat(array $menu) {
        echo "<ul>";
        foreach ($menu as $item) {
            echo "<li>{$item["nama"]}";
            if (isset($item["submenu"])) {
            tampilkanMenuBertingkat($item["submenu"]);
            }
            echo "</li>";
        };
        echo "</ul>";
    }

    tampilkanMenuBertingkat($menu);
?>