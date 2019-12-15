<html>
<head>
<link rel="stylesheet" type="text/css" href="tdelete1.css">
</head>
<body>
<h1>Delete Teacher Information<h1>

<form action="tdelete1.php" method="POST">
<fieldset class="field">

<table align="center">

<tr>
<td>ID
<td><input type="text" name="id" size="35">
</tr>
<?php
if(isset($_GET['notify']))
{
	echo "<tr class='notif'>";
	echo "<td>";
	echo "<td>" .$_GET['notify'];
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
	
	$id=mysql_real_escape_string($_POST['id']);
	if($id)
	{
		$connect=mysql_connect("127.0.0.1","root","");
		mysql_select_db("db_project");
		$login=mysql_query("SELECT * FROM teacher WHERE id='$id'");
		while($log=mysql_fetch_assoc($login))
		{
			$_SESSION['id']=$log['id'];
			$_SESSION['name']=$log['name'];
			$_SESSION['designation']=$log['designation'];
			$_SESSION['grade']=$log['grade'];
			$_SESSION['subject']=$log['subject'];
				
			header("location:tdelete2.php");
		}
		
		
	}
	else
	{
		echo header("location:tdelete1.php?notify=All fields are required.");
	}
}
?>
















