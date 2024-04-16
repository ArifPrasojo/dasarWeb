<?php
$koneksi = mysqli_connect("localhost", "root", "", "prakwebdb");

if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
    exit();
}

$id = 1;
$username = "admin";
$password = "123";

$password_hashed = md5($password);

$query = "INSERT INTO user (id, username, password) VALUES ('$id', '$username', '$password_hashed')";

if (mysqli_query($koneksi, $query)) {
    echo "Data berhasil dimasukkan ke tabel user.";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
