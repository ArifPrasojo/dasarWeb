<?php

//Soal 5
// function perkenalan(){
//     echo "Assalamualaikum, ";
//     echo "Perkenalkan, nama saya Elok<br/>";
//     echo "Senang berkenalan dengan Anda<br/>";
// }

// echo "<br>" . perkenalan();
// perkenalan()


//Soal 6
// function perkenalan($nama, $salam="Assalamualaikum") {
//         echo $salam.", ";
//         echo "Perkenalkan, nama saya ".$nama."<br/>";
//         echo "Senang berkenalan dengan Anda<br/>";
//     }
//     //memanggil fungsi yang sudah dibuat
//     perkenalan("Hamdana","Hallo");
    
//     echo "<hr>";
    
//     $saya = "Elok";
//     $ucapanSalam = "Selamat pagi";
    
//     //memanggil lagi
//     perkenalan($saya) ;

//Soal 7
// function hitungUmur($thn_lahir, $thn_sekarang){
//     $umur = $thn_sekarang - $thn_lahir;
//     return $umur;
//     }
//     echo "Umur saya adalah ". hitungUmur(2004, 2024) ." tahun" 

//Soal 8
function hitungUmur($thn_lahir, $thn_sekarang) {
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
    }
    function perkenalan ($nama, $salam="Assalamualaikum") {
    echo $salam.",";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    }
    //memanggil fungsi lain
    echo "Saya berusia ". hitungUmur(2004, 2024) ." tahun<br/>";
    echo "Senang berkenalan dengan anda<br/>";
    
    //memanggil fungsi perkenalan
    perkenalan ("Elok");
?>