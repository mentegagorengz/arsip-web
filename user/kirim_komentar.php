<?php
include '../koneksi.php';
session_start();

$user_id = $_SESSION['id'];
$content = $_POST['content'];

// try {
  mysqli_query($koneksi, "insert into komentar values (NULL,'$user_id','$content', CURRENT_TIMESTAMP)");
  header("location:forum.php?alert=sent");
// } catch(error) {
//   header("location:forum.php?alert=error");
// }
