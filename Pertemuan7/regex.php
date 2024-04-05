<?php
$pattern = '/[a-z]/'; // Cocokkan huruf kecil.
echo "-------------------------------------<br>";
$text = 'This is a Sample Text. ';
echo "Mencari Huruf Kecil! <br>";
echo "Text : $text <br>";
    if (preg_match($pattern, $text) ) {
    echo "Huruf kecil ditemukan!";
    } else {
        echo "Tidak ada huruf kecil!";
    }

$pattern = '/[0-9]+/'; // Cocokkan satu atau lebih digit.
$text = 'There are 123 apples. ';
echo "<br>-------------------------------------";
echo "<br>Mencari Angka Yang Cocok!";
echo "<br> Text : $text <br>";
    if (preg_match($pattern, $text, $matches) ) {
        echo "Cocokkan : " . $matches[0];
        echo "<br>Jadi angkat yang ditemukan : " . $matches[0];
    } else {
        echo "Tidak ada yang cocok!";
    }

$pattern = '/apple/';
$replacement = 'banana';
$text = 'I like apple pie. ';
$new_text = preg_replace($pattern, $replacement, $text);
echo "<br>-------------------------------------";
echo "<br>Mengubah Text!";
echo "<br>Text asli : $text <br>";
echo "Text yang telah diubah : $new_text";

$pattern = '/go{1,3}d/';
$pattern2 = '/goo*d/';// Cocokkan "god", "good", "gooood", dll.
$text = 'god is good. ';
$text2 = 'gooood and Very good.';
echo "<br>-------------------------------------";
echo "<br>Cocokan Text!";
echo "<br>Text 1 : $text";
if (preg_match($pattern, $text, $matches) ) {
    echo "<br>Cocokkan : " . $matches[0];
    } else {
        echo "Tidak ada yang cocok!";
    }

echo "<br>Text 2 : $text2";
if (preg_match($pattern2, $text2, $matches) ) {
    echo "<br>Cocokkan : " . $matches[0];
    } else {
        echo "Tidak ada yang cocok!";
    }