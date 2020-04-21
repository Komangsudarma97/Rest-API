<?php

	include"koneksi.php";
	
	$nama				=$_POST["textNama"];
	$alamat				=$_POST["textAlamat"];
	$email				=$_POST["textEmail"];
	$hp					=$_POST["textHP"];
	$jenisKelamin		=$_POST["ddlJenisKelamin"];

	$sql = "
		INSERT INTO
			tb_mahasiswa (
			nama,
			alamat,
			email,
			hp,
			jenis_kelamin
			)
		VALUES (
		'$nama',
		'$alamat',
		'$email',
		'$hp',
		'$jenisKelamin'
		
		)
	";
	
	if ($conn->query($sql) === TRUE) {
		echo "Data Disimpan dengan Sukses";
	} else {
		echo "Data Gagal Disimpan!";
	}
	
?>
<a href ="datamahasiswa.php"> Masuk ke Data Mahasiswa </a>