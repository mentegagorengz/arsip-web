<?php 
include '../koneksi.php';
session_start();
$id_petugas = $_SESSION["id"];
$id = $_GET['id'];
$status = $_GET['status'];

// approve dokumen
mysqli_query($koneksi, "update arsip set arsip_status='$status', arsip_petugas='$id_petugas' where arsip_id='$id'");
header("location:arsip.php");
