<?php

	include "koneksi.php";
	
	$sql = "select* from tb_mahasiswa";
	
	$result = $conn->query($sql);
	
	
?>


<html>

	<head></head>
	<body>
	
		<h1>Data Mahasiswa</h1><hr>
		
		<a href ="input.php"> Input Data</a>
		
		<table width='100%' border='1' cellpadding='2' cellspacing='3'>
			<tr>
			
				<th>Nama</th>
				<th>Alamat</th>
				<th>Email</th>
				<th>HP</th>
				<th>Jenis Kelamin</th>
				<th> Action</th>
				
			</tr>
			
			<?php
			
			while ($row = $result->fetch_assoc()){
				echo "<tr>
					<td>".$row['nama']."</td>
					<td>".$row['alamat']."</td>
					<td>".$row['email']."</td>
					<td>".$row['hp']."</td>
					<td>".$row['jenis_kelamin']."</td>
					<td>
						<a href='edit.php?id=".$row['id_mahasiswa']."'>Edit</a>
						|
						<a href='javascript:hapus(".$row['id_mahasiswa'].")'>Delete</a>
					</td>
			</tr>";
			}

	$conn->close();
			
			?>
		</table>
		
	</body>
</html>

<script>

	function hapus(idMahasiswa){
			tanya = confirm ("Apakah anda ingin menghapus data");
			if (tanya){
				//alert ("Data Terhapus");
				document.location = "db_delete.php?id="+idMahasiswa;
			}else{
				//alert ("Data tidak jadi dihapus");
				
			}
	}



</script>