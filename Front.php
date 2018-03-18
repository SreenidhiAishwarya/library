<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
body{
background-image:url("lib.jpg");
background-size:cover;
opacity:1;
}
input[type=button]{
height:42px;
font-size:20px;
margin:8px 0;
color:white;
border:0;
width: auto;
padding: 5px 18px;
background-color:#f00000 ;
box-shadow: 4px 4px 5px #f44336;
}

input[type=submit]{
font-size:20px;
background-color:#008800;
padding:5px 10px;
margin:8px 0;
display:inline-block;
width:30%;
box-shadow: 4px 4px 5px #099518;
color:white;
border:0;
}
.container{
background-color:white;
height:300px;
width:50%;
margin-top:100px;
margin-left:300px;
}
.t1{
font-size:20px;
font-family:courier;
font-weight:bold;
}
table{
font-size:20px;
font-weight:bold;
}
</style>
</head>
<body>
<div class="container">

<?php
session_start();
$user=$_GET["uname"];
$password=$_GET["pass"];



$conn=mysqli_connect("localhost:3306","root","","students");
if(!$conn)
{
echo "not connected";
}
else
{
$q="select * from admin where NAME='$user' AND PASSWORD='$password'";
$res=mysqli_query($conn,$q);
$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
if($row['BOOK_LIST']==0)
{$bk="None";}
else
{
$bk=$row['BOOK_LIST'];
}
if($password=$row['PASSWORD'])
{
echo'
<div class="t1"><center>USER PROFILE</center></div>
<table><i>
<tr>
<td>NAME : '.$row['NAME'].'</td></tr>
<tr>
<td>REGISTER NUMBER : '.$row['REGISTER_NO'].'</td></tr>
<tr>
<td>DEPARTMENT : '.$row['DEPARTMENT'].'</td></tr>
<tr>
<td>NUMBER OF BOOKS TAKEN : '.$row['NO_BOOKS_TAKEN'].'</td></tr>
<tr>
<td>NUMBER OF BOOKS TO AVAIL : '.$row['NO_BOOKS_AVAIL'].'</td></tr>
<tr>
<td>BOOK LIST : '.$bk.'</td></tr>
</table></i>

<form action="validity.php" method="post">
<input type="submit" class="pull-right" style="margin-bottom:0px;" value="NEXT">
</form>';
}
else
{
echo "invalid user and password";
echo '<a href="login.php">
<input type="button" class="pull-right "value="CANCEL"></a>
';
}
}
$_SESSION['user']=$user;

?>

</div>
</body>

</html> 