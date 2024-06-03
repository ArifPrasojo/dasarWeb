<?php
    if (session_status() === PHP_SESSION_NONE) 
        session_start();

    include "model/koneksi.php";

    // Ambil nama dari form login
    $nama = $_POST['nama'];

    // Query untuk mendapatkan data user berdasarkan nama
    $query = "SELECT nama FROM m_user WHERE nama = ?";
    $stmt = $db->prepare($query);
    $stmt->bind_param("s", $nama);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $stmt->close();

    if ($row) {
        // Nama valid, set session
        $_SESSION['nama'] = $row['nama'];
        header("Location: indexuser.php");
        exit;
    } else {
        // Nama tidak ditemukan
        header("Location: loginuser.php?error=invalidUser");
        exit;
    }
?>
