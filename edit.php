<?php

	include "koneksi.php";
	
	$idMhs = $_GET['id'];
	
	$sql = "
		select *
		from tb_mahasiswa
		where
			id_mahasiswa = $idMhs";
			
	$result = $conn->query($sql);
	
	$data = $result->fetch_assoc();

?>




<html>
	
	<head>
	
	</head>
	<body>
	
		<h1>UPDATE</h1>
		<h1>--------------------------------------------------------------------------------------------------------</h1>
		
		<form action='db_update.php' method='POST'>
		
			<input type='hidden' name='hdId' value='<?php echo
			$data['id_mahasiswa']?>' />
			Nama :<br>
			<input type='text'id='textNama' name='textNama' 
			value='<?php echo $data['nama'] ?>' /><br>
			
			Alamat :<br>
			<input type='text' id='textAlamat' name='textAlamat'
			value='<?php echo $data['alamat'] ?>'/><br>
			
			Email : <br>
			<input type='text' id='textEmail' name='textEmail'
			value='<?php echo $data['email'] ?>'/><br>
			
			HP :<br>
			<input type='text' id='textHP' name='textHP'
			value='<?php echo $data['hp'] ?>'/><br>
			
			Jenis Kelamin ; <br>
			<select id='ddlJenisKelamin' name='ddlJenisKelamin'>
				<option value='L' <?php echo $data['jenis_kelamin']=='L'?'selected':''?>>Laki laki</option>
				<option value='P' <?php echo $data['jenis_kelamin']=='P'?'selected':''?>>Perempuan</option>
				
			</select>
			
			<br>
			<br>
			<input type='submit' value='Simpan'/>
		
		</form>
		
		
		
	</body>
	
</html>