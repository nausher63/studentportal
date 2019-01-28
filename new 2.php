<?php
include_once('connect.php');
if(isset($_POST['submit']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$city =  $_POST['city'];
$pass =  $_POST['password'];

if(mysql_query("insert into lp (name, email, city, password,) VALUES ('$name','$email','$city','$pass')"))
{
	echo "successfully";
}

}
?>
<html>
<head>
<title>bootstrap</title>
<link href="bootstrep/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<script src="bootstrep/js/jquery.js"></script>
<script src="bootstrep/js/bootstrap.min.js"></script>
</head>
<style>
.nausher{
margin:20px 20px 0px 620px;
}
body{
background-image:url(back.jpg);
}
.ali{
margin: 0px 00px 0px 180px;
}
.alish{
margin: 0px 00px 0px 890px;
background-color:;
}
h2{
margin: 0px 0px 0px 0px;
font-size: 35px;

}
h3{
margin: 0px 0px 0px 0p;
}
.footer{
margin: 0px 0px 0px 80px;
font-size:20px;
}
.foot{
margin: 0px 0px 0px 50px;
font-size:30px;
}
.foote{
margin: 0px 0px 0px 00px;
font-size:30px;
}
</style>
<body>

<div class="jumbotron">

<div class="row">
<div class="col-md-6">
<h2><img src="ali.jpg" class="img-circle" width="120px" height="80px" text='nausher' >GOVT ENGG COLLEGE AJMER <pre>                                   STUDENT PORTAL</pre> </h2>



</div>

<div class="alish">
<div class="col-lg-10">
<p>login your account</p>
<form class="form-inline">
<div class="form-group">
<label>name</label>
<p><span class="glyphicon glyphicon-user"></span><input type"text" name="t1" placeholder="input name"></p>
</div>

<div class="form-group">
<label>password</label>
<p><span class="glyphicon glyphicon-asterisk"></span><input type"password" name="t1" placeholder="input pass"></p>
</div>

<button type="submit">login</button>

</form>
</div>
</div>
</div>
</div>
<form action="" method="post" >
  <p>name: <br /><input type="text" name="name" id="" /></p>
  <p>email: <br /><input type="text" name="email" id="" /></p>
  <p>address: <br /><input type="text" name="city" id="" /></p>
  <p>admission: <br /><input type="text" name="password" id="" /></p>
  <p><input type="submit" name="submit" value="submit" /></p>

  </form>
  </body>
  </html>