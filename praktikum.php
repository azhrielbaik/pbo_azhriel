<?php
class Transaksi {
    private $kartuMember;
    private $totalBelanja;
    private $diskon;
    private $totalBayar;

    public function __construct($kartuMember = "tidak", $totalBelanja = 0) {
        $this->kartuMember = $kartuMember;
        $this->totalBelanja = $totalBelanja;
        $this->diskon = 0;
        $this->totalBayar = 0;
    }

    public function setKartuMember($kartuMember) {
        $this->kartuMember = $kartuMember;
    }

    public function setTotalBelanja($totalBelanja) {
        $this->totalBelanja = $totalBelanja;
    }

    public function getKartuMember() {
        return $this->kartuMember;
    }

    public function getTotalBelanja() {
        return $this->totalBelanja;
    }

    public function getDiskon() {
        return $this->diskon;
    }

    public function getTotalBayar() {
        return $this->totalBayar;
    }

    public function hitungDiskon() {
        if ($this->kartuMember == "ya") {
            if ($this->totalBelanja > 500000) {
                $this->diskon = 50000;
            } else if ($this->totalBelanja > 100000) {
                $this->diskon = 15000;
            } else {
                $this->diskon = 0;
            }
        } else {
            if ($this->totalBelanja > 100000) {
                $this->diskon = 5000;
            } else {
                $this->diskon = 0;
            }
        }

        $this->totalBayar = $this->totalBelanja - $this->diskon;
    }
}

$transaksi1 = new Transaksi();
$transaksi1->setKartuMember("ya");
$transaksi1->setTotalBelanja(200000);
$transaksi1->hitungDiskon();

$transaksi2 = new Transaksi();
$transaksi2->setKartuMember("ya");
$transaksi2->setTotalBelanja(570000);
$transaksi2->hitungDiskon();

$transaksi3 = new Transaksi();
$transaksi3->setKartuMember("tidak");
$transaksi3->setTotalBelanja(120000);
$transaksi3->hitungDiskon();

$transaksi4 = new Transaksi();
$transaksi4->setKartuMember("tidak");
$transaksi4->setTotalBelanja(90000);
$transaksi4->hitungDiskon();




echo "<h3>Transaksi 1</h3>";
echo "Apakah ada kartu member: " . $transaksi1->getKartuMember() . "<br>";
echo "Total belanjaan: Rp " . $transaksi1->getTotalBelanja() . "<br>";
echo "Total diskon: Rp " . $transaksi1->getDiskon() . "<br>";
echo "Total bayar: Rp " . $transaksi1->getTotalBayar() . "<br><hr>";

echo "<h3>Transaksi 2</h3>";
echo "Apakah ada kartu member: " . $transaksi2->getKartuMember() . "<br>";
echo "Total belanjaan: Rp " . $transaksi2->getTotalBelanja() . "<br>";
echo "Total diskon: Rp " . $transaksi2->getDiskon() . "<br>";
echo "Total bayar: Rp " . $transaksi2->getTotalBayar() . "<br><hr>";

echo "<h3>Transaksi 3</h3>";
echo "Apakah ada kartu member: " . $transaksi3->getKartuMember() . "<br>";
echo "Total belanjaan: Rp " . $transaksi3->getTotalBelanja() . "<br>";
echo "Total diskon: Rp " . $transaksi3->getDiskon() . "<br>";
echo "Total bayar: Rp " . $transaksi3->getTotalBayar() . "<br><hr>";

echo "<h3>Transaksi 3</h3>";
echo "Apakah ada kartu member: " . $transaksi4->getKartuMember() . "<br>";
echo "Total belanjaan: Rp " . $transaksi4->getTotalBelanja() . "<br>";
echo "Total diskon: Rp " . $transaksi4->getDiskon() . "<br>";
echo "Total bayar: Rp " . $transaksi4->getTotalBayar() . "<br><hr>";

?>
