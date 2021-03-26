<?php
include "koneksinya.php";

//upload gambar
	$gambar =  upload();
	if(!$gambar){
	return false;
	}

//koneksitabel
$trainingid= $_POST['trainingid'];
$trainingnama= $_POST['trainingnama'];
$trainingjadwal= $_POST['trainingjadwal'];
$trainingtempat= $_POST['trainingtempat'];
$trainingharga= $_POST['trainingharga'];

	if(isset($_POST['trainingid']) || isset($_POST['trainingnama']))
	{
		$trainingid = $_POST['trainingid'];
		$trainingnama = $_POST['trainingnama'];
	}
	else{
		die("buka file dari HTML");
	}
	if (empty($trainingid) || empty($trainingnama))
	{
?>
		<script>
		alert("data harus diisi");
		window.location.href="homejadwaltrainingadd.php"
		</script>
<?php
//{
//echo "data gagal";
}else{
$sql=" INSERT INTO mstraining(trainingid, trainingnama, trainingjadwal, trainingtempat, trainingharga,gambar) VALUES('$trainingid','$trainingnama','$trainingjadwal','$trainingtempat','$trainingharga','$gambar')";
$result= $con->query($sql);
 
if($result) 
{
?>
		<script>
		alert("data kesimpan gan");
		window.location.href="homejadwaltraining.php"
		</script>
	<?php
}
else
{
	?>
		<script>
		alert("data gagal simpan gan");
		window.location.href="lihatjadwaltr.php"
		</script>

	<?php
	}
	}

	function upload(){
	 $namaFile = $_FILES['gambar']['name'];
	 $ukuranFile = $_FILES['gambar']['size'];
	 $error = $_FILES['gambar']['error'];
	 $tmpName = $_FILES['gambar']['tmp_name'];
	
	 //cek apakah ga ada gambar yg di up
	 if($error === 4){
	 	echo"<script> alert ('pilih gambar dulu')</script>";
		return false;
	 }
	 //cek upload gambar atau bukan
	 $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	 //explode buat memecah string jadi array mecahnya pake delimiter
	 $ekstensiGambar = explode('.', $namaFile);
	 $ekstensiGambar = strtolower(end($ekstensiGambar)); 
	 if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
	 echo"<script> alert ('yang di upload bukan gambar')</script>";
		return false;
	 }

	 //kalo lolos
	 //buat nama file baru
	 $namaFileBaru = uniqid();
	 $namaFileBaru .='.';
	 $namaFileBaru .= $ekstensiGambar;  
	 //var_dump($namaFileBaru);
	 
	 move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
	 return $namaFileBaru;
	}
	

?>
