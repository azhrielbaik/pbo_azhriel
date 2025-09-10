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
        switch ($this->kartuMember) {
            case "ya":
                switch (true) {
                    case ($this->totalBelanja > 500000):
                        $this->diskon = 50000;
                        break;
                    case ($this->totalBelanja > 100000):
                        $this->diskon = 15000;
                        break;
                    default:
                        $this->diskon = 0;
                        break;
                }
                break;

            case "tidak":
                switch (true) {
                    case ($this->totalBelanja > 100000):
                        $this->diskon = 5000;
                        break;
                    default:
                        $this->diskon = 0;
                        break;
                }
                break;

            default:
                $this->diskon = 0;
                break;
        }


        $this->totalBayar = $this->totalBelanja - $this->diskon;
    }
}

$transaksi1 = new Transaksi();
$transaksi1->setKartuMember("tidak");
$transaksi1->setTotalBelanja(400000);
$transaksi1->hitungDiskon();

echo "Apakah ada kartu member: " . $transaksi1->getKartuMember() . "<br>";
echo "Total belanjaan: Rp " . $transaksi1->getTotalBelanja() . "<br>";
echo "Total diskon: Rp " . $transaksi1->getDiskon() . "<br>";
echo "Total bayar: Rp " . $transaksi1->getTotalBayar() . "<br>";
?>
