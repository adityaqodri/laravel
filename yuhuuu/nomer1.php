<!DOCTYPE html>
<html>
<body>

<?php
 class mahasiswa {
 public $nama;
 public $nim;
 public $jurusan;
 
 function __construct($nama, $nim, $jurusan) {
 $this->nama = $nama;
 $this->nim  = $nim;
 $this->jurusan = $jurusan;
 
 }
 function intro() {
 echo "Nama kamu adalah {$this->nama} dengan NIM {$this->nim}. Saat ini berkuliah di prodi {$this->jurusan}" ;
 }
}
 class Pesan extends mahasiswa {
 public function pesan_detail() {
 echo "Hello, selamat datang. ";
 }
}
// Try to call all three methods from outside class
$message = new Pesan("Adi", "123456", "Sistem Informasi"); // OK. __construct() is public
$message->pesan_detail(); // OK. message() is public
$message->intro(); // ERROR. intro() is protected
?>

</body>
</html>