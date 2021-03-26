<?php 
    require "koneksinya.php";

    if(isset($_POST["tambah"])){
        if(registrasi($_POST) > 0 ){
            echo "<script>alert('user baru berhasil ditambahkan');
            </script>";
            echo "<script>window.location.href='daftar.php';
            </script>";
        }else{
            echo mysqli_error($con);
        }
    }


?>