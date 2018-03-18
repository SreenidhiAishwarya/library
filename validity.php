<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
input[type=submit]{
font-size:20px;
background-color:#008800;
padding:5px 10px;
margin:8px 0;
display:inline-block;
width:20%;
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
table{
font-size:20px;
font-weight:bold;
}
body{
background-image:url("lib.jpg");
background-size:cover;

}
.container{
background-color:white;
height:320px;
width:60%;
margin-top:100px;
margin-left:250px;
}
</style>
</head>
<body>
<div class="container">
<center><h1>CHECK FORM</h1></center>
<form  method="post">

<?php
session_start();
$user=$_SESSION['user'];
$conn=mysqli_connect("localhost:3306","root","","students");
if(!$conn)
{
echo "not connected";
}
else
{
$q="select * from admin where NAME='$user'";
$res=mysqli_query($conn,$q);
$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
if($row['BOOK_LIST']<=0)
{
$bk="None";
}
else
{
$bk=$row['BOOK_LIST'];
}
echo'
<table style="margin-left:20px;">
<tr>
<td>NAME :    '.$row['NAME'].'</td></tr>
<tr>
<td>REGISTER NUMBER :	'.$row['REGISTER_NO'].'</td></tr>
<tr>
<td>DEPARTMENT :	'.$row['DEPARTMENT'].'</td></tr>
<tr>
<td>NUMBER OF BOOKS TAKEN :	'.$row['NO_BOOKS_TAKEN'].'</td></tr>
<tr>
<td>NUMBER OF BOOKS TO AVAIL :	'.$row['NO_BOOKS_AVAIL'].'</td></tr>
<tr>
<td>BOOK LIST :	'.$bk.'</td></tr>
<tr>
<td>FINE:	'.$row['FINE'].'</td></tr>
</table>';
echo '<input type="button" class="pull-right" style="margin-left:10px;box-shadow: 4px 4px 5px #099518;background-color:#008800;" value="SEARCH" id="a" onClick="search()">
<a href="login.php">
<input type="button" class="pull-right "value="CANCEL" onclick="cancel()"></a>

</form>';
}
$tmp=$row['FINE'];
$_SESSION['user']=$user;

?>
<script>
function search()
{
var tmp1=<?php echo $tmp?>;
if(tmp1>0)
{
window.alert('Book is on due');
window.location.href="validity.php";
}
else{
window.location.href ="avail.php";	
}
}
</script>
<script>
function cancel(){
window.location.href="login.php";
}
</script>
</div>
</body>
</html>