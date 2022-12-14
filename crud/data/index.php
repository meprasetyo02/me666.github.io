<?php
// Include SQL query processing class
require( '../ssp.class.php' );
// Database connection info
// $dbDetails = array(
// 	'host' => 'localhost',
// 	'user' => 'root',
// 	'pass' => '',
// 	'db'   => 'zzz'
// );
$dbDetails = array(
	'host' => '83.136.216.25',
	'user' => 'u5539280_eko',
	'pass' => 'purwokerto',
	'db'   => 'u5539280_pjka'
);

$table = 'karyawan';
$primaryKey = 'id_karyawan';



/*
if($_POST['action']=='edit'){
	$db = SSP::sql_connect($dbDetails);
	$sql = "SELECT * FROM $table WHERE id_karyawan='".$_GET['id']."'";
	$result = SSP::sql_exec($db,null,$sql);
	
	header("Content-Type: application/json");
	echo json_encode(array("data"=>$result[1]));exit;
}*/

if(isset($_GET['update'])){
	$db = SSP::sql_connect($dbDetails);
	$sql = "UPDATE $table SET KTP='".$_POST['KTP']."', nama='".$_POST['nama']."',no_hp='".$_POST['no_hp']."' WHERE id_karyawan='".$_GET['id']."'";
	$result = SSP::sql_exec_update($db,null,$sql);
	//var_dump($sql);die;
	header("Content-Type: application/json");
	if($result){
		echo json_encode(array("success"=>true));exit;
	}else{
		echo json_encode(array("errror"=>true));exit;
	}
}

if(isset($_GET['delete'])){
	$db = SSP::sql_connect($dbDetails);
	$sql = "DELETE from $table WHERE id_karyawan='".$_GET['id']."'";
	$result = SSP::sql_exec_update($db,null,$sql);
	//var_dump($sql);die;
	header("Content-Type: application/json");
	if($result){
		echo json_encode(array("success"=>true));exit;
	}else{
		echo json_encode(array("errror"=>true));exit;
	}
}


if(isset($_GET['create'])){
	$db = SSP::sql_connect($dbDetails);
	$sql = "INSERT INTO $table (nama,no_hp,KTP) values ('".$_POST['nama']."','".$_POST['no_hp']."','".$_POST['KTP']."')";
	$result = SSP::sql_exec_update($db,null,$sql);
	/*var_dump($sql);die;*/
	header("Content-Type: application/json");
	if($result){
		echo json_encode(array("success"=>true));exit;
	}else{
		echo json_encode(array("errror"=>true));exit;
	}
}



$columns = array(
	array( 'db' => 'id_karyawan', 'dt' => 0 ),
	array( 'db' => 'ktp', 'dt' => 1 ),
	array( 'db' => 'nama',  'dt' => 2 ),
	array( 'db' => 'no_hp',      'dt' => 3 ),
	array( 'db' => 'id_karyawan',      'dt' => 4 ),

	/*	array( 'db' => 'id_karyawan',      'dt' => 3 ),*/
	/*array( '' ),*/

);



// Output data as json format
echo json_encode(
	SSP::simple( $_GET, $dbDetails, $table, $primaryKey, $columns )
);
?> 