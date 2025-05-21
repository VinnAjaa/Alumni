<?php
include "koneksi.php";

if (isset($_POST['kirim'])) {
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $tempat_tanggal_lahir = $_POST['tempat_tanggal_lahir'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];
    $tahunkelulusan = $_POST['tahun_lulus'];

    $sql = "INSERT INTO `data` (`nisn`,`nama`,`tempat_tanggal_lahir`,`jurusan`,`alamat`,`tahun_lulus`) VALUES ('$nisn','$nama','$tempat_tanggal_lahir','$jurusan','$alamat','$tahunkelulusan')";
    
    if  (mysqli_query($conn, $sql)) {
        header("location:inidex.php");
      } else {
        echo "Error updating record: " . mysqli_error($conn);
      }
}
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

    <figure class="text-center">
        <blockquote class="blockquote">
            <p><b>DATA ALUMNI SMK NEGERI 1 BONDOWOSO</b></p>
            </p>
        </blockquote>
        <figcaption class="blockquote-footer">
            Jl.hos cokroaminoto 45 <cite title="Source Title">Bondowoso Jawa Timur 62812</cite>
        </figcaption>
    </figure>
    <br>
    <div class="konten">
        <div class="card">
            <div class="card-header">
                <h3>Tambah Data</h3>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <!-- <label for="" class="form-label">Id</label>
                    <input type="text" name="id" id="" class="form-control"> -->

                    <label for="" class="form-label">Nisn</label>
                    <input type="number" name="nisn" id="" class="form-control">

                    <label for="" class="form-label">Nama</label>
                    <input type="text" name="nama" id="" class="form-control">

                    <label for="" class="form-label">Tempat Tanggal Lahir</label>
                    <input type="text" name="tempat_tanggal_lahir" id="" class="form-control">

                    <label for="" class="form-label">Jurusan</label>
                    <input type="text" name="jurusan" id="" class="form-control">

                    <label for="" class="form-label">Alamat</label>
                    <textarea name="alamat" id="" class="form-control" cols="30" rows="2"></textarea>
                    <label for="" class="form-label">Tahun kelulusan</label>
                    <!-- <input type="text" name="tahun_lulus" id="" class="form-control"> -->
                    <input type="date" name="tahun_lulus" id="" class="form-control" class="mb-2">
                    <input type="submit" value="submit" name="kirim">
                    <a href="inidex.php" class="btn btn-warning">KEMBALI</a>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>