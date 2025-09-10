<?php
class BarangHarian {
    private $namaBarang;
    private $harga;
    private $jumlah;
    private $totalHarga;

    
    public function setNamaBarang($namaBarang) {
        $this->namaBarang = $namaBarang;
    }

    public function setHarga($harga) {
        $this->harga = $harga;
    }

    public function setJumlah($jumlah) {
        $this->jumlah = $jumlah;
    }

    
    public function getNamaBarang() {
        return $this->namaBarang;
    }

    public function getHarga() {
        return $this->harga;
    }

    public function getJumlah() {
        return $this->jumlah;
    }

    public function getTotalHarga() {
        return $this->totalHarga;
    }


    public function hitungTotalPembayaran() {
        $this->totalHarga = $this->harga * $this->jumlah;
        return $this->totalHarga;
    }

    
    public function statusPembayaran() {
        $total = $this->hitungTotalPembayaran();

        if ($total >= 45000) {
            return "Mahal";
        } else {
            return "Murah";
        }
    }
}

$barang1 = new BarangHarian();
$barang1->setNamaBarang("Mie Instan");
$barang1->setHarga(15000);
$barang1->setJumlah(3);

$barang2 = new BarangHarian();
$barang2->setNamaBarang("Kopi Susu");
$barang2->setHarga(10000);
$barang2->setJumlah(2);

$barang3 = new BarangHarian();
$barang3->setNamaBarang("Air Mineral");
$barang3->setHarga(1000);
$barang3->setJumlah(3);


echo "Nama Barang : " . $barang1->getNamaBarang() . "<br>";
echo "Harga : Rp. " . number_format($barang1->getHarga(), 0, ',', '.') . "<br>";
echo "Jumlah : " . $barang1->getJumlah() . "<br>";
echo "Total Harga : Rp. " . number_format($barang1->hitungTotalPembayaran(), 0, ',', '.') . "<br>";
echo "Status : " . $barang1->statusPembayaran() . "<br><br>";

echo "Nama Barang : " . $barang2->getNamaBarang() . "<br>";
echo "Harga : Rp. " . number_format($barang2->getHarga(), 0, ',', '.') . "<br>";
echo "Jumlah : " . $barang2->getJumlah() . "<br>";
echo "Total Harga : Rp. " . number_format($barang2->hitungTotalPembayaran(), 0, ',', '.') . "<br>";
echo "Status : " . $barang2->statusPembayaran() . "<br><br>";

echo "Nama Barang : " . $barang3->getNamaBarang() . "<br>";
echo "Harga : Rp. " . number_format($barang3->getHarga(), 0, ',', '.') . "<br>";
echo "Jumlah : " . $barang3->getJumlah() . "<br>";
echo "Total Harga : Rp. " . number_format($barang3->hitungTotalPembayaran(), 0, ',', '.') . "<br>";
echo "Status : " . $barang3->statusPembayaran() . "<br>";
?>
