
<!--html code below--> 
<html>
<head>
<title>LOGIN PAGE</title>
<style type="text/css">
h1{
	text-align: center;
	color: blue;
    }
    h2{
    	color:#C71585;
    }
</style>
</head>
<body align="center" bgcolor="#B0C4DE">
<h1>School Management System</h1>
<h2>Higher Institute of Bussines Management And Technology</h2>
<!--<table border="1" bordercolor="red" width="40" align="center">
<tr>
<td>UserName:</td><td><input type="text" name="username" required/></td>
</tr>
<tr>
<td>Password:<td><input type="password" name="password" required/></td>
</tr>
</table>
<input type="submit" value="Login" name="btn"/><br>-->
<?php $deparment = array('architecture','Engineering maths','circuit theroy','Database','English');
//put while loop here to save u space
  //echo $deparment[0].'<br>';
  //echo $deparment[1].'<br>';
  //echo $deparment[2].'<br>';
  //echo $deparment[3].'<br>';
//  echo $deparment[4].'<br>';
?>
<form action="welcome.php" action="POST">
<table border="1" align="center" width="400" height="130" bgcolor="#7CFC00" cellpadding="8" cellspacing="0">
<tr>
<td> 
Username:</td>
<td><input type="text" name="user" required="" placeholder="username"></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" name="pass" placeholder="*******" required=""></td>
</tr>
<tr>
<td>Matricule:</td>
<td><input type="text" name="Mat" required=""></td>
</tr>
<tr>
<td>Mobile Number:</td>
<td><input type="text" name="phone" placeholder="6XXXXXXXX"></td>
</tr>
<tr><td>Department</td>
<td><select name="department">
    <option value="com_engineering">computer Engineering</option>
    <option value="acounting">accountancy</option>
    <option value="Electrical">Electrical Engineering</option>
    <option value="HRM">Human Resource</option></td></tr>
</table><br>
<input type="submit" value="Register" align="center" name="btn">
</form>
</body>
</html>