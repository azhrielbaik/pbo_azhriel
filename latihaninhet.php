<?php
// Class Induk
class warung
{
  public $namaBarang;
  public $harga;

  public function __construct($namaBarang, $harga)
  {
    $this->namaBarang = $namaBarang;
    $this->harga = $harga;
  }

  public function information()
  {
    echo "Barang: $this->namaBarang, Harga: Rp $this->harga<br>";
  }
}

// Class Turunan dengan Override Metode
class Warung2 extends warung 
{
  public $exp;

  public function __construct($namaBarang, $harga, $exp) 
  {
    // Memanggil konstruktor class induk
    parent::__construct($namaBarang, $harga); 
    $this->exp = $exp;
  }

  // Override metode information()
  public function information() 
  {
    echo "Barang2: $this->namaBarang, Harga: Rp $this->harga, Kadaluarsa: $this->exp<br>";
  }
}

// Class untuk Overloading (menggunakan magic method __call)
class warung3 {
    public function __call($namaMetode, $argumen) {
        if ($namaMetode == 'total') {
            // Logika untuk menangani panggilan ke total()
            if (count($argumen) == 1) {
                return $argumen[0];
            } elseif (count($argumen) == 2) {
                return $argumen[0] * $argumen[1];
            } else {
                return 0; // Mengembalikan 0 jika tidak ada argumen atau lebih dari 2
            }
        }
    }
}

// --- Instansiasi dan Penggunaan Objek ---

// Contoh Inheritance dan Overriding
$barang1 = new Warung("Susu Kotak", 10000);
$barang1->information();

$barang2 = new Warung2("Yogurt", 15000, "10-10-2024");
$barang2->information();

// Contoh Overloading (menggunakan magic method __call)
$barang3 = new warung3();
echo "Harga Indomie: Rp " . $barang3->total(5000) . "<br>";
echo "Harga Telur: Rp " . $barang3->total(2000, 5) . "<br>";
?>