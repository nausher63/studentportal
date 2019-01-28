<?php
$username = $_post['name'];
$password = $_post['admission'];
$con=mysqli_connect("localhost","root");
mysqli_select_db($con,"record");
$q ="select name , admission from alisher where name = '$username' and admission = '$admission'";
$result=mysqli_query($con,$q);
if($result == 1){
header('location:home.php');
}else{
header('location:naus.php');
}
mysqli_close($con);
?>