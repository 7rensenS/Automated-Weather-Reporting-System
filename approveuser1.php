<?php include('header.php'); ?>
<?php
include('dbconnect.php');
$id=$_GET['id'];
$qr="update login set status='1' where username='$id' and type='user'";
mysql_query($qr,$con);
header("location:approveuser.php");
?>
<?php include('footer.php'); ?>
