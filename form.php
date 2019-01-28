<?php
include_once('connection.php');
if(isset($_POST['submit']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$add =  $_POST['address'];
$adm =  $_POST['admission'];
if(mysql_query("insert into record (name,email,address,admission) value('$name','$email','$add','$adm')"))
{
	echo "successfully";
}

}

?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
<style>
form{
	margin:70px 600px 600px ; 
border:56px;}
body{
	background-color:pink;
}
	
marquee{
	margin:20px 0px 0px 0px;
}
h1{
	font-size:40px;
	margin:right;
}
</style>
<meta charset="UTF-8">
<title>websoft</title>
</head>
<body>
<marquee bgcolor="" behavior="scroll" direction="right"><h1> GRIEVIENCE AND REGISTRATION SYSTEM</h1></marquee>
<pre><h1>                        (STUDENT PORTAL)</h1></pre>
<form action="" method="post" >
  <p>name: <br /><input type="text" name="name" id="" /></p>
  <p>email: <br /><input type="text" name="email" id="" /></p>
  <p>address: <br /><input type="text" name="address" id="" /></p>
  <p>admission: <br /><input type="text" name="admission" id="" /></p>
  <p><input type="submit" name="submit" value="submit" /></p>

  </form>
  </body>
  </html>
  