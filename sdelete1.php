<html>
<head>
<link rel="stylesheet" type="text/css" href="sdelete1.css">
</head>
<body>
<h1>Delete Student Information<h1>

<form action="sdelete1.php" method="POST">
<fieldset class="field">

<table align="center">

<tr>
<td>Class
<td><input type="text" name="class" size="35">
</tr>
<tr>
<td>Roll
<td><input type="text" name="roll" size="35">
</tr>
<tr>
<td>Section
<td><input type="text" name="section" size="35">
</tr>
<?php
if(isset($_GET['notify']))
{
	echo "<tr class='notif'>";
	echo "<td>";
	echo "<td>" .$_GET['notify']."</td>";
    echo "</tr>";
}
?>
<tr>
<td>
<td><input type="submit" name="ok" value="OK">
</tr>
</fieldset>
</table>

</form>

</body>
</html>


<?php
session_start();
if(isset($_POST['ok']))
{
	$class=mysql_real_escape_string($_POST['class']);
	$roll=mysql_real_escape_string($_POST['roll']);
	$section=mysql_real_escape_string($_POST['section']);
	if($class && $roll&&$section)
	{
		$connect=mysql_connect("127.0.0.1","root","");
		mysql_select_db("db_project");
		$login=mysql_query("SELECT * FROM student WHERE class='$class' && roll='$roll'&& section='$section'");
		while($log=mysql_fetch_assoc($login))
		{
			$_SESSION['class']=$log['class'];
			$_SESSION['name']=$log['name'];
			$_SESSION['roll']=$log['roll'];
			$_SESSION['section']=$log['section'];
			$_SESSION['birth']=$log['birth'];
			$_SESSION['fname']=$log['fname'];
			$_SESSION['mname']=$log['mname'];
			$_SESSION['address']=$log['address'];
			
			
			
			header("location:sdelete2.php");
		}
		
		
	}
	else
	{
		echo header("location:sdelete1.php?notify=All fields are required.");
	}
}
?>
















