<?php 

$tanggal = date("2022-7-02");
$nama = $_POST['nama'];
$email = $_POST['email'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];
$instansi = $_POST['instansi'];
$date = date("2022-7-02");

echo "<head><title>My Guest Book</title></head>";
$fp = fopen("guestbook.txt", "a+");
fputs($fp, "$date|$nama|$email|$nim|$alamat|$instansi\n");
fclose($fp);

header("Location: setelahproses.php")


?>



