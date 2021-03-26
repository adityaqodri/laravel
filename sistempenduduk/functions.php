<?php

$conn = mysqli_connect("localhost", "root","","sistempenduduk");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $conn;
    $nip = htmlspecialchars($data["nip"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $alamat = htmlspecialchars($data["alamat"]);

    //upload foto
    $foto = upload();
    if(!$foto) {
        return false;
    }

    $query = "INSERT INTO warga
                VALUES
                ('', '$nip', '$nama', '$email', '$alamat', '$foto')
                ";

    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}

function upload(){

    $namaFile = $_FILES['foto']['name'];
    $ukuranFile = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmpName = $_FILES['foto']['tmp_name'];

    // cek apakah ada foto yang diupload
    if($error == 4){
        echo "<script>
        alert('Pilih foto terlebih dahulu!');
        </script>";

        return false;
    }

    //cek ekstensi foto
    $ekstensiGambarValid = ['jpg', 'jpeg','png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if(!in_array($ekstensiGambar,$ekstensiGambarValid)){
        echo "<script>
        alert('UPLOAD LAH GAMBAR!');
        </script>";

        return false;
    }
    //cek ukuran foto

    if($ukuranFile > 5000000){
        echo "<script>
        alert('UKURAN GAMBAR TERLALU BESAR!');
        </script>";

        return false;
    }

    //lolos pengecekan foto
    $namaFilebaru = uniqid();
    $namaFilebaru .= '.';
    $namaFilebaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'img/'.$namaFilebaru);

    return $namaFilebaru;
}


function hapus($id){
    global $conn;
    mysqli_query($conn,"DELETE FROM warga WHERE id=$id");
    return mysqli_affected_rows($conn);
}



function ubah($data){
    global $conn;

    $id = ($data["id"]);
    $nip = htmlspecialchars($data["nip"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $alamat = htmlspecialchars($data["alamat"]);

    $gambarLama = htmlspecialchars($data["gambarLama"]);

    //apakah user pilih foto baru atau tidak
    if($_FILES['foto']['error'] == 4) {
        $foto = $gambarLama;
    }else{
        $foto = upload();
    }
    $query = "UPDATE warga SET
                nip = '$nip',
                nama = '$nama',
                email = '$email',
                alamat = '$alamat',
                foto = '$foto'

                WHERE id = $id
                ";

    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
    
}

function registrasi($data){
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn,$data["password"]);
    $password2 = mysqli_real_escape_string($conn,$data["password2"]);

    //cek username sudah ada apa belum
    $result = mysqli_query($conn,"SELECT username FROM user WHERE username = '$username' ");
    if(mysqli_fetch_assoc($result)){
        echo "<script>
            alert('username sudah digunakan');
               </script>";
            
           return false;    
    }

    //cek konfirmasi password
    if($password != $password2){
        echo "<script>
                alert('konfirmasi password tidak sesuai!');
             </script>";
             return false;
    }

    //enkripsi password
    $password = password_hash($password,PASSWORD_DEFAULT);


    //tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO user VALUES('','$username','$password')");

    return mysqli_affected_rows($conn);

}