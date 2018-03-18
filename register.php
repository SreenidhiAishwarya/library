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
background-repeat:no-repeat;
}
.container{
background-color:white;
height:320px;
width:35%;
margin-top:100px;
margin-left:500px;
}
table{
font-size:20px;
font-weight:bold;
}
.logout{
color:white;
font-weight:bold;
font-size:20px;
height:30px;
width:90px;
background-color:white;
margin-left:1300px;
margin-top:20px;
}
input[type=submit]{
font-size:20px;
background-color:#008800;
padding:5px 18px;
margin:8px 0;
display:inline-block;
width:auto;
height:42px;
box-shadow: 4px 4px 5px #099518;
color:white;
border:0;
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

</style>
</head>
<body>
<div class="logout"><a href="logout.php">LOGOUT</a></div>
<div class="container">
<center>
<h1>REGISTERATION</h1>

</center>
<?php
session_start();
$user=$_SESSION['user'];
//$u=$_SESSION['summa'];
//$u1=$_COOKIE['summa'];
//echo $user;
//echo $u1;

$book=$_SESSION['bookname'];
//echo $book;
$auth=$_SESSION['authname'];
$due=strtotime("+14 days");
$date=date("d-m-Y",$due);
//echo $date;
echo '
<table >
<tr>
<td>NAME:'.$user.'</td></tr>
<tr>
<td>BOOK NAME:'. $book.'</td></tr>
<tr>
<td>AUTHOR NAME:'.$auth.'</td></tr>
<tr>
<td>DUE DATE:' .$date.'</td></tr>
</table>';
echo'
<form action="regsub.php" method="get">
<input type="submit" value="REGISTER">
<input type="button" value="CANCEL" onClick="cancel()">
</form>';
$_SESSION['bookname']=$book;
$_SESSION['authname']=$auth;
$_SESSION['user']=$user;
$_SESSION['due']=$date;
?>
</body>

<script>
function cancel(){
window.location.href="avail.php";
}
</script>
</html>