<?php

include("koneksi.php");

$id = $_GET['id'];

$sql = mysqli_query($conn, "DELETE FROM `data` WHERE id = $id");

if ($sql == true) {
    echo $id;
    header("Location: inidex.php");
}

?>