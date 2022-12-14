<?php

require( '../ssp.class.php' );

$dbDetails = array(
	/*'host' => 'localhost',
	'user' => 'root',
	'pass' => '',
	'db'   => 'tes'*/
	'host' => '83.136.216.25',
	'user' => 'u5539280_eko',
	'pass' => 'purwokerto',
	'db'   => 'u5539280_pjka'
);

$table = 'tb_asset';
$primaryKey = 'id_asset';

if(isset($_GET['update'])){
	$db = SSP::sql_connect($dbDetails);
	$sql = "UPDATE $table SET asset_code='".$_POST['asset_code']."', asset_name='".$_POST['asset_name']."',asset_category='".$_POST['asset_category']."',departement='".$_POST['departement']."', price='".$_POST['price']."',purchase_date='".$_POST['purchase_date']."',supplayer_name='".$_POST['supplayer_name']."' WHERE id_asset='".$_GET['id']."'";
	$result = SSP::sql_exec_update($db,null,$sql);
	header("Content-Type: application/json");
	if($result){
		echo json_encode(array("success"=>true));exit;
	}else{
		echo json_encode(array("errror"=>true));exit;
	}
}

if(isset($_GET['delete'])){
	$db = SSP::sql_connect($dbDetails);
	$sql = "DELETE from $table WHERE id_asset='".$_GET['id']."'";
	$result = SSP::sql_exec_update($db,null,$sql);
	header("Content-Type: application/json");
	if($result){
		echo json_encode(array("success"=>true));exit;
	}else{
		echo json_encode(array("errror"=>true));exit;
	}
}

if(isset($_GET['create'])){
	$db = SSP::sql_connect($dbDetails);
	$sql = "INSERT INTO $table (asset_code,asset_name,asset_category,departement,purchase_date,price,supplayer_name) values ('".$_POST['asset_code']."','".$_POST['asset_name']."','".$_POST['asset_category']."','".$_POST['departement']."','".$_POST['purchase_date']."','".$_POST['price']."','".$_POST['supplayer_name']."')";
	$result = SSP::sql_exec_update($db,null,$sql);
	header("Content-Type: application/json");
	if($result){
		echo json_encode(array("success"=>true));exit;
	}else{
		echo json_encode(array("errror"=>true));exit;
	}
}

$columns = array(
	array( 'db' => 'id_asset', 'dt' => 0 ),
	array( 'db' => 'asset_code', 'dt' => 1 ),
	array( 'db' => 'asset_name', 'dt' => 2 ),
	array( 'db' => 'asset_category', 'dt' => 3 ),
	array( 'db' => 'departement', 'dt' => 4 ),
	array( 'db' => 'purchase_date', 'dt' => 5 ),
	array( 'db' => 'price', 'dt' => 6 ),
	array( 'db' => 'supplayer_name', 'dt' => 7 ),
	array( 'db' => 'id_asset', 'dt' => 8 )
);

echo json_encode(
	SSP::simple( $_GET, $dbDetails, $table, $primaryKey, $columns )
);
?> 