<?php
include "koneksi.php";

$username=$_POST['username'];
$password=md5($_POST['password']);

$query="SELECT * FROM user WHERE username='$username' and password='$password'";
$result=mysqli_query($koneksi, $query);
$cek=mysqli_num_rows($result);

if ($cek) {
    echo "Anda berhasil. menuju "; ?>
    <a href="homeGuest.html">Halaman HOME</a>
<?php
} else {
    echo "Anda gagal login. Silahkan ";?>
    <a href="loginForm.html">Login kembali</a>
<?php
    echo mysqli_error($koneksi);
}
?>
