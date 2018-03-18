<?php
function timediff()
	{
	$sel="select * from reserve where res_status='Reserved'";
	$from=mysql_query($sel);
	while($res=mysql_fetch_object($from))
	{
	
$a1=date('Y-m-d G:i:s');
$to_time = strtotime($a1);

$a2=$res->res_date. $res->res_time;
$from_time = strtotime($a2);

$timediff = round(abs($to_time - $from_time) / 3600,2). " hour";	

if($timediff >=24)
{
$sel="select * from book where book_id='".$res->res_book."'";
$from=mysql_query($sel);
$book=mysql_fetch_object($from);
$qty=$book->book_stock + 1;
mysql_query("UPDATE `book` SET `book_stock` = '".$qty."' WHERE `book_id` = '".$res->res_book."'");

mysql_query("DELETE FROM `reserve` WHERE `res_id` ='".$res->res_id."'");
}
}
}
?>