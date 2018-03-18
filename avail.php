<!DOCTYPE html>

<html >
<head>
<title>ONLINE LIBRARY MANAGEMENT SYSTEM</title>
<style>
body{
background-image:url("lib.jpg");
background-size:cover;
background-repeat:no-repeat;
}
#latestnews{
height:400px;
width:500px;
background-color:white;
margin-top:80px;
}
input[type="text"]{
width: 50%;
padding: 10px 18px;
margin: 8px 0;
display: inline-block;
border: 1px solid #ccc;
box-sizing: border-box;
box-shadow: 4px 4px 5px #ccc;
}

button {
background-color: #008800;
color: white;
padding: 10px 20px;
margin: 8px 0;
border: none;
cursor: pointer;
width: 50%;
box-shadow: 4px 4px 5px #099518;
}
form{
font-size:20px;
}
input[type="button"]
{
background-color: #f00000;
color: white;
padding: 10px 20px;
margin: 8px 0;
border: none;
cursor: pointer;
width: 50%;
box-shadow: 4px 4px 5px #f44336;}
</style>
</head>

<body>
<center>
<div id="latestnews">
<center><h2 >ENTER BOOK DETAILS</h2>
<form action="book.php"  method="post">
Department:<select style="padding:10px 20px;border: 1px solid #ccc;
box-sizing: border-box;
box-shadow: 4px 4px 5px #ccc;" name="DEPARTMENT"  >
<option value="">---SELECT DEPARTMENT---</option><br>
<option value="">CSE</option>
<option value="">MECH</option>
<option value="">ECE</option>
<option value="">EEE</option>
<option value="">CIVIL</option>
</select><br><br>
Book Name:<input type="text" name="BOOKNAME" placeholder="Book Name" size="30" required><br><br>
AuthorName:<input type="text" placeholder="Author Name" name="AUTHORNAME" size="30" required ><br><br>
<button type="submit">Submit</button><br>
<input type="button" name= "cancel" value="cancel" >
</form> 
</center>
<?php
session_start();
$user=$_SESSION['user'];
$_SESSION['user']=$user;
//$_SESSION['summa']=$user;
//$_COOKIE['summa']=$user;
?>
</body>
</html>