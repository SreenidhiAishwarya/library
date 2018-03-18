<?php
$name=$_POST["uname"];
$pass=$_POST["psw"];
if($name=="admin" && $pass=="psg")
{
header('Location:admin.html');
}
else
{

echo "<script type='text/javascript'>window.alert('Invalid admin');</script>";

}
?> 