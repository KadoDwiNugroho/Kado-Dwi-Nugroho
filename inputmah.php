<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$npm = $_POST['npm'];
$email = $_POST['email'];
$usia = $_POST['usia'];
$programstudi = $_POST['programstudi'];

mysqli_query($conn, "INSERT into mahasiswa values(null,'$nama','$npm','$email','$usia','$programstudi')");

header('location:mahasiswa.php');


?>