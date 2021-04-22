<?php
	//include koneksi ke database
	include "conn.php";
	//echo "update celana";
	
	//menangkap variabel parameter get_browser
	$id= $_GET['id'];
	//echo $id;
	
	$sql =  "DELETE FROM `celana` WHERE `id_celana` = ".$id.";";
	//echo $sql;
	
	//runnig query
	$query = mysqli_query($conn, $sql);
	if($query) {
		$msg = "delete data celana berhasil";
	}else{
		$msg = "delete data celana tidak berhasil";
	}
	
		$response = array(
		'status'=>'OK',
		'pesan'=>$msg
	);
	
	echo json_encode($response);
?>

