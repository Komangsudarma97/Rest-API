<?php

	$hostname = 'localhost'; 		//alamat DB
	$username = 'root';				//username DB server
	$password = '';		   			// password Db server
	$database = 'mahasiswa_2016';	//nama database yang ingin di
	
	$conn = new mysqli(
				$hostname,
				$username,
				$password,
				$database
	
	
			);
	
	if ($conn->connect_error){
		echo "Koneksi Error";
	}else{
		//echo"Koneksi Berhasil";
		
	}
	
?>