<?php
	//koneksi ke database mysql
	include "conn.php";
	
	//membuat query/sql untuk mengambil seluruh data celana
	$sql = "SELECT * FROM celana";
	$query = mysqli_query($conn, $sql);
	while ($data = mysqli_fetch_array($query)){
		//echo $data["ukuran"]." ";
		
		$item [] = array(
			'warna'=>$data["warna"],
			'id' =>$data ["id_celana"],
			'ukuran'=>$data ["ukuran"]
			
		);
	}
	
	$response = array(
		'status' => 'OK',
		'data' =>$item
	);
	
	echo json_encode($response);
?>