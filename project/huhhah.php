<?php
// buat Koneksi

$mysqli = new mysqli("localhost", "root", "", "training");

// kita Cek Koneksi

if ($mysqli->connect_errno) {
die('Koneksi gagal: ' .$mysqli->connect_errno.
' - '.$mysqli->connect_error);
}
// bikin prepared statement
$stmt = $mysqli->prepare("INSERT INTO training VALUES (?, ?, ?, ?, ? )");


// hubungkan data dengan prepared statements
$stmt->bind_param("dsdssi",
$trainingid, $trainingnama, $trainingjadwal, $tarainingtempat, $trainingharga);


// siapin “data” query 1
$trainingid = "NC1";
$trainingnama = "NEW CHAPTER";
$trainingjadwal = 2020-02-10;
$tarainingtempat = "MENARA165";
$trainingharga = 2650000;


// jalankan query 1
$stmt-> execute();

// cek hasil query 1
if (!$stmt) {
die('Query Error : '.mysqli_errno($link).' - '.mysqli_error($link));
}
else {
echo "Penambahan ".mysqli_stmt_affected_rows($stmt)." data berhasil<br />";
}


// siapin “data” query 2
$trainingid = "MS1";
$trainingnama = "MCB SSC";
$trainingjadwal = 2020-02-17;
$tarainingtempat = "MENARA 165";
$trainingharga = 1650000;

// jalankan query 2
$stmt->execute();


// cek hasil query 2
if (!$stmt) {
die('Query Error : '.mysqli_errno($link).' - '.mysqli_error($link));
}
else {
echo "Penambahan ".mysqli_stmt_affected_rows($stmt)." data berhasil<br />";
}


// siapin “data” query 3
$trainingid = "TA1";
$trainingnama = "TOTAL ACTION";
$trainingjadwal = 2020-10-31;
$tarainingtempat = "MENARA165";
$trainingharga = 3000000;

// jalankan query 3
$stmt->execute();

// cek hasil query 3
if (!$stmt) {
die('Query Error : '.mysqli_errno($link).' - '.mysqli_error($link));
}
else {
echo "Penambahan ".mysqli_stmt_affected_rows($stmt)." data berhasil<br />";
}

// siapin “data” query 4
$trainingid = "EP";
$trainingnama = "ESQ PARENTING";
$trainingjadwal = 2020-01-17;
$tarainingtempat = "MENARA165";
$trainingharga = 2650000;

// jalankan query 4
$stmt->execute();

// cek hasil query 4
if (!$stmt) {
die('Query Error : '.mysqli_errno($link).' - '.mysqli_error($link));
}
else {
echo "Penambahan ".mysqli_stmt_affected_rows($stmt)." data berhasil<br />";
}

// jalankan query untuk memeriksa hasil inputan
$result = mysqli_query($link, "SELECT * FROM training");

// tampilkan query
while ($row=mysqli_fetch_row($result)) {
echo "$row[0] $row[1] $row[2] $row[3]";
echo "<br />";
}
// tutup statements
$stmt->close();

// tutup koneksi
$mysqli->close();
?>