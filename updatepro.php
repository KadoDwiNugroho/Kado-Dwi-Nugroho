<?php 
    include 'koneksi.php';
    $kode_prodi =$_POST['kode_prodi'];
    $nama_prodi = $_POST['nama_prodi'];
    $id = $_POST['id'];


    $query ="UPDATE prodii set kode_prodi='$kode_prodi',nama_prodi='$nama_prodi' WHERE id='$id'";
    $data = mysqli_query($conn,$query);
    
    header("location:prodi.php");   
?> 