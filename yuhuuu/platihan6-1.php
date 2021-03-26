<?php
	$kaleng=$_POST['kaleng'];
	$total=84000*$kaleng;
	
	if($total>200000)
	{
		$discount=$total*0.05;
		$dibayar=$total-$discount;
		echo "TOtal pembayaran = ".$dibayar;
	}
	else if ($total>300000)
	{
		$discount=$total*0.10;
		$dibayar=$total-$discount;
		echo "TOtal pembayaran = ".$dibayar;
	}
	else
	{
	echo "TOtal pembayaran = ".$total;
	}
	
	
	
?>