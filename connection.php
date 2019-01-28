<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'alisher';
@mysql_connect($host,$username,$password); 
@mysql_select_db($dbname) or die('not connected to database');
?>