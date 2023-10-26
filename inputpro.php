<?php
include 'koneksi.php';

$kode = $_POST['kode_prodi'];
$nama = $_POST['nama_prodi'];


$query = mysqli_query($conn, "INSERT into prodii values(null,'$kode','$nama')");

header('location:prodi.php');
?>