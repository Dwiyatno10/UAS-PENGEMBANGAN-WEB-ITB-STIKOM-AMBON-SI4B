<!DOCTYPE html>
<html>
    <head>
        <title>UAS</title>
        <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="add.css">
      
</head>
<body>
    <header>
    <center><h1>Tambah Buku</h1></center>
    <form method="POST" action="proses_tambah.php" enctype="multipart/form-data">
    <section class="base">
        <div>
            <label>Judul</label>
            <input type="text" name="Judul" autofocus="" required="" />
        </div>
        <div>
            <label>Penulis</label>
            <input type="text" name="Penulis" />
        </div>
        <div>
            <label>Harga</label>
            <input type="text" name="Harga" required="" />
        </div>
        <div>
            <label>Gambar</label>
            <input type="file" name="Gambar" required="" />
        </div>
        <div>
            <button type="submit">Simpan</button>
        </div>

    </section>
</form>
</body>
</html>