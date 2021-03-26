<?php
class Produk {
public $jenis = "";
public $merk = "";
public function PesanProduk(){
return $this -> jenis." ".$this ->
merk." dipesan...";
}
}
$produk01 = new Produk();
$produk01 -> jenis = "Televisi";
$produk01 -> merk = "Samsung";

$produk02 = new Produk();
$produk02 -> jenis = "Radio";
$produk02 -> merk = "Sanyo";
echo $produk01 -> PesanProduk();
echo $produk02 -> PesanProduk();
?>