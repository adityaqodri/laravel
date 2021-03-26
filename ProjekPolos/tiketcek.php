<?php
		$kaleng = 2650000;
		$diskon = 0;
		$total = 0;
		$totalhargabeli = 0;
		
		$jumlahkaleng = $_POST['jumlahtiket'];
		echo "Jumlah tiket : " .$jumlahkaleng;
		echo "<h4>selamat kamu dapat diskon lebaran!!</h4>";
		echo "<br>";
		
		echo"<br>";
		
		$totalhargabeli = $jumlahkaleng * $kaleng;
		
		if ($totalhargabeli >= 5300000){
			 $diskon = ($totalhargabeli * 5) / 100;
			 $total = $totalhargabeli - $diskon; 
			 echo "<h2>Jumlah yang dibayar : </h2>".$total;
		} else if ($totalhargabeli >= 10600000){
			$diskon = ($totalhargabeli * 10) / 100;
			$total = $totalhargabeli - $diskon; 
			 echo "<h2>Jumlah yang dibayar : </h2>".$total;
		} else if ($totalhargabeli <2650000){
			$diskon = ($totalhargabeli * 0)/ 100;
			$total = $totalhargabeli - $diskon; 
			echo "<h2>Jumlah yang dibayar : </h2>".$total;
		}
		echo"<br>";
		echo"<br>";
		
		echo "mohon dibayarkan ke BANK dan lakukan konfirmasi pembayaran :)";
		echo"<br>";
		echo"no rek. 010009280099165165 / MANDIRI/ an. AGA GRUPS";
?>