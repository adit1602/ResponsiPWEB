<?php

//function tanggal
function tanggal($mode){
	if ($mode==3) {
	echo date('Y-d-m',strtotime('07-07-2022'));
		
	}
	else{
	echo date('y-d-m',strtotime('07-07-2022'));
	}
}

//tampil tanggal


//buka file counter pada mode baca
$filecounter ="counter.txt";
$fl=fopen($filecounter,"r+");

//ambil nilai hit dan simpan dalam variabel $hit
$hit=fread($fl,filesize($filecounter));



//tampilkan
echo("<table width=250 align=center border=1 cellspacing=0 cellpadding=0 bordercolor=#0000FF><tr>");
echo("<td width=250 valign=middle align=center>");
echo "Hari ini adalah tanggal<br>";
$mode=3;
echo "<br>";
echo tanggal($mode);
echo "<br>";
echo "<br>";
echo "<strong>Selamat datang di Aplikasi Kalkulator sederhana</strong> <br><br>";
echo("<font face=verdana size=2 color= #FF00000><b>");
echo("Anda pengunjung yang ke:");
echo($hit);
echo("</b></font>");
echo("</td>");
echo("</tr></table>");
//tutup file counter.txt
fclose($fl);

//buka file counter.txt mode tulis
$fl=fopen($filecounter, "w+");

//tambahkan nilai hit dengan 1
$hit=$hit+1;

//simpan
fwrite($fl,$hit,strlen($hit));

//tutup
fclose($fl);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Aditya</title>
	
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="assets/styling.css">
 

	<!-- Script -->
	<script src="assets/script.js"></script>
</head>

<body>
	<div class="bg"></div>
		<div class="main">
			<h2>Kalkulator Sederhana</h2>
			<form name="form">
				<input class="textarea" name="textarea">
			</form>
				<table align="center">
					<tr>
						<td><input class="button" type="button" value="C" onclick="clean()"></td>
						<td><input class="button" type="button" value="Del" onclick="back()"></td>
						<td><input class="button" type="button" value="/" onclick="insert(' / ')"></td>
						<td><input class="button" type="button" value="x" onclick="insert(' * ')"></td>
					</tr>
					<tr>
						<td><input class="button" type="button" value="7" onclick="insert(7)"></td>
						<td><input class="button" type="button" value="8" onclick="insert(8)"></td>
						<td><input class="button" type="button" value="9" onclick="insert(9)"></td>
						<td><input class="button" type="button" value="-" onclick="insert(' - ')"></td>
					</tr>
					<tr>
						<td><input class="button" type="button" value="4" onclick="insert(4)"></td>
						<td><input class="button" type="button" value="5" onclick="insert(5)"></td>
						<td><input class="button" type="button" value="6" onclick="insert(6)"></td>
						<td><input class="button" type="button" value="+" onclick="insert(' + ')"></td>
					</tr>
					<tr>
						<td><input class="button" type="button" value="1" onclick="insert(1)"></td>
						<td><input class="button" type="button" value="2" onclick="insert(2)"></td>
						<td><input class="button" type="button" value="3" onclick="insert(3)"></td>
						<td rowspan=2><input style="height:106px;" class="button" type="button" value="=" onclick="equal()"></td>
					</tr>
					<tr>
						<td><input class="button" type="button" value="0" onclick="insert(0)"></td>
						<td><input class="button" type="button" value="00" onclick="insert('00')"></td>
						<td><input class="button" type="button" value="." onclick="insert('.')"></td>
					</tr>
				</table>
			
		</div>
	</div>
	<div align="center"><strong><a href="setelahproses.php">::Kembali::
		</a></strong></div>
</body>
</html>

<?php 
include("ftr.html")
?>

