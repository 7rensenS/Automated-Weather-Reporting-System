<?php
include('dbconnect.php');
$id=$_GET['id'];
$qr="delete from login where username='$id' and type='scientist'";
mysql_query($qr,$con);
header("location:approvescientist.php");
?>
