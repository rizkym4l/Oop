<?php

class Ayam
{
    public $warna = "item";
    protected $jenis = "cemani";

    private $kelamin;

  
    public function setinfokelamin($kelamin)
    {
        return $this->kelamin = $kelamin;
    }  public function getinfokelamin()
    {
        echo $this->kelamin;
    }


}

class Ayamjago extends Ayam
{
    public function getinfoayam()
    {
        return $this->jenis;


    }
}
$chicken = new Ayam();
$chicken = new Ayamjago();

echo $chicken->warna;
echo "<hr>";
echo $chicken->getinfoayam();                                       
echo "<hr>";
$chicken->setinfokelamin("ikhwan");
$chicken->getinfokelamin();