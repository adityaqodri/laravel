<?php 

	$rataalgo = 0;
	$ratamath = 0;
	$rataall = 0;

	/*Algoritma*/
	$utsalgo = $_POST['utsalg'];
	$uasalgo = $_POST['uasalg'];
	
	/*Matematika*/
	$utsmath = $_POST['utsmat'];
	$uasmath = $_POST['uasmat'];

	$rataalgo = ($utsalgo + $uasalgo) / 2;
	$ratamath = ($utsmath + $uasmath) / 2;
	$rataall = ($rataalgo + $ratamath) /2;
	
	
	echo "Matakuliah Algoritma";
	echo "UTS : " .$utsalgo;
	echo "<br>"; 
	echo "UAS : " .$uasalgo; 
	echo "<br>";
	echo "Rata - rata : " .$rataalgo;
	echo "<br> <br>";
	
	echo "Matakuliah Matematika";
	echo "UTS : " .$utsmath; 
	echo "<br>";
	echo "UAS : " .$uasmath; 
	echo "<br>";
	echo "Rata - rata : " .$ratamath;
	echo "<br> <br>";
	
	echo "Rata - rata semua Matakuliah : " .$rataall;
	echo "<br> <br>";
	
	if (($rataalgo > 70 && $ratamath > 80) || $rataall > 75){
		echo "Anda lulus <br>";
	} else {
		echo "Anda tidak lulus <br>";
	} 
	
	/* 
	if ($rataalgo > 70 && $ratamath > 80){
		echo "Anda lulus <br>";
	} else if (rataall > 75) {
		echo "Anda lulus <br>";
	} else {
		echo "Anda tidak lulus <br>";
	} 
	*/
	

?>