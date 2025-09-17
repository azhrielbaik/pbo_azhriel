<?php
class Employee
{
    public $nama;
    public $lamaKerja;
    public $gajiDasar = 5000000;

    public function __construct($nama, $lamaKerja)
    {
        $this->nama = $nama;
        $this->lamaKerja = $lamaKerja;
    }

    public function hitungGaji()
    {
        return $this->gajiDasar;
    }
}
class Programmer extends Employee
{
    public function hitungGaji()
    {
        $gaji = parent::hitungGaji(); 
        
        if ($this->lamaKerja >= 1 && $this->lamaKerja <= 10) {
            $bonus = 0.01 * $this->lamaKerja;
            $gaji += $bonus * $this->gajiDasar;
        } elseif ($this->lamaKerja > 10) {
            $bonus = 0.02 * $this->lamaKerja;
            $gaji += $bonus * $this->gajiDasar;
        }
        
        return $gaji;
    }
}
class Direktur extends Employee
{
    public function hitungGaji()
    {
        $gaji = parent::hitungGaji();

        $bonus = 0.5 * $this->lamaKerja;
        $tunjangan = 0.1 * $this->lamaKerja;
        
        $gaji += ($bonus + $tunjangan) * $this->gajiDasar;

        return $gaji;
    }
}
class PegawaiMingguan extends Employee
{
    public $hargaBarang;
    public $stokTerjual;
    public $stokTotal;

    public function __construct($nama, $lamaKerja, $hargaBarang, $stokTerjual, $stokTotal)
    {
        parent::__construct($nama, $lamaKerja);
        $this->hargaBarang = $hargaBarang;
        $this->stokTerjual = $stokTerjual;
        $this->stokTotal = $stokTotal;
    }

    public function hitungGaji()
    {

        $gaji = parent::hitungGaji();

        $persentasePenjualan = ($this->stokTerjual / $this->stokTotal) * 100;

        if ($persentasePenjualan > 70) {
            $gajiTambahan = 0.10 * $this->hargaBarang * $this->stokTerjual;
        } else {
            $gajiTambahan = 0.03 * $this->hargaBarang * $this->stokTerjual;
        }

        return $gaji + $gajiTambahan;
    }
}


echo "<h3>Informasi Gaji Karyawan</h3>";


$programmer1 = new Programmer("Budi", 5);
$programmer2 = new Programmer("Andi", 15);
echo "Gaji " . $programmer1->nama . " (Programmer - " . $programmer1->lamaKerja . " tahun): Rp " . $programmer1->hitungGaji() . "<br>";
echo "Gaji " . $programmer2->nama . " (Programmer - " . $programmer2->lamaKerja . " tahun): Rp " . $programmer2->hitungGaji() . "<br>";
$direktur1 = new Direktur("Ibu Dini", 12);
echo "Gaji " . $direktur1->nama . " (Direktur - " . $direktur1->lamaKerja . " tahun): Rp " . $direktur1->hitungGaji() . "<br>";
$pegawai1 = new PegawaiMingguan("Siti", 2, 50000, 80, 100); // Penjualan > 70%
$pegawai2 = new PegawaiMingguan("Doni", 1, 50000, 50, 100); // Penjualan <= 70%
echo "Gaji " . $pegawai1->nama . " (Pegawai Mingguan - " . $pegawai1->lamaKerja . " tahun): Rp " . $pegawai1->hitungGaji() . "<br>";
echo "Gaji " . $pegawai2->nama . " (Pegawai Mingguan - " . $pegawai2->lamaKerja . " tahun): Rp " . $pegawai2->hitungGaji() . "<br>";

?>