<?php
    // Tetapkan cookie "user" dengan nilai "Polinema" yang berakhir dalam 1 jam (3600 detik)
    setcookie("user", "Polinema", time() + 3600);

    // Tampilkan pesan bahwa cookie telah berhasil diatur
    echo "Cookie 'user' telah berhasil diatur!";
?>
