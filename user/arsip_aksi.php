<?php 
include '../koneksi.php';
session_start();
date_default_timezone_set('Asia/Jakarta');

$waktu = date('Y-m-d H:i:s'); 
$petugas = $_SESSION['id'];
$user_id = $_SESSION['id']; // For user version, petugas and user_id are the same
$kode  = $_POST['kode'];
$nama  = $_POST['nama'];
$tipe = $_POST["tipe"]; // Add tipe field

$rand = rand();

$filename = $_FILES['file']['name'];
$jenis = pathinfo($filename, PATHINFO_EXTENSION);

$kategori = $_POST['kategori'];
$keterangan = $_POST['keterangan'];

if($jenis == "php") {
    header("location:arsip.php?alert=gagal");
}else{
    move_uploaded_file($_FILES['file']['tmp_name'], '../arsip/'.$rand.'_'.$filename);
    $nama_file = $rand.'_'.$filename;
    mysqli_query($koneksi, "insert into arsip values (NULL,'$waktu','$petugas','$user_id','$kode','$nama','$jenis','$kategori','$keterangan','$nama_file','REVIEW', '$tipe')")or die(mysqli_error($koneksi));
    header("location:arsip.php?alert=sukses");
}
?>
