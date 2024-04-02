<?php
//Bagian 1
$myArray = array();
if (empty($myArray)) {
    echo "Array tidak terdefinisi atau kosong.";
} else {
    echo "Array terdefinisi dan tidak kosong.";
}

echo "<br><br>";

//Bagian 2
$nonExistentVar = 11; //jika ada sebuah element pada varibel
if (empty($nonExistentVar)) {
    echo "Variabel tidak terdefinisi atau kosong.";
} else {
    echo "Variabel terdefinisi dan tidak kosong.";
}
?>