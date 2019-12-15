<html>
<head>
<link rel="stylesheet" type="text/css" href="home.css">
<style>
.notice,.trnotice,.tdnotice,th{
	margin-left:350px;
	margin-top:20px;
	border:1px solid black;
	border-collapse: collapse;
	width:700px;
	text-align:left;
}

th{
	font-size:23px;
	color:green;
}
.anotice{
	color:red;
}

</style>
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

<?php

    session_start();
	
			$connect=mysql_connect("127.0.0.1","root","");
			mysql_select_db("db_project",$connect);
			$login=mysql_query("select * from notice order by id desc");
			echo "<table class='notice'>";
			echo "<tr>";
			 echo "<th>"."Date"."</td>";
			 echo "<th>"."Headline"."</td>";
			 echo "</tr>";
			while($log=mysql_fetch_array($login))
			{
			 $date=$log['date'];
			 $headline=$log['headline'];			 
			 echo "<tr class='trnotice'>";
			 echo "<td class='tdnotice'>"."$date"."</td>";
			 echo "<td class='tdnotice'>"."$headline"." "."<a href='' class='anotice'>"."more"."</a>"."</td>";
			 echo "</tr>";			 
			}
            echo "</table>";			
		
?>
<div class="copy">&#169; Copyright 2015-2016 Shahin/Sagor/Bidhan All Rights Reserved</div>
</body>
</html>













