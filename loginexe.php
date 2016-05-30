<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "login";

// Create connection
$conn = mysql_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysql_connect_error());
}

if(empty($_POST["username"])||empty($_POST["password"]))
{
die("please enter UserName and Password");
}


$a=$_POST["username"];
$b=$_POST["password"];
	
$sql="select * from login where username='$username' and password='$password'";
$result =mysql_query($conn, $sql);
if (mysql_num_rows($result)>0) {
	$row=mysql_fetch_assoc($result); 
echo "LOGIN SUCCESS";
//$id=$row['sellerid'];
//$sn=$row['sellername'];

//$_SESSION['customer']=1;
//$_SESSION['sname']=$sn;
//$_SESSION['sellerid']=$id;
header('Location:start.html');
}
 else {
    echo "Incorrect User name and Password";
}


?>