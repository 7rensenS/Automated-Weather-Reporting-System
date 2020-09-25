<?php include('header.php'); ?>
<?php
include('dbconnect.php');

//Code to insert into both registration and Login table
if(isset($_POST['btnsubmit']))
{
$sql="insert into scientistreg values('$_POST[id1]','$_POST[name1]','$_POST[address]','$_POST[email]','$_POST[phone]')";
echo $sql;
$sql1="insert into login values('$_POST[id1]','$_POST[password]','scientist','0','$_POST[email]')";
mysql_query($sql,$con);
mysql_query($sql1,$con);

$target_dir = "uploads/";
$target_file=$target_dir .$_POST['id1'].'.jpg';
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],

$target_file) or die('Error'.mysql_error());


}

?>

<?php

//Auto generate next id in the screen.

//Query to get the highest value in table

$sql="select max(scid) as mid from scientistreg";
$data=mysql_query($sql);
$id=1000;
while($row=mysql_fetch_array($data))
{
 $id=$row['mid'];
}

$id=$id+1;
echo $id;
?>
<form action=# method=post  enctype="multipart/form-data">
<pre>
Id      <input name=id disabled=disabled value="<?php echo $id ; ?>" pattern="[a-zA-Z]{2,10}" title="Enter only characters">
<input type=hidden name=id1 value="<?php echo $id ; ?>" >
Name    <input name=name1 required=required maxlength=18>
Address <input name=address>
Email   <input type=email name=email value="@gmail.com">
Phone   <input name=phone pattern="[0-9]{10,12}">
Password<input name=password >
Photo   <input type="file" name="fileToUpload"

id="fileToUpload">
<input type=submit name=btnsubmit value='Save'>
</pre>
</form>

<?php
/*
//Showing image in the table

$query = 'select * from scientistreg';
$result = mysql_query($query);
if (!$result)
{
 $message = 'ERROR:' . mysql_error();
 return $message;
}
else
{
 $i = 0;
 echo '<html><body><table border=1 align=center><tr>';
 while ($i < mysql_num_fields($result))
 {
  $meta = mysql_fetch_field($result, $i);
  echo '<th>' . ucfirst($meta->name) . '</th>';
  $i = $i + 1;
 }
 echo '<th>Delete</th></tr>';
 $i = 0;
 while ($row = mysql_fetch_row($result))
 {
  echo '<tr>';
  $count = count($row);
  $y = 0;
  $idval='1';
  while ($y < $count)
  {
   $c_row = current($row);
   if($y==0)
    $idval=$c_row;
   echo '<td>' . $c_row . '</td>';
   next($row);
   $y = $y + 1;
  }
  echo "<td><img width=30 height=30 src='uploads/

$idval.jpg'></td><td><a href=delComplaint.php?id='.

$idval.'>Delete</a></td>";
  echo '</tr>';
  $i = $i + 1;
 }
 echo '</table></body></html>';
 mysql_free_result($result);
}
mysql_close ($con);
//--------------------------------------------------------------------------------
?>
<?php
include('dbconnect.php');

$query = 'select * from tbl_Complaint';
$result = mysql_query($query);
if (!$result)
{
 $message = 'ERROR:' . mysql_error();
 return $message;
}
else
{
 $i = 0;
 echo '<html><body><table border=1 align=center><tr>';
 while ($i < mysql_num_fields($result))
 {
  $meta = mysql_fetch_field($result, $i);
  echo '<th>' . ucfirst($meta->name) . '</th>';
  $i = $i + 1;
 }
 echo '<th>Delete</th></tr>';
 $i = 0;
 while ($row = mysql_fetch_row($result))
 {
  echo '<tr>';
  $count = count($row);
  $y = 0;
  $idval='1';
  while ($y < $count)
  {
   $c_row = current($row);
   if($y==0)
    $idval=$c_row;
   echo '<td>' . $c_row . '</td>';
   next($row);
   $y = $y + 1;
  }
  echo '<td><a href=delComplaint.php?id='.$idval.'>Delete</a></td>';
  echo '</tr>';
  $i = $i + 1;
 }
 echo '</table></body></html>';
 mysql_free_result($result);
}
mysql_close ($con);
*/
?>
<?php include('footer.php'); ?>