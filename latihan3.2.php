<?php
class kendaraan
{
    var $jumlahRoda;
    var $warna;
    var $bahanBakar;
    var $harga;
    var $merek;

    // Method untuk menentukan status harga
    function statusHarga()
    {
        if ($this->harga > 50000000) {
            $status = 'Mahal';
        } else {
            $status = 'Murah';
        }
        return $status;
    }

    // Method untuk mengisi merek kendaraan
    function setMerek($x)
    {
        $this->merek = $x;
    }

    // Method untuk mengisi harga kendaraan
    function setHarga($x)
    {
        $this->harga = $x;
    }
}

// Membuat objek dari class kendaraan
$kendaraan1 = new kendaraan();
$kendaraan1->setMerek('Yamaha MIO');
$kendaraan1->setHarga(10000000);

// Menampilkan status harga
echo $kendaraan1->statusHarga();
?>
