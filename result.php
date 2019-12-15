<html>
<head>
<link rel="stylesheet" type="text/css" href="result.css" />
<script>
function check(form){
   var returnValue=true;

var username=form.username.value;
var password=form.password.value;

if(username==""){
	alert("All fields are required.");
	returnValue=false;
	form.username.focus();
}
if(password==""){
	alert("All fields are required.");
	returnValue=false;
	form.password.focus();
}
if(username=="student"&&password=="student"){
	window.open('result2.php');
}else{
	alert("Username or Password is wrong.");
	returnValue=false;
	form.username.focus();
}

return returnValue;
}
</script>
</head>
<body>
<h1>Log in as Student/Teacher</h1>
<div>
<form name="frm"  onsubmit="return check(this);">
<table>
<tr>
<td>Username:</td><td><input type="text" name="username" size="35"></td>
</tr>
<tr>
<td>Password:</td><td><input type="password" name="password" size="35"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Log In" /></td>
</table>
</form>
</div>
</body>
</html>


