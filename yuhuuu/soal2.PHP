<?php
class Mahasiswa{
public $nama = "";
public $nim = "";
public function dataDiri(){
return $nama. " dengan NIM ".$nim." telah hadir.";
}
}
$mhs01 = new dataDiri();
$mhs02->nama = "Budi";
$mhs01-> no_nim = "123456";
echo $mhs01-> dataDiri();
?>