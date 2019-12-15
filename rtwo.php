<html>
<head>
<link rel="stylesheet" type="text/css" href="rone.css">
</head>
<body>
<h1 class="head">Result Processing</h1>

<div class="option">

<form action="rtwo.php" method="POST">
<table cellspacing="0">

<tr>
<td>
</tr>
<tr>
<td>
</tr>
<tr>
<td>Class:
<td>Two
</tr>
<tr>
<td>Roll:
<td><input type="text" name="roll" size="35">
</tr>
<td>Exam:
<td><input type="text" name="exam" size="35">
</tr>
<td>
<td>Remark
</tr>
<tr>
<td>Bangla:
<td><input type="text" name="bangla" size="35">
</tr>
<tr>
<td>English:
<td><input type="text" name="english" size="35">
</tr>
<td>Mathematics:
<td><input type="text" name="math" size="35">
</tr>
<td>Religion:
<td><input type="text" name="religion" size="35">
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
<td><input type="submit" name="insert" value="Save to Database">

</table>
</form>

</div>
</body>
</html>



<?php
  session_start();
  
if(isset($_POST['insert']))
{

	$roll=mysql_real_escape_string($_POST['roll']);
	$exam=mysql_real_escape_string($_POST['exam']);
	$bangla=mysql_real_escape_string($_POST['bangla']);
	$english=mysql_real_escape_string($_POST['english']);
	$math=mysql_real_escape_string($_POST['math']);
	$religion=mysql_real_escape_string($_POST['religion']);
	
	
	if($roll && $exam && $bangla && $english && $math && $religion)
	{
		$connect=mysql_connect("127.0.0.1","root","");
		mysql_select_db("db_project");
		$query=mysql_query("insert into two values('$roll','$exam','$bangla','$english','$math','$religion')");
		header("location:rtwo.php?notify=Marks have been inserted.");
	}else
	{
		header("location:rtwo.php?notify=All fields are required.");
	}
	
}

?>
