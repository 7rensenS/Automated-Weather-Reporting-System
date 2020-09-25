<?php
include('dbconnect.php');
$id=$_GET['id'];
$qr="delete from login where username='$id' and type='user'";
mysql_query($qr,$con);
header("location:approveuser.php");
?>
