<?php
include "koneksi.php";
$tampil = mysqli_query($conn,"select * from data");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style4.css">
  <link rel="stylesheet" href="style3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,700;1,400;1,600&display=swap" rel="stylesheet">
    <style>
      
table {
  font-family: "Poppins", sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
nav ul li a {
      text-decoration: none;
      font-family: "Poppins", sans-serif;
      color: black;
      font-weight: 800;
      padding: 8px 0;
      text-shadow: 2px 2px #ffffff;
      transition: all;
      transition-duration: 300ms;
      border-bottom: 1px solid rgba(255, 68, 0, 0);
    }
</style>
<link rel="stylesheet" href="style.css">
</head>
<body  >
<body style="background-color: #EEF5FF;">
<!-- start new navbar -->

<nav>
  <div class="">
    <img src="smea.png" alt="my-toga">
  </div>
  <ul>
    <li>
      <a href="alumni.php">Home</a>
    </li>
    <li>
    <a href="inidex.php">Data</a>
    </li>
    <!-- <li>
    <a href="event.php">Event</a>
    </li> -->
  </ul>
</nav>

<!-- end new navbar -->

<figure class="text-center">
        <blockquote class="blockquote">
            <p><b>DATA ALUMNI SMK NEGERI 1 BONDOWOSO</b></p></p>
        </blockquote>
    </figure>


<table>
  <tr>

  <button type="button" class="btn btn-dark"><a href="insert.php" style="color: white;" >Tambah Data</a></button>
    
    <th>ID</th>
    <th>Nisn</th>
    <th>Nama</th>
    <th>Tempat Tanggal Lahir</th>
    <th>Jurusan</th>
    <th>Alamat</th>
    <th>Tahun kelulusan</th>
    <th>Aksi</th>
  </tr>

  <?php foreach($tampil as $row): ?>

  <tr>
    <td><?php echo $row['id'] ?></td>
    <td><?php echo $row['nisn'] ?></td>
    <td><?php echo $row['nama'] ?></td>
    <td><?php echo $row['tempat_tanggal_lahir'] ?></td>
    <td><?php echo $row['jurusan'] ?></td>
    <td><?php echo $row['alamat'] ?></td>
    <td><?php echo $row['tahun_lulus'] ?></td>
    <td>
      <!-- <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-primary">Edit</a>
      <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-danger">Hapus</a> -->
      <div class="tombolAksi">
         <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning">edit</a>
         <a onclick="return confirm('Anda yakin mau menghapus <?php $row['nama'] ?> ?')" href="delete.php?id=<?= $row['id'] ?>" class="btn btn-success">Delete</a>
    </td>
  </tr>

  <?php endforeach; ?>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
