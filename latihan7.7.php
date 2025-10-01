<?php
// Latihan7.7.php

class Employee
{
    private $first_name;
    private $last_name;
    private $age;

    public function __construct($first_name, $last_name, $age)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age;
    }

    // Getter untuk mendapatkan nama depan (first_name)
    public function getFirstName()
    {
        return $this->first_name;
    }

    // Getter untuk mendapatkan nama belakang (last_name)
    public function getLastName()
    {
        return $this->last_name;
    }

    // Getter untuk mendapatkan usia (age)
    public function getAge()
    {
        return $this->age;
    }
}

// =========================================================
// Script Utama: Instansiasi dan Pemanggilan Metode
// =========================================================

// Instansiasi Objek Pertama
$objEmployeeOne = new Employee('Bob', 'Smith', 30);

// Menampilkan data Objek Pertama
echo $objEmployeeOne->getFirstName() . "<br>"; // prints 'Bob'
echo $objEmployeeOne->getLastName() . "<br>";  // prints 'Smith'
echo $objEmployeeOne->getAge() . "<br><br>";       // prints '30'

// Instansiasi Objek Kedua
$objEmployeeTwo = new Employee('John', 'Smith', 34);

// Menampilkan data Objek Kedua
echo $objEmployeeTwo->getFirstName() . "<br>"; // prints 'John'
echo $objEmployeeTwo->getLastName() . "<br>";  // prints 'Smith'
echo $objEmployeeTwo->getAge() . "<br>";       // prints '34'

?>