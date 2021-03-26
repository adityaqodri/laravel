<?php
	if (isset($_GET['username']) AND isset($_GET['password']))
		{
			$username = $_GET['username'];
			$password = $_GET['password'];
			$username = htmlspecialchars($username);
			$password = strip_tags($password);
		}
		
		else{
			header("Location:soal3.html?error=variabel_belum_diset");
		}

		if(empty($username)){
			header("Location:soal3.html?error=username_kosong");
		}
		
			else{
				if (is_numeric($username)){
						header("Location:soal3.html?error=username_harus_huruf");
					}
					else{
						echo "Username: $username <br /> Password: $password";
						}
			}

		if(empty($password)){
			header("Location:soal3.html?error=password_kosong");
		}	
?>