<?php
class Produk {
public $jenis;
public $merk;
public $stok;
public function PesanProduk(){
$this->stok=$this->stok-1;
}
public function BorongProduk($jumlah){
$this->stok=$this->stok-$jumlah;
}
public function CekStok(){
Return "Sisa stok: ". $this->stok ."<br>";
}
}

$produk01 = new Produk();
$produk01 -> jenis = "Televisi";
$produk01 -> merk = "Samsung";
$produk01 -> stok = 54;
echo $produk01 -> CekStok();
$produk01->BorongProduk(10);
echo $produk01 -> CekStok();
$produk01->BorongProduk(25);
Echo $produk01-> CekStok();
?>