<html>
<body>
<div id="container">
<div id="header">
<h2>KAWASAKI GENUINE PARTS</h2>
<span>Last updated on September 2017</span>
</div>
		
<div id="menu">
	<a href="index.php" class="active">Pricelist</a>
	<a href="about.php">( i )</a>
</div>
<div id="content">
<form action="<?$_SERVER['PHP_SELF']?>" method="POST" name="pencarian" id="pencarian"></center>
	<center><input align="center" type="text" name="search" id="search" placeholder=" insert part number" size="30" width="">
	<p><center><input type="submit" name="submit" id="submit" value="CEK HARGA"></p><br/>
<?php
$Open = mysql_connect("localhost:3306","id3213121_adminbgtdkhj","yvfHCjNEbC__");
	if (!$Open){
	die ("Koneksi ke Database Gagal !<br>");
		}
$Koneksi = mysql_select_db("id3213121_parts");
	if (!$Koneksi){
	die ("Koneksi ke Database Gagal !");
	}
//menampilkan data
if ((isset($_POST['submit'])) AND ($_POST['search'] <> "")) {
  $search = $_POST['search'];
  $sql = mysql_query("SELECT * FROM price WHERE num LIKE '%$search%'") or die(mysql_error());
	//menampilkan jumlah hasil pencarian
  $jumlah = mysql_num_rows($sql); 
  if ($jumlah > 0) {
    echo '';
	$nomer=0;
    while (	$hasil = mysql_fetch_array ($sql)) {
		$nomer++;
		$num = stripslashes ($hasil['num']);
		$name = stripslashes ($hasil['name']);
		$motor = stripslashes ($hasil['motor']);
		$harga = stripslashes ($hasil['harga']);
		}
?>
<center><table width="100%" align="center" border="0" cellpadding="0" cellspacing="0">
<tr><td>&nbsp;Part Number</td><td>&nbsp;<?=$num?></td></tr>
<tr><td>&nbsp;Part Name</td><td>&nbsp;<?=$name?></td></tr>
<tr><td>&nbsp;Motorcycle</td><td>&nbsp;<?=$motor?></td></tr>
</table></center>
<center><h1><b>Rp <?=$harga?>,-</b></h1></center>
<?
    }
	else {
   // menampilkan pesan zero data
		echo 'Nomor part tidak ditemukan !';
	}
}
//Tutup koneksi engine MySQL
	mysql_close($Open);
?>
</div>
</div>
<center>Alkha Dev</center>
   <!-- Histats.com  START  (aync)-->
<script type="text/javascript">var _Hasync= _Hasync|| [];
_Hasync.push(['Histats.start', '1,3887158,4,0,0,0,00010000']);
_Hasync.push(['Histats.fasi', '1']);
_Hasync.push(['Histats.track_hits', '']);
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src = ('//s10.histats.com/js15_as.js');
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
})();</script>
<!-- Histats.com  END  -->
</body>
</html>
