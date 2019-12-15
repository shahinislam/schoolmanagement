<html>
<head>
<link rel="stylesheet" type="text/css" href="rone.css">
</head>
<body>
<h1 class="head">Update Notice Board</h1>

<div class="option">

<form action="anotice.php" method="POST">
<table cellspacing="0">

<tr>
<td>Date:
<td><input type="text" name="date" size="35">
</tr>
<tr>
<td>Headline:
<td><input type="text" name="headline" size="35">
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
<td><input type="submit" name="insert" value="Save to Database">
</tr>
</table>
</form>

</div>
</body>
</html>



<?php
  session_start();
  
if(isset($_POST['insert']))
{

	$date=mysql_real_escape_string($_POST['date']);
	$headline=mysql_real_escape_string($_POST['headline']); 
	$id=0;
	if($date && $headline)
	{
		$connect=mysql_connect("127.0.0.1","root","");
		mysql_select_db("db_project");
		$query=mysql_query("insert into notice values('$id','$date','$headline')");
		header("location:anotice.php?notify=Notice have been Updated.");
	}else
	{
		header("location:anotice.php?notify=All fields are required.");
	}
	
}

?>
