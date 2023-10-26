<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<div class="container mt-5">
    <form action="inputpro.php" method="post">
    <div class="mb-3">
    <label for="kode_prodi" class="form-label">Kode Prodi</label>
   <input type="text" name="kode_prodi" id="kode_prodi" class="form-control">
 </div>
        <div class="mb-3">
    <label for="nama_prodi" class="form-label">Nama Prodi</label>
   <input type="text" name="nama_prodi" id="nama_prodi" class="form-control">
 </div>
    <input type="submit" value="simpan">
    </form>
</div>
</body>
</html>