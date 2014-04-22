<?php
include("config.php");

$id_staff=$_POST["id_staff"];
$nama=$_POST["nama"];
$detail=$_POST["detail"];
$date_guna=$_POST["date_guna"];
$kater=$_POST["kate"];

//run update query

$q="update bd_04 set bd_pemohon='$nama', bd_keterangan='$detail', bd_tarikhmohon='$alamat', 
bd_kategori='$kater' where bd_id='$id_staff'";
echo $q;

mysql_query($q);
echo "Nama :$nama<br />
	Dengan Keterangan :$detail<br />
	Telah Di PINDA";

//echo "AJAX OK";


?>