<?php

// TUGAS 2: PROGRAM PENGHITUNG BESARAN ANGSURAN HUTANG
echo "<h3>PROGRAM PENGHITUNG BESARAN ANGSURAN HUTANG</h3>";
echo "<h4>TOKO PEGADAIAN SYARIAH</h4>";
echo "Jl Keadilan No 16<br>";
echo "Telp. 72353459<br><br>";

$pinjaman_awal = 1000000;
$bunga_persen = 10;
$lama_angsuran_bulan = 5;
$keterlambatan_hari = 40;
$denda_persen_per_hari = 0.15;

$bunga_nominal = $pinjaman_awal * ($bunga_persen / 100);
$total_pinjaman = $pinjaman_awal + $bunga_nominal;
$besaran_angsuran = $total_pinjaman / $lama_angsuran_bulan;
$denda_per_hari = $besaran_angsuran * ($denda_persen_per_hari / 100);
$total_denda = $denda_per_hari * $keterlambatan_hari;
$besaran_pembayaran = $besaran_angsuran + $total_denda;

echo "Besaran Pinjaman : Rp. " . number_format($pinjaman_awal, 0, ',', '.') . "<br>";
echo "Masukkan besar bunga (%) : " . $bunga_persen . "<br>";
echo "Total Pinjaman : Rp. " . number_format($total_pinjaman, 0, ',', '.') . "<br>";
echo "Lama angsuran (bulan) : " . $lama_angsuran_bulan . "<br>";
echo "Besaran angsuran : Rp. " . number_format($besaran_angsuran, 0, ',', '.') . "<br><br>";

echo "Keterlambatan Angsuran (Hari): " . $keterlambatan_hari . "<br>";
echo "Denda Keterlambatan : " . number_format($total_denda, 0, ',', '.') . "<br>";
echo "Besaran Pembayaran : " . number_format($besaran_pembayaran, 0, ',', '.') . "<br>";

?>