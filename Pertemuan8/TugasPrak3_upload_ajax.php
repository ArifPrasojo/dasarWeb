<?php
if (isset($_FILES['images'])) {
    $errors = array();

    foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
        $file_name = $_FILES['images']['name'][$key];
        $file_size = $_FILES['images']['size'][$key];
        $file_tmp = $_FILES['images']['tmp_name'][$key];
        $file_type = $_FILES['images']['type'][$key];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        $extensions = array("jpg", "jpeg", "png", "gif");

        if (!in_array($file_ext, $extensions)) {
            $errors[] = "File " . $file_name . " bukan gambar. Upload gagal.";
        }

        if ($file_size > 2097152) {
            $errors[] = 'Ukuran file ' . $file_name . ' tidak boleh lebih dari 2 MB';
        }

        if (empty($errors)) {
            move_uploaded_file($file_tmp, "images/" . $file_name);
        }
    }

    if (empty($errors)) {
        echo "Semua gambar berhasil diunggah.";
    } else {
        echo implode("<br>", $errors);
    }
}
?>
