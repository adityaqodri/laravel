<?php 
$UTSa = $_POST['UTSa'];
$UASa = $_POST['UASa'];
$UTSb = $_POST['UTSb'];
$UASb = $_POST['UASb'];

//Proses Perhitungan
$ajumlah = $UTSa+$UASa/2;
$bjumlah = $UTSb+$UASb/2;
$total = $ajumlah+$bjumlah/2;

/* trus ini buat yg nampilin perintah */

echo "MatKul Algoritma";
echo "UTS : ".$UTSa;
echo "UAS : ".$UASa;
echo "RERATA : ".$ajumlah;
break;

echo "MatKul Matematika";
echo "UTS : ".$UTSb;
echo "UAS : ".$UASb;
echo "RERATA : ".$bjumlah;
break;


If ( $ajumlah > 70 && $bjumlah > 80){
 Lulus
	}
Else if ($total > 70) {
Lulus
} else {
Ga lulus
}

?>