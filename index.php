<?php include('koneksi.php');
session_start();
if(isset($_SESSION["username"])){
}else{
 echo header("location:login2.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>UAS</title>
        <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
    <header>
    <left><a href="logout.php">Logout</a></left>
    <center><h1>PERPUSTAKAAN</h1></center>
    <center><a href="tambah_produk.php">+ &nbsp; Tambah Buku</a></center>
    <br>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Buku</th>
                <th>Penulis</th>
                <th>Harga</th>
                <th>Gambar</th>
                <th>ACC</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query = "SELECT * FROM perpus ORDER BY id ASC"; 
                $result = mysqli_query($conn, $query);

                if(!$result) {
                    die("Query Error : ".mysqli_error($conn)." - ".mysqli_error($conn));
                }
                $no = 1;

                while ($row = mysqli_fetch_assoc($result)) {

                ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $row['Judul']; ?></td>
                    <td><?php echo $row['Penulis']; ?></td>
                    <td>Rp <?php echo number_format($row['Harga'], 0,',','.'); ?></td>
                    <td><img style="width: 50px;" src="gambar/<?php echo $row['Gambar']; ?>"></td>
                    <td>
                        <a href="edit_produk.php?id=<?php echo $row['id']; ?>">Edit</a>
                        <a href="proses_hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm ('Anda yakin ingin hapus data ini?')">Hapus</a>
                    </td>
                </tr>
                <?php
                    $no++;
                }
                ?>
        </tbody>
    </table>    
</body>
</html>