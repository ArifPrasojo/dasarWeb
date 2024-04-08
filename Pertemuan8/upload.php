<?php
// if (isset($_POST["submit"])) {
//     $dir = "uploads/"; // Direktori tujuan untuk menyimpan file
//     $file = $dir . basename($_FILES["fileToUpload"]["name"]);
//     $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));

//     $allowed = ["jpg", "jpeg", "png", "gif"];
//     $maxSize = 5 * 1024 * 1024; // 5MB

//     if (in_array($ext, $allowed) && $_FILES["fileToUpload"]["size"] <= $maxSize && move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $file)) {
//         echo "File berhasil diunggah.";

//         list($w, $h) = getimagesize($file);
//         $thumbW = 200; // 
//         $thumbH = floor($h * ($thumbW / $w));
//         $thumb = imagecreatetruecolor($thumbW, $thumbH);
//         imagecopyresampled($thumb, imagecreatefromstring(file_get_contents($file)), 0, 0, 0, 0, $thumbW, $thumbH, $w, $h);
//         imagejpeg($thumb, $dir . 'thumbnail_' . basename($_FILES["fileToUpload"]["name"]));

//         unlink($file);
//     } else {
//         echo "Gagal mengunggah file.";
//     }
// }

if (isset($_POST["submit"])) {
    $targetDirectory = "documents/"; // Direktori tujuan untuk menyimpan dokumen
    $targetFile = $targetDirectory . basename($_FILES["documentToUpload"]["name"]);
    $documentFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $allowedExtensions = array("txt", "pdf", "doc", "docx");
    $maxFileSize = 10 * 1024 * 1024; // 10MB

    if (in_array($documentFileType, $allowedExtensions) && $_FILES["documentToUpload"]["size"] <= $maxFileSize) {
        if (move_uploaded_file($_FILES["documentToUpload"]["tmp_name"], $targetFile)) {
            echo "Dokumen berhasil diunggah.";
        } else {
            echo "Gagal mengunggah dokumen.";
        }
    } else {
        echo "Jenis dokumen tidak valid atau melebihi ukuran maksimum yang diizinkan.";
    }
}
?>
