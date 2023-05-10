<?php

class Sekolah
{
    protected $nama = "wk";
    private $alamat = "cicurug";
    public $jumlahsiswa = 19;
    public $jumlahguru = 2;
    public $jumlahkelas = 1;

    public function getnama()
    {
        echo  $this->nama;
    }


    public function setdata($jumlahguru,$jumlahkelas,$jumlahsiswa)
    {

     $this->jumlahguru=$jumlahguru;
     $this->jumlahkelas=$jumlahkelas;
     $this->jumlahsiswa=$jumlahsiswa;

    }
    public function getdata()
    {

        echo "jumlah guru: " . $this->jumlahguru;
        echo "<br>";
        echo "jumlah kelas: " . $this->jumlahkelas;
        echo "<br>";
        echo "jumlah siswa: " . $this->jumlahsiswa;

    }



    public function setalamat($alamat)
    {
        return $this->alamat = $alamat;
    }
    public function getalamat()
    {
        return "Sekolah ini berada di " . $this->alamat;
    }






}




class Kelas extends Sekolah
{

    public function setnama($nama)
    {
        return $this->nama = $nama;
    }


}


// INSTANSI



$kelas = new Kelas();
$dataSekolah = new Sekolah();

// MUNCUl

$kelas->setnama("SMK Ummagumma");
$kelas->getnama();
echo "<br>";
echo "===========================" . "<br>";



$dataSekolah->setdata(115,25,500);
$dataSekolah->getdata();
echo "<br>";



$dataSekolah->setalamat("Menteng Atas");
echo $dataSekolah->getalamat();