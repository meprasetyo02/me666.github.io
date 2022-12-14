

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<meta charset="utf-8">
	<title>Sewa Reklame Billboard Baliho Media Advertising | Best Advertising Purwokerto</title>
	<meta name="description" content="jasa sewa pasang reklame billboard baliho dan media advertising di wilayah purwokerto banyumas purbalingga dan cilacap | BEST ADVERTISING" />
	<meta name="keywords" content="sewa, jasa, pasang, reklame, billboard, baliho, media, advertising, purwokerto, banyumas, purbalingga, cilacap, best advertising, spanduk, banner, promosi, rontek, mmt" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="rating" content="general">
	<meta name="robots" content="index, follow">
	<meta name="distribution" content="world" />
	<meta name="author" content="bestadvertising" />
	<meta name="generator" content="bestadvertising" />
	<!-- css -->
	<link href="../css/bootstrap.min.css" rel="stylesheet" />
	<link href="../css/fancybox/jquery.fancybox.css" rel="stylesheet">
	<link href="../css/jcarousel.css" rel="stylesheet" />
	<link href="../css/flexslider.css" rel="stylesheet" />
	<link href="../css/style.css" rel="stylesheet" />
	<link rel="SHORTCUT ICON" href="../img/best.png">

	<!-- Theme skin -->
	<link href="../skins/default.css" rel="stylesheet" />




	<script language="JavaScript">
/**
  * Disable mouse right-click on page
  * By Arthur Gareginyan (arthurgareginyan@gmail.com)
  * For full source code, visit http://www.mycyberuniverse.com
  */
  document.addEventListener("contextmenu", function(e){
  	e.preventDefault();
  }, false);
</script>



<!-- 	Slide SHOW                                    -->

<link rel="stylesheet" type="text/css" href="../tema/bootstrap/css/bootstrap.min.css" >
<link rel="stylesheet" type="text/css" href="../tema/css/ionicons.min.css" >
<link rel="stylesheet" type="text/css" href="../tema/css/owl.carousel.css" >
<link rel="stylesheet" type="text/css" href="../tema/css/magnific-popup.css" >
<link rel="stylesheet" type="text/css" href="../tema/css/style.css" >




<link href="../css/style.css" rel="stylesheet">



<script src="../tema/js/jquery-2.2.1.min.js"></script>

<script>
	$(document).ready(function(){
		$(".preloader").fadeOut();
	})
</script>

</head>
<body>
	
	
	<div class="preloader">
		<div class="loading">
			<img src="../img/wait.gif" >
			
		</div>
	</div>
	<div id="wrapper">



   <?php

    include("../koneksi.php");


    $email= $_POST['email'];
    $nama= $_POST['nama'];
    $no_hp= $_POST['no_hp'];
    $alamat= $_POST['alamat'];
    $pesan= $_POST['pesan'];
    $waktu  = gmdate("Y-m-d H:i:s", time()+60*60*7);
    

    
 
       $query1 = "INSERT INTO tb_pesan (nama, no_hp, alamat, email, pesan , tanggal_pesan) values ('$nama','$no_hp','$alamat','$email','$pesan','$waktu')";
       $result1 = mysqli_query($koneksi,$query1) or die ("Kesalahan Penginputan");
     

       echo '<script language="javascript">alert("Terimakasih atas pesan yang anda kirimkan");
       document.location="../"</script>';

   ?>


</div>



	<!-- javascript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="../js/jquery.js"></script>
		<script src="../js/jquery.easing.1.3.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/jquery.fancybox.pack.js"></script>
		<script src="../js/jquery.fancybox-media.js"></script>
		<script src="../js/google-code-prettify/prettify.js"></script>
		<script src="../js/portfolio/jquery.quicksand.js"></script>
		<script src="../js/portfolio/setting.js"></script>
		<script src="../js/jquery.flexslider.js"></script>
		<script src="../js/animate.js"></script>
		<script src="../js/custom.js"></script>




		<!-- 	Slide SHOW                -->

		<script src='../tema/js/jquery.min.js' ></script>
		<script src='../tema/js/jquery.fitvids.js' ></script>
		<script src='../tema/js/owl.carousel.min.js' ></script>
		<script src='../tema/js/jquery.magnific-popup.min.js' ></script>
		<script src='../tema/js/validator.min.js' ></script>
		<script src='../tema/js/script2.js' ></script>



		<script src="../js/theme-scripts.js"></script>

	</body>

	</html>