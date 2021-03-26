
<?php
include:'koneksi.php';
$folder = "images/";
$upload_image = $_FILES['gambar']['name'];
// tentukan ukuran widthxheight yang diharapkan
$width_size = 500;
$height_size = 500;
/* tentukan di mana image akan
ditempatkan setelah diupload
*/
$filesave = $folder . $upload_image;
move_uploaded_file($_FILES['gambar']
['tmp_name'], $filesave);

// menentukan nama image setelah dibuat
$resize_image = $folder . "resize_". uniqid(rand()) . ".jpg";
// mendapatkan ukuran width dan height dari image
list( $width, $height ) = getimagesize($filesave);
/* mendapatkan nilai pembagi supaĀa
ukuran skala image yang dihasilkan
sesuai dengan aslinya
*/
$k = $width / $width_size;
$row = mysqli_fetch_array($result);
header("Content-type: " .$row["tipeimage"]);
echo $row["dataimage"];
// menentukan width yang baru
$newwidth = $width / $k;
// menentukan height yang baru
$newheight = $height / $k;
// fungsi untuk membuat image yang baru
$thumb =imagecreatetruecolor($newwidth, $newheight);
$source =imagecreatefromjpeg($filesave);

// men-resize image yang baru
imagecopyresized($thumb, $source,500,500,500,500, $newwidth, $newheight, $width, $height);

// menĀimpan image yang baru
imagejpeg($thumb, $resize_image);
imagedestroy($thumb);
imagedestroy($source);
echo 'Image Asli : <img src="' .$filesave . '" /><br />';
echo 'Image setelah di resize : <imgsrc="' . $resize_image . '" />';
?>