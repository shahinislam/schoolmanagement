<html>
<head>
<link rel="stylesheet" href="teacher.css" type="text/css">
</head>
<body>
<h1>Teachers<h1>
<table align="center" >
<tr>
<th>ID</th>
<th>Name</th>
<th>Designation</th>
<th>Grade</th>
<th>Subject</th>

</tr>

<?php
    
	session_start();
	    $connect=mysql_connect("127.0.0.1","root","");
		mysql_select_db("db_project");
		$login=mysql_query("SELECT * FROM teacher order by grade asc");
		$count=1;

		while($log=mysql_fetch_assoc($login))
		{
			if($count%2==0){
			echo "<tr class='even'>";
			}
			else
				echo "<tr class='odd'>";
			echo "<td>".$log['id']."</td>";
			
			echo "<td>".$log['name']."</td>";
			
			echo "<td>".$log['designation']."</td>";
			
			echo "<td>".$log['grade']."</td>";
			
			echo "<td>".$log['subject']."</td>";
			
			
			echo "</tr>";
			$count++;
		}
		
?>



</table>
</body>
</html>














