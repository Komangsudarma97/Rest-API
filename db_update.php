<?php

	include"koneksi.php";
	
	$nama				=$_POST["textNama"];
	$alamat				=$_POST["textAlamat"];
	$email				=$_POST["textEmail"];
	$hp					=$_POST["textHP"];
	$jenisKelamin		=$_POST["ddlJenisKelamin"];
	$idMahasiswa		=$_POST["hdId"];
	
	$sql = "
		UPDATE tb_mahasiswa
		SET
			nama = '$nama',
			alamat = '$alamat',
			email = '$email',
			hp = '$hp',
			jenis_kelamin = '$jenisKelamin'
		where
			id_mahasiswa = '$idMahasiswa'
	";
	
	
	if ($conn->query($sql) === TRUE) {
		echo "Data Diubah dengan Sukses";
	} else {
		echo "Data Gagal Diubah!";
	}
	
?>

<a href ="datamahasiswa.php"> Kembali ke halaman Data Mahasiswa </a>