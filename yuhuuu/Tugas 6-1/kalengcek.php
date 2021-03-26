<?php
		$kaleng = 2650000;
		$diskon = 0;
		$total = 0;
		$totalhargabeli = 0;
		
		$jumlahkaleng = $_POST['jumlahkaleng'];
		echo "Jumlah kaleng : " .$jumlahkaleng;
		
		echo"<br>";
		
		$totalhargabeli = $jumlahkaleng * $kaleng;
		
		if ($totalhargabeli >= 200000){
			 $diskon = ($totalhargabeli * 5) / 100;
			 $total = $totalhargabeli - $diskon; 
			 echo "Jumlah yang dibayar : ".$total;
		} else if ($totalhargabeli >= 300000){
			$diskon = ($totalhargabeli * 10) / 100;
			$total = $totalhargabeli - $diskon; 
			 echo "Jumlah yang dibayar : ".$total;
		} else if ($totalhargabeli <200000){
			$diskon = $totalhargabeli * 0;
			$total = $totalhargabeli - $diskon; 
			echo "Jumlah yang dibayar : ".$total;
		}
?>