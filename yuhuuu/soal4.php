//soal4

<?php

// Membuat Koneksi pake DB hapee
$mysqli = new mysqli("localhost", "root", "", "hapee");

// Cek Koneksi 
if ($mysqli->connect_errno) {
die('Koneksi gagal nih: ' .$mysqli->connect_errno.
' - '.$mysqli->connect_error);
}

// buat prepared statement
$stmt = $mysqli->prepare("INSERT INTO hapee VALUES (?, ?, ?, ?)");


// hubungkan data dengan prepared statements
$stmt->bind_param("ssisd",$kd_hp, $merk_hp, $nama_hp, $stok_hp);

// siapkan data query 1
$kd_hp = “xia_023”;
$merk_hp = “xiaomi”;
$nama_hp = “xiaomi_Mi10”; 
$stok_hp = 250;

// jalankan query 1
$stmt-> execute();


// cek hasil query 1
if (!$stmt) {
die('Query Error : '.mysqli_errno($link).' - '.mysqli_error($link));
}
else {
echo "Penambahan ".mysqli_stmt_affected_rows($stmt)." data berhasil<br />";
}

// siapkan data query 2
$kd_hp= “sam_047”;
$merk_hp = “samsung”;
$nama_hp = “samsung_S20”; 
$stok_hp = 60;


// jalankan query 2
$stmt->execute();


// cek hasil query 2
if (!$stmt) {
die('Query Error : '.mysqli_errno($link).' - '.mysqli_error($link));
}
else {
echo "Penambahan ".mysqli_stmt_affected_rows($stmt)." data berhasil<br />";
}


// siapkan data query 3
$kd_hp = “opp_086”; 
$merk_hp = “oppo”; 
$nama_hp = “oppo_A33”;
$stok_hp = 250;


// jalankan query 3
$stmt->execute();

// cek hasil query 3
if (!$stmt) {
die('Query Error : '.mysqli_errno($link).' - '.mysqli_error($link));
}
else {
echo "Penambahan ".mysqli_stmt_affected_rows($stmt)." data berhasil<br />";
}


// jalankan query untuk memeriksa hasil inputan
$result = mysqli_query($link, "SELECT * FROM hapee");


// tampilkan query
while ($row=mysqli_fetch_row($result)) {
echo "$row[0] $row[1] $row[2] $row[3]";
echo "<br />";
}


// tutup statement
$stmt->close();

// tutup koneksi
$mysqli->close();


?>