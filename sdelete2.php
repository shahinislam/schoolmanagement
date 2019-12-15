<html>
<head>
<link rel="stylesheet" href="sdelete2.css" type="text/css">
</head>
<body>
<h1>Delete Student Information</h1>
<form action="sdelete2.php" method="POST">
<fieldset>
<table class="sinsert" align="center" cellspacing="0">

<tr>
<td>
</tr>
<tr>
<td>
</tr>
<tr>
<td>Class
<td><input type="text" name="class" size="35" value="  <?php session_start();
                                                            if($_SESSION['class']){
                                                            echo $_SESSION['class'];} ?>">
</tr>
<tr>
<td>Name
<td><input type="text" name="name" size="35" value="<?php                                                          if($_SESSION['name']){
                                                            echo $_SESSION['name'];} ?>">
</tr>
<tr>
<td>Roll
<td><input type="text" name="roll" size="35" value="<?php                                                          if($_SESSION['roll']){
                                                            echo $_SESSION['roll'];} ?>">
</tr>
<td>Section
<td><input type="text" name="section" size="35" value="<?php                                                          if($_SESSION['section']){
                                                            echo $_SESSION['section'];} ?>">
</tr>
<td>Date of Birth
<td><input type="text" name="birth" size="35" value="<?php                                                          if($_SESSION['birth']){
                                                            echo $_SESSION['birth'];} ?>">
</tr>
<tr>
<td>Father's Name
<td><input type="text" name="fname" size="35" value="<?php                                                          if($_SESSION['fname']){
                                                            echo $_SESSION['fname'];} ?>">
</tr>
<tr>
<td>Mother's Name
<td><input type="text" name="mname" size="35" value="<?php                                                          if($_SESSION['mname']){
                                                            echo $_SESSION['mname'];} ?>">
</tr>
<tr>
<td>Address
<td><input type="text" name="address" size="35" value="<?php                                                          if($_SESSION['address']){
                                                            echo $_SESSION['address'];} ?>">
</tr>
<td>
<td><input type="submit" name="delete" value="Delete">
</tr>

</table>
</fieldset>
</form>
</body>
</html>

<?php
   
	 if(isset($_POST['delete']))
	 {
	$class=mysql_real_escape_string($_POST['class']);
	$name=mysql_real_escape_string($_POST['name']);
	$roll=mysql_real_escape_string($_POST['roll']);
	$section=mysql_real_escape_string($_POST['section']);
	$birth=mysql_real_escape_string($_POST['birth']);
	$fname=mysql_real_escape_string($_POST['fname']);
	$mname=mysql_real_escape_string($_POST['mname']);
	$address=mysql_real_escape_string($_POST['address']);
	
	if($class && $name && $roll && $section && $birth && $fname && $mname && $address)
	{
		$conclass=$_SESSION['class'];
		$conroll=$_SESSION['roll'];
		$consection=$_SESSION['section'];
		
		$connect=mysql_connect("127.0.0.1","root","");
		mysql_select_db("db_project");
		
		$query=mysql_query("delete from student where class='$conclass'&&roll='$conroll'&&section='$consection'");
		
		header("location:sdelete1.php?notify=Student have been deleted.");
	}
	else
	{
		echo "All fields are required.";
	}
	 }
?>






















