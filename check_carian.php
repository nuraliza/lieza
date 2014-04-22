<?php
include("config.php");

$carian=$_POST["cari"];


$q="Select * from bd04 where bd_pemohon like '%$carian%'";
$r=mysql_query($q);
while($row = mysql_fetch_array($r))
{
$id=$row["bd_id"];
$pemohon=$row["bd_pemohon"];
$keterangan=$row["bd_keterangan"];

echo"<li> <a href='update_mohon.php?id=$id' data-rel='external' data-ajax='false'>
<h3>$pemohon</h3><p>$keterangan</p></a></li>";
}



?>