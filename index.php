<?php

require 'koneksi.php';
$result = mysqli_query($conn, "SELECT * FROM siswa");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">NISN</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Agama</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Action</th>      
    </tr>
  </thead>
  <?php $i = 1; ?>
    <?php while($row = mysqli_fetch_assoc($result)) : ?>
        <tbody>
            <tr>
                <td><?= $i ?></td>
                <td><?= $row["nisn"]; ?></td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["alamat"]; ?></td>
                <td><?= $row["agama"] ?></td>
                <td><?= $row["jenis_kelamin"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
                <td> 
                  <a href="delete-siswa.php?id<?= $row["id"];?>">Delete</a> 
                  <a href="Update-siswa.php?id<?= $row["id"]; ?>">Update</a>
                </td>
    </tr>
  </tbody>
    <?php $i++; ?>
  <?php endwhile; ?>
</table>    
</body>
</html>
