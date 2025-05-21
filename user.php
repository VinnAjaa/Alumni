<?php
include "koneksi.php";
$tampil = mysqli_query($conn, "select * from data");


if (isset($_POST['cari'])) {
  $search = $_POST['search'];

  
  $sql = "SELECT * FROM data WHERE nama  LIKE '%$search%'";
} else {
 
  $sql = "SELECT * FROM data";
}

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alumni</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
    ul li a {
      text-shadow: 2px 2px #ffffff;
    }

    td,
    th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }
  </style>
</head>

<body>

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
          <a href="user.php">Data</a>
        </li>
        <li>
          <a href="event.php">Event</a>
        </li>
        <li>
          <a href="login.php">Login</a>
        </li>
      </ul>
    </nav>

    <!-- end new navbar -->
    <br>
    <figure class="text-center">
      <blockquote class="blockquote">
        <p><b>DATA ALUMNI SMK NEGERI 1 BONDOWOSO</b></p>
        </p>
      </blockquote>
    </figure>

    <form action="" method="POST" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" name="cari" type="submit">Search</button>
    </form>

    <table>
      <tr>
        <th>ID</th>
        <th>Nisn</th>
        <th>Nama</th>
        <th>Tempat Tanggal Lahir</th>
        <th>Jurusan</th>
        <th>Alamat</th>
        <th>Tahun kelulusan</th>
      </tr>
      <?php
      if (isset($result)) {
        foreach ($result as $row): ?>
          <tr>
            <td>
              <?php echo $row['id'] ?>
            </td>
            <td>
              <?php echo $row['nisn'] ?>
            </td>
            <td>
              <?php echo $row['nama'] ?>
            </td>
            <td>
              <?php echo $row['tempat_tanggal_lahir'] ?>
            </td>
            <td>
              <?php echo $row['jurusan'] ?>
            </td>
            <td>
              <?php echo $row['alamat'] ?>
            </td>
            <td>
              <?php echo $row['tahun_lulus'] ?>
            </td>
          </tr>
        <?php endforeach;
      } else {
        foreach ($tampil as $row): ?>
          <tr>
            <td>
              <?php echo $row['id'] ?>
            </td>
            <td>
              <?php echo $row['nisn'] ?>
            </td>
            <td>
              <?php echo $row['nama'] ?>
            </td>
            <td>
              <?php echo $row['tempat_tanggal_lahir'] ?>
            </td>
            <td>
              <?php echo $row['jurusan'] ?>
            </td>
            <td>
              <?php echo $row['alamat'] ?>
            </td>
            <td>
              <?php echo $row['tahun_lulus'] ?>
            </td>
          </tr>
        <?php endforeach;
      }
      ?>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"></script>

  </body>

</html>