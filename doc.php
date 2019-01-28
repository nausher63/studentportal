<?php
session_start();
include_once("connect.php");
?>
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
p{
	border:1px solid bottom;
	border:bottom;
}
</style>
<meta charset="UTF-8">
<title>websoft</title>
</head>
<body>
<marquee bgcolor="" behavior="scroll" direction="right"><h1> GRIEVIENCE AND REGISTRATION SYSTEM</h1></marquee>
<pre><h1>                        (STUDENT PORTAL)</h1></pre>
<form action="" method="post" >
  <p>name: <br /><input type="text" name="name" id="" value="<?php echo $_SESSION['name'];?>" /></p>
  <p>email: <br /><input type="text" name="email" id="" /></p>
  <p>address: <br /><input type="text" name="address" id="" /></p>
  <p>admission: <br /><input type="text" name="admission" id="" /></p>
  <p><input type="submit" name="submit" value="submit" />
  <button><a href="websitehome.php"> Skip </a></button></p>

  </form>
  </body>
  </html>
  