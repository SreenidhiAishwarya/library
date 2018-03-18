<?php
session_start();
$user=$_SESSION['user'];
$servername="localhost";
$username="root";
$password="";
$book=$_SESSION['bookname'];
$due=$_SESSION['due'];
$conn=new mysqli($servername,$username,$password,"students");
if($conn->connect_error){
die("Connection failed:".$conn->connect_error);
}
$sql="UPDATE admin SET BOOK_LIST='$book' , DUE='$due' WHERE NAME='$user'";
if($conn->query($sql)==TRUE){
header('Location:register.php');
echo '<script type="text/javascript">window.alert("submitted");</script>';

}
else
{
echo "error".$conn->error;
}
$conn->close();
?>

