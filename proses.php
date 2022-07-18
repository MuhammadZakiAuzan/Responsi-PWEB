<?php 

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$prodi = $_POST['prodi'];
$fakultas = $_POST['fakultas'];
$alamat = $_POST['alamat'];


echo "<head><title>My Biodata</title></head>";
$fp = fopen("guestbook.txt", "a");
fputs($fp, "$nama|$nim|$prodi|$fakultas|$alamat\n");
fclose($fp);

header("Location: setelahproses.php");

?>