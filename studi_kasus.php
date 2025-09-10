<?php
class Kendaraan {
    var $harga;
    var $tahunPembuatan;
    var $bahanBakar;
    var $platNomor;

    function __construct($harga, $tahun, $bbm, $plat) {
        $this->harga = $harga;
        $this->tahunPembuatan = $tahun;
        $this->bahanBakar = $bbm;
        $this->platNomor = $plat;
    }

    // Status Harga
    function getStatusHarga() {
        if ($this->harga > 50000000) {
            return "Mahal";
        } else {
            return "Murah";
        }
    }

    // Status BBM (Subsidi)
    function getSubsidi() {
        if ($this->bahanBakar == "Premium" && $this->tahunPembuatan < 2005) {
            return "Mendapat Subsidi";
        } else {
            return "Tidak Dapat Subsidi";
        }
    }

    // Harga Bekas
    function getHargaBekas() {
        if ($this->tahunPembuatan > 2005) {
            return $this->harga - (0.20 * $this->harga);
        } elseif ($this->tahunPembuatan >= 2000 && $this->tahunPembuatan <= 2005) {
            return $this->harga - (0.30 * $this->harga);
        } else {
            return $this->harga - (0.40 * $this->harga);
        }
    }

    // Pajak
    function getPajak() {
        if ($this->tahunPembuatan <= 2017) {
            return 0.025 * $this->harga;
        } else {
            return 0.05 * $this->harga; // misalnya pajak lebih besar untuk mobil baru
        }
    }

    // Hari Operasi
    function getHariOperasi() {
        $nomor = substr($this->platNomor, -1); // ambil angka terakhir
        if ($nomor % 2 == 0) {
            return "Selasa, Kamis, Sabtu";
        } else {
            return "Senin, Rabu, Jumat, Minggu";
        }
    }
}

// Contoh penggunaan
$mobil1 = new Kendaraan(30000000, 2004, "Premium", "B1234E");

echo "Status Harga : " . $mobil1->getStatusHarga() . "<br>";
echo "Status BBM : " . $mobil1->getSubsidi() . "<br>";
echo "Harga Bekas : " . $mobil1->getHargaBekas() . "<br>";
echo "Jumlah Pajak : " . $mobil1->getPajak() . "<br>";
echo "Hari Operasi : " . $mobil1->getHariOperasi() . "<br>";
?>
