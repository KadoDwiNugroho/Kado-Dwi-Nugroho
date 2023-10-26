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
    <form action="inputmah.php" method="post">
        <input type="hidden" name="id">
    <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
   <input type="text" name="nama" id="nama" class="form-control">
 </div>
        <div class="mb-3">
    <label for="npm" class="form-label">NPM</label>
   <input type="text" name="npm" id="npm" class="form-control">
 </div>
 <div class="mb-3">
    <label for="email" class="form-label">Email</label>
   <input type="text" name="email" id="email" class="form-control">
 </div>
 <div class="mb-3">
    <label for="usia" class="form-label">Usia</label>
   <input type="text" name="usia" id="usia" class="form-control">
 </div> <div class="mb-3">
    <label for="programstudi" class="form-label">Program Studi</label>
   <input type="text" name="programstudi" id="programstudi" class="form-control">
 </div>

    <input type="submit" value="simpan">
    </form>
</div>
</body>
</html>


