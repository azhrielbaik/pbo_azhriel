<!DOCTYPE html>
<html>
<head>
    <title>DATA PEKERJA DI PT MENCARI CINTA SEJATI</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
    </head>
<body>

<div class="menu">
    <div class="container">
        <ul>
            <li><a href="index.php">Home</a></li>
            
            <li>
                <a href="#">Data Master</a>
                <ul>
                    <li><a href="#">Data User</a></li>
                    <li><a href="#">Data Barang</a></li>
                    <li><a href="#">Data Customer</a></li>
                    <li><a href="#">Data Supplier</a></li>
                </ul>
            </li>

            <li>
                <a href="#">Data Transaksi</a>
                <ul>
                    <li><a href="#">Transaksi Pembelian</a></li>
                    <li><a href="#">Transaksi Penjualan</a></li>
                </ul>
            </li>

            <li>
                <a href="#">Laporan</a>
                <ul>
                    <li><a href="#">Laporan Data Barang</a></li>
                    <li><a href="#">Laporan Data Customer</a></li>
                    <li><a href="#">Laporan Data Supplier</a></li>
                    <li><a href="#">Laporan Transaksi Pembelian</a></li>
                    <li><a href="#">Laporan Transaksi Penjualan</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>

<div class="container">
    <div class="judul">
        <h1>Membuat CRUD Dengan PHP Dan MySQL</h1>
        <h2>Menampilkan data dari database</h2>
    </div>

    <?php
    // Pesan notifikasi
    if(isset($_GET['pesan'])){
        $pesan = $_GET['pesan'];
        // Mengganti div alert Bootstrap dengan echo biasa (atau tambahkan styling untuk pesan jika perlu)
        if($pesan == "input"){
            echo "Data berhasil di input.";
        }else if($pesan == "update"){
            echo "Data berhasil di update.";
        }else if($pesan == "hapus"){
            echo "Data berhasil di hapus.";
        }
    }
    ?>
    <div class="mt-8"></div> <a class="tombol" href="input.php">+ Tambah Data Baru</a>

    <h3>Data user</h3>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Pekerjaan</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "koneksi.php";
            $query_mysql = mysqli_query($koneksi, "SELECT * FROM user") or die(mysqli_error($koneksi));
            $nomor = 1;
            while($data = mysqli_fetch_array($query_mysql)){
            ?>
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
                <td><?php echo $data['pekerjaan']; ?></td>
                <td>
                    <a class="edit" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> 
                    <a class="hapus" href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

</body>
</html>