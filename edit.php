<?php

include "koneksi.php";
$id=$_GET['id'];
if (isset($_POST['kirim'])) {
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $tempat_tanggal_lahir = $_POST['tempat_tanggal_lahir'];
    // $id = $_POST['id'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];
    $tahunkelulusan = $_POST['tahun_lulus'];

    $sql ="update data set nama='$nama',nisn='$nisn',tempat_tanggal_lahir='$tempat_tanggal_lahir',jurusan='$jurusan',alamat='$alamat',tahun_lulus='$tahunkelulusan' where id = $id";
    if  (mysqli_query($conn, $sql)) {
        header("location:inidex.php");
      } else {
        echo "Error updating record: " . mysqli_error($conn);
      }
    
}

$tampil = mysqli_query($conn,"select * from data where id='$id'");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .konten {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        form {
            display: flex;
            flex-direction: column;
            /* padding: 10px; */
        }
    </style>
</head>

<body>
    <div class="konten">
        <div class="card">
            <div class="card-header">
                <h3>Edit</h3>
            </div>
            <div class="card-body">
                <form action="" method="post">
                <?php foreach($tampil as $row): ?>
                    <!-- <label for="" class="form-label">Id</label>
                    <input type="text" name="id" id="" class="form-control"> -->

                    <label for="" class="form-label">Nisn</label>
                    <input type="text" name="nisn" id="" class="form-control" value="<?php echo $row['nisn'] ?>">

                    <label for="" class="form-label">Nama</label>
                    <input type="text" name="nama" id="" class="form-control" value="<?php echo $row['nama'] ?>">

                    <label for="" class="form-label">Tempat Tanggal Lahir</label>
                    <input type="text" name="tempat_tanggal_lahir" id="" class="form-control" value="<?php echo $row['tempat_tanggal_lahir'] ?>">

                    <label for="" class="form-label">Jurusan</label>
                    <input type="text" name="jurusan" id="" class="form-control" value="<?php echo $row['jurusan'] ?>">

                    <label for="" class="form-label">Alamat</label>
                    <textarea name="alamat" id="" class="form-control" cols="30" rows="2"><?php echo $row['alamat'] ?></textarea>
                    <label for="" class="form-label">Tahun kelulusan</label>
                    <input type="date" name="tahun_lulus" id="" class="form-control" value="<?php echo $row['tahun_lulus'] ?>" class="mb-2">
                    <input type="submit" value="submit" name="kirim">
                    <a href="inidex.php" class="btn btn-warning">KEMBALI</a>
                    
  <?php endforeach; ?>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>