<?php

$email=$_POST['email'];
$password=$_POST['password'];

$count1=0; $count2=0;
$count1=substr_count($email, "'");
$count2=substr_count($password, "'");
$err=0;
if ($count1>0 || $count2>0)
    $err=1;

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("snit", $con);
$result = mysql_query("SELECT * from login where email='".$email."' and password='".$password."' and status='1'");
$flag=0;
$type='';
while($row = mysql_fetch_array($result))
  {
 
	  $flag=1;
	  $type=$row['type'];
    $_SESSION['user'] = $type; // store session data
    $_SESSION['email'] = $email;



  }
 
 
  echo $flag;
  echo $type;


  if($err>0)
      echo "<script>location.href='index.php?msg=Invalid Username or Password'</script>";
    else if($flag==1 && $type=="user")
  echo "<script>location.href='userhome.php'</script>";
  else if($flag==1 && $type=="scientist")
  echo "<script>location.href='scientisthome.php'</script>";
  else if($flag==1 && $type=="station")
  echo "<script>location.href='stationhome.php'</script>";
 else
   echo "<script>location.href='login.php?msg=Invalid Username or Password'</script>";

mysql_close($con);
?>


