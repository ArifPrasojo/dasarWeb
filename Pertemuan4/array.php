<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];
$nilaiLulus = [];

foreach($nilaiSiswa as $nilai){
    if ($nilai >= 70){
        $nilaiLulus[] = $nilai;
    }
}
echo "Daftar nilai  siswa yang lulus : ". implode(',',$nilaiLulus), "<br><br>";

$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];

$KaryawabPengalamanLimaTahun = [];
foreach($daftarKaryawan as $karyawan){
    if($karyawan[1] > 5){
        $KaryawabPengalamanLimaTahun[] = $karyawan[0];
    }
}

echo "Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun : ". implode(' ,', $KaryawabPengalamanLimaTahun), "<br><br>";
echo "------------------------ <br>";

$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];

$mataKuliah = 'Fisika';
echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah : <br>";
foreach($daftarNilai[$mataKuliah] as $nilai){
    echo "Nama : {$nilai[0]}, Nilai : {$nilai[1]} <br>";
}
echo "-------------------- <br>";

//Soal Cerita Praktikum 5
$daftarNilaiSiswa1_1 = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90],
];
$totalNilaiSiswa = 0;
$rataRata;

foreach($daftarNilaiSiswa1_1 as $nilai){
    $totalNilaiSiswa += $nilai[1];
}

$rataRata = $totalNilaiSiswa / count($daftarNilaiSiswa1_1);
echo "Rata-rata nilai : $rataRata <br>";

for ($i = 0; $i < 5; $i++){
    if ($daftarNilaiSiswa1_1[$i][1] > $rataRata){
        echo "Nama : {$daftarNilaiSiswa1_1[$i][0]}, Nilai : {$daftarNilaiSiswa1_1[$i][1]} <br>";
    }
}
?>