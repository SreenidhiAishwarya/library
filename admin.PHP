<?php
$servername="localhost";
$username="root";
$password="";
$user=$_POST["name"];
$pass=$_POST["pass"];
$reg=$_POST["reg_no"];
$dept=$_POST["dept"];
$conn=new mysqli($servername,$username,$password,"students");

if($conn->connect_error){
die("Connection failed:".$conn->connect_error);
}

$sql="INSERT INTO admin(NAME,PASSWORD,REGISTER_NO,DEPARTMENT) VALUES('$user','$pass','$reg','$dept')";
if($conn->query($sql)==TRUE){
header('Location:admin.html');
echo "<script type='text/javascript'>window.alert('submitted');</script>";

}
else
{
echo "error".$conn->error;
}
$conn->close();
?>

