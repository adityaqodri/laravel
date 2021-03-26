<?php

	// buat koneksi dengan MySQL
	$mysqli = new mysqli("localhost", "root", "", "training");

	// cek koneksi
	if ($mysqli->connect_errno) {
	die('Koneksi Error: '.$mysqli->connect_errno.
	' - '. $mysqli->connect_error);
	}



	// buat prepared statements
	$stmt = mysqli_prepare($mysqli, "SELECT * FROM sysuser WHERE userid=?");

		// cek query
	if ($mysqli->errno) {
	die('Query Error : '.$mysqli->errno.' - '.$mysqli->error);
	}

	// siapkan "data" query
	$userid="sidik1";	
	
	// hubungkan "data" dengan prepared statements
	mysqli_stmt_bind_param($stmt, "s", $sidik1);

	// jalankan query
	$stmt->execute();

	
	// hubungkan hasil query
	$result = $stmt->get_result();

	// tampilkan query
	while ($row= $result->fetch_row()) {
	echo $row->userid." ". $row->password." ";
	echo "<br />";
	}

	// tutup statements
	$stmt->close();
	
	// tutup koneksi
	$mysqli->close();


	if (isset($_POST['username']) || isset($_POST['password'])) 
	{
		header("location: home.php");
	}
	elseif(empty($userid) || empty($password))
	{
		?>
			<script>
			alert("User id atau password Harus Diisi");
			window.location.href="index.php";
			</script>
		<?php
	}elseif (ctype_alpha($userid) == false){
		?>
		<script>
		alert("Userid hanya boleh menggunakan huruf");
		window.location.href="index.php";
		</script>
		<?php
	}else if(is_numeric ($password) == false){
		?>
		<script>
		alert("Pasword hanya boleh menggunakan angka");
		window.location.href="index.php";
		</script>
		<?php
	}else{
		?>
		<script>
		alert("Login galgal");
		window.location.href="index.php";
		</script>
		<?php
	}
	
?>