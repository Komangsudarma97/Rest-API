<?php

	include"koneksi.php";
	
	$idMhs = $_GET ['id'];

	$sql = "
		DELETE FROM
			tb_mahasiswa
		WHERE 
			id_mahasiswa = $idMhs
		
		
	";
	
	if ($conn->query($sql) === TRUE) {
		echo "Data Dihapus dengan Sukses";
	} else {
		echo "Data Gagal Dihapus!".$conn->error."<br>".$sql;
	}
?>

<a href ="datamahasiswa.php"> Kembali ke halaman Data Mahasiswa </a>