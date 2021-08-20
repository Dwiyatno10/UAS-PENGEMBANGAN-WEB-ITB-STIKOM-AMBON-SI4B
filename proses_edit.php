<?php
    include('koneksi.php');

    $id = $_POST['id'];
    $Judul = $_POST['Judul'];
    $Penulis = $_POST['Penulis'];
    $Harga = $_POST['Harga'];
    $Gambar = $_FILES['Gambar']['name'];

    if($Gambar != "") {
        $esktensi_diperbolehkan = array('png','jpg');
        $x = explode('.', $Gambar);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['Gambar']['tmp_name'];
        $angka_acak = rand(1, 999);
        $nama_gambar_baru = $angka_acak.'-'.$Gambar;

        if(in_array($ekstensi, $esktensi_diperbolehkan) === true) {
            move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru);

            $query = "UPDATE perpus SET id = '$id',Judul = '$Judul',Penulis = '$Penulis',Harga = '$Harga',Gambar = '$nama_gambar_baru'";
            $query .= "WHERE id = '$id'";
            $result = mysqli_query($conn, $query);

            if(!$result) {
                    die("Query Error : ".mysqli_errno($conn)." - ".mysqli_error($conn));
            } else {
                echo "<script>alert('Data berhasil diubah!');window.location='index.php';</script>";
            }
        } else {
            echo "<script>alert('Eksentensi gambar hany bisa jpg dan png!');window.location='edit_produk.php';</script>";
        }

    } else {
            $query = "UPDATE perpus SET Judul = '$Judul',Penulis = '$Penulis',Harga = '$Harga''";
            $query = "WHERE id ='$id'";
            $result = mysqli_query($conn, $query);

            if(!$result) {
                    die("Query Error : ".mysqli_errno($conn)." - ".mysqli_error($conn));
            } else {
                echo "<script>alert('Data berhasil diubah!');window.location='index.php';</script>";
            }
    }

?>