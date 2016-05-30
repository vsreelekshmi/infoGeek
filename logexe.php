<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql1="UPDATE login SET password =  md5(password)";

if(empty($_POST["regno"])||empty($_POST["password"])||empty($_POST["type"]))
{
die("please enter UserName and Password");
}
else
{
$rno=$_REQUEST["regno"];
$pwd=$_REQUEST["password"];
$type=$_REQUEST["type"];

$sql="select * from login where regno='$rno' and password='$pwd' and type='$type'";
$result =mysqli_query($conn, $sql);
if (mysqli_num_rows($result)>0) 
{
	$_SESSION['login']=1;

echo "LOGIN SUCCESS";
$_SESSION["rno"]=$rno;
$_SESSION["pwd"]=$pwd;
if($type=="student")
header("location: start.html");
elseif($type=="teacher")
header("location: start2.html");
}
 else {
    echo "Incorrect User NAme and Password";
}
}
?>