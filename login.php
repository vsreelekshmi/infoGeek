<html>
<head>
	<title>InfoGeek</title>
</head>
<body background="images/logo.png">
<form method="post" action="logexe.php">
<br><br><br><br><br><br><br><br><br><br><b> <center><h2 style="color:black">Register No: <td><input type="text" name="regno" pattern="[0-9]{3,}"title="numbers"maxlength="04"required/>
</td></h2><br><br>
<h2 style="color:black">Password: <td><input type="password" name="password" pattern="[A-Za-z0-3]{3,}"title="letters and digits only"maxlength="30"required/>
</td></h2><br>
<br><br><br>
<h2 style="color:black">Student: </h2>
<select name="type" id="type">
    <option value="student">Student</option>
  <option value="teacher">Teacher</option>
</select><br>
<H1 align="center"><input type="submit" value="Login" style="font-size:10pt;color:white;background-color:black;padding:3px;font-weight:bold;"></H1></center>
</form>

</body>
</html>
