<?php
 $link = mysql_connect('localhost','root','');
 if (!$link)
 {
 die('Not Connected :' .mysql_error());
 }
 
 $db_selected =  mysql_select_db('webaru', $link);
 if (!$db_selected) 
 {
	die('Not Connected :' .mysql_error());
 }
?>