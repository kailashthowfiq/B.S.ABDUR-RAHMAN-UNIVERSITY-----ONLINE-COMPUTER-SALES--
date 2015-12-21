<!DOCTYPE HTML>
<html>
<head>
<title>Alloy Jacket Website | Home </title>
</head>
<body>
<?php
$nm=$_GET["name"];
$cardno=$_GET["age"];
$sno=$_GET["gender"];
$cno=$_GET["contact"];
$eno=$_GET["email"];
$ano=$_GET["address"];
$pno=$_GET["pincode"];
$pdno=$_GET["product"];
mysql_connect("localhost","root","");
mysql_select_db("shar");
mysql_query("insert into hot1 values('$nm','$cardno','$sno','$cno','$eno','$ano','$pno','$pdno')");

?>
</body>
</html>
