<?php
include("config.php");

$nama=$_POST["nama"];
$pass=$_POST["pass"];

$q="Select * from pengguna where username='$nama' and password='$pass'";
$r=mysql_query($q);
$row=mysql_num_rows($r);

if($row==1)
{
session_start();
$_SESSION['sessionid']=session_id();
$_SESSION['username']=$nama;
$_SESSION['password']=$pass;
echo "Login Berjaya";
}else{
session_start();
$_SESSION=array();
session_destroy();
echo "Login Gagal.. Sila Masukkan Maklumat Yang Betul";
}

?>