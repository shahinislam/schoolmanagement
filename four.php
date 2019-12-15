<html>
<head>
<link rel="stylesheet" href="four.css" type="text/css">
</head>
<body>
<h1>Class Four<h1>
<table align="center">
<tr>
<th>Roll</th>
<th>Name</th>
<th>Section</th>
<th>Birth</th>
<th>Father's Name</th>
<th>Mother's Name</th>
<th>Address</th>
</tr>

<?php
    
	session_start();
	    $connect=mysql_connect("127.0.0.1","root","");
		mysql_select_db("db_project");
		$login=mysql_query("SELECT * FROM student WHERE class=4 order by roll asc");
		$count=1;

		while($log=mysql_fetch_assoc($login))
		{
			if($count%2==0){
			echo "<tr class='even'>";
			}
			else
				echo "<tr class='odd'>";
			echo "<td>".$log['roll']."</td>";
			
			echo "<td>".$log['name']."</td>";
			
			echo "<td>".$log['section']."</td>";
			
			echo "<td>".$log['birth']."</td>";
			
			echo "<td>".$log['fname']."</td>";
			
			echo "<td>".$log['mname']."</td>";
			
			echo "<td>".$log['address']."</td>";
			echo "</tr>";
			$count++;
		}
		
?>



</table>
</body>
</html>














