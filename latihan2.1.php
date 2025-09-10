
<?php
class Mobil {
    var $jumlahRoda = 4;
    var $warna = "Merah";
    var $bahanBakar = "Pertamax";
    var $harga = 120000000;
    var $merek = "A";

    public function statusHarga() {
        if ($this->harga > 50000000) $status = 'Mahal';
        else $status = 'Murah';
        return $status;
    }
}

$ObjekBMW = new Mobil;   
$ObjekTesla = new Mobil; 
$ObjekAudi = new Mobil;  

echo "Jumlah Roda : " . $ObjekAudi->jumlahRoda . "<br>";
echo "Warna       : " . $ObjekAudi->warna . "<br>";
echo "Bahan Bakar : " . $ObjekAudi->bahanBakar . "<br>";
echo "Harga       : Rp " . number_format($ObjekAudi->harga, 0, ',', '.') . "<br>";
?>

