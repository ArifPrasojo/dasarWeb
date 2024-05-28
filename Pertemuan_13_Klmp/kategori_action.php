<?php 
include_once('model/kategori_model.php');
 
 $act = $_GET['act'];

 if ($act == 'simpan') {
   $data = [
       'nama_kategori' => $_POST['nama_kategori'],
       'deskripsi' => $_POST['deskripsi']
   ];

   $kategori->insertData($data);

   header('location: kategori.php?status=sukses&message=Data berhasil disimpan');
}

if ($act == 'edit') {
   $id = $_GET['id'];

   $data = [
       'nama_kategori' => $_POST['nama_kategori'],
       'deskripsi' => $_POST['deskripsi']
   ];

   $kategori->updateData($id, $data);

   header('location: kategori.php?status=sukses&message=Data berhasil diubah');
}

if ($act == 'hapus') {
   $id = $_GET['id'];

   $kategori->deleteData($id);

   header('location: kategori.php?status=sukses&message=Data berhasil dihapus');
}

// Tutup koneksi database
$db->close();