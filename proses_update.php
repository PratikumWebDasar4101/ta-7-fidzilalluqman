<?php  
require_once("db.php");

$nama		= $_POST['nama'];
$nim		= $_POST['nim'];
$jenkel		= $_POST['jenis_kelamin'];
$prodi		= $_POST['prodi'];
$fakultas	= $_POST['fakultas'];
$asal		= $_POST['asal'];
$moto_hidup	= $_POST['moto_hidup'];

$sql = "UPDATE mahasiswa1 SET nama='$nama', jenis_kelamin='$jenkel', prodi='$prodi', fakultas='$fakultas', asal='$asal', moto_hidup='$moto_hidup'WHERE nim='$nim'";

if (mysqli_query($conn, $sql)) {
	header("Location: viewData.php");
} else {
	echo "Error" . $sql . "<br>" . mysqli_error($conn);
}
?>