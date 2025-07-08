<?php 
include 'koneksi.php';

// Validasi input
if(!isset($_POST['nama']) || !isset($_POST['username']) || !isset($_POST['password']) || !isset($_POST['konfirmasi_password'])) {
    header("location:register.php?alert=gagal");
    exit();
}

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$konfirmasi_password = $_POST['konfirmasi_password'];
$role = 'user'; // Set role otomatis menjadi 'user'

// Validasi password
if($password != $konfirmasi_password) {
    header("location:register.php?alert=password_tidak_sama");
    exit();
}

// Cek apakah username sudah ada
$cek_username = mysqli_query($koneksi, "SELECT * FROM user WHERE user_username = '$username'");
if(mysqli_num_rows($cek_username) > 0) {
    header("location:register.php?alert=username_ada");
    exit();
}

$password_hash = md5($password);

$rand = rand();
$allowed = array('gif','png','jpg','jpeg');
$filename = $_FILES['user_foto']['name'];

if($filename == ""){
    mysqli_query($koneksi, "insert into user values (NULL,'$nama','$username','$password_hash','', '$role')");
    header("location:register.php?alert=sukses");
}else{
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    if(!in_array($ext,$allowed) ) {
        header("location:register.php?alert=gagal");
    }else{
        move_uploaded_file($_FILES['user_foto']['tmp_name'], 'gambar/user/'.$rand.'_'.$filename);
        $file_gambar = $rand.'_'.$filename;
        mysqli_query($koneksi, "insert into user values (NULL,'$nama','$username','$password_hash','$file_gambar', '$role')");
        header("location:register.php?alert=sukses");
    }
}
?>