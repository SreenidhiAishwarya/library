<?php
session_start();
$dept  =  $_POST["DEPARTMENT"];
$bname = $_POST["BOOKNAME"];
$aname = $_POST["AUTHORNAME"];
$user=$_SESSION['user'];
echo $user;
$con  =  mysqli_connect("localhost:3306","root","","students");
if(!$con)
{
echo "Not Connected ";
}
else
{
$q="select * from book_stock where book_name = '$bname'";
$res = mysqli_query($con,$q);
$row = mysqli_fetch_array($res,MYSQLI_ASSOC);
if($bname==$row['book_name'])
{
//echo "<script type='text/javascript'>window.alert('Searched Book Is Found');</script>";
header("Location:register.php");

}
else {
//echo '<script>window.alert("Searched book is not found.")</script>';
}
}
$_SESSION['bookname']=$bname;
$_SESSION['authname']=$aname;
$_SESSION['user']=$user;
echo $bname;

?>