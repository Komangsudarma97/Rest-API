<html>
	
	<head>
	
	</head>
	<body>
	
		<h1>INPUT DATA</h1>
		<h1>--------------------------------------------------------------------------------------------------------</h1>
		
		<form action='db_input.php' method='POST'>
		
			Nama :<br>
			<input type='text'id='textNama' name='textNama' /><br>
			
			Alamat :<br>
			<input type='text' id='textAlamat' name='textAlamat' /><br>
			
			Email : <br>
			<input type='text' id='textEmail' name='textEmail'/><br>
			
			HP :<br>
			<input type='text' id='textHP' name='textHP'/><br>
			
			Jenis Kelamin ; <br>
			<select id='ddlJenisKelamin' name='ddlJenisKelamin'>
				<option value='L'>Laki laki</option>
				<option value='P'>Perempuan</option>
			</select>
			<br>
			<br>
			<input type='submit' value='Simpan'/>
		
		</form>
		
		
		
	</body>
	
</html>