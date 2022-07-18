<?php 

echo "<head><title>My Biodata</title></head>";
$fp = fopen("guestbook.txt", "r");
echo("<center><h1>Table Guest Book</h1>");
echo ("<a href='program.php'>::Isi Data Diri::</a><br><hr>");
echo "<table border='1' width='70%' style='text-align: center;'>";
echo("<tr><td>Tanggal</td><td>Nama</td><td>nim</td><td>prodi</td><td>fakultas</td><td>alamat</td></tr>");
$tanggal=date("d-m-Y");
while ($isi = fgets($fp)) {
    $pisah = explode('|', $isi);
    echo("<tr><td>$tanggal</td><td>$pisah[0]</td><td>$pisah[1]</td><td>$pisah[2]</td><td>$pisah[3]</td><td>$pisah[4]</td></tr>");
    // echo "<tr><td>Nama: </td><td>: $pisah[0] </td></tr>";
    // echo "<tr><td>Nim: </td><td>: $pisah[1] </td></tr>";
    // echo "<tr><td>prodi: </td><td>: $pisah[2] </td></tr>";
    // echo "<tr><td>fakultas: </td><td>: $pisah[3] </td></tr>";
    // echo "<tr><td>alamat : </td><td> : $pisah[4] </td></tr>";
}

echo "</table></center>";
?>