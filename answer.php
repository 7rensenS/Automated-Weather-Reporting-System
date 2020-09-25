<?php include('header.php'); ?>

<?php
session_start();
$email=$_SESSION['email'];
?>

		<h4>ANSWER</h4>
		<form action=# method=post  enctype="multipart/form-data">
		<table  border=0 align=center>
		<tr>
			<tr>
				<th>Email</th>
				<th>Question</th>
				<th>Answer</th>
			</tr>
		</tr>
		<?php
						include('dbconnect.php');
						$sql= "select * from qatbl where flag=0";
						$res=mysql_query($sql);
						$email='';
						$que='';
						
						if($row=mysql_fetch_array($res))
						{
							$email=$row['email'];
							$que=$row['question'];
							echo '<tr>';
							echo '<td>'.$email.'</td>';
							echo '<td><font color=red>'.$que.'</font></td>';
							echo '<td><textarea name="ans" rows="2" cols="50"></textarea></td>';
							echo '<td><input type=submit name=btn1 value="Replay"</td>';
							echo '</tr>';
							
						}
		?>
		<?php
				if(isset($_POST['btn1']))
				{
					include('dbconnect.php');
					$sql="update qatbl set flag=1,answer='$_POST[ans]' where question='".$que."'";
					mysql_query($sql,$con);
				}
		
		?>
		</table>
		</form>
		
		<?php include('footer.php'); ?>