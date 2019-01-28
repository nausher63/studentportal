<?php
	$con=mysqli_connect("localhost","root");
	mysqli_select_db($con,"students");
	<div class="header"></div>
$email = $_POST['email'];
$admission = $_POST['admission'];
$x='select * from students_record where email = "$email" && joining_date = "$admission"';
$result=mysqli_query($con,$x);
$num=mysqli_num_rows($result);
if($num==1){
	header('location:naus.php');
}
else{
	header('location:log.php');
}


mysqli_close($con);


?>