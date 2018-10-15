	<?php  
	require_once("db.php");
	?>
	<h3 align="center">Data Mahasiswa</h3>
	<form action="viewData.php" method="post">
	<table align="center" border="1">
		<tr>
			<td colspan="3" bgcolor="yellow">
				<a href="form_mahasiswaBaru.php">Form Mahasiswa Baru</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="text" name="cari">
					<input type="submit" name="submit" value="cari">
				</form>
			</td>
		</tr>
		<tr>
			<th>Nama</th>
			<th>NIM</th>
			<th>Aksi</th>
		</tr>
	<body>
		<?php 
		@$cari = $_POST['cari']; 
		$sql 	= "SELECT nim, nama FROM mahasiswa1 WHERE nim LIKE '%$cari%'";
		$result	= mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0 ) {
			while ($row = mysqli_fetch_assoc($result)) {
				$nim = $row['nim'];
		?>
		<tr>
			<td><?php echo $row['nama']; ?></td>
			<td><?php echo $row['nim']; ?></td>
			<td align="center"><a href="delete.php?nama=<?php echo $row['nama'] ?>">Delete</a> | <a href="formUpdate.php?nim=<?php echo $row['nim'] ?>">Edit</a</td>
		</tr>
		<?php
		}
			} else {
				echo "Data Tidak tersedia";
		}
			mysqli_close($conn);
		?>
	</body>
	</tr>
	</table>