<?php
// -------------------------------------
// function tampilkanHaloDunia(){
//     echo "Halo Dunia! <br>";
    
//     tampilkanHaloDunia();
// }

// tampilkanHaloDunia();
// -----------------------------------
// function tampilkanAngka(int $jumalah, int $indeks = 1){
//     echo "Perulangan ke-($indeks) <br>";

//     if ($indeks < $jumalah){
//         tampilkanAngka($jumalah, $indeks + 1);
//     }
// }
// tampilkanAngka(20)
// -------------------------------------
$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subMenu" => [
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
        "nama" => "Tentang"
    ],
    [
        "nama" => "Kotak"
    ]
];

function tampilkanMenuBertingkat(array $menu){
    echo "<ul>";
    foreach($menu as $item){
        echo "<li>{$item['nama']}";
        if(isset($item['subMenu'])){
            tampilkanMenuBertingkat($item['subMenu']);
        }
        echo "</li>";
    }
    echo "</ul>";
}

tampilkanMenuBertingkat($menu);
?>