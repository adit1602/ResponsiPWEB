<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	
</head>
<body b bgcolor="aquamarine">
</body>
</html>

<?php

echo "Terima kasih atas partisipasi anda mengisi buku tamu<br>";
echo "<b>Tampilan Tugas Akhir menggabungkan 3 elemen dalam satu tampilan layar: <b><br>";
echo "<a href='index.php'> TUGAS AKHIR</a><br>";
echo "<strong>MENU LAIN : </strong><br>";
echo "<b>Silahkan Pilih Salah satu menu berikut : <b><br>";
echo "<a href='tampilan.php'> Isi buku tamu</a><br>";
echo "<a href='lihat.php'> Lihat buku tamu</a><br>";
echo "<a href='kalkulator js.html'> Kalkulator</a><br>";
echo "<a href='counter.php'> Kalkulator versi 2</a><br>";

?>
<?php
//megambil tanggal sistem
$hari = date("d");
//mengambil bulan sistem
$bulan = date ("m");
//mengambil tahun sistem
$tahun = date("Y");
//mencari jumlah hari bulan dan tahun ini
$jumlahhari=date("t",mktime(0,0,0,$bulan,$hari,$tahun));
?>
<br><br>

<?php
switch ($bulan){
	case 1 : $nmbulan = "Jan"; break;
	case 2 : $nmbulan = "Feb"; break;
	case 3 : $nmbulan = "Mar"; break;
	case 4 : $nmbulan = "Apr"; break;
	case 5 : $nmbulan = "Mei"; break;
	case 6 : $nmbulan = "Jun"; break;
	case 7 : $nmbulan = "Jul"; break;
	case 8 : $nmbulan = "Agu"; break;
	case 9 : $nmbulan = "Sep"; break;
	case 10 : $nmbulan = "Okt"; break;
	case 11 : $nmbulan = "Nop"; break;
	case 12 : $nmbulan = "Des"; break;
}
echo "<center><h1>Kalender Bulan ini</h1></center>";
echo "<center><h1>$nmbulan $tahun</h1></center>";?>
<br>
<table style="border:2px solid #1E90FF" align="center" cellpadding="10">
		<tr bgcolor="#ADD8E6">
		<td align="center"><font color="FF0000">Min</font></td>
		<td align="center">Sen</td>
		<td align="center">Sel</td>
		<td align="center">Rab</td>
		<td align="center">Kam</td>
		<td align="center">Jum</td>
		<td align="center">Sab</td>
	</tr>

	<?php 
	$s = date("w", mktime(0,0,0,$bulan,1,$tahun));
	for($ds=1; $ds<=$s; $ds++){
		echo "<td></td>";
	}

	for($d=1;$d<=$jumlahhari; $d++){
		//jika minggu ke 0, maka buat baris baru
		if(date("w", mktime(0,0,0,$bulan, $d, $tahun))==0){
			echo "<tr>";
		}
	$warna = "#000000";//warna default

	//jika hari minggu diberi warna merah
	if (date("l", mktime(0,0,0,$bulan,$d,$tahun))== "Sunday"){
		$warna = "#FF0000";
	}

	//beri warna default tanggal tiap harinya (selain hari minggu)
	echo "<td align=center valign=middle> <span style=\"color: $warna\">$d</span></td> ";

	//jika hari ke enam, akhiri baris
	if (date("w", mktime(0,0,0,$bulan,$d,$tahun))==6){
		echo "</tr>";
	}
	}
echo '</table>';
include("ftr.html")
?>