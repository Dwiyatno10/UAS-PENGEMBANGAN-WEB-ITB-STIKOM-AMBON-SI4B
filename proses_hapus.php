<?php
include ('koneksi.php');
$id = $_GET['id'];
$query = "DELETE FROM perpus WHERE id ='$id'";
$result = mysqli_query($conn, $query);

if(!$result) {
    die("Query Error : ".mysqli_errno($conn)." - ".mysqli_error($conn));
} else {
    echo "<script>alert('Data berhasil dihapus!');window.location='index.php';</script>";
}