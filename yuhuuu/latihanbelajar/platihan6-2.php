<?php
	
	$jari = $_POST['jarijari'];
	$tinggi = $_POST['tinggi'];
	$hitung = $_POST['hitung'];
	
	$kelilinglingkaran = 2 * 3.14 * $jari;
	$luaslingkaran = 3.14 * $jari* $jari;
	$volumesilinder = $luaslingkaran * $tinggi;
	
	
	switch ($hitung) {
   		case 'kel_ling':
        	echo "Keliling lingkarannya adalah : ".$kelilinglingkaran;
        	break;
    	case "luas_ling":
       		echo "Luas Lingkarannya adalah : ".$luaslingkaran;
        	break;
    	case "vol_silinder":
        	echo "Volume Silindernya adalah ".$volumesilinder;
        	break;
    	default:
        	echo "Input error! coba lagi";
	} 
	 
	
?>