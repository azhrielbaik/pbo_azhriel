<?php
//class manusia
class manusia{
    //menentukan property dengan protected
    protected $nama = "Ardi";
    var $kelas = "SI 2";

    //method protected
    protected function m_nama(){
        return "Nama : " . $this->nama;
    }

    public function tampilkan_nama(){
        return $this->m_nama();
    }

    protected function tampilkan_kelas(){
        return "Kelas : " . $this->kelas;
    }
}

//instansiasi class manusia
$manusia = new manusia();

//memanggil method public tampilkan_nama dari class manusia
echo $manusia->tampilkan_nama()."<br />";
echo $manusia->tampilkan_kelas();
?>
