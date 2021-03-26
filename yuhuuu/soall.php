<?php
	// buat koneksi dengan MySQL, gunakan database: universitas
	$mysqli = new mysqli("localhost", "root", "","hapee");

	// cek koneksi
	if ($mysqli->connect_errno) {
		die('Koneksi gagal: ' .$mysqli->connect_errno.' - '.$mysqli->connect_error);
	}

	// buat prepared statements
	$stmt = $mysqli->prepare("INSERT INTO hapee VALUES ( ?, ?, ?, ?)");

	// hubungkan "data" dengan prepared statements
	$stmt->bind_param("ssisd", $kd_hp, $merk_hp, $nama_hp , $stok_hp);


	// siapkan "data" query1
	$kd_hp = "xia_023"; 
	$merk_hp = "xiaomi";
	$nama_hp = "xiaomi_Mi10" ;
	$stok_hp = 250;


	// jalankan query1
	$stmt->execute();

	// cek query1
	if (!$stmt) {
		die('Query Error : '.$mysqli->errno.' - '.$mysqli->error);
	}

	else {
	echo "Penambahan ".$stmt->affected_rows. " data berhasil<br />";
	}

// siapkan "data" query2
	$kd_hp = "sam_047";
	$merk_hp = "samsung";
	$nama_hp = "samsung_S20"; 
	$stok_hp = 60 ;

	// jalankan query2
	$stmt->execute();

	// cek query2
	if (!$stmt) {
		die('Query Error : '.$mysqli->errno.' - '.$mysqli->error);
	}

	else {
	echo "Penambahan ".$stmt->affected_rows. " data berhasil<br />";
	}

	// siapkan "data" query3
	$kd_hp = "opp_086" ;
	$merk_hp = "oppo" ;
	$nama_hp = "oppo_33";
	$stok_hp = 250 ;

	// jalankan query3
	$stmt->execute();

	// cek query3
	if (!$stmt) {
		die('Query Error : '.$mysqli->errno.' - '.$mysqli->error);
	}

	else {
	echo "Penambahan ".$stmt->affected_rows. " data berhasil<br />";
	}

	// jalankan query untuk memeriksa hasil inputan
	$result = $mysqli->query("SELECT * FROM hapee");

	// tampilkan query
	while ($row= $result->fetch_row()) {
	echo "$row[0] $row[1] $row[2] $row[3] ";
	echo "<br />";
	}

	// tutup statements
	$stmt->close();

	// tutup koneksi
	$mysqli->close();
?>