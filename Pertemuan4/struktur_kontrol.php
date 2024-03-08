<?php
$nilaiNumerik = 92;

if($nilaiNumerik >= 80 && $nilaiNumerik <= 100){
    echo "Nilai huruf : A" , "<br><br>";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90){
    echo "Nilai huruf : B", "<br><br>";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80){
    echo "Nilai huruf C", "<br><br>";
} elseif ($nilaiNumerik < 70){
    echo "Nilai huruf : D", "<br><br>";
}

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget){
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.", "<br><br>";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++){
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}
echo "Jumlah buah yang akan dipanen adalah : $jumlahBuah", "<br><br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach($skorUjian as $skor){
    $totalSkor += $skor;
}
echo "Total skor ujian adalah : $totalSkor <br><br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];
foreach ($nilaiSiswa as $nilai){
    if ($nilai < 60) {
        echo "Nilai : $nilai (Tidak lulus) <br>";
    }
    echo "Nilai : $nilai (Lulus) <br>";
}

//Soal Cerita 1 Praktikum 4
$nilaiSiswa1_1 = [85, 92, 78, 64, 90,
75, 88, 79, 70, 96];
$totalNilai = 0;
$rataRataNilai = 0;

for($i = 0; $i <10; $i++){
    if($nilaiSiswa1_1[$i] > 70 && $nilaiSiswa1_1[$i] < 92){
        $totalNilai += $nilaiSiswa1_1[$i];
    }
}

$rataRataNilai = $totalNilai / 8;
echo "Rata-Rata nilai siswa : $rataRataNilai<br><br>";

//Soal Cerita 2 Praktikum 4
$hargaProduk = 120000;
$diskon = 0.8;

if ($hargaProduk >= 100000){
    $hargaProduk *= $diskon;
}
echo "Harga setelah diskon : Rp.$hargaProduk <br><br>";

//Soal Cerita 3 Praktikum 4
$poinGame = 600;
$hadiahTambahan = ($poinGame > 500) ? "Ya" : "Tidak";

echo "Total Skor/Poin pemain adalah : $poinGame <br>";
echo "Apakah pemain memenuhi persaratan untuk mendapatkan hadiah ? $hadiahTambahan<br><br>";

?>