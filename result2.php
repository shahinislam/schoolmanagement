<html>
<head>
<link rel="stylesheet" type="text/css" href="result2.css" />
<script type="text/javascript">
function check(form){
   var returnValue=true;

var cls=form.cls.value;
var roll=form.roll.value;
var exam=form.exam.value;

if(cls==""){
	alert("All fields are required.");
	returnValue=false;
	form.cls.focus();
}
if(roll==""){
	alert("All fields are required.");
	returnValue=false;
	form.roll.focus();
}
if(exam==""){
	alert("All fields are required.");
	returnValue=false;
	form.exam.focus();
}
	

return returnValue;
}
</script>
</head>
<body>
<h1>Find out Result</h1>
<div>
<form name="frm" onsubmit="return check(this);" action="result2.php" method="POST">
<table>
<tr>
<td>Class:</td><td><input type="text" name="cls" size="35"></td>
</tr>
<tr>
<td>Roll:</td><td><input type="text" name="roll" size="35"></td>
</tr>
<tr>
<td>Exam:</td><td><input type="text" name="exam" size="35"></td><td><p>(1st,2nd,3rd)</p></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="result" value="Submit" /></td>
</tr>

</table>

</form>
<?php
session_start();

if(isset($_POST['result'])){
	
	$cls=mysql_real_escape_string($_POST['cls']);
	$roll=mysql_real_escape_string($_POST['roll']);
	$exam=mysql_real_escape_string($_POST['exam']);
	if($cls=='1'){
		$connect=mysql_connect("127.0.0.1","root","");
		mysql_select_db("db_project");
		$login=mysql_query("SELECT * FROM one natural join student WHERE class='$cls' and exam='$exam' and roll='$roll'");
		
		$count=1;
		while($log=mysql_fetch_assoc($login))
		{
			$tm=$log['bangla']+$log['math']+$log['english'];
			echo "<table align='center' class='show'>";
			echo "<tr>";
			echo "<td>"."Name: ";
			echo "<td class='name'>".$log['name']."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>"."Bangla: ";
			echo "<td>".$log['bangla']."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>"."English: ";
			echo "<td>".$log['english']."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>"."Mathmatics: ";
			echo "<td>".$log['math']."</td>";
	        echo "</tr>";
			echo "<tr>";
			echo "<td>"."Total Marks: ";
			echo "<td>".$tm."</td>";
	        echo "</tr>";
			echo "</table>";
			$count++;
		}
	}else if($cls=='2'){
		$connect=mysql_connect("127.0.0.1","root","");
		mysql_select_db("db_project");
		$login=mysql_query("SELECT * FROM two natural join student WHERE class='$cls' and exam='$exam' and roll='$roll'");
		
		$count=1;
		while($log=mysql_fetch_assoc($login))
		{
			$tm=$log['bangla']+$log['math']+$log['english']+$log['religion'];
			echo "<table align='center' class='show'>";
			echo "<tr>";
			echo "<td>"."Name: ";
			echo "<td class='name'>".$log['name']."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>"."Bangla: ";
			echo "<td>".$log['bangla']."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>"."English: ";
			echo "<td>".$log['english']."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>"."Mathmatics: ";
			echo "<td>".$log['math']."</td>";
	        echo "</tr>";
			echo "<tr>";
			echo "<td>"."Religion: ";
			echo "<td>".$log['religion']."</td>";
	        echo "</tr>";
			echo "<tr>";
			echo "<td>"."Total Marks: ";
			echo "<td>".$tm."</td>";
	        echo "</tr>";
			echo "</table>";
			$count++;
		}
	}
}

?>
</div>
</body>
</html>





















