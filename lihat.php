
<?php 
include ("gambar.html");
echo "<head><title>My Guest Book</title></head>";
$fp = fopen("guestbook.txt", "r");

echo "<h1> <strong><font size='6' face='Courier New, Courier, mono'> DAFTAR TAMU </font></strong></h1>";
echo "<table cellpadding=5 cellspacing=0 border='2'>";

echo "<tr>
<td> Tanggal </td>
<td> Nama </td>
<td> Email </td>
<td> NIM </td>
<td> Alamat </td>
<td> Instansi </td>
</tr>";

while ($isi = fgets($fp,80)) {
    $pisah = explode('|', $isi);
    echo "<tr>
    <td>$pisah[0]</td>
    <td>$pisah[1]</td>
    <td>$pisah[2]</td>
    <td>$pisah[3]</td>
    <td>$pisah[4]</td>
    <td>$pisah[5]</td>
    </tr>";
}


echo "</table>";
echo "<br><br><strong><a href='tampilan.php'> ::Isi buku tamu:: </a>
<a href='setelahproses.php'>Kembali</a>
</strong>";







/*
    echo "<tr><td>Tanggal: $date </td></tr>";
    echo "<tr><td>Nama: </td><td>: $pisah[0] </td></tr>";
    echo "<tr><td>Alamat: </td><td>: $pisah[1] </td></tr>";
    echo "<tr><td>Email: </td><td>: $pisah[2] </td></tr>";
    echo "<tr><td>Status: </td><td>: $pisah[3] </td></tr>";
    echo "<tr><td>Komentar: </td><td>: $pisah[4] </td></tr>";
    echo "<tr><td><br></td><td><br></td></tr>"; */


echo "</table>";
include("ftr.html")


?>