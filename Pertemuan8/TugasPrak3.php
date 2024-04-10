<!DOCTYPE html>
<html>
<head>
    <title>Unggah File Gambar</title>
</head>
<body>
    <form id="upload-form" action="TugasPrak3_upload_ajax.php" method="post" enctype="multipart/form-data">
        <input type="file" name="images[]" id="images" multiple>
        <input type="submit" name="submit" value="Unggah">
    </form>
    
    <div id="status"></div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="TugasPrak3_upload.js"></script>
</body>
</html>
