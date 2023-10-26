<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link " href="index.php">Home</a>
      </li>
      <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" role="button" href="" data-bs-toggle="dropdown">Admin</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="mahasiswa.php">Mahasiswa</a></li>
                <li><a class="dropdown-item" href="prodi.php">Prodi</a></li>
            </ul>
        </li>
    </ul>
  </div>
</nav>
<body>
    <div class="container mt-5">
        <a href="tambahpro.php" class="btn btn-primary">Tambah Data Prodi</a>
        <table class="table table-striped table-dark mt-2">
            <tr>
                <th>#</th>
                <th>Kode Prodi</th>
                <th>Nama Prodi</th>
                <th>Aksi</th>
                <th>Aksi</th>
            </tr>
            <?php
            $query = "SELECT * FROM prodii";
            $data = mysqli_query($conn,$query);
            $no=1;
            while ($row = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $row['kode_prodi'] ?></td>
                <td><?= $row['nama_prodi'] ?></td>
                <td><a href="editpro.php?id=<?=$row['id'] ?>" class="btn btn-warning">Edit</a></td>
                <td><a href="hapuspro.php?id=<?=$row['id'] ?>" class="btn btn-danger">Hapus</a></td>

            </tr>
            <?php $no++; }?>
        </table>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>