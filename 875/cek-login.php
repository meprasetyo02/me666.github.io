<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Validasi Login</title>
	<link rel="SHORTCUT ICON" href="../img/best.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<div class="wrapper">
		<div class="inner">

			<?php
			session_start();
			include "koneksi.php";
			$email= $_POST['email'];
			$cekpassword= $_POST['password'];
			$password = md5($cekpassword);
			
			$op=$_GET['op'];
			echo" $email $password";
			if($op=="in")
			{
				$query="select * from tb_user_login2 where email ='$email' and password ='$password'";
				$result = mysqli_query($koneksi,$query);
				if(mysqli_num_rows($result)==1)
				{
					$baris= mysqli_fetch_array($result);	
					$_SESSION['password']= $baris['password'];
					$_SESSION['email']= $baris['email'];
					$_SESSION['id_jabatan']=$baris['id_jabatan'];
					$_SESSION['no_hp']=$baris['no_hp'];
					$_SESSION['nama_lengkap']=$baris['nama_lengkap'];
					$_SESSION['id_user']=$baris['id_user'];
					if($baris['password']==$password && $baris['email'] == $email){
						header("Location:home");
					}
					elseif($baris['id_jabatan']=="2"){
						header("Location:home");
					}
				}
				else{
					echo"
					<script language='javascript'>alert('Pastikan password & E-mail yang anda masukkan benar !!');
					document.location='index.html'</script>";		
				}
			}
			elseif($op=="out")
			{
				unset($_SESSION['email']);
				unset($_SESSION['id_jabatan']);
				header("Location:../?page=login");
			}
			?>
			<br />
			<Br />

		</div>
	</div>
</body>
</html>