<html>
<head>
<link rel="stylesheet" href="tupdate2.css" type="text/css">
</head>
<body>
<h1>Delete Teacher Information</h1>
<form action="tdelete2.php" method="POST">
<fieldset>
<table class="tinsert" align="center" cellspacing="0">

<tr>
<td>
</tr>
<tr>
<td>
</tr>
<tr>
<td>ID
<td><input type="text" name="id" size="35" value="  <?php session_start();
                                                            if($_SESSION['id']){
                                                            echo $_SESSION['id'];} ?>">
</tr>
<tr>
<td>Name
<td><input type="text" name="name" size="35" value="<?php                                                          if($_SESSION['name']){
                                                            echo $_SESSION['name'];} ?>">
</tr>
<tr>
<td>Designation
<td><input type="text" name="designation" size="35" value="<?php                                                          if($_SESSION['designation']){
                                                            echo $_SESSION['designation'];} ?>">
</tr>
<td>Grade
<td><input type="text" name="grade" size="35" value="<?php                                                          if($_SESSION['grade']){
                                                            echo $_SESSION['grade'];} ?>">
</tr>
<td>Subject
<td><input type="text" name="subject" size="35" value="<?php                                                          if($_SESSION['subject']){
                                                            echo $_SESSION['subject'];} ?>">
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
<td><input type="submit" name="insert" value="Delete">
</tr>

</table>
</fieldset>
</form>
</body>
</html>

<?php
   
	 if(isset($_POST['insert']))
	 {
	$id=mysql_real_escape_string($_POST['id']);
	$name=mysql_real_escape_string($_POST['name']);
	$designation=mysql_real_escape_string($_POST['designation']);
	$grade=mysql_real_escape_string($_POST['grade']);
	$subject=mysql_real_escape_string($_POST['subject']);
	
	
	if($id && $name && $designation && $grade && $subject)
	{
		$conid=$_SESSION['id'];
		
		
		$connect=mysql_connect("127.0.0.1","root","");
		mysql_select_db("db_project");
		
		$query=mysql_query("delete from teacher where id='$conid'");
		
		header("location:tdelete1.php?notify=Teacher have been Deleted.");
	}
	else
	{
		echo header("location:tdelete2.php?notify=All fields are required.");
	}
	 }
?>






















