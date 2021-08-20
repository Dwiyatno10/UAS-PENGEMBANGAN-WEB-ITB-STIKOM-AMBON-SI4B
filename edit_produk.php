<?php include('koneksi.php');

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM perpus where id ='$id'";
        $result = mysqli_query($conn, $query);
        if(!$result) {
            die("Query Error :".mysqli.errno($conn). " - ".mysqli.error($conn));
        }
        $data = mysqli_fetch_assoc($result);

        if(!count($data)) {
            echo "<script>alert('Data tidak ditemukan pada tabel.');window.location='index.php';</script>";
        }

    } else {
        echo "<script>alert('Masukan ID yang ingin di edit');window.location='index.php';</script>;";
    }


?>

<!DOCTYPE html>
<html>
    <head>
        <title>UAS</title>
        <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="edit.css">
</head>
<body>
    <header>
    <center><h1>Edit <?php echo $data['Judul']; ?></h1></center>
    <form method="POST" action="proses_edit.php" enctype="multipart/form-data">
    <section class="base">
        <div>
            <label>Judul</label>
            <input type="text" name="Judul" autofocus="" required="" value="<?php echo $data['Judul']; ?>" />
            <input type="hidden" name="id" value="<?php echo $data['Judul']; ?>" />
        </div>
        <div>
            <label>Penulis</label>
            <input type="text" name="Penulis" value="<?php echo $data['Penulis']; ?>" />
        </div>
        <div>
            <label>Harga</label>
            <input type="text" name="Harga" value="<?php echo $data['Harga']; ?>" />
        </div>
        <div>
            <label>Gambar</label>
            <img src="gambar/<?php echo $data['Gambar']; ?>" style="width: 120px; float: left; margin-bottom: 5px;">
            <input type="file" name="Gambar" />
            <i style="float: left; font-size: 11px; color: red;">Abaikan jika tidak ingin merubah gambar produk</i>
        </div>
        <div>
            <button type="submit">Simpan Perubahan</button>
        </div>

    </section>
</form>
</body>
</html>