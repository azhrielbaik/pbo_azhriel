<?php
class KalkulatorSuhu {
    // Instance variable (properties)
    public $celcius;
    public static $konversiCount = 0; // static variable

    // Constructor
    public function __construct($celcius) {
        $this->celcius = $celcius;
    }

    // Method konversi
    public function toFahrenheit() {
        $hasil = ($this->celcius * 9/5) + 32; // operator aritmatika
        self::$konversiCount++; // static
        return $hasil;
    }

    public function toKelvin() {
        $hasil = $this->celcius + 273.15;
        self::$konversiCount++;
        return $hasil;
    }

    public static function getJumlahKonversi() {
        return self::$konversiCount;
    }
}

// Contoh penggunaan
$obj = new KalkulatorSuhu(30);
echo "30°C = " . $obj->toFahrenheit() . "°F <br>";
echo "30°C = " . $obj->toKelvin() . "K <br>";

echo "Total konversi: " . KalkulatorSuhu::getJumlahKonversi();
?>
