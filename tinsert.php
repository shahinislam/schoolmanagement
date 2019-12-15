<html>
<head>
<link rel="stylesheet" type="text/css" href="tinsert.css">
</head>
<body>
<h1 class="head">Insert Teachers Information</h1>

<div class="option">

<form action="tinsert.php" method="POST">
<table class="tinsert" cellspacing="0">

<tr>
<td>
</tr>
<tr>
<td>
</tr>
<tr>
<td>Id
<td><input type="text" name="id" size="35">
</tr>
<tr>
<td>Name
<td><input type="text" name="name" size="35">
</tr>
<tr>
<td>Designation
<td><input type="text" name="designation" size="35">
</tr>
<td>Grade
<td><input type="text" name="grade" size="35">
</tr>
<td>Subject
<td><input type="text" name="subject" size="35">
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
<td>
<td><input type="submit" name="insert" value="Insert">

</table>
</form>

</div>
</body>
</html>



<?php
  session_start();
  
if(isset($_POST['insert']))
{

	$id=mysql_real_escape_string($_POST['id']);
	$name=mysql_real_escape_string($_POST['name']);
	$designation=mysql_real_escape_string($_POST['designation']);
	$grade=mysql_real_escape_string($_POST['grade']);
	$subject=mysql_real_escape_string($_POST['subject']);
	
	
	if($id && $name && $designation && $grade && $subject)
	{
		$connect=mysql_connect("127.0.0.1","root","");
		mysql_select_db("db_project");
		$query=mysql_query("insert into teacher values('$id','$name','$designation','$grade','$subject')");
		header("location:tinsert.php?notify=Teacher information have been inserted.");
	}
	else
	{
		header("location:tinsert.php?notify=All fields are required.");
	}
}

?>
