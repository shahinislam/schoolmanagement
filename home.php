<html>
<head>
<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
<div>
<div class="header"><h1><img class="logo" align="middle" src="logo.jpg">Jamuna Sar Karkhana Higher Secondary School</h1></div>
<img class="head" src="head.jpg">
</div>
<table class="nav">
<tr>
<td><a class="nav" href="home.php">Home</a></td>
<td><a class="nav" href="notice.php">Notice Board</a></td>
<td><a class="nav" href="">Admission</a></td>
<td><a class="nav" href="">About Us</a></td>
<td><a class="nav" href="">Contact Us</a></td>
</tr>
</table>

<div class="leftnav">
<div class="main">
Main Menu
</div>
<ul>
<li><a class="l" target="_blank" href="teacher.php">Teacher's</a>
<li><a class="l" target="_blank" href="student.php">Student's</a>
<li><a class="l" href="">Class Routine</a>
<li><a class="l" target="_blank" href="result.php">Result</a>
<li><a class="l" href="">Sports</a>
<li><a class="l" href="">Rules & Regulation</a>
</ul>
</div>

<div class="des">
Jamuna Sar Karkhana Higher Secondary School is one of the best educational institution in Jamalpur District. It is directed by Bangladesh Chemical Industries Corporation(B.C.I.C). It was established in 1991. There are almost 800 students studies in this school from class-1 to class-12 and also sufficient teaching stuffs are always dedicated to teaching. Only children of jfcl stuff's are allowed to admit in this school. 
</div>

<form class="adminlogin" action="home.php" method="POST">
<fieldset>
<legend>Login as Admin</legend>
<label>User name: </label><input type="text" size="16" name="adusername" placeholder="Username"/><br />
<label>Password: </label><input type="password" size="16" name="adpassword" Placeholder="Password"/><br />
<?php
if(isset($_GET['notify']))
{
	echo "<div class='notif'>";
	echo $_GET['notify'];
    echo "</div>";
}
?>
<input type="submit" value="Log in" name="login"/>

</fieldset>
</form>
<div class="copy">&#169; Copyright 2015-2016 Shahin/Sagor/Bidhan All Rights Reserved</div>
</body>
</html>

<?php

    session_start();
	if(isset($_POST['login']))
	{
		$username=mysql_real_escape_string($_POST['adusername']);
		$password=mysql_real_escape_string($_POST['adpassword']);

		if($username&&$password)
		{
			$connect=mysql_connect("127.0.0.1","root","");
			mysql_select_db("db_project",$connect);
			$login=mysql_query("select * from admin where username='$username'");
			while($log=mysql_fetch_array($login))
			{
			 $dbu=$log['username'];
			 $dbp=$log['password'];
			}			
			if($username==$dbu&&$password==$dbp)
		    {
			$_SESSION['username']=$dbu;
			$_SESSION['password']=$dbp;
			header("location:admin.php");
		    }
			else
			{
				header("location:home.php?notify=Incorrect Username or Password.");
			}
		}
		else
		{
			header("location:home.php?notify=All fields are required.");
		}
	}

?>











