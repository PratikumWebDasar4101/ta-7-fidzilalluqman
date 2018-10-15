	<?php  
	require_once("db.php");

	$nim = $_GET['nim'];

	$sql = "SELECT * FROM mahasiswa1 WHERE nim='$nim'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Form Update</title>
	</head>
	<body>
		<h3 align="center">Form Update</h3>
		<form action="proses_update.php" method="post">
			<table align="center" border="1">
				<tr>
					<th align="left">Nama</th>
					<td><input type="text" name="nama" value="<?php echo $row["nama"]; ?>"></td>
				</tr>
				<tr>
					<th align="left">Nim</th>
					<td><input type="text" name="nim" value="<?php echo $row["nim"]; ?>" disabled></td>
						<input type="hidden" name="nim" value="<?php echo $row["nim"]; ?>">
				</tr>
				<tr>
					<th align="left">Jenis Kelamin</th>
					<td><input type="text" name="jenis_kelamin" value="<?php echo $row["jenis_kelamin"]; ?>"></td>
				</tr>
				<tr>
					<th align="left">Program Studi</th>
					<td>
						<select name="prodi">
						<option <<?php if ($row['prodi'] == "D3 Sistem Informasi"):echo "selected";endif  ?>>D3 Sistem Informasi</option>
						<option <<?php if ($row['prodi'] == "Teknik Elektro"):echo "selected";endif  ?>>Teknik Elektro</option>
						<option <<?php if ($row['prodi'] == "Teknik Industri"):echo "selected";endif  ?>>Teknik Industri</option>
					</select>
					</td>
				</tr>
				<tr>
					<th align="left">Fakultas</th>
					<td>
						<select name="fakultas" id="fakultas">
						<option <<?php if ($row['fakultas'] == "Fakultas Ilmu Terapan"):echo "selected";endif  ?>>Fakultas Ilmu Terapan</option>
						<option <<?php if ($row['fakultas'] == "Fakultas Teknik Elektro"):echo "selected";endif  ?>>Fakultas Teknik Elektro</option>
						<option <<?php if ($row['fakultas'] == "Fakultas Rekayasa Industri"):echo "selected";endif  ?>>Fakultas Rekayasa Industri</option>
					</select>
					</td>
				</tr>
				<tr>
					<th align="left">Asal</th>
					<td><input type="text" name="asal" value="<?php echo $row["asal"]; ?>"></td>
				</tr>
				<tr>
					<th align="left">Moto Hidup</th>
					<td>
					<textarea name="moto_hidup" cols="25" rows="5"><?php echo $row['moto_hidup'] ?></textarea>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="right"><input type="submit" name="sumbit" value="submit"></td>
				</tr>
			</table>
		</form>
	</body>
	</html>