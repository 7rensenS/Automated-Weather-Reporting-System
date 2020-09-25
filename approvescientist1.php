<?php include('header.php'); ?>
<?php
include('dbconnect.php');
$id=$_GET['id'];
$qr="update login set status='1' where username='$id' and type='scientist'";
mysql_query($qr,$con);
header("location:approvescientist.php");
?>
<?php include('footer.php'); ?>