<?php
class produk{
 public $namabarang,
     $merk,
     $harga,
     $ukuranlayar,
     $kapasitas;
 public function getCetak(){
  return "$this->merk, (Rp $this->harga)";
 }
 public function __construct($namabarang="nama barang",$merk="merk",$harga=0,$ukuranlayar="ukuranlayar", $kapasitas="kapasitas"){
  $this->namabarang = $namabarang;
  $this->merk = $merk;
  $this->harga = $harga;
  $this->ukuranlayar = $ukuranlayar;
  $this->kapasitas = $kapasitas;
 }
 public function cetakinfo(){
   $str="{$this->namabarang}, {$this->getCetak()}";
   return $str;
  }

}
 
 class laptop extends produk{
  public function cetakinfo(){
   $str="makanan: {$this->namabarang}, {$this->getCetak()} | rasa: {$this->ukuranlayar}";
   return $str;
  }
 }
 class flasdisk extends produk{
  public function cetakinfo(){
   $str="minuman: {$this->namabarang}, {$this->getCetak()} | ukuran: {$this->kapasitas}";
   return $str;
  }
 }
 
 $produk1= new laptop("makanan khas jogja","gudeg",15000,"pedas","-");
 $produk2= new flasdisk("minuman dingin","jus jambu",10000,"-","200 mill");


 echo $produk1->cetakinfo();
 echo "<br>";
 echo $produk2->cetakinfo();
 echo "<br>";