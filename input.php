<!DOCTYPE html>
<html>
<head>
    <title>Membuat CRUD Dengan PHP Dan MySQL - Input Data Baru</title>
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

    <a class="link-kembali" href="index.php">Lihat Semua Data</a> 
    
    <div class="input-box">
        <h3>Input data baru</h3>
        
        <form action="input-aksi.php" method="post">
            
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" placeholder="Masukkan Nama">
            </div>
            
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" id="alamat" placeholder="Masukkan Alamat">
            </div>
            
            <div class="form-group">
                <label for="pekerjaan">Pekerjaan</label>
                <input type="text" name="pekerjaan" id="pekerjaan" placeholder="Masukkan Pekerjaan">
            </div>
            
            <input type="submit" value="Simpan">
            
        </form>
    </div>
</div>

</body>
</html>