<?php
$a = 10;
$b = 5;
$hasilTambah = $a + $b;
$hasilkurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Tambahan : {$hasilTambah} <br>";
echo "Hasil Kurang : {$hasilkurang} <br>";
echo "Hasil Kali : {$hasilKali} <br>";
echo "Hasil Bagi : {$hasilBagi} <br>";
echo "Sisa bagi : {$sisaBagi} <br>";
echo "Pangkat : {$pangkat} <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "------------------------- <br>";
echo "Hasil Sama : {$hasilSama} <br>";
echo "Hasil Tidak Sama : {$hasilTidakSama} <br>";
echo "Hasil Lebih Kecil : {$hasilLebihKecil} <br>";
echo "Hasil Lebih Besar : {$hasilLebihBesar} <br>";
echo "Hasil Lebih Kecil Sama : {$hasilLebihKecilSama} <br>";
echo "Hasil Lebih Besar Sama: {$hasilLebihBesarSama} <br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "----------------------------- <br>";
echo "Hasil And : {$hasilAnd} <br>";
echo "Hasil Or : {$hasilOr} <br>";
echo "Hasil NOT A : {$hasilNotA} <br>";
echo "Hasil NOT B : {$hasilNotB} <br>";

$tambahsamadengan = $a += $b;
$kurangsamadengan = $a -= $b;
$kalisamadengan = $a *= $b;
$bagisamadengan = $a /= $b;
$sisabagisamadengan = $a %= $b;

echo "----------------------------- <br>";
echo "Tambah Sama Dengan : {$tambahsamadengan} <br>";
echo "Kurang Sama Dengan : {$kurangsamadengan} <br>";
echo "Kali Sama dengan : {$kalisamadengan} <br>";
echo "Bagi Sama Dengan : {$bagisamadengan} <br>";
echo "Sisa Bagi Sama Dengan : {$sisabagisamadengan} <br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "----------------------------- <br>";
echo "Hasil Identik : {$hasilIdentik} <br>";
echo "Hasil Tidak Identik : {$hasilTidakIdentik} <br>";

$kursi = 45;
$penuh = 28;
$kosong = $kursi - $penuh;
$persentasekursikosong = ($kosong/$kursi) * 100;

echo "Persentase kursi kosong : ", $persentasekursikosong, "% <br>";
?>