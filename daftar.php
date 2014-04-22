<?php
include("config.php");

$nama=$_POST["nama"];
$detail=$_POST["detail"];
$fail=$_POST["fail"];
$date_guna=$_POST["date_guna"];
$kate=$_POST["kate"];

echo "Nama Pemohon: $nama <br />
	Keterangan: $detail <br/>
	Nama File: $fail <br/>
	Tarikh Guna: $date_guna <br/>
	Kategori: $kate <br/>";
	
	$sql="INSERT INTO bd04 (
`bd_pemohon` ,
`bd_keterangan` ,
`bd_fail` ,
`bd_tarikhmohon` ,
`bd_kategori`
)
VALUES (
'$nama', '$detail', '$fail ', '$date_guna', '$kate'
)";
mysql_query($sql);



?>