<?php 
	//koneksi data bae
	include "conn.php";
		
	//mendapatkan variabel post
	$id_celana = isset($_POST['id_celana']) ? $_POST['id_celana'] : "";
	//echo $merk_sepatu;
	$ukuran = isset($_POST['ukuran']) ? $_POST['ukuran'] : "";
	//echo $ukuran;
	$warna = isset($_POST['warna']) ? $_POST['warna'] : "";
	//echo $id_sepatu;
	
	//query menambahkan data
	$sql = "INSERT INTO `celana` (`warna`, `ukuran`) 
	VALUES ('".$warna."', '".$ukuran."');";
	//echo $sql;
	
	//runnig query
	$query = mysqli_query($conn, $sql);
	if($query) {
		$msg = "simpan data celana berhasil";
	}else{
		$msg = "simpan data celana tidak berhasil";
	}
	
	//echo $msg;
	//echo 'test';
	$response = array(
		'status'=>'OK',
		'pesan'=>$msg
	);
	
	echo json_encode($response);
?>