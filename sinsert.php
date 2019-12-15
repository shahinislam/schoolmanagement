<html>
<head>
<link rel="stylesheet" type="text/css" href="sinsert.css">
</head>
<body>
<h1 class="head">Insert Student Information</h1>

<div class="option">

<form action="sinsert.php" method="POST">
<table class="sinsert" cellspacing="0">

<tr>
<td>
</tr>
<tr>
<td>
</tr>
<tr>
<td>Class
<td><input type="text" name="class" size="35">
</tr>
<tr>
<td>Name
<td><input type="text" name="name" size="35">
</tr>
<tr>
<td>Roll
<td><input type="text" name="roll" size="35">
</tr>
<td>Section
<td><input type="text" name="section" size="35">
</tr>
<td>Date of Birth
<td><input type="text" name="birth" size="35">
</tr>
<tr>
<td>Father's Name
<td><input type="text" name="fname" size="35">
</tr>
<tr>
<td>Mother's Name
<td><input type="text" name="mname" size="35">
</tr>
<tr>
<td>Address
<td><input type="text" name="address" size="35">
</tr>
<?php
if(isset($_GET['notify']))
{
	echo "<tr class='notif'>";
	echo "<td>" .$_GET['notify'];
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

	$class=mysql_real_escape_string($_POST['class']);
	$name=mysql_real_escape_string($_POST['name']);
	$roll=mysql_real_escape_string($_POST['roll']);
	$section=mysql_real_escape_string($_POST['section']);
	$birth=mysql_real_escape_string($_POST['birth']);
	$fname=mysql_real_escape_string($_POST['fname']);
	$mname=mysql_real_escape_string($_POST['mname']);
	$address=mysql_real_escape_string($_POST['address']);
	
	if($name && $roll && $section && $birth && $fname && $mname && $address)
	{
		$connect=mysql_connect("127.0.0.1","root","");
		mysql_select_db("db_project");
		$query=mysql_query("insert into student values('$class','$name','$roll','$section','$birth','$fname','$mname','$address')");
		header("location:sinsert.php?notify=Student have been inserted.");
	}
	else
	{
		header("location:sinsert.php?notify=All fields are required.");
	}
}

?>
