<?php
	//include koneksi ke database
	include "conn.php";
	//echo "update celana";
	
	//menangkap variabel parameter get_browser
	$id= $_GET['id'];
	//echo $id;
	
	//bagian ini yang akan ingin diubah
	$warna_celana = $_POST['warna'];
	$ukuran = $_POST['ukuran'];
	
	$sql = "UPDATE `celana` SET `ukuran` = '".$ukuran."',
		`warna` = '".$warna_celana."'
	WHERE `celana`.`id_celana` =".$id.";";
	//echo $sql;
	
	//runnig query
	$query = mysqli_query($conn, $sql);
	if($query) {
		$msg = "update data celana berhasil";
	}else{
		$msg = "update data celana tidak berhasil";
	}
	
		$response = array(
		'status'=>'OK',
		'pesan'=>$msg
	);
	
	echo json_encode($response);
?>