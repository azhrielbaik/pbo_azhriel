<?php
class BarangHarian {
    var $namaBarang;
    var $harga;
    var $jumlah;
    var $totalHarga;


    function hitungTotalPembayaran() {
        $this->totalHarga = $this->harga * $this->jumlah;
        return $this->totalHarga;
    }


    function statusPembayaran() {
        $total = $this->hitungTotalPembayaran();

        if ($total >= 45000) {
            return "Mahal";
        } else {
            return "Murah";
        }
    }
}

$barang1 = new BarangHarian();
$barang1->namaBarang = "Mie Instan";
$barang1->harga = 15000;
$barang1->jumlah = 3;


$barang2 = new BarangHarian();
$barang2->namaBarang = "Kopi Susu";
$barang2->harga = 10000;
$barang2->jumlah = 2;

$barang3 = new BarangHarian();
$barang3->namaBarang = "Air Mineral";
$barang3->harga = 1000;
$barang3->jumlah = 3;


echo "Nama Barang : " . $barang1->namaBarang . "<br>";
echo "Harga : Rp. " . number_format($barang1->harga, 0, ',', '.') . "<br>";
echo "Jumlah : " . $barang1->jumlah . "<br>";
echo "Total Harga : Rp. " . number_format($barang1->hitungTotalPembayaran(), 0, ',', '.') . "<br>";
echo "Status : " . $barang1->statusPembayaran() . "<br><br>";

echo "Nama Barang : " . $barang2->namaBarang . "<br>";
echo "Harga : Rp. " . number_format($barang2->harga, 0, ',', '.') . "<br>";
echo "Jumlah : " . $barang2->jumlah . "<br>";
echo "Total Harga : Rp. " . number_format($barang2->hitungTotalPembayaran(), 0, ',', '.') . "<br>";
echo "Status : " . $barang2->statusPembayaran() . "<br><br>";


echo "Nama Barang : " . $barang3->namaBarang . "<br>";
echo "Harga : Rp. " . number_format($barang3->harga, 0, ',', '.') . "<br>";
echo "Jumlah : " . $barang3->jumlah . "<br>";
echo "Total Harga : Rp. " . number_format($barang3->hitungTotalPembayaran(), 0, ',', '.') . "<br>";
echo "Status : " . $barang3->statusPembayaran() . "<br>";
?>
