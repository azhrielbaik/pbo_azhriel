<?php
class mobil {
    var $jumlahRoda=4;
    var $warna="merah";
    var $bahanBakar="pertamax";
    var $harga=1100000;
    var $merk='A';

    public function getJumlahRoda(){
        return "$this->jumlahRoda";
    }

    public function statusHarga(){
        return "$this->harga";

    }
}
$object1 = new mobil();
$object2 = new mobil();
$object3 = new mobil();

echo $object1->getJumlahRoda();
?>