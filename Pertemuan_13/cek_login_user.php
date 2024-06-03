<?php
if (session_status() === PHP_SESSION_NONE) 
    session_start();

include "./config/koneksiuser.php";

// Ambil username dari form login
$nama = $_POST['nama'];

// Query untuk mendapatkan data user berdasarkan username
$query = "SELECT nama FROM m_user WHERE nama = ?";
$stmt = $db->prepare($query);
$stmt->bind_param("s", $nama);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$stmt->close();

if ($row) {
    // Username valid, set session
    $_SESSION['nama'] = $row['nama'];
    header("Location: indexuser.php");
    exit;
} else {
    // Username tidak ditemukan
    header("Location: loginuser.php?error=invalidUser");
    exit;
}
?>
